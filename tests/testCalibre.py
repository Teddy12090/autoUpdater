import unittest
from functools import cached_property

from calibre import CalibreInformationRetriever


class CalibreInformationRetrieverWithWhatsNew(CalibreInformationRetriever):

    def __init__(self, *, whats_new: str):
        self._whats_new = whats_new

    @cached_property
    def whats_new(self) -> str:
        return self._whats_new


class TestCalibreInformationRetriever(unittest.TestCase):

    def test_5_16(self):
        with open('res/calibre/whats-new_5_16', 'r', encoding='utf-8') as f:
            whats_new = f.read()
        retriever = CalibreInformationRetrieverWithWhatsNew(whats_new=whats_new)
        with self.subTest('version'):
            self.assertEqual('5.16.0', retriever.latest_version)

    def test_online(self):
        retriever = CalibreInformationRetriever()
        with self.subTest('version'):
            self.assertRegex(retriever.latest_version, r'\d+\.\d+\.\d+')
