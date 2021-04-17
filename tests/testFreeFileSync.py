import unittest
from functools import cached_property
from typing import Optional

from freeFileSync import FreeFileSyncInformationRetriever, FreeFileSyncVersionChecker


class FreeFileSyncInformationRetrieverWithDownloadPage(FreeFileSyncInformationRetriever):

    def __init__(self, *, download_page: str) -> None:
        super().__init__()
        self._download_page = download_page

    @cached_property
    def download_page(self) -> str:
        return self._download_page


class TestFreeFileSyncUpdater(unittest.TestCase):

    def test_11_9(self):
        with open('res/freeFileSync/freeFileSync_download_11_9.php', 'r', encoding='utf-8') as f:
            download_page = f.read()
        free_file_sync_updater = FreeFileSyncInformationRetrieverWithDownloadPage(download_page=download_page)

        with self.subTest('Version'):
            self.assertEqual('11.9', free_file_sync_updater.latest_version)

        with self.subTest('Links'):
            self.assertEqual({
                'Linux': 'https://freefilesync.org/download/FreeFileSync_11.9_Linux.tar.gz',
                'Source': 'https://freefilesync.org/download/FreeFileSync_11.9_Source.zip',
                'Windows': 'https://freefilesync.org/download/FreeFileSync_11.9_Windows_Setup.exe',
                'macOS': 'https://freefilesync.org/download/FreeFileSync_11.9_macOS.zip'
            }, free_file_sync_updater.download_links)

    def test_online(self):
        free_file_sync_updater = FreeFileSyncInformationRetriever()
        with self.subTest('Version'):
            self.assertRegex(free_file_sync_updater.latest_version, r'\d+\.\d+')
        with self.subTest('Links'):
            self.assertCountEqual(['Linux', 'Source', 'Windows', 'macOS'], free_file_sync_updater.download_links.keys())
            for link in free_file_sync_updater.download_links.values():
                link: str
                self.assertRegex(link, rf'^https://freefilesync\.org/download/FreeFileSync_\d+\.\d+_\w+\.(tar\.gz|zip|exe)$')


class FreeFileSyncVersionCheckerUnderTest(FreeFileSyncVersionChecker):

    def __init__(self, *, change_log: Optional[str]) -> None:
        super().__init__()
        self._change_log = change_log

    @cached_property
    def change_log(self) -> str:
        return self._change_log


class TestFreeFileSyncVersionChecker(unittest.TestCase):

    def test_11_9(self):
        with open('res/freeFileSync/Changelog_11_9.txt', 'r', encoding='utf-8') as f:
            change_log = f.read()
        checker = FreeFileSyncVersionCheckerUnderTest(change_log=change_log)
        with self.subTest('Version'):
            self.assertEqual('11.9', checker.version)

    def test_no_change_log_file(self):
        checker = FreeFileSyncVersionCheckerUnderTest(change_log=None)
        self.assertIsNone(checker.version)
