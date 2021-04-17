import unittest
from functools import cached_property

from picPick import PicPickInformationRetriever


class PicPickInformationRetrieverWithDownloadPage(PicPickInformationRetriever):

    def __init__(self, *, download_page: str, download_free_page: str) -> None:
        super().__init__()
        self._download_page = download_page
        self._download_free_page = download_free_page

    @cached_property
    def download_page(self) -> str:
        return self._download_page

    @cached_property
    def download_free_page(self) -> str:
        return self._download_free_page


class TestPicPickInformationRetriever(unittest.TestCase):

    def test_5_1_5(self):
        with open('res/picPick/download_5_1_5', 'r', encoding='utf-8') as f1, open('res/picPick/download_free_5_1_5', 'r', encoding='utf-8') as f2:
            download_page = f1.read()
            download_free_page = f2.read()
        retriever = PicPickInformationRetrieverWithDownloadPage(download_page=download_page, download_free_page=download_free_page)

        with self.subTest('Latest Version'):
            self.assertEqual('5.1.5', retriever.latest_version)

        with self.subTest('Download Link'):
            self.assertEqual({
                'Windows': 'https://www.picpick.org/releases/5.1.5/picpick_inst.exe'
            }, retriever.download_links)

    def test_online(self):
        retriever = PicPickInformationRetriever()

        with self.subTest('Latest Version'):
            self.assertRegex(retriever.latest_version, r'^\d+\.\d+\.\d+$')

        with self.subTest('Download Link'):
            links = retriever.download_links
            self.assertCountEqual(['Windows'], links.keys())
            for link in links.values():
                link: str
                self.assertRegex(link, r'^https://www.picpick.org/releases/\d+\.\d+\.\d+/picpick_inst\.exe$')
