# AlanPerlisQuotes SDK utility: make_context
require_relative '../core/context'
module AlanPerlisQuotesUtilities
  MakeContext = ->(ctxmap, basectx) {
    AlanPerlisQuotesContext.new(ctxmap, basectx)
  }
end
