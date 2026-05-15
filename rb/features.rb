# AlanPerlisQuotes SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module AlanPerlisQuotesFeatures
  def self.make_feature(name)
    case name
    when "base"
      AlanPerlisQuotesBaseFeature.new
    when "test"
      AlanPerlisQuotesTestFeature.new
    else
      AlanPerlisQuotesBaseFeature.new
    end
  end
end
