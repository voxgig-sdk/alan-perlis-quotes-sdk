# AlanPerlisQuotes SDK utility: make_context

from projectname_sdk.core.context import AlanPerlisQuotesContext


def make_context_util(ctxmap, basectx):
    return AlanPerlisQuotesContext(ctxmap, basectx)
