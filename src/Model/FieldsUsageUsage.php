<?php
/**
 * FieldsUsageUsage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Rossity\PhpQuickbase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Quick Base API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Rossity\PhpQuickbase\Model;

use \ArrayAccess;
use \Rossity\PhpQuickbase\ObjectSerializer;

/**
 * FieldsUsageUsage Class Doc Comment
 *
 * @category Class
 * @description Usage Information about the field.
 * @package  Rossity\PhpQuickbase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldsUsageUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_fields_usage_usage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'defaultReports' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageDefaultReports',
        'notifications' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageNotifications',
        'reminders' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageReminders',
        'forms' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageForms',
        'actions' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageActions',
        'personalReports' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsagePersonalReports',
        'roles' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageRoles',
        'reports' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageReports',
        'fields' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageFields',
        'relationships' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageRelationships',
        'webhooks' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageWebhooks',
        'appHomePages' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageAppHomePages',
        'exactForms' => '\Rossity\PhpQuickbase\Model\FieldsUsageUsageExactForms'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'defaultReports' => null,
        'notifications' => null,
        'reminders' => null,
        'forms' => null,
        'actions' => null,
        'personalReports' => null,
        'roles' => null,
        'reports' => null,
        'fields' => null,
        'relationships' => null,
        'webhooks' => null,
        'appHomePages' => null,
        'exactForms' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'defaultReports' => 'defaultReports',
        'notifications' => 'notifications',
        'reminders' => 'reminders',
        'forms' => 'forms',
        'actions' => 'actions',
        'personalReports' => 'personalReports',
        'roles' => 'roles',
        'reports' => 'reports',
        'fields' => 'fields',
        'relationships' => 'relationships',
        'webhooks' => 'webhooks',
        'appHomePages' => 'appHomePages',
        'exactForms' => 'exactForms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultReports' => 'setDefaultReports',
        'notifications' => 'setNotifications',
        'reminders' => 'setReminders',
        'forms' => 'setForms',
        'actions' => 'setActions',
        'personalReports' => 'setPersonalReports',
        'roles' => 'setRoles',
        'reports' => 'setReports',
        'fields' => 'setFields',
        'relationships' => 'setRelationships',
        'webhooks' => 'setWebhooks',
        'appHomePages' => 'setAppHomePages',
        'exactForms' => 'setExactForms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultReports' => 'getDefaultReports',
        'notifications' => 'getNotifications',
        'reminders' => 'getReminders',
        'forms' => 'getForms',
        'actions' => 'getActions',
        'personalReports' => 'getPersonalReports',
        'roles' => 'getRoles',
        'reports' => 'getReports',
        'fields' => 'getFields',
        'relationships' => 'getRelationships',
        'webhooks' => 'getWebhooks',
        'appHomePages' => 'getAppHomePages',
        'exactForms' => 'getExactForms'
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
        return self::$openAPIModelName;
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
        $this->container['defaultReports'] = isset($data['defaultReports']) ? $data['defaultReports'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
        $this->container['reminders'] = isset($data['reminders']) ? $data['reminders'] : null;
        $this->container['forms'] = isset($data['forms']) ? $data['forms'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['personalReports'] = isset($data['personalReports']) ? $data['personalReports'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['reports'] = isset($data['reports']) ? $data['reports'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
        $this->container['webhooks'] = isset($data['webhooks']) ? $data['webhooks'] : null;
        $this->container['appHomePages'] = isset($data['appHomePages']) ? $data['appHomePages'] : null;
        $this->container['exactForms'] = isset($data['exactForms']) ? $data['exactForms'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['defaultReports'] === null) {
            $invalidProperties[] = "'defaultReports' can't be null";
        }
        if ($this->container['notifications'] === null) {
            $invalidProperties[] = "'notifications' can't be null";
        }
        if ($this->container['reminders'] === null) {
            $invalidProperties[] = "'reminders' can't be null";
        }
        if ($this->container['forms'] === null) {
            $invalidProperties[] = "'forms' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
        }
        if ($this->container['personalReports'] === null) {
            $invalidProperties[] = "'personalReports' can't be null";
        }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if ($this->container['reports'] === null) {
            $invalidProperties[] = "'reports' can't be null";
        }
        if ($this->container['fields'] === null) {
            $invalidProperties[] = "'fields' can't be null";
        }
        if ($this->container['relationships'] === null) {
            $invalidProperties[] = "'relationships' can't be null";
        }
        if ($this->container['webhooks'] === null) {
            $invalidProperties[] = "'webhooks' can't be null";
        }
        if ($this->container['appHomePages'] === null) {
            $invalidProperties[] = "'appHomePages' can't be null";
        }
        if ($this->container['exactForms'] === null) {
            $invalidProperties[] = "'exactForms' can't be null";
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
     * Gets defaultReports
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageDefaultReports
     */
    public function getDefaultReports()
    {
        return $this->container['defaultReports'];
    }

    /**
     * Sets defaultReports
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageDefaultReports $defaultReports defaultReports
     *
     * @return $this
     */
    public function setDefaultReports($defaultReports)
    {
        $this->container['defaultReports'] = $defaultReports;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageNotifications
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageNotifications $notifications notifications
     *
     * @return $this
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets reminders
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageReminders
     */
    public function getReminders()
    {
        return $this->container['reminders'];
    }

    /**
     * Sets reminders
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageReminders $reminders reminders
     *
     * @return $this
     */
    public function setReminders($reminders)
    {
        $this->container['reminders'] = $reminders;

        return $this;
    }

    /**
     * Gets forms
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageForms
     */
    public function getForms()
    {
        return $this->container['forms'];
    }

    /**
     * Sets forms
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageForms $forms forms
     *
     * @return $this
     */
    public function setForms($forms)
    {
        $this->container['forms'] = $forms;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageActions
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageActions $actions actions
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets personalReports
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsagePersonalReports
     */
    public function getPersonalReports()
    {
        return $this->container['personalReports'];
    }

    /**
     * Sets personalReports
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsagePersonalReports $personalReports personalReports
     *
     * @return $this
     */
    public function setPersonalReports($personalReports)
    {
        $this->container['personalReports'] = $personalReports;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageRoles
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageRoles $roles roles
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets reports
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageReports
     */
    public function getReports()
    {
        return $this->container['reports'];
    }

    /**
     * Sets reports
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageReports $reports reports
     *
     * @return $this
     */
    public function setReports($reports)
    {
        $this->container['reports'] = $reports;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageFields
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageFields $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageRelationships
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageRelationships $relationships relationships
     *
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets webhooks
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageWebhooks
     */
    public function getWebhooks()
    {
        return $this->container['webhooks'];
    }

    /**
     * Sets webhooks
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageWebhooks $webhooks webhooks
     *
     * @return $this
     */
    public function setWebhooks($webhooks)
    {
        $this->container['webhooks'] = $webhooks;

        return $this;
    }

    /**
     * Gets appHomePages
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageAppHomePages
     */
    public function getAppHomePages()
    {
        return $this->container['appHomePages'];
    }

    /**
     * Sets appHomePages
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageAppHomePages $appHomePages appHomePages
     *
     * @return $this
     */
    public function setAppHomePages($appHomePages)
    {
        $this->container['appHomePages'] = $appHomePages;

        return $this;
    }

    /**
     * Gets exactForms
     *
     * @return \Rossity\PhpQuickbase\Model\FieldsUsageUsageExactForms
     */
    public function getExactForms()
    {
        return $this->container['exactForms'];
    }

    /**
     * Sets exactForms
     *
     * @param \Rossity\PhpQuickbase\Model\FieldsUsageUsageExactForms $exactForms exactForms
     *
     * @return $this
     */
    public function setExactForms($exactForms)
    {
        $this->container['exactForms'] = $exactForms;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


