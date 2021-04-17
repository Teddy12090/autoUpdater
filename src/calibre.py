import os
import re
import subprocess
from functools import cached_property
from typing import Optional, Dict

import requests
from lxml import etree
from lxml.etree import ElementBase

from src import Platform, URL, VersionChecker, InformationRetriever, Installer, UpdaterAbstractFactory


class CalibreInformationRetriever(InformationRetriever):

    @cached_property
    def whats_new(self) -> str:
        return requests.get('https://calibre-ebook.com/whats-new').text

    @cached_property
    def _whats_new_root(self) -> ElementBase:
        return etree.HTML(self.whats_new)

    @cached_property
    def latest_version(self) -> str:
        release_title = self._whats_new_root.xpath('//*[@class="release-title"]')[0]
        version = re.search(r'Release: (?P<version>\S+) \[[^]]+]', release_title.xpath('string()')).group('version')
        return version if re.match(r'\d+\.\d+\.\d+', version) else f'{version}.0'

    @cached_property
    def download_links(self) -> Dict[Platform, URL]:
        return {
            Platform('Windows'): URL(f'https://download.calibre-ebook.com/{self.latest_version}/calibre-{self.latest_version}.msi'),
            Platform('Windows64'): URL(f'https://download.calibre-ebook.com/{self.latest_version}/calibre-64bit-{self.latest_version}.msi')
        }


class CalibreVersionChecker(VersionChecker):
    program_folder_86 = f'{os.environ["ProgramFiles(x86)"]}/Calibre2'
    program_folder_64 = f'{os.environ["ProgramFiles"]}/Calibre2'

    @cached_property
    def version(self) -> Optional[str]:
        program_folder = None

        if os.path.exists(self.program_folder_86):
            program_folder = self.program_folder_86
        elif os.path.exists(self.program_folder_64):
            program_folder = self.program_folder_64

        if program_folder:
            output = subprocess.check_output([f'{program_folder}/calibre-customize.exe', '--version'], encoding='utf-8')
            version = re.search(r'\(calibre (?P<version>\d+\.\d+)\)', output).group('version')
            return version

    @cached_property
    def platform(self) -> Platform:
        if os.path.exists(self.program_folder_86):
            return Platform('Windows')
        elif os.path.exists(self.program_folder_64):
            return Platform('Windows64')


class CalibreInstaller(Installer):

    def install(self, setup_file: str):
        os.system(setup_file)


class CalibreUpdaterFactory(UpdaterAbstractFactory):

    @cached_property
    def information_retriever(self) -> InformationRetriever:
        return CalibreInformationRetriever()

    @cached_property
    def installer(self) -> Installer:
        return CalibreInstaller()

    @cached_property
    def version_checker(self) -> VersionChecker:
        return CalibreVersionChecker()
