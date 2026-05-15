# AlanPerlisQuotes SDK configuration


def make_config():
    return {
        "main": {
            "name": "AlanPerlisQuotes",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
      },
        },
        "options": {
            "base": "https://perl.is",
            "auth": {
                "prefix": "Bearer",
            },
            "headers": {
        "content-type": "application/json",
      },
            "entity": {
                "quote": {},
            },
        },
        "entity": {
      "quote": {
        "fields": [
          {
            "name": "quote",
            "req": False,
            "type": "`$STRING`",
            "active": True,
            "index$": 0,
          },
        ],
        "name": "quote",
        "op": {
          "load": {
            "name": "load",
            "points": [
              {
                "method": "GET",
                "orig": "/random",
                "parts": [
                  "random",
                ],
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "active": True,
                "args": {},
                "select": {},
                "index$": 0,
              },
            ],
            "input": "data",
            "key$": "load",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
