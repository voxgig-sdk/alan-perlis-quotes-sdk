
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { AlanPerlisQuotesSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await AlanPerlisQuotesSDK.test()
    equal(null !== testsdk, true)
  })

})
