package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewQuoteEntityFunc func(client *AlanPerlisQuotesSDK, entopts map[string]any) AlanPerlisQuotesEntity

