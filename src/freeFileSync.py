import os
import re
from functools import cached_property
from typing import Dict

import requests
from lxml import etree
from lxml.etree import ElementBase

from src import InformationRetriever, VersionChecker, Platform, URL, Installer, UpdaterAbstractFactory


class FreeFileSyncInformationRetriever(InformationRetriever):

    @cached_property
    def download_page(self) -> str:
        return requests.get('https://freefilesync.org/download.php').text

    @cached_property
    def _download_page_root(self) -> ElementBase:
        return etree.HTML(self.download_page)

    @cached_property
    def _url(self) -> str:
        return self._download_page_root.xpath('//*[@property="og:url"]')[0].attrib['content']

    @cached_property
    def latest_version(self) -> str:
        changelog_header = self._download_page_root.xpath('//*[@class="changelog-header"]')
        changelog_header_string = changelog_header[0].xpath('string()')
        return re.search(r'FreeFileSync (?P<version>\d+\.\d+)', changelog_header_string).group('version')

    @cached_property
    def download_links(self) -> Dict[Platform, URL]:
        direct_download_links = self._download_page_root.xpath('//a[@class="direct-download-link"]')
        result = dict()
        for link in direct_download_links:
            link: ElementBase
            platform = re.search(rf'FreeFileSync \d+\.\d+ (?P<platform>\w+)', link.xpath('string()')).group('platform')
            result[Platform(platform)] = URL(f'{self._url}{link.attrib["href"].lstrip("/")}')
        return result


class FreeFileSyncVersionChecker(VersionChecker):

    @cached_property
    def change_log(self) -> str:
        program_folder = f'{os.environ["ProgramW6432"]}/FreeFileSync'
        if os.path.exists(program_folder):
            with open(f'{program_folder}/Changelog.txt', 'r', encoding='utf-8') as f:
                return f.read()

    @cached_property
    def version(self):
        if self.change_log:
            return re.search(r'^FreeFileSync (?P<version>\d+\.\d+)', self.change_log).group('version')

    @cached_property
    def platform(self) -> Platform:
        return Platform('Windows')


class FreeFileSyncInstaller(Installer):

    def install(self, setup_file: str):
        os.system(setup_file)


class FreeFileSyncUpdaterFactory(UpdaterAbstractFactory):

    @cached_property
    def information_retriever(self) -> InformationRetriever:
        return FreeFileSyncInformationRetriever()

    @cached_property
    def installer(self) -> Installer:
        return FreeFileSyncInstaller()

    @cached_property
    def version_checker(self) -> VersionChecker:
        return FreeFileSyncVersionChecker()
