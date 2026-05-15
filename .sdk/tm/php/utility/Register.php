<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

AlanPerlisQuotesUtility::setRegistrar(function (AlanPerlisQuotesUtility $u): void {
    $u->clean = [AlanPerlisQuotesClean::class, 'call'];
    $u->done = [AlanPerlisQuotesDone::class, 'call'];
    $u->make_error = [AlanPerlisQuotesMakeError::class, 'call'];
    $u->feature_add = [AlanPerlisQuotesFeatureAdd::class, 'call'];
    $u->feature_hook = [AlanPerlisQuotesFeatureHook::class, 'call'];
    $u->feature_init = [AlanPerlisQuotesFeatureInit::class, 'call'];
    $u->fetcher = [AlanPerlisQuotesFetcher::class, 'call'];
    $u->make_fetch_def = [AlanPerlisQuotesMakeFetchDef::class, 'call'];
    $u->make_context = [AlanPerlisQuotesMakeContext::class, 'call'];
    $u->make_options = [AlanPerlisQuotesMakeOptions::class, 'call'];
    $u->make_request = [AlanPerlisQuotesMakeRequest::class, 'call'];
    $u->make_response = [AlanPerlisQuotesMakeResponse::class, 'call'];
    $u->make_result = [AlanPerlisQuotesMakeResult::class, 'call'];
    $u->make_point = [AlanPerlisQuotesMakePoint::class, 'call'];
    $u->make_spec = [AlanPerlisQuotesMakeSpec::class, 'call'];
    $u->make_url = [AlanPerlisQuotesMakeUrl::class, 'call'];
    $u->param = [AlanPerlisQuotesParam::class, 'call'];
    $u->prepare_auth = [AlanPerlisQuotesPrepareAuth::class, 'call'];
    $u->prepare_body = [AlanPerlisQuotesPrepareBody::class, 'call'];
    $u->prepare_headers = [AlanPerlisQuotesPrepareHeaders::class, 'call'];
    $u->prepare_method = [AlanPerlisQuotesPrepareMethod::class, 'call'];
    $u->prepare_params = [AlanPerlisQuotesPrepareParams::class, 'call'];
    $u->prepare_path = [AlanPerlisQuotesPreparePath::class, 'call'];
    $u->prepare_query = [AlanPerlisQuotesPrepareQuery::class, 'call'];
    $u->result_basic = [AlanPerlisQuotesResultBasic::class, 'call'];
    $u->result_body = [AlanPerlisQuotesResultBody::class, 'call'];
    $u->result_headers = [AlanPerlisQuotesResultHeaders::class, 'call'];
    $u->transform_request = [AlanPerlisQuotesTransformRequest::class, 'call'];
    $u->transform_response = [AlanPerlisQuotesTransformResponse::class, 'call'];
});
