
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { AlanPerlisQuotesSDK } from '..'


describe('exists', async () => {

  test('test-mode', () => {
    const testsdk = AlanPerlisQuotesSDK.test()
    equal(testsdk instanceof AlanPerlisQuotesSDK, true,
      'AlanPerlisQuotesSDK.test() must return a client synchronously')
  })

})
