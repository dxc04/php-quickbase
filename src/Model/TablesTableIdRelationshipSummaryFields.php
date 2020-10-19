<?php
/**
 * TablesTableIdRelationshipSummaryFields
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
 * TablesTableIdRelationshipSummaryFields Class Doc Comment
 *
 * @category Class
 * @package  Rossity\PhpQuickbase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TablesTableIdRelationshipSummaryFields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_tables__tableId__relationship_summaryFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'summaryFid' => 'float',
        'label' => 'string',
        'accumulationType' => 'string',
        'where' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'summaryFid' => null,
        'label' => null,
        'accumulationType' => null,
        'where' => null
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
        'summaryFid' => 'summaryFid',
        'label' => 'label',
        'accumulationType' => 'accumulationType',
        'where' => 'where'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'summaryFid' => 'setSummaryFid',
        'label' => 'setLabel',
        'accumulationType' => 'setAccumulationType',
        'where' => 'setWhere'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'summaryFid' => 'getSummaryFid',
        'label' => 'getLabel',
        'accumulationType' => 'getAccumulationType',
        'where' => 'getWhere'
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

    const ACCUMULATION_TYPE_AVG = 'AVG';
    const ACCUMULATION_TYPE_SUM = 'SUM';
    const ACCUMULATION_TYPE_MAX = 'MAX';
    const ACCUMULATION_TYPE_MIN = 'MIN';
    const ACCUMULATION_TYPE_STD_DEV = 'STD-DEV';
    const ACCUMULATION_TYPE_COUNT = 'COUNT';
    const ACCUMULATION_TYPE_COMBINED_TEXT = 'COMBINED-TEXT';
    const ACCUMULATION_TYPE_DISTINCT_COUNT = 'DISTINCT-COUNT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccumulationTypeAllowableValues()
    {
        return [
            self::ACCUMULATION_TYPE_AVG,
            self::ACCUMULATION_TYPE_SUM,
            self::ACCUMULATION_TYPE_MAX,
            self::ACCUMULATION_TYPE_MIN,
            self::ACCUMULATION_TYPE_STD_DEV,
            self::ACCUMULATION_TYPE_COUNT,
            self::ACCUMULATION_TYPE_COMBINED_TEXT,
            self::ACCUMULATION_TYPE_DISTINCT_COUNT,
        ];
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
        $this->container['summaryFid'] = isset($data['summaryFid']) ? $data['summaryFid'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['accumulationType'] = isset($data['accumulationType']) ? $data['accumulationType'] : null;
        $this->container['where'] = isset($data['where']) ? $data['where'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accumulationType'] === null) {
            $invalidProperties[] = "'accumulationType' can't be null";
        }
        $allowedValues = $this->getAccumulationTypeAllowableValues();
        if (!is_null($this->container['accumulationType']) && !in_array($this->container['accumulationType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'accumulationType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets summaryFid
     *
     * @return float|null
     */
    public function getSummaryFid()
    {
        return $this->container['summaryFid'];
    }

    /**
     * Sets summaryFid
     *
     * @param float|null $summaryFid The field id to summarize.
     *
     * @return $this
     */
    public function setSummaryFid($summaryFid)
    {
        $this->container['summaryFid'] = $summaryFid;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label The label for the summary field.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets accumulationType
     *
     * @return string
     */
    public function getAccumulationType()
    {
        return $this->container['accumulationType'];
    }

    /**
     * Sets accumulationType
     *
     * @param string $accumulationType The accumulation type for the summary field.
     *
     * @return $this
     */
    public function setAccumulationType($accumulationType)
    {
        $allowedValues = $this->getAccumulationTypeAllowableValues();
        if (!in_array($accumulationType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accumulationType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accumulationType'] = $accumulationType;

        return $this;
    }

    /**
     * Gets where
     *
     * @return string|null
     */
    public function getWhere()
    {
        return $this->container['where'];
    }

    /**
     * Sets where
     *
     * @param string|null $where The filter, using the Quick Base query language, which determines the records to return.
     *
     * @return $this
     */
    public function setWhere($where)
    {
        $this->container['where'] = $where;

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


