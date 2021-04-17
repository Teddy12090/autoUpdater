import os
import site
import unittest
from unittest import TestLoader

if __name__ == '__main__':
    site.addsitedir('src')
    suite = TestLoader().discover(f'{os.path.abspath("./tests")}')
    runner = unittest.TextTestRunner(verbosity=2)
    os.chdir("tests")
    result = runner.run(suite)
    assert result.wasSuccessful()
