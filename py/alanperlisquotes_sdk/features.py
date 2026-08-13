# AlanPerlisQuotes SDK feature factory

from alanperlisquotes_sdk.feature.base_feature import AlanPerlisQuotesBaseFeature
from alanperlisquotes_sdk.feature.test_feature import AlanPerlisQuotesTestFeature


def _make_feature(name):
    features = {
        "base": lambda: AlanPerlisQuotesBaseFeature(),
        "test": lambda: AlanPerlisQuotesTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
