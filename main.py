import site

from calibre import CalibreUpdaterFactory
from picPick import PicPickUpdaterFactory

site.addsitedir('src')

if __name__ == '__main__':
    import os
    import requests
    from freeFileSync import FreeFileSyncUpdaterFactory

    for factory in [
        FreeFileSyncUpdaterFactory(),
        CalibreUpdaterFactory(),
        PicPickUpdaterFactory()
    ]:
        checker = factory.version_checker
        retriever = factory.information_retriever
        installer = factory.installer
        if checker.version and retriever.latest_version > checker.version:
            url = retriever.download_links[checker.platform]
            r = requests.get(url, allow_redirects=True)

            setup_file = f'{os.environ["TEMP"]}{os.path.sep}{os.path.basename(url)}'
            if not os.path.exists(setup_file):
                with open(setup_file, 'wb') as f:
                    f.write(r.content)
            installer.install(setup_file)
