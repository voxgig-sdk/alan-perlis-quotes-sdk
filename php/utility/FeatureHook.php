<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK utility: feature_hook

class AlanPerlisQuotesFeatureHook
{
    public static function call(AlanPerlisQuotesContext $ctx, string $name): void
    {
        if (!$ctx->client) {
            return;
        }
        $features = $ctx->client->features ?? null;
        if (!$features) {
            return;
        }
        foreach ($features as $f) {
            if (method_exists($f, $name)) {
                $f->$name($ctx);
            }
        }
    }
}
