<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK utility: result_body

class AlanPerlisQuotesResultBody
{
    public static function call(AlanPerlisQuotesContext $ctx): ?AlanPerlisQuotesResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
