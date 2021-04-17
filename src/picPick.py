import os
import re
from functools import cached_property
from typing import Optional, Dict

import requests
from lxml import etree
from lxml.etree import ElementBase

from src import VersionChecker, Platform, InformationRetriever, URL, Installer, UpdaterAbstractFactory


class PicPickVersionChecker(VersionChecker):

    @cached_property
    def version(self) -> Optional[str]:
        try:
            import winreg
            with winreg.OpenKey(winreg.HKEY_LOCAL_MACHINE, r'SOFTWARE\WOW6432Node\Microsoft\Windows\CurrentVersion\Uninstall\PicPick') as key:
                return winreg.QueryValueEx(key, 'DisplayVersion')[0]
        except FileNotFoundError:
            pass

    @cached_property
    def platform(self) -> Platform:
        return Platform('Windows')


class PicPickInformationRetriever(InformationRetriever):

    @cached_property
    def download_page(self) -> str:
        return requests.get('https://picpick.app/en/download').text

    @cached_property
    def _download_page_root(self) -> ElementBase:
        return etree.HTML(self.download_page)

    @cached_property
    def download_free_page(self) -> str:
        return requests.get('https://picpick.app/en/download/free').text

    @cached_property
    def _download_free_page_root(self) -> ElementBase:
        return etree.HTML(self.download_free_page)

    @cached_property
    def latest_version(self) -> str:
        column = self._download_page_root.xpath('//*[@class="column" and descendant::*[text()="Latest Version"]]')[0]
        return re.search(r'v(?P<version>\d+\.\d+\.\d+) \(\d{4}-\d{2}-\d{2}\)', column.xpath('string()')).group('version')

    @cached_property
    def download_links(self) -> Dict[Platform, URL]:
        return {Platform('Windows'): self._download_free_page_root.xpath('//a[@id="dwstart"]')[0].attrib['href']}


class PicPickInstaller(Installer):

    def install(self, setup_file: str):
        os.system(setup_file)


class PicPickUpdaterFactory(UpdaterAbstractFactory):

    @cached_property
    def information_retriever(self) -> InformationRetriever:
        return PicPickInformationRetriever()

    @cached_property
    def installer(self) -> Installer:
        return PicPickInstaller()

    @cached_property
    def version_checker(self) -> VersionChecker:
        return PicPickVersionChecker()
