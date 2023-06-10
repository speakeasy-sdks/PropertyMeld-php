# BasePayment


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `amount`                                                      | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `amountRefunded`                                              | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `checkNo`                                                     | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `createBy`                                                    | array<string, *mixed*>                                        | :heavy_minus_sign:                                            | N/A                                                           |
| `created`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |
| `id`                                                          | *int*                                                         | :heavy_check_mark:                                            | N/A                                                           |
| `method`                                                      | [MethodEnum](../../models/shared/MethodEnum.md)               | :heavy_check_mark:                                            | N/A                                                           |
| `notes`                                                       | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `stripeChargeId`                                              | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `updateBy`                                                    | array<string, *mixed*>                                        | :heavy_minus_sign:                                            | N/A                                                           |
| `updated`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |