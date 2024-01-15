# OpenAPIClient-php

Ziqni Application Services are used to manage and configure spaces.

For more information, please visit [https://www.ziqni.com/](https://www.ziqni.com/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteAccountMessages($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountMessagesApi->deleteAccountMessages: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ziqni.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountMessagesApi* | [**deleteAccountMessages**](docs/Api/AccountMessagesApi.md#deleteaccountmessages) | **DELETE** /account-messages | 
*AccountMessagesApi* | [**deleteAccountMessagesByQuery**](docs/Api/AccountMessagesApi.md#deleteaccountmessagesbyquery) | **POST** /account-messages/delete | 
*AccountMessagesApi* | [**getAccountMessages**](docs/Api/AccountMessagesApi.md#getaccountmessages) | **GET** /account-messages | 
*AccountMessagesApi* | [**getAccountMessagesByQuery**](docs/Api/AccountMessagesApi.md#getaccountmessagesbyquery) | **POST** /account-messages/query | 
*AchievementsApi* | [**createAchievements**](docs/Api/AchievementsApi.md#createachievements) | **POST** /achievements | Create Achievements
*AchievementsApi* | [**deleteAchievements**](docs/Api/AchievementsApi.md#deleteachievements) | **DELETE** /achievements | Delete Achievements
*AchievementsApi* | [**deleteAchievementsByQuery**](docs/Api/AchievementsApi.md#deleteachievementsbyquery) | **POST** /achievements/delete | 
*AchievementsApi* | [**getAchievementToClone**](docs/Api/AchievementsApi.md#getachievementtoclone) | **GET** /achievements/{id}/clone | 
*AchievementsApi* | [**getAchievements**](docs/Api/AchievementsApi.md#getachievements) | **GET** /achievements | Get Achievements
*AchievementsApi* | [**getAchievementsByQuery**](docs/Api/AchievementsApi.md#getachievementsbyquery) | **POST** /achievements/query | 
*AchievementsApi* | [**getAntecendentsForAchievement**](docs/Api/AchievementsApi.md#getantecendentsforachievement) | **GET** /achievements/{id}/antecedents | NOT AVAILABLE IN CURRENT RELEASE
*AchievementsApi* | [**getIssuedAchievementsCountById**](docs/Api/AchievementsApi.md#getissuedachievementscountbyid) | **GET** /achievements/{id}/issued | 
*AchievementsApi* | [**getMembersAchievementsDetails**](docs/Api/AchievementsApi.md#getmembersachievementsdetails) | **GET** /achievements/{id}/members | 
*AchievementsApi* | [**updateAchievements**](docs/Api/AchievementsApi.md#updateachievements) | **PUT** /achievements | Update Achievements
*AchievementsApi* | [**updateAchievementsLiveStatus**](docs/Api/AchievementsApi.md#updateachievementslivestatus) | **PUT** /achievements/state | 
*ActionTypesApi* | [**createActionTypes**](docs/Api/ActionTypesApi.md#createactiontypes) | **POST** /action-types | Create action types
*ActionTypesApi* | [**deleteActionTypes**](docs/Api/ActionTypesApi.md#deleteactiontypes) | **DELETE** /action-types | Delete action types
*ActionTypesApi* | [**deleteActionTypesByQuery**](docs/Api/ActionTypesApi.md#deleteactiontypesbyquery) | **POST** /action-types/delete | Delete action types by query
*ActionTypesApi* | [**getActionTypes**](docs/Api/ActionTypesApi.md#getactiontypes) | **GET** /action-types | Get action types
*ActionTypesApi* | [**getActionTypesByQuery**](docs/Api/ActionTypesApi.md#getactiontypesbyquery) | **POST** /action-types/query | Get action types by query
*ActionTypesApi* | [**updateActionTypes**](docs/Api/ActionTypesApi.md#updateactiontypes) | **PUT** /action-types | Update action types
*ApiKeysApi* | [**createApiKeys**](docs/Api/ApiKeysApi.md#createapikeys) | **POST** /api-keys | Delete api keys
*ApiKeysApi* | [**deleteApiKeys**](docs/Api/ApiKeysApi.md#deleteapikeys) | **DELETE** /api-keys | Delete api keys
*ApiKeysApi* | [**deleteApiKeysById**](docs/Api/ApiKeysApi.md#deleteapikeysbyid) | **DELETE** /api-keys/{id} | Delete api keys by id
*ApiKeysApi* | [**deleteApiKeysByQuery**](docs/Api/ApiKeysApi.md#deleteapikeysbyquery) | **POST** /api-keys/delete | Delete api keys by query
*ApiKeysApi* | [**getApiKeys**](docs/Api/ApiKeysApi.md#getapikeys) | **GET** /api-keys | Get api keys
*ApiKeysApi* | [**getApiKeysById**](docs/Api/ApiKeysApi.md#getapikeysbyid) | **GET** /api-keys/{id} | Get api keys by id
*ApiKeysApi* | [**getApiKeysByQuery**](docs/Api/ApiKeysApi.md#getapikeysbyquery) | **POST** /api-keys/query | Get api keys by query
*ApiKeysApi* | [**updateApiKeys**](docs/Api/ApiKeysApi.md#updateapikeys) | **PUT** /api-keys | Update api keys
*AwardsApi* | [**claimAwards**](docs/Api/AwardsApi.md#claimawards) | **PUT** /awards/claim | 
*AwardsApi* | [**getAwards**](docs/Api/AwardsApi.md#getawards) | **GET** /awards | 
*AwardsApi* | [**getAwardsByQuery**](docs/Api/AwardsApi.md#getawardsbyquery) | **POST** /awards/query | 
*CollaboratorsApi* | [**createCollaborators**](docs/Api/CollaboratorsApi.md#createcollaborators) | **POST** /collaborators | 
*CollaboratorsApi* | [**deleteCollaborators**](docs/Api/CollaboratorsApi.md#deletecollaborators) | **DELETE** /collaborators | 
*CollaboratorsApi* | [**getAvailableRolesForCollaborators**](docs/Api/CollaboratorsApi.md#getavailablerolesforcollaborators) | **GET** /collaborators/available-roles | 
*CollaboratorsApi* | [**getCollaborators**](docs/Api/CollaboratorsApi.md#getcollaborators) | **GET** /collaborators | 
*CollaboratorsApi* | [**updateCollaborators**](docs/Api/CollaboratorsApi.md#updatecollaborators) | **PUT** /collaborators | 
*CompetitionsApi* | [**createCompetitions**](docs/Api/CompetitionsApi.md#createcompetitions) | **POST** /competitions | 
*CompetitionsApi* | [**createSimpleCompetitions**](docs/Api/CompetitionsApi.md#createsimplecompetitions) | **POST** /competitions/simple | 
*CompetitionsApi* | [**getCompetitions**](docs/Api/CompetitionsApi.md#getcompetitions) | **GET** /competitions | 
*CompetitionsApi* | [**getCompetitionsByQuery**](docs/Api/CompetitionsApi.md#getcompetitionsbyquery) | **POST** /competitions/query | 
*CompetitionsApi* | [**getCompetitionsToClone**](docs/Api/CompetitionsApi.md#getcompetitionstoclone) | **GET** /competitions/{id}/clone | Get Competition To Clone
*CompetitionsApi* | [**getLeaderboardByCompetitionId**](docs/Api/CompetitionsApi.md#getleaderboardbycompetitionid) | **GET** /competitions/{id}/leaderboard | 
*CompetitionsApi* | [**updateCompetitions**](docs/Api/CompetitionsApi.md#updatecompetitions) | **PUT** /competitions | 
*CompetitionsApi* | [**updateCompetitionsState**](docs/Api/CompetitionsApi.md#updatecompetitionsstate) | **PUT** /competitions/state | 
*ComputeEngineApi* | [**createComputeEngines**](docs/Api/ComputeEngineApi.md#createcomputeengines) | **POST** /compute-engines | 
*ComputeEngineApi* | [**deleteComputeEnginesById**](docs/Api/ComputeEngineApi.md#deletecomputeenginesbyid) | **DELETE** /compute-engines/{id} | 
*ComputeEngineApi* | [**deleteComputeEnginesByQuery**](docs/Api/ComputeEngineApi.md#deletecomputeenginesbyquery) | **POST** /compute-engines/delete | 
*ComputeEngineApi* | [**getComputeEngines**](docs/Api/ComputeEngineApi.md#getcomputeengines) | **GET** /compute-engines | 
*ComputeEngineApi* | [**getComputeEnginesById**](docs/Api/ComputeEngineApi.md#getcomputeenginesbyid) | **GET** /compute-engines/{id} | 
*ComputeEngineApi* | [**getComputeEnginesByQuery**](docs/Api/ComputeEngineApi.md#getcomputeenginesbyquery) | **POST** /compute-engines/query | 
*ComputeEngineApi* | [**updateComputeEngines**](docs/Api/ComputeEngineApi.md#updatecomputeengines) | **PUT** /compute-engines | 
*ConnectionsApi* | [**createConnections**](docs/Api/ConnectionsApi.md#createconnections) | **POST** /connections | 
*ConnectionsApi* | [**deleteConnections**](docs/Api/ConnectionsApi.md#deleteconnections) | **DELETE** /connections | 
*ConnectionsApi* | [**deleteConnectionsByQuery**](docs/Api/ConnectionsApi.md#deleteconnectionsbyquery) | **POST** /connections/delete | 
*ConnectionsApi* | [**describeConnectionObject**](docs/Api/ConnectionsApi.md#describeconnectionobject) | **GET** /connections/_describe | 
*ConnectionsApi* | [**getConnections**](docs/Api/ConnectionsApi.md#getconnections) | **GET** /connections | 
*ConnectionsApi* | [**getConnectionsByQuery**](docs/Api/ConnectionsApi.md#getconnectionsbyquery) | **POST** /connections/query | 
*ConnectionsApi* | [**updateConnections**](docs/Api/ConnectionsApi.md#updateconnections) | **PUT** /connections | 
*ConnectionsApi* | [**updateConnectionsState**](docs/Api/ConnectionsApi.md#updateconnectionsstate) | **POST** /connections/state | Update connection status
*ContestsApi* | [**createContests**](docs/Api/ContestsApi.md#createcontests) | **POST** /contests | 
*ContestsApi* | [**getContests**](docs/Api/ContestsApi.md#getcontests) | **GET** /contests | 
*ContestsApi* | [**getContestsByQuery**](docs/Api/ContestsApi.md#getcontestsbyquery) | **POST** /contests/query | 
*ContestsApi* | [**getContestsLeaderboardById**](docs/Api/ContestsApi.md#getcontestsleaderboardbyid) | **GET** /contests/{id}/leaderboard | 
*ContestsApi* | [**getContestsToClone**](docs/Api/ContestsApi.md#getconteststoclone) | **GET** /contests/{id}/clone | 
*ContestsApi* | [**updateContest**](docs/Api/ContestsApi.md#updatecontest) | **PUT** /contests | 
*ContestsApi* | [**updateContestsState**](docs/Api/ContestsApi.md#updatecontestsstate) | **PUT** /contests/state | 
*CustomFieldsApi* | [**createCustomFields**](docs/Api/CustomFieldsApi.md#createcustomfields) | **POST** /custom-fields | Create custom fields
*CustomFieldsApi* | [**deleteCustomFields**](docs/Api/CustomFieldsApi.md#deletecustomfields) | **DELETE** /custom-fields | Delete custom fields
*CustomFieldsApi* | [**deleteCustomFieldsByQuery**](docs/Api/CustomFieldsApi.md#deletecustomfieldsbyquery) | **POST** /custom-fields/delete | Delete custom fields by query
*CustomFieldsApi* | [**getCustomFields**](docs/Api/CustomFieldsApi.md#getcustomfields) | **GET** /custom-fields | Get custom fields
*CustomFieldsApi* | [**getCustomFieldsByQuery**](docs/Api/CustomFieldsApi.md#getcustomfieldsbyquery) | **POST** /custom-fields/query | Get custom fields by query
*CustomFieldsApi* | [**updateCustomFields**](docs/Api/CustomFieldsApi.md#updatecustomfields) | **PUT** /custom-fields | Update custom fields
*DefaultApi* | [**deleteSpace**](docs/Api/DefaultApi.md#deletespace) | **DELETE** /spaces | NOT AVAILABLE IN CURRENT RELEASE
*DefaultApi* | [**unsubscribeFromEntityChanges**](docs/Api/DefaultApi.md#unsubscribefromentitychanges) | **DELETE** /entity-changes | 
*EntityChangesApi* | [**manageEntityChangeSubscription**](docs/Api/EntityChangesApi.md#manageentitychangesubscription) | **POST** /entity-changes | 
*EntrantsApi* | [**exportEntrantsByQuery**](docs/Api/EntrantsApi.md#exportentrantsbyquery) | **POST** /entrants/export | Get entrants by query
*EntrantsApi* | [**getEntrantsByQuery**](docs/Api/EntrantsApi.md#getentrantsbyquery) | **POST** /entrants/query | Get entrants by query
*EntrantsApi* | [**updateEntrants**](docs/Api/EntrantsApi.md#updateentrants) | **POST** /entrants | 
*EventsApi* | [**createEvents**](docs/Api/EventsApi.md#createevents) | **POST** /events | 
*EventsApi* | [**getEvents**](docs/Api/EventsApi.md#getevents) | **GET** /events | 
*EventsApi* | [**getEventsByQuery**](docs/Api/EventsApi.md#geteventsbyquery) | **POST** /events/query | 
*FileObjectsApi* | [**createFileObjects**](docs/Api/FileObjectsApi.md#createfileobjects) | **POST** /file-objects | 
*FileObjectsApi* | [**deleteFileObjects**](docs/Api/FileObjectsApi.md#deletefileobjects) | **DELETE** /file-objects | 
*FileObjectsApi* | [**deleteFileObjectsByQuery**](docs/Api/FileObjectsApi.md#deletefileobjectsbyquery) | **POST** /file-objects/delete | 
*FileObjectsApi* | [**downloadFileObjects**](docs/Api/FileObjectsApi.md#downloadfileobjects) | **GET** /file-objects/download | 
*FileObjectsApi* | [**getFileObjects**](docs/Api/FileObjectsApi.md#getfileobjects) | **GET** /file-objects | 
*FileObjectsApi* | [**getFileObjectsByQuery**](docs/Api/FileObjectsApi.md#getfileobjectsbyquery) | **POST** /file-objects/query | 
*FileObjectsApi* | [**saveTemplates**](docs/Api/FileObjectsApi.md#savetemplates) | **POST** /file-objects/save-template | 
*FileObjectsApi* | [**updateFileObjects**](docs/Api/FileObjectsApi.md#updatefileobjects) | **PUT** /file-objects | 
*FileObjectsApi* | [**uploadFileObjects**](docs/Api/FileObjectsApi.md#uploadfileobjects) | **POST** /file-objects/upload | 
*FileRepositoriesApi* | [**createFileRepositories**](docs/Api/FileRepositoriesApi.md#createfilerepositories) | **POST** /file-repositories | 
*FileRepositoriesApi* | [**deleteFileRepositories**](docs/Api/FileRepositoriesApi.md#deletefilerepositories) | **DELETE** /file-repositories | 
*FileRepositoriesApi* | [**deleteFileRepositoriesByQuery**](docs/Api/FileRepositoriesApi.md#deletefilerepositoriesbyquery) | **POST** /file-repositories/delete | 
*FileRepositoriesApi* | [**getFileRepositories**](docs/Api/FileRepositoriesApi.md#getfilerepositories) | **GET** /file-repositories | 
*FileRepositoriesApi* | [**getFileRepositoriesByQuery**](docs/Api/FileRepositoriesApi.md#getfilerepositoriesbyquery) | **POST** /file-repositories/query | 
*FileRepositoriesApi* | [**updateFileRepositories**](docs/Api/FileRepositoriesApi.md#updatefilerepositories) | **PUT** /file-repositories | 
*GraphsApi* | [**getGraph**](docs/Api/GraphsApi.md#getgraph) | **POST** /graphs | Get achievements by member reference id
*InstantWinsApi* | [**createInstantWins**](docs/Api/InstantWinsApi.md#createinstantwins) | **POST** /instant-wins | Create instant wins
*InstantWinsApi* | [**deleteInstantWins**](docs/Api/InstantWinsApi.md#deleteinstantwins) | **DELETE** /instant-wins | Delete instant wins
*InstantWinsApi* | [**deleteInstantWinsByQuery**](docs/Api/InstantWinsApi.md#deleteinstantwinsbyquery) | **POST** /instant-wins/delete | Delete instant-wins by query
*InstantWinsApi* | [**getInstantWins**](docs/Api/InstantWinsApi.md#getinstantwins) | **GET** /instant-wins | Get instant wins
*InstantWinsApi* | [**getInstantWinsByQuery**](docs/Api/InstantWinsApi.md#getinstantwinsbyquery) | **POST** /instant-wins/query | Get instant wins by query
*InstantWinsApi* | [**updateInstantWins**](docs/Api/InstantWinsApi.md#updateinstantwins) | **PUT** /instant-wins | Update instant wins
*LanguagesApi* | [**createLanguages**](docs/Api/LanguagesApi.md#createlanguages) | **POST** /languages | 
*LanguagesApi* | [**deleteLanguages**](docs/Api/LanguagesApi.md#deletelanguages) | **DELETE** /languages | 
*LanguagesApi* | [**deleteLanguagesByQuery**](docs/Api/LanguagesApi.md#deletelanguagesbyquery) | **POST** /languages/delete | 
*LanguagesApi* | [**getLanguages**](docs/Api/LanguagesApi.md#getlanguages) | **GET** /languages | 
*LanguagesApi* | [**getLanguagesByQuery**](docs/Api/LanguagesApi.md#getlanguagesbyquery) | **POST** /languages/query | 
*LanguagesApi* | [**getListOfAllLanguages**](docs/Api/LanguagesApi.md#getlistofalllanguages) | **GET** /languages/available | 
*LanguagesApi* | [**updateLanguages**](docs/Api/LanguagesApi.md#updatelanguages) | **PUT** /languages | 
*LeaderboardApi* | [**getLeaderboardById**](docs/Api/LeaderboardApi.md#getleaderboardbyid) | **GET** /leaderboard | 
*LogEventsApi* | [**getLogEventsByQuery**](docs/Api/LogEventsApi.md#getlogeventsbyquery) | **POST** /log-events/query | 
*MemberMessagesApi* | [**createMemberMessages**](docs/Api/MemberMessagesApi.md#createmembermessages) | **POST** /member-messages | 
*MemberMessagesApi* | [**deleteMemberMessages**](docs/Api/MemberMessagesApi.md#deletemembermessages) | **DELETE** /member-messages | 
*MemberMessagesApi* | [**deleteMemberMessagesByQuery**](docs/Api/MemberMessagesApi.md#deletemembermessagesbyquery) | **POST** /member-messages/delete | 
*MemberMessagesApi* | [**getMemberMessages**](docs/Api/MemberMessagesApi.md#getmembermessages) | **GET** /member-messages | 
*MemberMessagesApi* | [**getMemberMessagesByQuery**](docs/Api/MemberMessagesApi.md#getmembermessagesbyquery) | **POST** /member-messages/query | 
*MemberTokenApi* | [**createMemberToken**](docs/Api/MemberTokenApi.md#createmembertoken) | **POST** /member-token | 
*MembersApi* | [**createMembers**](docs/Api/MembersApi.md#createmembers) | **POST** /members | Create members
*MembersApi* | [**deleteMembers**](docs/Api/MembersApi.md#deletemembers) | **DELETE** /members | Delete members
*MembersApi* | [**deleteMembersByQuery**](docs/Api/MembersApi.md#deletemembersbyquery) | **POST** /members/delete | Delete members by query
*MembersApi* | [**getMembers**](docs/Api/MembersApi.md#getmembers) | **GET** /members | Get members
*MembersApi* | [**getMembersByQuery**](docs/Api/MembersApi.md#getmembersbyquery) | **POST** /members/query | Get members by query
*MembersApi* | [**getMembersByRefId**](docs/Api/MembersApi.md#getmembersbyrefid) | **GET** /members/find-by-ref-identifiers | Get members by reference ids
*MembersApi* | [**updateMembers**](docs/Api/MembersApi.md#updatemembers) | **PUT** /members | Update members
*NotificationsApi* | [**createNotifications**](docs/Api/NotificationsApi.md#createnotifications) | **POST** /notifications | 
*NotificationsApi* | [**deleteNotifications**](docs/Api/NotificationsApi.md#deletenotifications) | **DELETE** /notifications | 
*NotificationsApi* | [**deleteNotificationsByQuery**](docs/Api/NotificationsApi.md#deletenotificationsbyquery) | **POST** /notifications/delete | 
*NotificationsApi* | [**getNotifications**](docs/Api/NotificationsApi.md#getnotifications) | **GET** /notifications | 
*NotificationsApi* | [**getNotificationsByQuery**](docs/Api/NotificationsApi.md#getnotificationsbyquery) | **POST** /notifications/query | 
*ProductsApi* | [**createProducts**](docs/Api/ProductsApi.md#createproducts) | **POST** /products | Create products
*ProductsApi* | [**deleteProducts**](docs/Api/ProductsApi.md#deleteproducts) | **DELETE** /products | Delete products
*ProductsApi* | [**deleteProductsByQuery**](docs/Api/ProductsApi.md#deleteproductsbyquery) | **POST** /products/delete | Delete products by query
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /products | Get products
*ProductsApi* | [**getProductsByQuery**](docs/Api/ProductsApi.md#getproductsbyquery) | **POST** /products/query | Get products by query
*ProductsApi* | [**getProductsByRefId**](docs/Api/ProductsApi.md#getproductsbyrefid) | **GET** /products/find-by-ref-identifiers/ | Get products by reference ids
*ProductsApi* | [**updateProducts**](docs/Api/ProductsApi.md#updateproducts) | **PUT** /products | Update products
*RewardTypesApi* | [**createRewardTypes**](docs/Api/RewardTypesApi.md#createrewardtypes) | **POST** /reward-types | Create reward types
*RewardTypesApi* | [**deleteRewardTypes**](docs/Api/RewardTypesApi.md#deleterewardtypes) | **DELETE** /reward-types | Delete reward types
*RewardTypesApi* | [**deleteRewardTypesByQuery**](docs/Api/RewardTypesApi.md#deleterewardtypesbyquery) | **POST** /reward-types/delete | Delete reward types by query
*RewardTypesApi* | [**getRewardTypes**](docs/Api/RewardTypesApi.md#getrewardtypes) | **GET** /reward-types | Get reward types
*RewardTypesApi* | [**getRewardTypesByQuery**](docs/Api/RewardTypesApi.md#getrewardtypesbyquery) | **POST** /reward-types/query | Get reward types by query
*RewardTypesApi* | [**updateRewardTypes**](docs/Api/RewardTypesApi.md#updaterewardtypes) | **PUT** /reward-types | Update Reward Types
*RewardsApi* | [**createRewards**](docs/Api/RewardsApi.md#createrewards) | **POST** /rewards | 
*RewardsApi* | [**deleteRewards**](docs/Api/RewardsApi.md#deleterewards) | **DELETE** /rewards | 
*RewardsApi* | [**deleteRewardsByQuery**](docs/Api/RewardsApi.md#deleterewardsbyquery) | **POST** /rewards/delete | 
*RewardsApi* | [**getRewards**](docs/Api/RewardsApi.md#getrewards) | **GET** /rewards | 
*RewardsApi* | [**getRewardsByQuery**](docs/Api/RewardsApi.md#getrewardsbyquery) | **POST** /rewards/query | 
*RewardsApi* | [**updateRewards**](docs/Api/RewardsApi.md#updaterewards) | **PUT** /rewards | 
*RulesApi* | [**deleteRulesByQuery**](docs/Api/RulesApi.md#deleterulesbyquery) | **POST** /rules/delete | 
*RulesApi* | [**getRuleSchemas**](docs/Api/RulesApi.md#getruleschemas) | **GET** /rules/schema | 
*RulesApi* | [**getRules**](docs/Api/RulesApi.md#getrules) | **GET** /rules | 
*RulesApi* | [**getRulesByQuery**](docs/Api/RulesApi.md#getrulesbyquery) | **POST** /rules/query | 
*RulesApi* | [**lookupOperandsRules**](docs/Api/RulesApi.md#lookupoperandsrules) | **POST** /rules/operand-lookup | 
*RulesApi* | [**updateRules**](docs/Api/RulesApi.md#updaterules) | **PUT** /rules | 
*RulesApi* | [**validateRules**](docs/Api/RulesApi.md#validaterules) | **POST** /rules/validate | 
*SpacesApi* | [**createSpace**](docs/Api/SpacesApi.md#createspace) | **POST** /spaces | 
*SpacesApi* | [**deleteSpaces**](docs/Api/SpacesApi.md#deletespaces) | **DELETE** /spaces/{spaceName} | NOT AVAILABLE IN CURRENT RELEASE
*SpacesApi* | [**getSpaceInfromation**](docs/Api/SpacesApi.md#getspaceinfromation) | **GET** /spaces | 
*SpacesApi* | [**getSpacesByName**](docs/Api/SpacesApi.md#getspacesbyname) | **GET** /spaces/{spaceName} | 
*SpacesApi* | [**updateSpace**](docs/Api/SpacesApi.md#updatespace) | **PUT** /spaces | 
*TagsApi* | [**createTags**](docs/Api/TagsApi.md#createtags) | **POST** /tags | Create tags
*TagsApi* | [**deleteTags**](docs/Api/TagsApi.md#deletetags) | **DELETE** /tags | Delete tags
*TagsApi* | [**deleteTagsByQuery**](docs/Api/TagsApi.md#deletetagsbyquery) | **POST** /tags/delete | Delete tags by query
*TagsApi* | [**getTags**](docs/Api/TagsApi.md#gettags) | **GET** /tags | Get tags
*TagsApi* | [**getTagsByQuery**](docs/Api/TagsApi.md#gettagsbyquery) | **POST** /tags/query | Get tags by query
*TagsApi* | [**updateTags**](docs/Api/TagsApi.md#updatetags) | **PUT** /tags | Update tags
*TransformersApi* | [**createTransformers**](docs/Api/TransformersApi.md#createtransformers) | **POST** /transformers | 
*TransformersApi* | [**deleteTransformers**](docs/Api/TransformersApi.md#deletetransformers) | **DELETE** /transformers | 
*TransformersApi* | [**deleteTransformersByQuery**](docs/Api/TransformersApi.md#deletetransformersbyquery) | **POST** /transformers/delete | 
*TransformersApi* | [**getTransformers**](docs/Api/TransformersApi.md#gettransformers) | **GET** /transformers | 
*TransformersApi* | [**getTransformersByQuery**](docs/Api/TransformersApi.md#gettransformersbyquery) | **POST** /transformers/query | 
*TransformersApi* | [**updateTransformers**](docs/Api/TransformersApi.md#updatetransformers) | **PUT** /transformers | 
*TranslationsApi* | [**createTranslations**](docs/Api/TranslationsApi.md#createtranslations) | **POST** /translations | creating a translation
*TranslationsApi* | [**deleteTranslations**](docs/Api/TranslationsApi.md#deletetranslations) | **DELETE** /translations | 
*TranslationsApi* | [**deleteTranslationsByQuery**](docs/Api/TranslationsApi.md#deletetranslationsbyquery) | **POST** /translations/delete | Delete translations by query
*TranslationsApi* | [**getTranslations**](docs/Api/TranslationsApi.md#gettranslations) | **GET** /translations | 
*TranslationsApi* | [**getTranslationsByEntityId**](docs/Api/TranslationsApi.md#gettranslationsbyentityid) | **GET** /translations/find-by-entity-id | 
*TranslationsApi* | [**getTranslationsByQuery**](docs/Api/TranslationsApi.md#gettranslationsbyquery) | **POST** /translations/query | 
*TranslationsApi* | [**updateTranslations**](docs/Api/TranslationsApi.md#updatetranslations) | **PUT** /translations | 
*UnitsOfMeasureApi* | [**createUnitsOfMeasure**](docs/Api/UnitsOfMeasureApi.md#createunitsofmeasure) | **POST** /units-of-measure | 
*UnitsOfMeasureApi* | [**deleteUnitsOfMeasure**](docs/Api/UnitsOfMeasureApi.md#deleteunitsofmeasure) | **DELETE** /units-of-measure | 
*UnitsOfMeasureApi* | [**deleteUnitsOfMeasureByQuery**](docs/Api/UnitsOfMeasureApi.md#deleteunitsofmeasurebyquery) | **POST** /units-of-measure/delete | Delete units of measure by query
*UnitsOfMeasureApi* | [**getUnitsOfMeasure**](docs/Api/UnitsOfMeasureApi.md#getunitsofmeasure) | **GET** /units-of-measure | 
*UnitsOfMeasureApi* | [**getUnitsOfMeasureByQuery**](docs/Api/UnitsOfMeasureApi.md#getunitsofmeasurebyquery) | **POST** /units-of-measure/query | 
*UnitsOfMeasureApi* | [**updateUnitsOfMeasure**](docs/Api/UnitsOfMeasureApi.md#updateunitsofmeasure) | **PUT** /units-of-measure | 
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /user | 
*WebhooksApi* | [**createWebhooks**](docs/Api/WebhooksApi.md#createwebhooks) | **POST** /webhooks | 
*WebhooksApi* | [**deleteWebhooks**](docs/Api/WebhooksApi.md#deletewebhooks) | **DELETE** /webhooks | 
*WebhooksApi* | [**deleteWebhooksByQuery**](docs/Api/WebhooksApi.md#deletewebhooksbyquery) | **POST** /webhooks/delete | Delete webhooks by query
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | 
*WebhooksApi* | [**getWebhooksByQuery**](docs/Api/WebhooksApi.md#getwebhooksbyquery) | **POST** /webhooks/query | 
*WebhooksApi* | [**getWebhooksTriggers**](docs/Api/WebhooksApi.md#getwebhookstriggers) | **GET** /webhooks/triggers | 
*WebhooksApi* | [**updateWebhooks**](docs/Api/WebhooksApi.md#updatewebhooks) | **PUT** /webhooks | 

## Models

- [AccountMessage](docs/Model/AccountMessage.md)
- [AccountMessageResponse](docs/Model/AccountMessageResponse.md)
- [Achievement](docs/Model/Achievement.md)
- [AchievementIssuedCount](docs/Model/AchievementIssuedCount.md)
- [AchievementIssuedResponse](docs/Model/AchievementIssuedResponse.md)
- [AchievementLiveStatus](docs/Model/AchievementLiveStatus.md)
- [AchievementLiveStatusRequest](docs/Model/AchievementLiveStatusRequest.md)
- [AchievementReduced](docs/Model/AchievementReduced.md)
- [AchievementReducedResponse](docs/Model/AchievementReducedResponse.md)
- [AchievementResponse](docs/Model/AchievementResponse.md)
- [AchievementStatus](docs/Model/AchievementStatus.md)
- [AchievementStrategies](docs/Model/AchievementStrategies.md)
- [ActionType](docs/Model/ActionType.md)
- [ActionTypeAdjustmentFactor](docs/Model/ActionTypeAdjustmentFactor.md)
- [ActionTypeResponse](docs/Model/ActionTypeResponse.md)
- [ApiKey](docs/Model/ApiKey.md)
- [ApiKeyResponse](docs/Model/ApiKeyResponse.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [AppliesTo](docs/Model/AppliesTo.md)
- [AvailableLanguageResponse](docs/Model/AvailableLanguageResponse.md)
- [Award](docs/Model/Award.md)
- [AwardResponse](docs/Model/AwardResponse.md)
- [Bracket](docs/Model/Bracket.md)
- [BracketResponse](docs/Model/BracketResponse.md)
- [ChangePasswordRequest](docs/Model/ChangePasswordRequest.md)
- [ClaimAwardRequest](docs/Model/ClaimAwardRequest.md)
- [CloneAchievementResponse](docs/Model/CloneAchievementResponse.md)
- [CloneCompetitionResponse](docs/Model/CloneCompetitionResponse.md)
- [CloneContestResponse](docs/Model/CloneContestResponse.md)
- [Collaborator](docs/Model/Collaborator.md)
- [CollaboratorResponse](docs/Model/CollaboratorResponse.md)
- [CollaboratorRolesAvailable](docs/Model/CollaboratorRolesAvailable.md)
- [CollaboratorRolesResponse](docs/Model/CollaboratorRolesResponse.md)
- [Competition](docs/Model/Competition.md)
- [CompetitionLeaderboardResponse](docs/Model/CompetitionLeaderboardResponse.md)
- [CompetitionReduced](docs/Model/CompetitionReduced.md)
- [CompetitionReducedResponse](docs/Model/CompetitionReducedResponse.md)
- [CompetitionResponse](docs/Model/CompetitionResponse.md)
- [CompetitionStatus](docs/Model/CompetitionStatus.md)
- [CompetitionStatusActions](docs/Model/CompetitionStatusActions.md)
- [CompetitionType](docs/Model/CompetitionType.md)
- [ComputeEngine](docs/Model/ComputeEngine.md)
- [ComputeEngineResponse](docs/Model/ComputeEngineResponse.md)
- [Condition](docs/Model/Condition.md)
- [ConditionalOperator](docs/Model/ConditionalOperator.md)
- [Connection](docs/Model/Connection.md)
- [ConnectionResponse](docs/Model/ConnectionResponse.md)
- [ConnectionState](docs/Model/ConnectionState.md)
- [ConnectionType](docs/Model/ConnectionType.md)
- [Contest](docs/Model/Contest.md)
- [ContestLeaderboardResponse](docs/Model/ContestLeaderboardResponse.md)
- [ContestReduced](docs/Model/ContestReduced.md)
- [ContestReducedResponse](docs/Model/ContestReducedResponse.md)
- [ContestResponse](docs/Model/ContestResponse.md)
- [ContestStateOperations](docs/Model/ContestStateOperations.md)
- [ContestStatus](docs/Model/ContestStatus.md)
- [CountResponse](docs/Model/CountResponse.md)
- [CreateAchievementRequest](docs/Model/CreateAchievementRequest.md)
- [CreateActionTypeRequest](docs/Model/CreateActionTypeRequest.md)
- [CreateApiKeyRequest](docs/Model/CreateApiKeyRequest.md)
- [CreateCollaboratorRequest](docs/Model/CreateCollaboratorRequest.md)
- [CreateCompetitionRequest](docs/Model/CreateCompetitionRequest.md)
- [CreateComputeEngineRequest](docs/Model/CreateComputeEngineRequest.md)
- [CreateConnectionRequest](docs/Model/CreateConnectionRequest.md)
- [CreateContestForCompetitionRequest](docs/Model/CreateContestForCompetitionRequest.md)
- [CreateContestRequest](docs/Model/CreateContestRequest.md)
- [CreateCustomFieldRequest](docs/Model/CreateCustomFieldRequest.md)
- [CreateEntityRewardRequest](docs/Model/CreateEntityRewardRequest.md)
- [CreateEventRequest](docs/Model/CreateEventRequest.md)
- [CreateFileObjectRequest](docs/Model/CreateFileObjectRequest.md)
- [CreateInstantWinRequest](docs/Model/CreateInstantWinRequest.md)
- [CreateInstantWinTile](docs/Model/CreateInstantWinTile.md)
- [CreateLanguageRequest](docs/Model/CreateLanguageRequest.md)
- [CreateMemberMessageRequest](docs/Model/CreateMemberMessageRequest.md)
- [CreateMemberRequest](docs/Model/CreateMemberRequest.md)
- [CreateNotificationRequest](docs/Model/CreateNotificationRequest.md)
- [CreateOptParamModels](docs/Model/CreateOptParamModels.md)
- [CreateProductRequest](docs/Model/CreateProductRequest.md)
- [CreateRepositoryRequest](docs/Model/CreateRepositoryRequest.md)
- [CreateRewardRequest](docs/Model/CreateRewardRequest.md)
- [CreateRewardTypeRequest](docs/Model/CreateRewardTypeRequest.md)
- [CreateSimpleCompetitionRequest](docs/Model/CreateSimpleCompetitionRequest.md)
- [CreateSpaceRequest](docs/Model/CreateSpaceRequest.md)
- [CreateTagRequest](docs/Model/CreateTagRequest.md)
- [CreateTransformerRequest](docs/Model/CreateTransformerRequest.md)
- [CreateTranslationRequest](docs/Model/CreateTranslationRequest.md)
- [CreateUnitOfMeasureRequest](docs/Model/CreateUnitOfMeasureRequest.md)
- [CreateWebhookRequest](docs/Model/CreateWebhookRequest.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldEntry](docs/Model/CustomFieldEntry.md)
- [CustomFieldEntryNumber](docs/Model/CustomFieldEntryNumber.md)
- [CustomFieldEntryNumberArray](docs/Model/CustomFieldEntryNumberArray.md)
- [CustomFieldEntryString](docs/Model/CustomFieldEntryString.md)
- [CustomFieldEntryStringArray](docs/Model/CustomFieldEntryStringArray.md)
- [CustomFieldReduced](docs/Model/CustomFieldReduced.md)
- [CustomFieldResponse](docs/Model/CustomFieldResponse.md)
- [Dashboard](docs/Model/Dashboard.md)
- [DashboardResponse](docs/Model/DashboardResponse.md)
- [DataSetsReference](docs/Model/DataSetsReference.md)
- [DataSetsValue](docs/Model/DataSetsValue.md)
- [Dependancy](docs/Model/Dependancy.md)
- [DependantOn](docs/Model/DependantOn.md)
- [EntityChangeSubscription](docs/Model/EntityChangeSubscription.md)
- [EntityChangeSubscriptionRequest](docs/Model/EntityChangeSubscriptionRequest.md)
- [EntityChangeSubscriptionResponse](docs/Model/EntityChangeSubscriptionResponse.md)
- [EntityChanged](docs/Model/EntityChanged.md)
- [EntityGraph](docs/Model/EntityGraph.md)
- [EntityGraphEdge](docs/Model/EntityGraphEdge.md)
- [EntityGraphEdgeType](docs/Model/EntityGraphEdgeType.md)
- [EntityGraphNode](docs/Model/EntityGraphNode.md)
- [EntityGraphRequest](docs/Model/EntityGraphRequest.md)
- [EntityGraphResponse](docs/Model/EntityGraphResponse.md)
- [EntityGraphResult](docs/Model/EntityGraphResult.md)
- [EntityGraphTraversal](docs/Model/EntityGraphTraversal.md)
- [EntityStateChanged](docs/Model/EntityStateChanged.md)
- [EntityType](docs/Model/EntityType.md)
- [Entrant](docs/Model/Entrant.md)
- [EntrantAction](docs/Model/EntrantAction.md)
- [EntrantCountResponse](docs/Model/EntrantCountResponse.md)
- [EntrantExport](docs/Model/EntrantExport.md)
- [EntrantResponse](docs/Model/EntrantResponse.md)
- [EntrantStatus](docs/Model/EntrantStatus.md)
- [Error](docs/Model/Error.md)
- [ErrorDetail](docs/Model/ErrorDetail.md)
- [Event](docs/Model/Event.md)
- [EventRefType](docs/Model/EventRefType.md)
- [EventResponse](docs/Model/EventResponse.md)
- [ExportResponse](docs/Model/ExportResponse.md)
- [FactDefault](docs/Model/FactDefault.md)
- [FieldType](docs/Model/FieldType.md)
- [FileObject](docs/Model/FileObject.md)
- [FileObjectsResponse](docs/Model/FileObjectsResponse.md)
- [GridLocation](docs/Model/GridLocation.md)
- [HostingOptions](docs/Model/HostingOptions.md)
- [InstantWin](docs/Model/InstantWin.md)
- [InstantWinResponse](docs/Model/InstantWinResponse.md)
- [InstantWinTile](docs/Model/InstantWinTile.md)
- [Language](docs/Model/Language.md)
- [LanguageResponse](docs/Model/LanguageResponse.md)
- [Languages](docs/Model/Languages.md)
- [Leaderboard](docs/Model/Leaderboard.md)
- [LeaderboardEntry](docs/Model/LeaderboardEntry.md)
- [LeaderboardFilter](docs/Model/LeaderboardFilter.md)
- [LeaderboardMember](docs/Model/LeaderboardMember.md)
- [LeaderboardResponse](docs/Model/LeaderboardResponse.md)
- [LeaderboardResponseByContest](docs/Model/LeaderboardResponseByContest.md)
- [Location](docs/Model/Location.md)
- [LogEvent](docs/Model/LogEvent.md)
- [LogEventResponse](docs/Model/LogEventResponse.md)
- [Macro](docs/Model/Macro.md)
- [MatchCondition](docs/Model/MatchCondition.md)
- [MaxMin](docs/Model/MaxMin.md)
- [Member](docs/Model/Member.md)
- [MemberAchievementCount](docs/Model/MemberAchievementCount.md)
- [MemberAchievementIssuedResponse](docs/Model/MemberAchievementIssuedResponse.md)
- [MemberAward](docs/Model/MemberAward.md)
- [MemberAwardResponse](docs/Model/MemberAwardResponse.md)
- [MemberMessage](docs/Model/MemberMessage.md)
- [MemberMessageResponse](docs/Model/MemberMessageResponse.md)
- [MemberResponse](docs/Model/MemberResponse.md)
- [MemberTokenRequest](docs/Model/MemberTokenRequest.md)
- [MemberType](docs/Model/MemberType.md)
- [MessageLink](docs/Model/MessageLink.md)
- [MessageStatus](docs/Model/MessageStatus.md)
- [MessageType](docs/Model/MessageType.md)
- [MetaBasic](docs/Model/MetaBasic.md)
- [MetaExtended](docs/Model/MetaExtended.md)
- [MetaInfo](docs/Model/MetaInfo.md)
- [ModelDefault](docs/Model/ModelDefault.md)
- [Modules](docs/Model/Modules.md)
- [Notification](docs/Model/Notification.md)
- [NotificationMessage](docs/Model/NotificationMessage.md)
- [NotificationResponse](docs/Model/NotificationResponse.md)
- [NotificationStatus](docs/Model/NotificationStatus.md)
- [ObjectConstraint](docs/Model/ObjectConstraint.md)
- [ObjectParameters](docs/Model/ObjectParameters.md)
- [ObjectParametersResponse](docs/Model/ObjectParametersResponse.md)
- [OptParamModels](docs/Model/OptParamModels.md)
- [OptinStatus](docs/Model/OptinStatus.md)
- [PointsStrategy](docs/Model/PointsStrategy.md)
- [Product](docs/Model/Product.md)
- [ProductReduced](docs/Model/ProductReduced.md)
- [ProductResponse](docs/Model/ProductResponse.md)
- [ProfileResponse](docs/Model/ProfileResponse.md)
- [QueryMultiple](docs/Model/QueryMultiple.md)
- [QueryMultipleFields](docs/Model/QueryMultipleFields.md)
- [QueryRequest](docs/Model/QueryRequest.md)
- [QuerySingle](docs/Model/QuerySingle.md)
- [QuerySortBy](docs/Model/QuerySortBy.md)
- [RangeQuery](docs/Model/RangeQuery.md)
- [RankingStrategy](docs/Model/RankingStrategy.md)
- [Relation](docs/Model/Relation.md)
- [Repository](docs/Model/Repository.md)
- [RepositoryResponse](docs/Model/RepositoryResponse.md)
- [Response](docs/Model/Response.md)
- [Result](docs/Model/Result.md)
- [Reward](docs/Model/Reward.md)
- [RewardEntityType](docs/Model/RewardEntityType.md)
- [RewardReduced](docs/Model/RewardReduced.md)
- [RewardResponse](docs/Model/RewardResponse.md)
- [RewardType](docs/Model/RewardType.md)
- [RewardTypeReduced](docs/Model/RewardTypeReduced.md)
- [RewardTypeResponse](docs/Model/RewardTypeResponse.md)
- [Role](docs/Model/Role.md)
- [RoundType](docs/Model/RoundType.md)
- [Rule](docs/Model/Rule.md)
- [RuleArgument](docs/Model/RuleArgument.md)
- [RuleExpression](docs/Model/RuleExpression.md)
- [RuleOperandLookupRequest](docs/Model/RuleOperandLookupRequest.md)
- [RuleOperandLookupResponse](docs/Model/RuleOperandLookupResponse.md)
- [RuleResponse](docs/Model/RuleResponse.md)
- [RuleRoutine](docs/Model/RuleRoutine.md)
- [ScheduleType](docs/Model/ScheduleType.md)
- [Scheduling](docs/Model/Scheduling.md)
- [ScoringStrategy](docs/Model/ScoringStrategy.md)
- [SortOrder](docs/Model/SortOrder.md)
- [SourceLanguage](docs/Model/SourceLanguage.md)
- [Space](docs/Model/Space.md)
- [SpaceResponse](docs/Model/SpaceResponse.md)
- [SpaceTokenRequest](docs/Model/SpaceTokenRequest.md)
- [StartEndDate](docs/Model/StartEndDate.md)
- [StrategyType](docs/Model/StrategyType.md)
- [SubscriptionTypes](docs/Model/SubscriptionTypes.md)
- [Tag](docs/Model/Tag.md)
- [TagResponse](docs/Model/TagResponse.md)
- [Token](docs/Model/Token.md)
- [TokenResponse](docs/Model/TokenResponse.md)
- [TournamentStrategies](docs/Model/TournamentStrategies.md)
- [Transformer](docs/Model/Transformer.md)
- [TransformerResponse](docs/Model/TransformerResponse.md)
- [TranslatedField](docs/Model/TranslatedField.md)
- [Translation](docs/Model/Translation.md)
- [TranslationEntry](docs/Model/TranslationEntry.md)
- [TranslationResponse](docs/Model/TranslationResponse.md)
- [TranslationValue](docs/Model/TranslationValue.md)
- [Triggers](docs/Model/Triggers.md)
- [UnitOfMeasure](docs/Model/UnitOfMeasure.md)
- [UnitOfMeasureResponse](docs/Model/UnitOfMeasureResponse.md)
- [UnitOfMeasureType](docs/Model/UnitOfMeasureType.md)
- [UpdateAchievementRequest](docs/Model/UpdateAchievementRequest.md)
- [UpdateActionTypeRequest](docs/Model/UpdateActionTypeRequest.md)
- [UpdateApiKeyRequest](docs/Model/UpdateApiKeyRequest.md)
- [UpdateCollaboratorRequest](docs/Model/UpdateCollaboratorRequest.md)
- [UpdateCompetitionRequest](docs/Model/UpdateCompetitionRequest.md)
- [UpdateCompetitionStatusRequest](docs/Model/UpdateCompetitionStatusRequest.md)
- [UpdateComputeEngineRequest](docs/Model/UpdateComputeEngineRequest.md)
- [UpdateConnectionRequest](docs/Model/UpdateConnectionRequest.md)
- [UpdateConnectionStateRequest](docs/Model/UpdateConnectionStateRequest.md)
- [UpdateContestRequest](docs/Model/UpdateContestRequest.md)
- [UpdateContestStateRequest](docs/Model/UpdateContestStateRequest.md)
- [UpdateCustomFieldRequest](docs/Model/UpdateCustomFieldRequest.md)
- [UpdateEntityRewardRequest](docs/Model/UpdateEntityRewardRequest.md)
- [UpdateEntrantRequest](docs/Model/UpdateEntrantRequest.md)
- [UpdateFileObjectRequest](docs/Model/UpdateFileObjectRequest.md)
- [UpdateInstantWinRequest](docs/Model/UpdateInstantWinRequest.md)
- [UpdateInstantWinTile](docs/Model/UpdateInstantWinTile.md)
- [UpdateLanguageRequest](docs/Model/UpdateLanguageRequest.md)
- [UpdateMemberRequest](docs/Model/UpdateMemberRequest.md)
- [UpdateMessageStatusRequest](docs/Model/UpdateMessageStatusRequest.md)
- [UpdateModelDefault](docs/Model/UpdateModelDefault.md)
- [UpdateNotificationStatusRequest](docs/Model/UpdateNotificationStatusRequest.md)
- [UpdateOptParamModels](docs/Model/UpdateOptParamModels.md)
- [UpdateProductRequest](docs/Model/UpdateProductRequest.md)
- [UpdateRepositoryRequest](docs/Model/UpdateRepositoryRequest.md)
- [UpdateRewardRequest](docs/Model/UpdateRewardRequest.md)
- [UpdateRewardTypeRequest](docs/Model/UpdateRewardTypeRequest.md)
- [UpdateRuleRequest](docs/Model/UpdateRuleRequest.md)
- [UpdateSpaceRequest](docs/Model/UpdateSpaceRequest.md)
- [UpdateStateRequest](docs/Model/UpdateStateRequest.md)
- [UpdateTagRequest](docs/Model/UpdateTagRequest.md)
- [UpdateTransformerRequest](docs/Model/UpdateTransformerRequest.md)
- [UpdateTranslationRequest](docs/Model/UpdateTranslationRequest.md)
- [UpdateUnitOfMeasureRequest](docs/Model/UpdateUnitOfMeasureRequest.md)
- [UpdateWebhookRequest](docs/Model/UpdateWebhookRequest.md)
- [User](docs/Model/User.md)
- [UserModelDefault](docs/Model/UserModelDefault.md)
- [UserResponse](docs/Model/UserResponse.md)
- [ValueLookupResult](docs/Model/ValueLookupResult.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookResponse](docs/Model/WebhookResponse.md)
- [WebhookTriggersResponse](docs/Model/WebhookTriggersResponse.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://identity.ziqni.com/realms/ziqni/protocol/openid-connect/auth`
- **Scopes**: 
    - **AdminAchievements**: Grants full read and write access
    - **ManageAchievements**: Grants read and restricted write access
    - **ViewAchievement**: Grants read access
    - **AdminActions**: Grants full read and write access
    - **ViewActions**: Grants read access
    - **AdminApi**: Grants full read and write access
    - **AdminClaim**: Grants full read and write access
    - **ViewAwards**: Grants read access
    - **AdminCollaborator**: Grants full read and write access
    - **AdminCompetition**: Grants full read and write access
    - **ManageCompetition**: Grants read and restricted write access
    - **ViewCompetitions**: Grants read access
    - **AdminConsumer**: Grants full read and write access
    - **AdminContest**: Grants full read and write access
    - **ManageContest**: Grants read and restricted write access
    - **ViewContest**: Grants read access
    - **AdminCustomFields**: Grants full read and write access
    - **ViewCustomFields**: Grants read access
    - **AdminEvents**: Grants full read and write access
    - **ViewEvents**: Grants read access
    - **AdminObjects**: Grants full read and write access
    - **ManageObjects**: Grants read and restricted write access
    - **ViewObjects**: Grants read access
    - **AdminLanguage**: Grants full read and write access
    - **ViewLanguage**: Grants read access
    - **logout**: Grants read access
    - **AdminMembers**: Grants full read and write access
    - **ManageMembers**: Grants read and restricted write access
    - **ViewMembers**: Grants read access
    - **AdminMessages**: Grants full read and write access
    - **ManageMessages**: Grants read and restricted write access
    - **ViewMessages**: Grants read access
    - **AdminProducts**: Grants full read and write access
    - **ManageProducts**: Grants read and restricted write access
    - **ViewProducts**: Grants read access
    - **ManageFileObjectRep**: Grants read and restricted write access
    - **AdminRewards**: Grants full read and write access
    - **ManageRewards**: Grants read and restricted write access
    - **ViewRewards**: Grants read access
    - **AdminRewardType**: Grants full read and write access
    - **ManageRewardType**: Grants read and restricted write access
    - **ViewRewardType**: Grants read access
    - **ViewRules**: Grants read access
    - **AdminSpaces**: Grants full read and write access
    - **ViewSpaces**: Grants read access
    - **AdminTransformers**: Grants full read and write access
    - **ViewAccountSettings**: Grants read access
    - **AdminUOM**: Grants full read and write access
    - **ManageUOM**: Grants read and restricted write access
    - **ViewUOM**: Grants read access
    - **AdminUser**: Grants full read and write access
    - **ViewUser**: Grants read access
    - **AdminWebhooks**: Grants full read and write access
    - **AdminTags**: Grants full read and write access
    - **ManageTags**: Grants read and restricted write access
    - **ViewTags**: Grants read access
    - **Owner**: The space owner
    - **Collaborator**: A collaborator in this space

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@ziqni.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.0.11`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
