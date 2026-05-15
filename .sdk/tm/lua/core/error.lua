-- AlanPerlisQuotes SDK error

local AlanPerlisQuotesError = {}
AlanPerlisQuotesError.__index = AlanPerlisQuotesError


function AlanPerlisQuotesError.new(code, msg, ctx)
  local self = setmetatable({}, AlanPerlisQuotesError)
  self.is_sdk_error = true
  self.sdk = "AlanPerlisQuotes"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function AlanPerlisQuotesError:error()
  return self.msg
end


function AlanPerlisQuotesError:__tostring()
  return self.msg
end


return AlanPerlisQuotesError
