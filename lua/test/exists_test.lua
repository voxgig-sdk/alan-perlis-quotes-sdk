-- AlanPerlisQuotes SDK exists test

local sdk = require("alan-perlis-quotes_sdk")

describe("AlanPerlisQuotesSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
