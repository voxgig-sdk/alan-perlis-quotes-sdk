<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class AlanPerlisQuotesMakeContext
{
    public static function call(array $ctxmap, ?AlanPerlisQuotesContext $basectx): AlanPerlisQuotesContext
    {
        return new AlanPerlisQuotesContext($ctxmap, $basectx);
    }
}
