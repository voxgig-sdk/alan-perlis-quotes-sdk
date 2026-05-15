package core

type AlanPerlisQuotesError struct {
	IsAlanPerlisQuotesError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewAlanPerlisQuotesError(code string, msg string, ctx *Context) *AlanPerlisQuotesError {
	return &AlanPerlisQuotesError{
		IsAlanPerlisQuotesError: true,
		Sdk:              "AlanPerlisQuotes",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *AlanPerlisQuotesError) Error() string {
	return e.Msg
}
