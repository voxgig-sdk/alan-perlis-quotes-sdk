<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class AlanPerlisQuotesFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new AlanPerlisQuotesBaseFeature();
            case "test":
                return new AlanPerlisQuotesTestFeature();
            default:
                return new AlanPerlisQuotesBaseFeature();
        }
    }
}
