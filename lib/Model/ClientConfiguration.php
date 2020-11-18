<?php
/**
 * ClientConfiguration
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * finAPI Access (alpha build)
 *
 * RESTful API for Account Information Services (AIS) and Payment Initiation Services (PIS) (alpha build)
 *
 * OpenAPI spec version: alpha
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ClientConfiguration Class Doc Comment
 *
 * @category Class
 * @description Client configuration parameters
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClientConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_automatic_batch_update_enabled' => 'bool',
        'user_notification_callback_url' => 'string',
        'user_synchronization_callback_url' => 'string',
        'refresh_tokens_validity_period' => 'int',
        'user_access_tokens_validity_period' => 'int',
        'client_access_tokens_validity_period' => 'int',
        'max_user_login_attempts' => 'int',
        'is_user_auto_verification_enabled' => 'bool',
        'is_mandator_admin' => 'bool',
        'is_web_scraping_enabled' => 'bool',
        'is_xs2a_enabled' => 'bool',
        'is_standalone_payments_enabled' => 'bool',
        'available_bank_groups' => 'string[]',
        'application_name' => 'string',
        'fin_ts_product_registration_number' => 'string',
        'store_secrets_available_in_web_form' => 'bool',
        'support_subject_default' => 'string',
        'support_email' => 'string',
        'payments_enabled' => 'bool',
        'pin_storage_available_in_web_form' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_automatic_batch_update_enabled' => null,
        'user_notification_callback_url' => null,
        'user_synchronization_callback_url' => null,
        'refresh_tokens_validity_period' => 'int32',
        'user_access_tokens_validity_period' => 'int32',
        'client_access_tokens_validity_period' => 'int32',
        'max_user_login_attempts' => 'int32',
        'is_user_auto_verification_enabled' => null,
        'is_mandator_admin' => null,
        'is_web_scraping_enabled' => null,
        'is_xs2a_enabled' => null,
        'is_standalone_payments_enabled' => null,
        'available_bank_groups' => null,
        'application_name' => null,
        'fin_ts_product_registration_number' => null,
        'store_secrets_available_in_web_form' => null,
        'support_subject_default' => null,
        'support_email' => null,
        'payments_enabled' => null,
        'pin_storage_available_in_web_form' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_automatic_batch_update_enabled' => 'isAutomaticBatchUpdateEnabled',
        'user_notification_callback_url' => 'userNotificationCallbackUrl',
        'user_synchronization_callback_url' => 'userSynchronizationCallbackUrl',
        'refresh_tokens_validity_period' => 'refreshTokensValidityPeriod',
        'user_access_tokens_validity_period' => 'userAccessTokensValidityPeriod',
        'client_access_tokens_validity_period' => 'clientAccessTokensValidityPeriod',
        'max_user_login_attempts' => 'maxUserLoginAttempts',
        'is_user_auto_verification_enabled' => 'isUserAutoVerificationEnabled',
        'is_mandator_admin' => 'isMandatorAdmin',
        'is_web_scraping_enabled' => 'isWebScrapingEnabled',
        'is_xs2a_enabled' => 'isXs2aEnabled',
        'is_standalone_payments_enabled' => 'isStandalonePaymentsEnabled',
        'available_bank_groups' => 'availableBankGroups',
        'application_name' => 'applicationName',
        'fin_ts_product_registration_number' => 'finTSProductRegistrationNumber',
        'store_secrets_available_in_web_form' => 'storeSecretsAvailableInWebForm',
        'support_subject_default' => 'supportSubjectDefault',
        'support_email' => 'supportEmail',
        'payments_enabled' => 'paymentsEnabled',
        'pin_storage_available_in_web_form' => 'pinStorageAvailableInWebForm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_automatic_batch_update_enabled' => 'setIsAutomaticBatchUpdateEnabled',
        'user_notification_callback_url' => 'setUserNotificationCallbackUrl',
        'user_synchronization_callback_url' => 'setUserSynchronizationCallbackUrl',
        'refresh_tokens_validity_period' => 'setRefreshTokensValidityPeriod',
        'user_access_tokens_validity_period' => 'setUserAccessTokensValidityPeriod',
        'client_access_tokens_validity_period' => 'setClientAccessTokensValidityPeriod',
        'max_user_login_attempts' => 'setMaxUserLoginAttempts',
        'is_user_auto_verification_enabled' => 'setIsUserAutoVerificationEnabled',
        'is_mandator_admin' => 'setIsMandatorAdmin',
        'is_web_scraping_enabled' => 'setIsWebScrapingEnabled',
        'is_xs2a_enabled' => 'setIsXs2aEnabled',
        'is_standalone_payments_enabled' => 'setIsStandalonePaymentsEnabled',
        'available_bank_groups' => 'setAvailableBankGroups',
        'application_name' => 'setApplicationName',
        'fin_ts_product_registration_number' => 'setFinTsProductRegistrationNumber',
        'store_secrets_available_in_web_form' => 'setStoreSecretsAvailableInWebForm',
        'support_subject_default' => 'setSupportSubjectDefault',
        'support_email' => 'setSupportEmail',
        'payments_enabled' => 'setPaymentsEnabled',
        'pin_storage_available_in_web_form' => 'setPinStorageAvailableInWebForm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_automatic_batch_update_enabled' => 'getIsAutomaticBatchUpdateEnabled',
        'user_notification_callback_url' => 'getUserNotificationCallbackUrl',
        'user_synchronization_callback_url' => 'getUserSynchronizationCallbackUrl',
        'refresh_tokens_validity_period' => 'getRefreshTokensValidityPeriod',
        'user_access_tokens_validity_period' => 'getUserAccessTokensValidityPeriod',
        'client_access_tokens_validity_period' => 'getClientAccessTokensValidityPeriod',
        'max_user_login_attempts' => 'getMaxUserLoginAttempts',
        'is_user_auto_verification_enabled' => 'getIsUserAutoVerificationEnabled',
        'is_mandator_admin' => 'getIsMandatorAdmin',
        'is_web_scraping_enabled' => 'getIsWebScrapingEnabled',
        'is_xs2a_enabled' => 'getIsXs2aEnabled',
        'is_standalone_payments_enabled' => 'getIsStandalonePaymentsEnabled',
        'available_bank_groups' => 'getAvailableBankGroups',
        'application_name' => 'getApplicationName',
        'fin_ts_product_registration_number' => 'getFinTsProductRegistrationNumber',
        'store_secrets_available_in_web_form' => 'getStoreSecretsAvailableInWebForm',
        'support_subject_default' => 'getSupportSubjectDefault',
        'support_email' => 'getSupportEmail',
        'payments_enabled' => 'getPaymentsEnabled',
        'pin_storage_available_in_web_form' => 'getPinStorageAvailableInWebForm'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['is_automatic_batch_update_enabled'] = isset($data['is_automatic_batch_update_enabled']) ? $data['is_automatic_batch_update_enabled'] : null;
        $this->container['user_notification_callback_url'] = isset($data['user_notification_callback_url']) ? $data['user_notification_callback_url'] : null;
        $this->container['user_synchronization_callback_url'] = isset($data['user_synchronization_callback_url']) ? $data['user_synchronization_callback_url'] : null;
        $this->container['refresh_tokens_validity_period'] = isset($data['refresh_tokens_validity_period']) ? $data['refresh_tokens_validity_period'] : null;
        $this->container['user_access_tokens_validity_period'] = isset($data['user_access_tokens_validity_period']) ? $data['user_access_tokens_validity_period'] : null;
        $this->container['client_access_tokens_validity_period'] = isset($data['client_access_tokens_validity_period']) ? $data['client_access_tokens_validity_period'] : null;
        $this->container['max_user_login_attempts'] = isset($data['max_user_login_attempts']) ? $data['max_user_login_attempts'] : null;
        $this->container['is_user_auto_verification_enabled'] = isset($data['is_user_auto_verification_enabled']) ? $data['is_user_auto_verification_enabled'] : null;
        $this->container['is_mandator_admin'] = isset($data['is_mandator_admin']) ? $data['is_mandator_admin'] : null;
        $this->container['is_web_scraping_enabled'] = isset($data['is_web_scraping_enabled']) ? $data['is_web_scraping_enabled'] : null;
        $this->container['is_xs2a_enabled'] = isset($data['is_xs2a_enabled']) ? $data['is_xs2a_enabled'] : null;
        $this->container['is_standalone_payments_enabled'] = isset($data['is_standalone_payments_enabled']) ? $data['is_standalone_payments_enabled'] : null;
        $this->container['available_bank_groups'] = isset($data['available_bank_groups']) ? $data['available_bank_groups'] : null;
        $this->container['application_name'] = isset($data['application_name']) ? $data['application_name'] : null;
        $this->container['fin_ts_product_registration_number'] = isset($data['fin_ts_product_registration_number']) ? $data['fin_ts_product_registration_number'] : null;
        $this->container['store_secrets_available_in_web_form'] = isset($data['store_secrets_available_in_web_form']) ? $data['store_secrets_available_in_web_form'] : null;
        $this->container['support_subject_default'] = isset($data['support_subject_default']) ? $data['support_subject_default'] : null;
        $this->container['support_email'] = isset($data['support_email']) ? $data['support_email'] : null;
        $this->container['payments_enabled'] = isset($data['payments_enabled']) ? $data['payments_enabled'] : null;
        $this->container['pin_storage_available_in_web_form'] = isset($data['pin_storage_available_in_web_form']) ? $data['pin_storage_available_in_web_form'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_automatic_batch_update_enabled'] === null) {
            $invalidProperties[] = "'is_automatic_batch_update_enabled' can't be null";
        }
        if ($this->container['max_user_login_attempts'] === null) {
            $invalidProperties[] = "'max_user_login_attempts' can't be null";
        }
        if ($this->container['is_user_auto_verification_enabled'] === null) {
            $invalidProperties[] = "'is_user_auto_verification_enabled' can't be null";
        }
        if ($this->container['is_mandator_admin'] === null) {
            $invalidProperties[] = "'is_mandator_admin' can't be null";
        }
        if ($this->container['is_web_scraping_enabled'] === null) {
            $invalidProperties[] = "'is_web_scraping_enabled' can't be null";
        }
        if ($this->container['is_xs2a_enabled'] === null) {
            $invalidProperties[] = "'is_xs2a_enabled' can't be null";
        }
        if ($this->container['is_standalone_payments_enabled'] === null) {
            $invalidProperties[] = "'is_standalone_payments_enabled' can't be null";
        }
        if ($this->container['available_bank_groups'] === null) {
            $invalidProperties[] = "'available_bank_groups' can't be null";
        }
        if ($this->container['store_secrets_available_in_web_form'] === null) {
            $invalidProperties[] = "'store_secrets_available_in_web_form' can't be null";
        }
        if ($this->container['payments_enabled'] === null) {
            $invalidProperties[] = "'payments_enabled' can't be null";
        }
        if ($this->container['pin_storage_available_in_web_form'] === null) {
            $invalidProperties[] = "'pin_storage_available_in_web_form' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets is_automatic_batch_update_enabled
     *
     * @return bool
     */
    public function getIsAutomaticBatchUpdateEnabled()
    {
        return $this->container['is_automatic_batch_update_enabled'];
    }

    /**
     * Sets is_automatic_batch_update_enabled
     *
     * @param bool $is_automatic_batch_update_enabled Whether finAPI performs a regular automatic update of your users' bank connections. To find out how the automatic batch update is configured for your client, i.e. which bank connections get updated, and at which time and interval, please contact your Sys-Admin. Note that even if the automatic batch update is enabled for your client, individual users can still disable the feature for their own bank connections.
     *
     * @return $this
     */
    public function setIsAutomaticBatchUpdateEnabled($is_automatic_batch_update_enabled)
    {
        $this->container['is_automatic_batch_update_enabled'] = $is_automatic_batch_update_enabled;

        return $this;
    }

    /**
     * Gets user_notification_callback_url
     *
     * @return string
     */
    public function getUserNotificationCallbackUrl()
    {
        return $this->container['user_notification_callback_url'];
    }

    /**
     * Sets user_notification_callback_url
     *
     * @param string $user_notification_callback_url Callback URL to which finAPI sends the notification messages that are triggered from the automatic batch update of the users' bank connections. This field is only relevant if the automatic batch update is enabled for your client. For details about what the notification messages look like, please see the documentation in the 'Notification Rules' section. finAPI will call this URL with HTTP method POST. Note that the response of the call is not processed by finAPI. Also note that while the callback URL may be a non-secured (http) URL on the finAPI sandbox or alpha environment, it MUST be a SSL-secured (https) URL on the finAPI live system.
     *
     * @return $this
     */
    public function setUserNotificationCallbackUrl($user_notification_callback_url)
    {
        $this->container['user_notification_callback_url'] = $user_notification_callback_url;

        return $this;
    }

    /**
     * Gets user_synchronization_callback_url
     *
     * @return string
     */
    public function getUserSynchronizationCallbackUrl()
    {
        return $this->container['user_synchronization_callback_url'];
    }

    /**
     * Sets user_synchronization_callback_url
     *
     * @param string $user_synchronization_callback_url Callback URL for user synchronization. This field should be set if you - as a finAPI customer - have multiple clients using finAPI. In such case, all of your clients will share the same user base, making it possible for a user to be created in one client, but then deleted in another. To keep the client-side user data consistent in all clients, you should set a callback URL for each client. finAPI will send a notification to the callback URL of each client whenever a user of your user base gets deleted. Note that finAPI will send a deletion notification to ALL clients, including the one that made the user deletion request to finAPI. So when deleting a user in finAPI, a client should rely on the callback to delete the user on its own side. <p>The notification that finAPI sends to the clients' callback URLs will be a POST request, with this body: <pre>{    \"userId\" : string // contains the identifier of the deleted user    \"event\" : string // this will always be \"DELETED\" }</pre><br/>Note that finAPI does not process the response of this call. Also note that while the callback URL may be a non-secured (http) URL on the finAPI sandbox or alpha environment, it MUST be a SSL-secured (https) URL on the finAPI live system.</p>As long as you have just one client, you can ignore this field and let it be null. However keep in mind that in this case your client will not receive any callback when a user gets deleted - so the deletion of the user on the client-side must not be forgotten. Of course you may still use the callback URL even for just one client, if you want to implement the deletion of the user on the client-side via the callback from finAPI.
     *
     * @return $this
     */
    public function setUserSynchronizationCallbackUrl($user_synchronization_callback_url)
    {
        $this->container['user_synchronization_callback_url'] = $user_synchronization_callback_url;

        return $this;
    }

    /**
     * Gets refresh_tokens_validity_period
     *
     * @return int
     */
    public function getRefreshTokensValidityPeriod()
    {
        return $this->container['refresh_tokens_validity_period'];
    }

    /**
     * Sets refresh_tokens_validity_period
     *
     * @param int $refresh_tokens_validity_period The validity period that newly requested refresh tokens initially have (in seconds). A value of 0 means that the tokens never expire (Unless explicitly invalidated, e.g. by revocation, or when a user gets locked, or when the password is reset for a user).
     *
     * @return $this
     */
    public function setRefreshTokensValidityPeriod($refresh_tokens_validity_period)
    {
        $this->container['refresh_tokens_validity_period'] = $refresh_tokens_validity_period;

        return $this;
    }

    /**
     * Gets user_access_tokens_validity_period
     *
     * @return int
     */
    public function getUserAccessTokensValidityPeriod()
    {
        return $this->container['user_access_tokens_validity_period'];
    }

    /**
     * Sets user_access_tokens_validity_period
     *
     * @param int $user_access_tokens_validity_period The validity period that newly requested access tokens for users initially have (in seconds). A value of 0 means that the tokens never expire (Unless explicitly invalidated, e.g. by revocation, or when a user gets locked, or when the password is reset for a user).
     *
     * @return $this
     */
    public function setUserAccessTokensValidityPeriod($user_access_tokens_validity_period)
    {
        $this->container['user_access_tokens_validity_period'] = $user_access_tokens_validity_period;

        return $this;
    }

    /**
     * Gets client_access_tokens_validity_period
     *
     * @return int
     */
    public function getClientAccessTokensValidityPeriod()
    {
        return $this->container['client_access_tokens_validity_period'];
    }

    /**
     * Sets client_access_tokens_validity_period
     *
     * @param int $client_access_tokens_validity_period The validity period that newly requested access tokens for clients initially have (in seconds). A value of 0 means that the tokens never expire (Unless explicitly invalidated, e.g. by revocation).
     *
     * @return $this
     */
    public function setClientAccessTokensValidityPeriod($client_access_tokens_validity_period)
    {
        $this->container['client_access_tokens_validity_period'] = $client_access_tokens_validity_period;

        return $this;
    }

    /**
     * Gets max_user_login_attempts
     *
     * @return int
     */
    public function getMaxUserLoginAttempts()
    {
        return $this->container['max_user_login_attempts'];
    }

    /**
     * Sets max_user_login_attempts
     *
     * @param int $max_user_login_attempts Number of consecutive failed login attempts of a user into his finAPI account that is allowed before finAPI locks the user's account. When a user's account is locked, finAPI will invalidate all user's tokens and it will deny any service call in the context of this user (i.e. any call to a service using one of the user's authorization tokens, as well as the service for requesting a new token for this user). To unlock a user's account, a new password must be set for the account by the client (see the services /users/requestPasswordChange and /users/executePasswordChange). Once a new password has been set, all services will be available again for this user and the user's failed login attempts counter is reset to 0. The user's failed login attempts counter is also reset whenever a new authorization token has been successfully retrieved, or whenever the user himself changes his password.<br/><br/>Note that when this field has a value of 0, it means that there is no limit for user login attempts, i.e. finAPI will never lock user accounts.
     *
     * @return $this
     */
    public function setMaxUserLoginAttempts($max_user_login_attempts)
    {
        $this->container['max_user_login_attempts'] = $max_user_login_attempts;

        return $this;
    }

    /**
     * Gets is_user_auto_verification_enabled
     *
     * @return bool
     */
    public function getIsUserAutoVerificationEnabled()
    {
        return $this->container['is_user_auto_verification_enabled'];
    }

    /**
     * Sets is_user_auto_verification_enabled
     *
     * @param bool $is_user_auto_verification_enabled Whether users that are created with this client are automatically verified on creation. If this field is set to 'false', then any user that is created with this client must first be verified with the \"Verify a user\" service before he can be authorized. If the field is 'true', then no verification is required by the client and the user can be authorized immediately after creation.
     *
     * @return $this
     */
    public function setIsUserAutoVerificationEnabled($is_user_auto_verification_enabled)
    {
        $this->container['is_user_auto_verification_enabled'] = $is_user_auto_verification_enabled;

        return $this;
    }

    /**
     * Gets is_mandator_admin
     *
     * @return bool
     */
    public function getIsMandatorAdmin()
    {
        return $this->container['is_mandator_admin'];
    }

    /**
     * Sets is_mandator_admin
     *
     * @param bool $is_mandator_admin Whether this client is a 'Mandator Admin'. Mandator Admins are special clients that can access the 'Mandator Administration' section of finAPI. If you do not yet have credentials for a Mandator Admin, please contact us at support@finapi.io. For further information, please refer to <a href='https://finapi.zendesk.com/hc/en-us/articles/115003661827-Difference-between-app-clients-and-mandator-admin-client' target='_blank'>this article</a> on our Dev Portal.
     *
     * @return $this
     */
    public function setIsMandatorAdmin($is_mandator_admin)
    {
        $this->container['is_mandator_admin'] = $is_mandator_admin;

        return $this;
    }

    /**
     * Gets is_web_scraping_enabled
     *
     * @return bool
     */
    public function getIsWebScrapingEnabled()
    {
        return $this->container['is_web_scraping_enabled'];
    }

    /**
     * Sets is_web_scraping_enabled
     *
     * @param bool $is_web_scraping_enabled Whether finAPI is allowed to use the WEB_SCRAPER interface for data download. If this field is set to 'true', then finAPI might download data from the online banking websites of banks (either in addition to other interfaces, or as the sole data source for the download). If this field is set to 'false', then finAPI will not use any web scrapers. For banks where no other interface except WEB_SCRAPER is available, finAPI will not allow any data download at all if web scraping is disabled for your client. Please contact your Sys-Admin if you want to change this setting.
     *
     * @return $this
     */
    public function setIsWebScrapingEnabled($is_web_scraping_enabled)
    {
        $this->container['is_web_scraping_enabled'] = $is_web_scraping_enabled;

        return $this;
    }

    /**
     * Gets is_xs2a_enabled
     *
     * @return bool
     */
    public function getIsXs2aEnabled()
    {
        return $this->container['is_xs2a_enabled'];
    }

    /**
     * Sets is_xs2a_enabled
     *
     * @param bool $is_xs2a_enabled NOTE: This field is deprecated and will be removed at some point.<br><br>Whether this client is allowed to access XS2A services.
     *
     * @return $this
     */
    public function setIsXs2aEnabled($is_xs2a_enabled)
    {
        $this->container['is_xs2a_enabled'] = $is_xs2a_enabled;

        return $this;
    }

    /**
     * Gets is_standalone_payments_enabled
     *
     * @return bool
     */
    public function getIsStandalonePaymentsEnabled()
    {
        return $this->container['is_standalone_payments_enabled'];
    }

    /**
     * Sets is_standalone_payments_enabled
     *
     * @param bool $is_standalone_payments_enabled Whether this client is allowed to do standalone payments (payments for accounts that are not imported in finAPI).
     *
     * @return $this
     */
    public function setIsStandalonePaymentsEnabled($is_standalone_payments_enabled)
    {
        $this->container['is_standalone_payments_enabled'] = $is_standalone_payments_enabled;

        return $this;
    }

    /**
     * Gets available_bank_groups
     *
     * @return string[]
     */
    public function getAvailableBankGroups()
    {
        return $this->container['available_bank_groups'];
    }

    /**
     * Sets available_bank_groups
     *
     * @param string[] $available_bank_groups List of bank groups that are available to this client. A bank group is a collection of all banks that are located in a certain country, and is defined by the country's ISO 3166 ALPHA-2 code (see also field 'location' of Bank resource). If you want to extend or limit the available bank groups for your client, please contact your Sys-Admin.<br/><br/>Note: There is no bank group for international institutes (i.e. institutes that are not bound to any specific country). Instead, those institutes are always available. If this list is empty, it means that ONLY international institutes are available.
     *
     * @return $this
     */
    public function setAvailableBankGroups($available_bank_groups)
    {
        $this->container['available_bank_groups'] = $available_bank_groups;

        return $this;
    }

    /**
     * Gets application_name
     *
     * @return string
     */
    public function getApplicationName()
    {
        return $this->container['application_name'];
    }

    /**
     * Sets application_name
     *
     * @param string $application_name Application name. When an application name is set (e.g. \"My App\"), then <a href='https://finapi.zendesk.com/hc/en-us/articles/360002596391' target='_blank'>finAPI's web form</a> will display a text to the user \"Weiterleitung auf finAPI von ...\" (e.g. \"Weiterleitung auf finAPI von MyApp\").
     *
     * @return $this
     */
    public function setApplicationName($application_name)
    {
        $this->container['application_name'] = $application_name;

        return $this;
    }

    /**
     * Gets fin_ts_product_registration_number
     *
     * @return string
     */
    public function getFinTsProductRegistrationNumber()
    {
        return $this->container['fin_ts_product_registration_number'];
    }

    /**
     * Sets fin_ts_product_registration_number
     *
     * @param string $fin_ts_product_registration_number The FinTS product registration number. If a value is stored, this will always be 'XXXXX'.
     *
     * @return $this
     */
    public function setFinTsProductRegistrationNumber($fin_ts_product_registration_number)
    {
        $this->container['fin_ts_product_registration_number'] = $fin_ts_product_registration_number;

        return $this;
    }

    /**
     * Gets store_secrets_available_in_web_form
     *
     * @return bool
     */
    public function getStoreSecretsAvailableInWebForm()
    {
        return $this->container['store_secrets_available_in_web_form'];
    }

    /**
     * Sets store_secrets_available_in_web_form
     *
     * @param bool $store_secrets_available_in_web_form Whether <a href='https://finapi.zendesk.com/hc/en-us/articles/360002596391' target='_blank'>finAPI's web form</a> will allow the user to choose whether to store login secrets (like a PIN) in finAPI. If this field is set to false, the option will not be available and the secrets not stored.
     *
     * @return $this
     */
    public function setStoreSecretsAvailableInWebForm($store_secrets_available_in_web_form)
    {
        $this->container['store_secrets_available_in_web_form'] = $store_secrets_available_in_web_form;

        return $this;
    }

    /**
     * Gets support_subject_default
     *
     * @return string
     */
    public function getSupportSubjectDefault()
    {
        return $this->container['support_subject_default'];
    }

    /**
     * Sets support_subject_default
     *
     * @param string $support_subject_default Default value for the subject element of support emails.
     *
     * @return $this
     */
    public function setSupportSubjectDefault($support_subject_default)
    {
        $this->container['support_subject_default'] = $support_subject_default;

        return $this;
    }

    /**
     * Gets support_email
     *
     * @return string
     */
    public function getSupportEmail()
    {
        return $this->container['support_email'];
    }

    /**
     * Sets support_email
     *
     * @param string $support_email Email address to sent support requests to from the web form.
     *
     * @return $this
     */
    public function setSupportEmail($support_email)
    {
        $this->container['support_email'] = $support_email;

        return $this;
    }

    /**
     * Gets payments_enabled
     *
     * @return bool
     */
    public function getPaymentsEnabled()
    {
        return $this->container['payments_enabled'];
    }

    /**
     * Sets payments_enabled
     *
     * @param bool $payments_enabled Whether this client is allowed to do payments
     *
     * @return $this
     */
    public function setPaymentsEnabled($payments_enabled)
    {
        $this->container['payments_enabled'] = $payments_enabled;

        return $this;
    }

    /**
     * Gets pin_storage_available_in_web_form
     *
     * @return bool
     */
    public function getPinStorageAvailableInWebForm()
    {
        return $this->container['pin_storage_available_in_web_form'];
    }

    /**
     * Sets pin_storage_available_in_web_form
     *
     * @param bool $pin_storage_available_in_web_form Whether <a href='https://finapi.zendesk.com/hc/en-us/articles/360002596391' target='_blank'>finAPI's web form</a> will provide a checkbox for the user allowing him to choose whether to store his banking PIN in finAPI. If this field is set to false, then the user won't have an option to store his PIN.<br><br>NOTE: This field is deprecated and will be removed at some point. Refer to field 'storeSecretsAvailableInWebForm' instead.
     *
     * @return $this
     */
    public function setPinStorageAvailableInWebForm($pin_storage_available_in_web_form)
    {
        $this->container['pin_storage_available_in_web_form'] = $pin_storage_available_in_web_form;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


