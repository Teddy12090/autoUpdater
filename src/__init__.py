import abc
from abc import ABC
from typing import Optional, Dict, NewType

Platform = NewType('Platform', str)
URL = NewType('URL', str)


class InformationRetriever(ABC):
    @property
    @abc.abstractmethod
    def latest_version(self) -> str:
        pass

    @property
    @abc.abstractmethod
    def download_links(self) -> Dict[Platform, URL]:
        pass


class VersionChecker(ABC):

    @property
    @abc.abstractmethod
    def version(self) -> Optional[str]:
        pass

    @property
    @abc.abstractmethod
    def platform(self) -> Platform:
        pass


class Installer(ABC):

    @abc.abstractmethod
    def install(self, setup_file: str):
        pass


class UpdaterAbstractFactory(ABC):

    @property
    @abc.abstractmethod
    def information_retriever(self) -> InformationRetriever:
        pass

    @property
    @abc.abstractmethod
    def installer(self) -> Installer:
        pass

    @property
    @abc.abstractmethod
    def version_checker(self) -> VersionChecker:
        pass
