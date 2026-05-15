# AlanPerlisQuotes SDK exists test

require "minitest/autorun"
require_relative "../AlanPerlisQuotes_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = AlanPerlisQuotesSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
