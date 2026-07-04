<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK configuration

class AlanPerlisQuotesConfig
{
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "AlanPerlisQuotes",
            ],
            "feature" => [
                "test" => [
          'options' => [
            'active' => false,
          ],
        ],
            ],
            "options" => [
                "base" => "https://perl.is",
                "headers" => [
          'content-type' => 'application/json',
        ],
                "entity" => [
                    "quote" => [],
                ],
            ],
            "entity" => [
        'quote' => [
          'fields' => [
            [
              'active' => true,
              'name' => 'quote',
              'req' => false,
              'type' => '`$STRING`',
              'index$' => 0,
            ],
          ],
          'name' => 'quote',
          'op' => [
            'load' => [
              'input' => 'data',
              'name' => 'load',
              'points' => [
                [
                  'active' => true,
                  'args' => [],
                  'method' => 'GET',
                  'orig' => '/random',
                  'parts' => [
                    'random',
                  ],
                  'select' => [],
                  'transform' => [
                    'req' => '`reqdata`',
                    'res' => '`body.quote`',
                  ],
                  'index$' => 0,
                ],
              ],
              'key$' => 'load',
            ],
          ],
          'relations' => [
            'ancestors' => [],
          ],
        ],
      ],
        ];
    }


    public static function make_feature(string $name)
    {
        require_once __DIR__ . '/features.php';
        return AlanPerlisQuotesFeatures::make_feature($name);
    }
}
