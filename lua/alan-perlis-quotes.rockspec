package = "voxgig-sdk-alan-perlis-quotes"
version = "0.0-1"
source = {
  url = "git://github.com/voxgig-sdk/alan-perlis-quotes-sdk.git"
}
description = {
  summary = "AlanPerlisQuotes SDK for Lua",
  license = "MIT"
}
dependencies = {
  "lua >= 5.3",
  "dkjson >= 2.5",
  "dkjson >= 2.5",
}
build = {
  type = "builtin",
  modules = {
    ["alan-perlis-quotes_sdk"] = "alan-perlis-quotes_sdk.lua",
    ["config"] = "config.lua",
    ["features"] = "features.lua",
  }
}
