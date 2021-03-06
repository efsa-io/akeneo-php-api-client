<?php
/**
 * InlineObject14
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Efsa\AkeneoApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Akeneo PIM REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Efsa\AkeneoApi\Model;

use \ArrayAccess;
use \Efsa\AkeneoApi\ObjectSerializer;

/**
 * InlineObject14 Class Doc Comment
 *
 * @category Class
 * @package  Efsa\AkeneoApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject14 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_14';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categories' => 'string[]',
        'code' => 'string',
        'description' => 'string',
        'endOfUse' => 'string',
        'localizable' => 'bool',
        'referenceFiles' => '\Efsa\AkeneoApi\Model\ApiRestV1AssetsReferenceFiles[]',
        'tags' => 'string[]',
        'variationFiles' => '\Efsa\AkeneoApi\Model\ApiRestV1AssetsVariationFiles[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categories' => null,
        'code' => null,
        'description' => null,
        'endOfUse' => 'dateTime',
        'localizable' => null,
        'referenceFiles' => null,
        'tags' => null,
        'variationFiles' => null
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
        'categories' => 'categories',
        'code' => 'code',
        'description' => 'description',
        'endOfUse' => 'end_of_use',
        'localizable' => 'localizable',
        'referenceFiles' => 'reference_files',
        'tags' => 'tags',
        'variationFiles' => 'variation_files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categories' => 'setCategories',
        'code' => 'setCode',
        'description' => 'setDescription',
        'endOfUse' => 'setEndOfUse',
        'localizable' => 'setLocalizable',
        'referenceFiles' => 'setReferenceFiles',
        'tags' => 'setTags',
        'variationFiles' => 'setVariationFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categories' => 'getCategories',
        'code' => 'getCode',
        'description' => 'getDescription',
        'endOfUse' => 'getEndOfUse',
        'localizable' => 'getLocalizable',
        'referenceFiles' => 'getReferenceFiles',
        'tags' => 'getTags',
        'variationFiles' => 'getVariationFiles'
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
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['endOfUse'] = $data['endOfUse'] ?? null;
        $this->container['localizable'] = $data['localizable'] ?? false;
        $this->container['referenceFiles'] = $data['referenceFiles'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['variationFiles'] = $data['variationFiles'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
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
     * Gets categories
     *
     * @return string[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[]|null $categories Codes of the PAM asset categories in which the asset is classified
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code PAM asset code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the PAM asset
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets endOfUse
     *
     * @return string|null
     */
    public function getEndOfUse()
    {
        return $this->container['endOfUse'];
    }

    /**
     * Sets endOfUse
     *
     * @param string|null $endOfUse Date on which the PAM asset expire
     *
     * @return self
     */
    public function setEndOfUse($endOfUse)
    {
        $this->container['endOfUse'] = $endOfUse;

        return $this;
    }

    /**
     * Gets localizable
     *
     * @return bool|null
     */
    public function getLocalizable()
    {
        return $this->container['localizable'];
    }

    /**
     * Sets localizable
     *
     * @param bool|null $localizable Whether the asset is localized or not, meaning if you want to have different reference files for each of your locale
     *
     * @return self
     */
    public function setLocalizable($localizable)
    {
        $this->container['localizable'] = $localizable;

        return $this;
    }

    /**
     * Gets referenceFiles
     *
     * @return \Efsa\AkeneoApi\Model\ApiRestV1AssetsReferenceFiles[]|null
     */
    public function getReferenceFiles()
    {
        return $this->container['referenceFiles'];
    }

    /**
     * Sets referenceFiles
     *
     * @param \Efsa\AkeneoApi\Model\ApiRestV1AssetsReferenceFiles[]|null $referenceFiles Reference files of the PAM asset
     *
     * @return self
     */
    public function setReferenceFiles($referenceFiles)
    {
        $this->container['referenceFiles'] = $referenceFiles;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Tags of the PAM asset
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets variationFiles
     *
     * @return \Efsa\AkeneoApi\Model\ApiRestV1AssetsVariationFiles[]|null
     */
    public function getVariationFiles()
    {
        return $this->container['variationFiles'];
    }

    /**
     * Sets variationFiles
     *
     * @param \Efsa\AkeneoApi\Model\ApiRestV1AssetsVariationFiles[]|null $variationFiles Variations of the PAM asset
     *
     * @return self
     */
    public function setVariationFiles($variationFiles)
    {
        $this->container['variationFiles'] = $variationFiles;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


