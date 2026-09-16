# AlanPerlisQuotes SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module AlanPerlisQuotesFeatures
  def self.make_feature(name)
    case name
    when "base"
      AlanPerlisQuotesBaseFeature.new
    when "ratelimit"
      AlanPerlisQuotesRatelimitFeature.new
    when "retry"
      AlanPerlisQuotesRetryFeature.new
    when "test"
      AlanPerlisQuotesTestFeature.new
    when "timeout"
      AlanPerlisQuotesTimeoutFeature.new
    else
      AlanPerlisQuotesBaseFeature.new
    end
  end
end
