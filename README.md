# ELMO User API PHP SDK

PHP client for the ELMO User API (API version `v1-rc3`).

## Prerequisites

- ELMO API credentials: a client ID and a client secret. A Company Admin creates and manages API credentials in ELMO.
- PHP 8.4.27 or later, with the `curl`, `json` and `mbstring` extensions.
- [Composer](https://getcomposer.org/).

## Install

```bash
composer require elmo/user-api-sdk
```

## Configure

`ElmoClient` needs your client ID and client secret only. It gets the OAuth2 access token
(client-credentials grant, `POST /oauth/token`) on the first request, and gets a new token
60 seconds before the current token expires. You do not send a token yourself.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Elmo\UserApi\ApiException;
use Elmo\UserApi\ElmoClient;

$elmo = new ElmoClient(getenv('ELMO_CLIENT_ID'), getenv('ELMO_CLIENT_SECRET'));

try {
    $users = $elmo->users->getUserCollection(items_per_page: 10);
    foreach ($users as $user) {
        echo $user->getId(), ' ', $user->getFirstName(), ' ', $user->getLastName(), PHP_EOL;
    }
} catch (ApiException $e) {
    echo 'HTTP ', $e->getCode(), ': ', $e->getResponseBody(), PHP_EOL;
}
```

Keep the client secret out of source control. Read it from the environment or a secret store.

Optional constructor arguments:

| Argument | Default | Use |
|---|---|---|
| `$host` | `https://api.elmotalent.com.au` | The ELMO API host for your environment. |
| `$http` | `new GuzzleHttp\Client()` | Your own `GuzzleHttp\ClientInterface`, for example with timeouts or middleware. |

```php
$elmo = new ElmoClient($clientId, $clientSecret, 'https://your-elmo-api-host');
```

## Next Steps

- Each API is a property of `ElmoClient`, for example `$elmo->users`, `$elmo->departments` and `$elmo->leaveRequests`. The table below lists every method.
- The API has rate limits and a daily quota. Space out your requests.
- Endpoints marked BETA can change. Do not use them in production without testing.

## API Endpoints

All URIs are relative to *https://api.elmotalent.com.au*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CandidatesApi* | [**getCandidates**](docs/Api/CandidatesApi.md#getcandidates) | **GET** /recruitment/v1/candidates | Get a list of candidates
*DepartmentsApi* | [**getDepartmentCollection**](docs/Api/DepartmentsApi.md#getdepartmentcollection) | **GET** /core/v1/departments | Gets all the departments
*DepartmentsApi* | [**getDepartmentItem**](docs/Api/DepartmentsApi.md#getdepartmentitem) | **GET** /core/v1/departments/{id} | Gets a single department
*DepartmentsApi* | [**getDepartmentTemplateCollection**](docs/Api/DepartmentsApi.md#getdepartmenttemplatecollection) | **GET** /core/v1/department-creation-template | Get department template schema
*DepartmentsApi* | [**postDepartmentCollection**](docs/Api/DepartmentsApi.md#postdepartmentcollection) | **POST** /core/v1/departments | Create a new department
*DepartmentsApi* | [**putDepartmentItem**](docs/Api/DepartmentsApi.md#putdepartmentitem) | **PUT** /core/v1/departments/{id} | Update an existing department
*EmployeesApi* | [**getEmploymentDetailsCollection**](docs/Api/EmployeesApi.md#getemploymentdetailscollection) | **GET** /core/v1/employees | Get employment details of all employees
*EmployeesApi* | [**getEmploymentDetailsItem**](docs/Api/EmployeesApi.md#getemploymentdetailsitem) | **GET** /core/v1/employees/{id} | Get a single employment details by Id
*LeaveRequestsApi* | [**getLeaveRequestCollection**](docs/Api/LeaveRequestsApi.md#getleaverequestcollection) | **GET** /core/v1/leave-requests | Gets all the leave request
*LeaveRequestsApi* | [**getLeaveRequestItem**](docs/Api/LeaveRequestsApi.md#getleaverequestitem) | **GET** /core/v1/leave-requests/{id} | Gets a single leave request
*LeaveTypesApi* | [**getLeaveTypeCollection**](docs/Api/LeaveTypesApi.md#getleavetypecollection) | **GET** /core/v1/leave-types | Gets all leave types
*LeaveTypesApi* | [**getLeaveTypeItem**](docs/Api/LeaveTypesApi.md#getleavetypeitem) | **GET** /core/v1/leave-types/{id} | Gets a single leave type
*LegalEntitiesApi* | [**getLegalEntitityCollection**](docs/Api/LegalEntitiesApi.md#getlegalentititycollection) | **GET** /core/v1/legal-entities | Gets all the legal entities
*LegalEntitiesApi* | [**getLegalEntitiyItem**](docs/Api/LegalEntitiesApi.md#getlegalentitiyitem) | **GET** /core/v1/legal-entities/{id} | Gets a single legal entity
*LocationsApi* | [**getLocationCollection**](docs/Api/LocationsApi.md#getlocationcollection) | **GET** /core/v1/locations | Gets all the locations
*LocationsApi* | [**getLocationItem**](docs/Api/LocationsApi.md#getlocationitem) | **GET** /core/v1/locations/{id} | Gets a single location
*LocationsApi* | [**getLocationTemplateCollection**](docs/Api/LocationsApi.md#getlocationtemplatecollection) | **GET** /core/v1/location-creation-template | Gets location template
*LocationsApi* | [**postLocationCollection**](docs/Api/LocationsApi.md#postlocationcollection) | **POST** /core/v1/locations | Create a new location
*LocationsApi* | [**putLocationItem**](docs/Api/LocationsApi.md#putlocationitem) | **PUT** /core/v1/locations/{id} | Update an existing location
*MetadataApi* | [**getPersonalContactDetailsMetadataCollection**](docs/Api/MetadataApi.md#getpersonalcontactdetailsmetadatacollection) | **GET** /core/v1/metadata/personal-contact-details | Get metadata of configurable personal contact detail fields
*MetadataApi* | [**getPositionCustomFieldsMetadataCollection**](docs/Api/MetadataApi.md#getpositioncustomfieldsmetadatacollection) | **GET** /core/v1/metadata/position | Get metadata of configurable Position fields
*MetadataApi* | [**getUserMetadataCollection**](docs/Api/MetadataApi.md#getusermetadatacollection) | **GET** /core/v1/metadata/user | Gets metadata of configurable User fields
*OAuth20Api* | [**getOauthAccessToken**](docs/Api/OAuth20Api.md#getoauthaccesstoken) | **POST** /oauth/token | Retrieve an access token
*OnboardingUserEventsApi* | [**getOnboardingUserCreationEventItem**](docs/Api/OnboardingUserEventsApi.md#getonboardingusercreationeventitem) | **GET** /core/v1/onboarding-user-creation-events/{id} | Retrieves specific onboarding user creation event
*OnboardingUserEventsApi* | [**getOnboardingUserUpdateEventItem**](docs/Api/OnboardingUserEventsApi.md#getonboardinguserupdateeventitem) | **GET** /core/v1/onboarding-user-update-events/{id} | Retrieves specific onboarding user update event
*OnboardingUserEventsApi* | [**getOnboardingusercreationtemplateOnboardingUserCreationTemplateCollection**](docs/Api/OnboardingUserEventsApi.md#getonboardingusercreationtemplateonboardingusercreationtemplatecollection) | **GET** /core/v1/onboarding-user-creation-template | Get all the profile data of an onboarding user
*OnboardingUserEventsApi* | [**postOnboardingUserCreationEventCollection**](docs/Api/OnboardingUserEventsApi.md#postonboardingusercreationeventcollection) | **POST** /core/v1/onboarding-user-creation-events | Triggers an event to create a new onboarding user
*OnboardingUserEventsApi* | [**updateOnboardingUserCreationEventCollection**](docs/Api/OnboardingUserEventsApi.md#updateonboardingusercreationeventcollection) | **POST** /core/v1/onboarding-user-update-events | Triggers an event to update an existing onboarding user.
*OnboardingUsersApi* | [**getOnboardingUserCollection**](docs/Api/OnboardingUsersApi.md#getonboardingusercollection) | **GET** /core/v1/onboarding-users | Gets all the onboarding users
*OnboardingUsersApi* | [**getOnboardingUserItem**](docs/Api/OnboardingUsersApi.md#getonboardinguseritem) | **GET** /core/v1/onboarding-users/{id} | Gets a single onboarding user
*OnboardingUsersApi* | [**postOnboardingUserConvert**](docs/Api/OnboardingUsersApi.md#postonboardinguserconvert) | **POST** /core/v1/onboarding-users/{id}/convert | Converts a single onboarding user to a general user
*PayrollCyclesApi* | [**getPayrollCycleCollection**](docs/Api/PayrollCyclesApi.md#getpayrollcyclecollection) | **GET** /core/v1/payroll-cycles | Gets all the payroll cycles
*PayrollCyclesApi* | [**getPayrollCycleItem**](docs/Api/PayrollCyclesApi.md#getpayrollcycleitem) | **GET** /core/v1/payroll-cycles/{id} | Gets a single payroll cycle
*PositionsApi* | [**getPositionCollection**](docs/Api/PositionsApi.md#getpositioncollection) | **GET** /core/v1/positions | Gets all the positions
*PositionsApi* | [**getPositionItem**](docs/Api/PositionsApi.md#getpositionitem) | **GET** /core/v1/positions/{id} | Gets a single position
*PositionsApi* | [**getPositionTemplateCollection**](docs/Api/PositionsApi.md#getpositiontemplatecollection) | **GET** /core/v1/position-creation-template | Get position template schema
*PositionsApi* | [**postPositionCollection**](docs/Api/PositionsApi.md#postpositioncollection) | **POST** /core/v1/positions | Create a new position
*PositionsApi* | [**putPositionItem**](docs/Api/PositionsApi.md#putpositionitem) | **PUT** /core/v1/positions/{id} | Update an existing position
*UserEventsApi* | [**getUserCreationEventItem**](docs/Api/UserEventsApi.md#getusercreationeventitem) | **GET** /core/v1/user-creation-events/{id} | Retrieves specific user creation event
*UserEventsApi* | [**getUserUpdateEventItem**](docs/Api/UserEventsApi.md#getuserupdateeventitem) | **GET** /core/v1/user-update-events/{id} | Retrieves specific user update event
*UserEventsApi* | [**getUsercreationtemplateUserCreationTemplateCollection**](docs/Api/UserEventsApi.md#getusercreationtemplateusercreationtemplatecollection) | **GET** /core/v1/user-creation-template | Get all the profile data of a user
*UserEventsApi* | [**postUserCreationEventCollection**](docs/Api/UserEventsApi.md#postusercreationeventcollection) | **POST** /core/v1/user-creation-events | Triggers an event to create a new user
*UserEventsApi* | [**updateUserCreationEventCollection**](docs/Api/UserEventsApi.md#updateusercreationeventcollection) | **POST** /core/v1/user-update-events | Triggers an event to update an existing user.
*UsersApi* | [**getPersonalContactDetails**](docs/Api/UsersApi.md#getpersonalcontactdetails) | **GET** /core/v1/users/{id}/personal-contact-details | Gets personal contact details of a user
*UsersApi* | [**getUserCollection**](docs/Api/UsersApi.md#getusercollection) | **GET** /core/v1/users | Gets all the users
*UsersApi* | [**getUserItem**](docs/Api/UsersApi.md#getuseritem) | **GET** /core/v1/users/{id} | Gets a single user
*UsersApi* | [**postActivate**](docs/Api/UsersApi.md#postactivate) | **POST** /core/v1/users/{id}/activate | Activate a user
*UsersApi* | [**postDeactivate**](docs/Api/UsersApi.md#postdeactivate) | **POST** /core/v1/users/{id}/deactivate | Deactivate a user
*UsersApi* | [**putPersonalContactDetails**](docs/Api/UsersApi.md#putpersonalcontactdetails) | **PUT** /core/v1/users/{id}/personal-contact-details | Update personal contact details of a user

## Models

- [BankAccountAu](docs/Model/BankAccountAu.md)
- [CandidateListResponse](docs/Model/CandidateListResponse.md)
- [CandidateQuery](docs/Model/CandidateQuery.md)
- [CommonMutationResponse](docs/Model/CommonMutationResponse.md)
- [Department](docs/Model/Department.md)
- [DepartmentMutate](docs/Model/DepartmentMutate.md)
- [DepartmentTemplateEmployeeLed](docs/Model/DepartmentTemplateEmployeeLed.md)
- [DepartmentTemplateEmployeeLedProperties](docs/Model/DepartmentTemplateEmployeeLedProperties.md)
- [EducationQuery](docs/Model/EducationQuery.md)
- [EmergencyContact](docs/Model/EmergencyContact.md)
- [Employee](docs/Model/Employee.md)
- [EmployeeBankAccounts](docs/Model/EmployeeBankAccounts.md)
- [EmployeeRetirementFundAccounts](docs/Model/EmployeeRetirementFundAccounts.md)
- [EmployeeTerminationDetails](docs/Model/EmployeeTerminationDetails.md)
- [EmployeeWithholdingDetails](docs/Model/EmployeeWithholdingDetails.md)
- [Error](docs/Model/Error.md)
- [ErrorGetResponse](docs/Model/ErrorGetResponse.md)
- [ErrorMessage](docs/Model/ErrorMessage.md)
- [ErrorServerInternal](docs/Model/ErrorServerInternal.md)
- [ErrorsGetResponse](docs/Model/ErrorsGetResponse.md)
- [ExperienceQuery](docs/Model/ExperienceQuery.md)
- [Field](docs/Model/Field.md)
- [Forbidden](docs/Model/Forbidden.md)
- [GetEmploymentDetailsCollection200Response](docs/Model/GetEmploymentDetailsCollection200Response.md)
- [GetEmploymentDetailsCollection200ResponseMetadata](docs/Model/GetEmploymentDetailsCollection200ResponseMetadata.md)
- [LanguageQuery](docs/Model/LanguageQuery.md)
- [LeaveRequest](docs/Model/LeaveRequest.md)
- [LeaveType](docs/Model/LeaveType.md)
- [LegalEntity](docs/Model/LegalEntity.md)
- [LegalEntityAddress](docs/Model/LegalEntityAddress.md)
- [Location](docs/Model/Location.md)
- [LocationMutate](docs/Model/LocationMutate.md)
- [LocationTemplateEmployeeLed](docs/Model/LocationTemplateEmployeeLed.md)
- [LocationTemplateEmployeeLedProperties](docs/Model/LocationTemplateEmployeeLedProperties.md)
- [Metadata](docs/Model/Metadata.md)
- [MetadataAnyOf](docs/Model/MetadataAnyOf.md)
- [MetadataAnyOf1](docs/Model/MetadataAnyOf1.md)
- [MetadataAnyOf2](docs/Model/MetadataAnyOf2.md)
- [MetadataAnyOf3](docs/Model/MetadataAnyOf3.md)
- [MetadataAnyOf4](docs/Model/MetadataAnyOf4.md)
- [MetadataAnyOf5](docs/Model/MetadataAnyOf5.md)
- [MetadataAnyOf6](docs/Model/MetadataAnyOf6.md)
- [MetadataAnyOf7](docs/Model/MetadataAnyOf7.md)
- [MetadataListQuery](docs/Model/MetadataListQuery.md)
- [MutationResponse](docs/Model/MutationResponse.md)
- [OauthToken](docs/Model/OauthToken.md)
- [OauthTokenErrorMessage](docs/Model/OauthTokenErrorMessage.md)
- [OnboardingUser](docs/Model/OnboardingUser.md)
- [OnboardingUserCreationTemplate](docs/Model/OnboardingUserCreationTemplate.md)
- [OnboardingUserCreationTemplateProperties](docs/Model/OnboardingUserCreationTemplateProperties.md)
- [OnboardingUserEvents](docs/Model/OnboardingUserEvents.md)
- [OnboardingUserV2](docs/Model/OnboardingUserV2.md)
- [Pagination](docs/Model/Pagination.md)
- [PayrollCycle](docs/Model/PayrollCycle.md)
- [PersonalContactDetails](docs/Model/PersonalContactDetails.md)
- [PersonalContactDetailsMutate](docs/Model/PersonalContactDetailsMutate.md)
- [Position](docs/Model/Position.md)
- [PositionMutate](docs/Model/PositionMutate.md)
- [PositionTemplateEmployeeLed](docs/Model/PositionTemplateEmployeeLed.md)
- [PositionTemplateEmployeeLedProperties](docs/Model/PositionTemplateEmployeeLedProperties.md)
- [PostDepartmentCollectionRequest](docs/Model/PostDepartmentCollectionRequest.md)
- [PostLocationCollectionRequest](docs/Model/PostLocationCollectionRequest.md)
- [PostPositionCollectionRequest](docs/Model/PostPositionCollectionRequest.md)
- [PropertyMetadata](docs/Model/PropertyMetadata.md)
- [PutDepartmentItemRequest](docs/Model/PutDepartmentItemRequest.md)
- [PutLocationItemRequest](docs/Model/PutLocationItemRequest.md)
- [PutPersonalContactDetailsRequest](docs/Model/PutPersonalContactDetailsRequest.md)
- [PutPositionItemRequest](docs/Model/PutPositionItemRequest.md)
- [RetirementFundAccountAu](docs/Model/RetirementFundAccountAu.md)
- [SkillQuery](docs/Model/SkillQuery.md)
- [SuperannuationDetails](docs/Model/SuperannuationDetails.md)
- [TaxDetailsAu](docs/Model/TaxDetailsAu.md)
- [UnprocessableEntity](docs/Model/UnprocessableEntity.md)
- [UnprocessableEntityExtended](docs/Model/UnprocessableEntityExtended.md)
- [User](docs/Model/User.md)
- [UserCreationTemplate](docs/Model/UserCreationTemplate.md)
- [UserCreationTemplateProperties](docs/Model/UserCreationTemplateProperties.md)
- [UserEvents](docs/Model/UserEvents.md)
- [UserV2](docs/Model/UserV2.md)
- [UserV2Value](docs/Model/UserV2Value.md)
- [WithholdingDetailsAu](docs/Model/WithholdingDetailsAu.md)

## About this package

This package is generated by [OpenAPI Generator](https://openapi-generator.tech). Do not edit it by hand.

- API version: `v1-rc3`
- Package version: `0.1.0`
- Generator version: `7.16.0`
