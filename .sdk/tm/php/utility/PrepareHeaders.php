<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK utility: prepare_headers

class AlanPerlisQuotesPrepareHeaders
{
    public static function call(AlanPerlisQuotesContext $ctx): array
    {
        $options = $ctx->client->options_map();
        $headers = \Voxgig\Struct\Struct::getprop($options, 'headers');
        if (!$headers) {
            return [];
        }
        $out = \Voxgig\Struct\Struct::clone($headers);
        return is_array($out) ? $out : [];
    }
}
