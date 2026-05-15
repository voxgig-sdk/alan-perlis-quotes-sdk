# AlanPerlisQuotes SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

AlanPerlisQuotesUtility.registrar = ->(u) {
  u.clean = AlanPerlisQuotesUtilities::Clean
  u.done = AlanPerlisQuotesUtilities::Done
  u.make_error = AlanPerlisQuotesUtilities::MakeError
  u.feature_add = AlanPerlisQuotesUtilities::FeatureAdd
  u.feature_hook = AlanPerlisQuotesUtilities::FeatureHook
  u.feature_init = AlanPerlisQuotesUtilities::FeatureInit
  u.fetcher = AlanPerlisQuotesUtilities::Fetcher
  u.make_fetch_def = AlanPerlisQuotesUtilities::MakeFetchDef
  u.make_context = AlanPerlisQuotesUtilities::MakeContext
  u.make_options = AlanPerlisQuotesUtilities::MakeOptions
  u.make_request = AlanPerlisQuotesUtilities::MakeRequest
  u.make_response = AlanPerlisQuotesUtilities::MakeResponse
  u.make_result = AlanPerlisQuotesUtilities::MakeResult
  u.make_point = AlanPerlisQuotesUtilities::MakePoint
  u.make_spec = AlanPerlisQuotesUtilities::MakeSpec
  u.make_url = AlanPerlisQuotesUtilities::MakeUrl
  u.param = AlanPerlisQuotesUtilities::Param
  u.prepare_auth = AlanPerlisQuotesUtilities::PrepareAuth
  u.prepare_body = AlanPerlisQuotesUtilities::PrepareBody
  u.prepare_headers = AlanPerlisQuotesUtilities::PrepareHeaders
  u.prepare_method = AlanPerlisQuotesUtilities::PrepareMethod
  u.prepare_params = AlanPerlisQuotesUtilities::PrepareParams
  u.prepare_path = AlanPerlisQuotesUtilities::PreparePath
  u.prepare_query = AlanPerlisQuotesUtilities::PrepareQuery
  u.result_basic = AlanPerlisQuotesUtilities::ResultBasic
  u.result_body = AlanPerlisQuotesUtilities::ResultBody
  u.result_headers = AlanPerlisQuotesUtilities::ResultHeaders
  u.transform_request = AlanPerlisQuotesUtilities::TransformRequest
  u.transform_response = AlanPerlisQuotesUtilities::TransformResponse
}
