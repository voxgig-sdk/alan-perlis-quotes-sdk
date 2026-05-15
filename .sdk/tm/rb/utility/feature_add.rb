# AlanPerlisQuotes SDK utility: feature_add
module AlanPerlisQuotesUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
