<?php

// Hand-written; lives in wrappers/php and is copied into lib/ by scripts/generate.sh.

namespace Elmo\UserApi;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * One-line entry point: `$elmo = new ElmoClient($id, $secret);` then `$elmo->users->getUserCollection()`.
 * Fetches the OAuth2 client-credentials token on the first request and refetches it shortly before expiry.
 */
final class ElmoClient
{
    public readonly Api\CandidatesApi $candidates;
    public readonly Api\DepartmentsApi $departments;
    public readonly Api\EmployeesApi $employees;
    public readonly Api\LeaveRequestsApi $leaveRequests;
    public readonly Api\LeaveTypesApi $leaveTypes;
    public readonly Api\LegalEntitiesApi $legalEntities;
    public readonly Api\LocationsApi $locations;
    public readonly Api\MetadataApi $metadata;
    public readonly Api\OnboardingUserEventsApi $onboardingUserEvents;
    public readonly Api\OnboardingUsersApi $onboardingUsers;
    public readonly Api\PayrollCyclesApi $payrollCycles;
    public readonly Api\PositionsApi $positions;
    public readonly Api\UserEventsApi $userEvents;
    public readonly Api\UsersApi $users;

    public function __construct(string $clientId, string $clientSecret, ?string $host = null, ?ClientInterface $http = null)
    {
        $http ??= new Client();
        // new, not getDefaultConfiguration(): that is a static singleton shared by every client.
        $tokenConfig = new Configuration();
        if ($host !== null) {
            $tokenConfig->setHost($host);
        }
        $oauth = new Api\OAuth20Api($http, $tokenConfig);

        // Generated APIs call getAccessToken() on every request, so overriding it gives lazy refresh.
        $config = new class ($oauth, $clientId, $clientSecret) extends Configuration {
            private ?string $token = null;
            private int $expiresAt = 0;

            public function __construct(
                private readonly Api\OAuth20Api $oauth,
                private readonly string $clientId,
                private readonly string $clientSecret,
            ) {
                parent::__construct();
            }

            public function getAccessToken()
            {
                if ($this->token === null || time() >= $this->expiresAt) {
                    $t = $this->oauth->getOauthAccessToken('client_credentials', $this->clientId, $this->clientSecret);
                    if (!$t instanceof Model\OauthToken) {
                        throw new ApiException('Token request failed: ' . $t);
                    }
                    $this->token = $t->getAccessToken();
                    $this->expiresAt = time() + $t->getExpiresIn() - 60;
                }
                return $this->token;
            }
        };
        $config->setHost($tokenConfig->getHost());

        $this->candidates = new Api\CandidatesApi($http, $config);
        $this->departments = new Api\DepartmentsApi($http, $config);
        $this->employees = new Api\EmployeesApi($http, $config);
        $this->leaveRequests = new Api\LeaveRequestsApi($http, $config);
        $this->leaveTypes = new Api\LeaveTypesApi($http, $config);
        $this->legalEntities = new Api\LegalEntitiesApi($http, $config);
        $this->locations = new Api\LocationsApi($http, $config);
        $this->metadata = new Api\MetadataApi($http, $config);
        $this->onboardingUserEvents = new Api\OnboardingUserEventsApi($http, $config);
        $this->onboardingUsers = new Api\OnboardingUsersApi($http, $config);
        $this->payrollCycles = new Api\PayrollCyclesApi($http, $config);
        $this->positions = new Api\PositionsApi($http, $config);
        $this->userEvents = new Api\UserEventsApi($http, $config);
        $this->users = new Api\UsersApi($http, $config);
    }
}
