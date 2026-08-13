# AlanPerlisQuotes SDK utility: make_context

from alanperlisquotes_sdk.core.context import AlanPerlisQuotesContext


def make_context_util(ctxmap, basectx):
    return AlanPerlisQuotesContext(ctxmap, basectx)
