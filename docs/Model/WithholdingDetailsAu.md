# # WithholdingDetailsAu

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tfn** | **string** | Tax File Number of an employee. Note that this could be null value if employee do not provide TFN. But that will ensure reasonNoTfn field will have value with relevant code. | [optional]
**reason_no_tfn** | **string** | Specific TFN reason why employee is unable to provide TFN. Note this field will be null if TFN is provided by employee. | [optional]
**primary_email** | **string** | Main contact email of the employee. | [optional]
**previous_surname** | **string** | If employee have changed the name since last dealt with the ATO and therefore is required to provide previous family name. | [optional]
**basis_of_payment** | **string** | When working out whether worker is an employee or contractor, one factor to consider is how you work out what you agree to pay the worker. | [optional]
**is_australian_resident** | **bool** | Whether or not employee is Australian Resident for tax purposes. | [optional]
**is_claim_tax_free_threshold** | **bool** | Amount of income employee can earn each financial year that is not taxed. By claiming the threshold, employee reduces the amount of tax that is withheld from the pay during the year | [optional]
**is_claim_pensioner_offset** | **bool** | Tax offset for low and middle income earners to reduce tax payable to zero, but it is not a bonus payment. The amount of available offset depends on individual circumstances. | [optional]
**is_claim_zone_offset** | **bool** | Employee may be eligible for a zone tax offset if live or work in certain remote or isolated areas of Australia. | [optional]
**is_working_holiday_maker** | **bool** | Applies to payments to individuals - including backpackers - who are working in Australia and hold visa(subclass 417 or subclass 462 or Bridging Visa) | [optional]
**visa_country** | **string** | ISO 3166-1 alpha-2 codes of country where employee is originally from. | [optional]
**has_stlr** | **bool** | If Australian Government lent employee money under HECS-HELP, FEE-HELP, OS-HELP, VET FEE-HELP, VET Student loans prior to 1 July 2019 or SA-HELP or if employee have a debt from the previous Higher Education Contribution Scheme (HECS) | [optional]
**is_seasonal_worker** | **bool** | If employee is seasonal workers who withheld tax at a flat rate of 15% on all earnings. Returns null in case integration type is not Payroll | [optional]
**is_information_correct** | **bool** | Declaring employee has answered all the questions truthfully and correctly. | [optional]
**declaration_date** | **string** | Date when employee declare all the questions in the TFN form were answered truthfully and correctly. Dates are strings in ISO 8601 format YYYY-MM-DD | [optional]
**declaration_date_timezone** | **string** | Timezone used when employee was declaring all the information provided in Taxation form is correct. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
