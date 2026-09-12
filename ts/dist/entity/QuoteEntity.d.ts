import { AlanPerlisQuotesEntityBase } from '../AlanPerlisQuotesEntityBase';
import type { AlanPerlisQuotesSDK } from '../AlanPerlisQuotesSDK';
import type { Control } from '../types';
import type { Quote, QuoteLoadMatch } from '../AlanPerlisQuotesTypes';
declare class QuoteEntity extends AlanPerlisQuotesEntityBase<Quote> {
    constructor(client: AlanPerlisQuotesSDK, entopts: any);
    make(this: QuoteEntity): QuoteEntity;
    load(this: any, reqmatch?: QuoteLoadMatch, ctrl?: Control): Promise<QuoteEntity>;
}
export { QuoteEntity };
