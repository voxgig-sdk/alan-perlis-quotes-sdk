package voxgigalanperlisquotessdk

import (
	"github.com/voxgig-sdk/alan-perlis-quotes-sdk/go/core"
	"github.com/voxgig-sdk/alan-perlis-quotes-sdk/go/entity"
	"github.com/voxgig-sdk/alan-perlis-quotes-sdk/go/feature"
	_ "github.com/voxgig-sdk/alan-perlis-quotes-sdk/go/utility"
)

// Type aliases preserve external API.
type AlanPerlisQuotesSDK = core.AlanPerlisQuotesSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type AlanPerlisQuotesEntity = core.AlanPerlisQuotesEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type AlanPerlisQuotesError = core.AlanPerlisQuotesError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewQuoteEntityFunc = func(client *core.AlanPerlisQuotesSDK, entopts map[string]any) core.AlanPerlisQuotesEntity {
		return entity.NewQuoteEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewAlanPerlisQuotesSDK = core.NewAlanPerlisQuotesSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig

// No-arg convenience constructors. Go has no default-argument syntax,
// so these aliases let callers write `sdk.New()` / `sdk.Test()`
// instead of `sdk.NewAlanPerlisQuotesSDK(nil)` / `sdk.TestSDK(nil, nil)`
// for the common no-options case.
func New() *AlanPerlisQuotesSDK  { return NewAlanPerlisQuotesSDK(nil) }
func Test() *AlanPerlisQuotesSDK { return TestSDK(nil, nil) }
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
