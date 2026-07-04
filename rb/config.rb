# AlanPerlisQuotes SDK configuration

module AlanPerlisQuotesConfig
  def self.make_config
    {
      "main" => {
        "name" => "AlanPerlisQuotes",
      },
      "feature" => {
        "test" => {
          "options" => {
            "active" => false,
          },
        },
      },
      "options" => {
        "base" => "https://perl.is",
        "headers" => {
          "content-type" => "application/json",
        },
        "entity" => {
          "quote" => {},
        },
      },
      "entity" => {
        "quote" => {
          "fields" => [
            {
              "active" => true,
              "name" => "quote",
              "req" => false,
              "type" => "`$STRING`",
              "index$" => 0,
            },
          ],
          "name" => "quote",
          "op" => {
            "load" => {
              "input" => "data",
              "name" => "load",
              "points" => [
                {
                  "active" => true,
                  "args" => {},
                  "method" => "GET",
                  "orig" => "/random",
                  "parts" => [
                    "random",
                  ],
                  "select" => {},
                  "transform" => {
                    "req" => "`reqdata`",
                    "res" => "`body`",
                  },
                  "index$" => 0,
                },
              ],
              "key$" => "load",
            },
          },
          "relations" => {
            "ancestors" => [],
          },
        },
      },
    }
  end


  def self.make_feature(name)
    require_relative 'features'
    AlanPerlisQuotesFeatures.make_feature(name)
  end
end
