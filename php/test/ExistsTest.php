<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK exists test

require_once __DIR__ . '/../alanperlisquotes_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = AlanPerlisQuotesSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
