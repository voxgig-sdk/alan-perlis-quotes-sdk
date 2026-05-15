<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK utility: feature_add

class AlanPerlisQuotesFeatureAdd
{
    public static function call(AlanPerlisQuotesContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
