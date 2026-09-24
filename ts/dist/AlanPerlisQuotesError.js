"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.AlanPerlisQuotesError = void 0;
class AlanPerlisQuotesError extends Error {
    isAlanPerlisQuotesError = true;
    sdk = 'AlanPerlisQuotes';
    code;
    ctx;
    status = -1;
    // `err.notFound` rather than a magic number at every call site.
    get notFound() { return 404 === this.status; }
    constructor(code, msg, ctx) {
        super(msg);
        this.code = code;
        this.ctx = ctx;
    }
}
exports.AlanPerlisQuotesError = AlanPerlisQuotesError;
//# sourceMappingURL=AlanPerlisQuotesError.js.map