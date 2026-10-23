# # Employee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**employment_type** | **string** | FULLTIME - &#39;Full-time&#39;, PARTTIME - &#39;Part-time&#39;, CONTRACTOR - &#39;Contractor&#39;, CASUAL - &#39;Casual&#39;; | [optional]
**units_per_week** | **string** |  | [optional]
**rate** | **float** |  | [optional]
**rate_type** | **string** | DAILY - &#39;Per hour&#39;, HOURLY - &#39;Per day&#39;; | [optional]
**termination_date** | **string** |  | [optional]
**pay_cycle** | **string** |  | [optional]
**bank_accounts** | [**\Elmo\UserApi\Model\EmployeeBankAccounts**](EmployeeBankAccounts.md) |  | [optional]
**withholding_details** | [**\Elmo\UserApi\Model\EmployeeWithholdingDetails**](EmployeeWithholdingDetails.md) |  | [optional]
**retirement_fund_accounts** | [**\Elmo\UserApi\Model\EmployeeRetirementFundAccounts**](EmployeeRetirementFundAccounts.md) |  | [optional]
**termination_details** | [**\Elmo\UserApi\Model\EmployeeTerminationDetails**](EmployeeTerminationDetails.md) |  | [optional]
**emergency_contacts** | [**\Elmo\UserApi\Model\EmergencyContact[]**](EmergencyContact.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
