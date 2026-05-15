# ProjectName SDK exists test

import pytest
from alanperlisquotes_sdk import AlanPerlisQuotesSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = AlanPerlisQuotesSDK.test(None, None)
        assert testsdk is not None
