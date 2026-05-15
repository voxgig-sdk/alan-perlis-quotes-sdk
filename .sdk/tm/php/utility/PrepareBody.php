<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK utility: prepare_body

class AlanPerlisQuotesPrepareBody
{
    public static function call(AlanPerlisQuotesContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
