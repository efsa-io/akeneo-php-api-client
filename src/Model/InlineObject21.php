<?php
/**
 * InlineObject21
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
 * InlineObject21 Class Doc Comment
 *
 * @category Class
 * @package  Efsa\AkeneoApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject21 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_21';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowedExtensions' => 'string[]',
        'availableLocales' => 'string[]',
        'code' => 'string',
        'dateMax' => '\DateTime',
        'dateMin' => '\DateTime',
        'decimalsAllowed' => 'bool',
        'defaultMetricUnit' => 'string',
        'defaultValue' => 'bool',
        'group' => 'string',
        'groupLabels' => '\Efsa\AkeneoApi\Model\ApiRestV1AttributesGroupLabels',
        'labels' => '\Efsa\AkeneoApi\Model\ApiRestV1AssetFamiliesAssetFamilyCodeAttributesLabels',
        'localizable' => 'bool',
        'maxCharacters' => 'int',
        'maxFileSize' => 'string',
        'metricFamily' => 'string',
        'negativeAllowed' => 'bool',
        'numberMax' => 'string',
        'numberMin' => 'string',
        'referenceDataName' => 'string',
        'scopable' => 'bool',
        'sortOrder' => 'int',
        'type' => 'string',
        'unique' => 'bool',
        'useableAsGridFilter' => 'bool',
        'validationRegexp' => 'string',
        'validationRule' => 'string',
        'wysiwygEnabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowedExtensions' => null,
        'availableLocales' => null,
        'code' => null,
        'dateMax' => 'date-time',
        'dateMin' => 'date-time',
        'decimalsAllowed' => null,
        'defaultMetricUnit' => null,
        'defaultValue' => null,
        'group' => null,
        'groupLabels' => null,
        'labels' => null,
        'localizable' => null,
        'maxCharacters' => null,
        'maxFileSize' => null,
        'metricFamily' => null,
        'negativeAllowed' => null,
        'numberMax' => null,
        'numberMin' => null,
        'referenceDataName' => null,
        'scopable' => null,
        'sortOrder' => null,
        'type' => null,
        'unique' => null,
        'useableAsGridFilter' => null,
        'validationRegexp' => null,
        'validationRule' => null,
        'wysiwygEnabled' => null
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
        'allowedExtensions' => 'allowed_extensions',
        'availableLocales' => 'available_locales',
        'code' => 'code',
        'dateMax' => 'date_max',
        'dateMin' => 'date_min',
        'decimalsAllowed' => 'decimals_allowed',
        'defaultMetricUnit' => 'default_metric_unit',
        'defaultValue' => 'default_value',
        'group' => 'group',
        'groupLabels' => 'group_labels',
        'labels' => 'labels',
        'localizable' => 'localizable',
        'maxCharacters' => 'max_characters',
        'maxFileSize' => 'max_file_size',
        'metricFamily' => 'metric_family',
        'negativeAllowed' => 'negative_allowed',
        'numberMax' => 'number_max',
        'numberMin' => 'number_min',
        'referenceDataName' => 'reference_data_name',
        'scopable' => 'scopable',
        'sortOrder' => 'sort_order',
        'type' => 'type',
        'unique' => 'unique',
        'useableAsGridFilter' => 'useable_as_grid_filter',
        'validationRegexp' => 'validation_regexp',
        'validationRule' => 'validation_rule',
        'wysiwygEnabled' => 'wysiwyg_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowedExtensions' => 'setAllowedExtensions',
        'availableLocales' => 'setAvailableLocales',
        'code' => 'setCode',
        'dateMax' => 'setDateMax',
        'dateMin' => 'setDateMin',
        'decimalsAllowed' => 'setDecimalsAllowed',
        'defaultMetricUnit' => 'setDefaultMetricUnit',
        'defaultValue' => 'setDefaultValue',
        'group' => 'setGroup',
        'groupLabels' => 'setGroupLabels',
        'labels' => 'setLabels',
        'localizable' => 'setLocalizable',
        'maxCharacters' => 'setMaxCharacters',
        'maxFileSize' => 'setMaxFileSize',
        'metricFamily' => 'setMetricFamily',
        'negativeAllowed' => 'setNegativeAllowed',
        'numberMax' => 'setNumberMax',
        'numberMin' => 'setNumberMin',
        'referenceDataName' => 'setReferenceDataName',
        'scopable' => 'setScopable',
        'sortOrder' => 'setSortOrder',
        'type' => 'setType',
        'unique' => 'setUnique',
        'useableAsGridFilter' => 'setUseableAsGridFilter',
        'validationRegexp' => 'setValidationRegexp',
        'validationRule' => 'setValidationRule',
        'wysiwygEnabled' => 'setWysiwygEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowedExtensions' => 'getAllowedExtensions',
        'availableLocales' => 'getAvailableLocales',
        'code' => 'getCode',
        'dateMax' => 'getDateMax',
        'dateMin' => 'getDateMin',
        'decimalsAllowed' => 'getDecimalsAllowed',
        'defaultMetricUnit' => 'getDefaultMetricUnit',
        'defaultValue' => 'getDefaultValue',
        'group' => 'getGroup',
        'groupLabels' => 'getGroupLabels',
        'labels' => 'getLabels',
        'localizable' => 'getLocalizable',
        'maxCharacters' => 'getMaxCharacters',
        'maxFileSize' => 'getMaxFileSize',
        'metricFamily' => 'getMetricFamily',
        'negativeAllowed' => 'getNegativeAllowed',
        'numberMax' => 'getNumberMax',
        'numberMin' => 'getNumberMin',
        'referenceDataName' => 'getReferenceDataName',
        'scopable' => 'getScopable',
        'sortOrder' => 'getSortOrder',
        'type' => 'getType',
        'unique' => 'getUnique',
        'useableAsGridFilter' => 'getUseableAsGridFilter',
        'validationRegexp' => 'getValidationRegexp',
        'validationRule' => 'getValidationRule',
        'wysiwygEnabled' => 'getWysiwygEnabled'
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

    const TYPE_PIM_CATALOG_IDENTIFIER = 'pim_catalog_identifier';
    const TYPE_PIM_CATALOG_METRIC = 'pim_catalog_metric';
    const TYPE_PIM_CATALOG_NUMBER = 'pim_catalog_number';
    const TYPE_PIM_CATALOG_REFERENCE_DATA_MULTI_SELECT = 'pim_catalog_reference_data_multi_select';
    const TYPE_PIM_CATALOG_REFERENCE_DATA_SIMPLE_SELECT = 'pim_catalog_reference_data_simple_select';
    const TYPE_PIM_CATALOG_SIMPLESELECT = 'pim_catalog_simpleselect';
    const TYPE_PIM_CATALOG_MULTISELECT = 'pim_catalog_multiselect';
    const TYPE_PIM_CATALOG_DATE = 'pim_catalog_date';
    const TYPE_PIM_CATALOG_TEXTAREA = 'pim_catalog_textarea';
    const TYPE_PIM_CATALOG_TEXT = 'pim_catalog_text';
    const TYPE_PIM_CATALOG_FILE = 'pim_catalog_file';
    const TYPE_PIM_CATALOG_IMAGE = 'pim_catalog_image';
    const TYPE_PIM_CATALOG_PRICE_COLLECTION = 'pim_catalog_price_collection';
    const TYPE_PIM_CATALOG_BOOLEAN = 'pim_catalog_boolean';
    const TYPE_AKENEO_REFERENCE_ENTITY = 'akeneo_reference_entity';
    const TYPE_AKENEO_REFERENCE_ENTITY_COLLECTION = 'akeneo_reference_entity_collection';
    const TYPE_PIM_CATALOG_ASSET_COLLECTION = 'pim_catalog_asset_collection';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PIM_CATALOG_IDENTIFIER,
            self::TYPE_PIM_CATALOG_METRIC,
            self::TYPE_PIM_CATALOG_NUMBER,
            self::TYPE_PIM_CATALOG_REFERENCE_DATA_MULTI_SELECT,
            self::TYPE_PIM_CATALOG_REFERENCE_DATA_SIMPLE_SELECT,
            self::TYPE_PIM_CATALOG_SIMPLESELECT,
            self::TYPE_PIM_CATALOG_MULTISELECT,
            self::TYPE_PIM_CATALOG_DATE,
            self::TYPE_PIM_CATALOG_TEXTAREA,
            self::TYPE_PIM_CATALOG_TEXT,
            self::TYPE_PIM_CATALOG_FILE,
            self::TYPE_PIM_CATALOG_IMAGE,
            self::TYPE_PIM_CATALOG_PRICE_COLLECTION,
            self::TYPE_PIM_CATALOG_BOOLEAN,
            self::TYPE_AKENEO_REFERENCE_ENTITY,
            self::TYPE_AKENEO_REFERENCE_ENTITY_COLLECTION,
            self::TYPE_PIM_CATALOG_ASSET_COLLECTION,
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
        $this->container['allowedExtensions'] = $data['allowedExtensions'] ?? null;
        $this->container['availableLocales'] = $data['availableLocales'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['dateMax'] = $data['dateMax'] ?? null;
        $this->container['dateMin'] = $data['dateMin'] ?? null;
        $this->container['decimalsAllowed'] = $data['decimalsAllowed'] ?? null;
        $this->container['defaultMetricUnit'] = $data['defaultMetricUnit'] ?? null;
        $this->container['defaultValue'] = $data['defaultValue'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['groupLabels'] = $data['groupLabels'] ?? null;
        $this->container['labels'] = $data['labels'] ?? null;
        $this->container['localizable'] = $data['localizable'] ?? false;
        $this->container['maxCharacters'] = $data['maxCharacters'] ?? null;
        $this->container['maxFileSize'] = $data['maxFileSize'] ?? null;
        $this->container['metricFamily'] = $data['metricFamily'] ?? null;
        $this->container['negativeAllowed'] = $data['negativeAllowed'] ?? null;
        $this->container['numberMax'] = $data['numberMax'] ?? null;
        $this->container['numberMin'] = $data['numberMin'] ?? null;
        $this->container['referenceDataName'] = $data['referenceDataName'] ?? null;
        $this->container['scopable'] = $data['scopable'] ?? false;
        $this->container['sortOrder'] = $data['sortOrder'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['unique'] = $data['unique'] ?? null;
        $this->container['useableAsGridFilter'] = $data['useableAsGridFilter'] ?? null;
        $this->container['validationRegexp'] = $data['validationRegexp'] ?? null;
        $this->container['validationRule'] = $data['validationRule'] ?? null;
        $this->container['wysiwygEnabled'] = $data['wysiwygEnabled'] ?? null;
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
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets allowedExtensions
     *
     * @return string[]|null
     */
    public function getAllowedExtensions()
    {
        return $this->container['allowedExtensions'];
    }

    /**
     * Sets allowedExtensions
     *
     * @param string[]|null $allowedExtensions Extensions allowed when the attribute type is `pim_catalog_file` or `pim_catalog_image`
     *
     * @return self
     */
    public function setAllowedExtensions($allowedExtensions)
    {
        $this->container['allowedExtensions'] = $allowedExtensions;

        return $this;
    }

    /**
     * Gets availableLocales
     *
     * @return string[]|null
     */
    public function getAvailableLocales()
    {
        return $this->container['availableLocales'];
    }

    /**
     * Sets availableLocales
     *
     * @param string[]|null $availableLocales To make the attribute locale specfic, specify here for which locales it is specific
     *
     * @return self
     */
    public function setAvailableLocales($availableLocales)
    {
        $this->container['availableLocales'] = $availableLocales;

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
     * @param string $code Attribute code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets dateMax
     *
     * @return \DateTime|null
     */
    public function getDateMax()
    {
        return $this->container['dateMax'];
    }

    /**
     * Sets dateMax
     *
     * @param \DateTime|null $dateMax Maximum date allowed when the attribute type is `pim_catalog_date`
     *
     * @return self
     */
    public function setDateMax($dateMax)
    {
        $this->container['dateMax'] = $dateMax;

        return $this;
    }

    /**
     * Gets dateMin
     *
     * @return \DateTime|null
     */
    public function getDateMin()
    {
        return $this->container['dateMin'];
    }

    /**
     * Sets dateMin
     *
     * @param \DateTime|null $dateMin Minimum date allowed when the attribute type is `pim_catalog_date`
     *
     * @return self
     */
    public function setDateMin($dateMin)
    {
        $this->container['dateMin'] = $dateMin;

        return $this;
    }

    /**
     * Gets decimalsAllowed
     *
     * @return bool|null
     */
    public function getDecimalsAllowed()
    {
        return $this->container['decimalsAllowed'];
    }

    /**
     * Sets decimalsAllowed
     *
     * @param bool|null $decimalsAllowed Whether decimals are allowed when the attribute type is `pim_catalog_metric`, `pim_catalog_price` or `pim_catalog_number`
     *
     * @return self
     */
    public function setDecimalsAllowed($decimalsAllowed)
    {
        $this->container['decimalsAllowed'] = $decimalsAllowed;

        return $this;
    }

    /**
     * Gets defaultMetricUnit
     *
     * @return string|null
     */
    public function getDefaultMetricUnit()
    {
        return $this->container['defaultMetricUnit'];
    }

    /**
     * Sets defaultMetricUnit
     *
     * @param string|null $defaultMetricUnit Default metric unit when the attribute type is `pim_catalog_metric`
     *
     * @return self
     */
    public function setDefaultMetricUnit($defaultMetricUnit)
    {
        $this->container['defaultMetricUnit'] = $defaultMetricUnit;

        return $this;
    }

    /**
     * Gets defaultValue
     *
     * @return bool|null
     */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
     * Sets defaultValue
     *
     * @param bool|null $defaultValue Default value for a Yes/No attribute, applied when creating a new product or product model (only available since the 5.0)
     *
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string $group Attribute group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets groupLabels
     *
     * @return \Efsa\AkeneoApi\Model\ApiRestV1AttributesGroupLabels|null
     */
    public function getGroupLabels()
    {
        return $this->container['groupLabels'];
    }

    /**
     * Sets groupLabels
     *
     * @param \Efsa\AkeneoApi\Model\ApiRestV1AttributesGroupLabels|null $groupLabels groupLabels
     *
     * @return self
     */
    public function setGroupLabels($groupLabels)
    {
        $this->container['groupLabels'] = $groupLabels;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \Efsa\AkeneoApi\Model\ApiRestV1AssetFamiliesAssetFamilyCodeAttributesLabels|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Efsa\AkeneoApi\Model\ApiRestV1AssetFamiliesAssetFamilyCodeAttributesLabels|null $labels labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

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
     * @param bool|null $localizable Whether the attribute is localizable, i.e. can have one value by locale
     *
     * @return self
     */
    public function setLocalizable($localizable)
    {
        $this->container['localizable'] = $localizable;

        return $this;
    }

    /**
     * Gets maxCharacters
     *
     * @return int|null
     */
    public function getMaxCharacters()
    {
        return $this->container['maxCharacters'];
    }

    /**
     * Sets maxCharacters
     *
     * @param int|null $maxCharacters Number maximum of characters allowed for the value of the attribute when the attribute type is `pim_catalog_text`, `pim_catalog_textarea` or `pim_catalog_identifier`
     *
     * @return self
     */
    public function setMaxCharacters($maxCharacters)
    {
        $this->container['maxCharacters'] = $maxCharacters;

        return $this;
    }

    /**
     * Gets maxFileSize
     *
     * @return string|null
     */
    public function getMaxFileSize()
    {
        return $this->container['maxFileSize'];
    }

    /**
     * Sets maxFileSize
     *
     * @param string|null $maxFileSize Max file size in MB when the attribute type is `pim_catalog_file` or `pim_catalog_image`
     *
     * @return self
     */
    public function setMaxFileSize($maxFileSize)
    {
        $this->container['maxFileSize'] = $maxFileSize;

        return $this;
    }

    /**
     * Gets metricFamily
     *
     * @return string|null
     */
    public function getMetricFamily()
    {
        return $this->container['metricFamily'];
    }

    /**
     * Sets metricFamily
     *
     * @param string|null $metricFamily Metric family when the attribute type is `pim_catalog_metric`
     *
     * @return self
     */
    public function setMetricFamily($metricFamily)
    {
        $this->container['metricFamily'] = $metricFamily;

        return $this;
    }

    /**
     * Gets negativeAllowed
     *
     * @return bool|null
     */
    public function getNegativeAllowed()
    {
        return $this->container['negativeAllowed'];
    }

    /**
     * Sets negativeAllowed
     *
     * @param bool|null $negativeAllowed Whether negative values are allowed when the attribute type is `pim_catalog_metric` or `pim_catalog_number`
     *
     * @return self
     */
    public function setNegativeAllowed($negativeAllowed)
    {
        $this->container['negativeAllowed'] = $negativeAllowed;

        return $this;
    }

    /**
     * Gets numberMax
     *
     * @return string|null
     */
    public function getNumberMax()
    {
        return $this->container['numberMax'];
    }

    /**
     * Sets numberMax
     *
     * @param string|null $numberMax Maximum integer value allowed when the attribute type is `pim_catalog_metric`, `pim_catalog_price` or `pim_catalog_number`
     *
     * @return self
     */
    public function setNumberMax($numberMax)
    {
        $this->container['numberMax'] = $numberMax;

        return $this;
    }

    /**
     * Gets numberMin
     *
     * @return string|null
     */
    public function getNumberMin()
    {
        return $this->container['numberMin'];
    }

    /**
     * Sets numberMin
     *
     * @param string|null $numberMin Minimum integer value allowed when the attribute type is `pim_catalog_metric`, `pim_catalog_price` or `pim_catalog_number`
     *
     * @return self
     */
    public function setNumberMin($numberMin)
    {
        $this->container['numberMin'] = $numberMin;

        return $this;
    }

    /**
     * Gets referenceDataName
     *
     * @return string|null
     */
    public function getReferenceDataName()
    {
        return $this->container['referenceDataName'];
    }

    /**
     * Sets referenceDataName
     *
     * @param string|null $referenceDataName Reference entity code when the attribute type is `akeneo_reference_entity` or `akeneo_reference_entity_collection` OR Asset family code when the attribute type is `pim_catalog_asset_collection`
     *
     * @return self
     */
    public function setReferenceDataName($referenceDataName)
    {
        $this->container['referenceDataName'] = $referenceDataName;

        return $this;
    }

    /**
     * Gets scopable
     *
     * @return bool|null
     */
    public function getScopable()
    {
        return $this->container['scopable'];
    }

    /**
     * Sets scopable
     *
     * @param bool|null $scopable Whether the attribute is scopable, i.e. can have one value by channel
     *
     * @return self
     */
    public function setScopable($scopable)
    {
        $this->container['scopable'] = $scopable;

        return $this;
    }

    /**
     * Gets sortOrder
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
     * Sets sortOrder
     *
     * @param int|null $sortOrder Order of the attribute in its group
     *
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Attribute type
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets unique
     *
     * @return bool|null
     */
    public function getUnique()
    {
        return $this->container['unique'];
    }

    /**
     * Sets unique
     *
     * @param bool|null $unique Whether two values for the attribute cannot be the same
     *
     * @return self
     */
    public function setUnique($unique)
    {
        $this->container['unique'] = $unique;

        return $this;
    }

    /**
     * Gets useableAsGridFilter
     *
     * @return bool|null
     */
    public function getUseableAsGridFilter()
    {
        return $this->container['useableAsGridFilter'];
    }

    /**
     * Sets useableAsGridFilter
     *
     * @param bool|null $useableAsGridFilter Whether the attribute can be used as a filter for the product grid in the PIM user interface
     *
     * @return self
     */
    public function setUseableAsGridFilter($useableAsGridFilter)
    {
        $this->container['useableAsGridFilter'] = $useableAsGridFilter;

        return $this;
    }

    /**
     * Gets validationRegexp
     *
     * @return string|null
     */
    public function getValidationRegexp()
    {
        return $this->container['validationRegexp'];
    }

    /**
     * Sets validationRegexp
     *
     * @param string|null $validationRegexp Regexp expression used to validate any attribute value when the attribute type is `pim_catalog_text` or `pim_catalog_identifier`
     *
     * @return self
     */
    public function setValidationRegexp($validationRegexp)
    {
        $this->container['validationRegexp'] = $validationRegexp;

        return $this;
    }

    /**
     * Gets validationRule
     *
     * @return string|null
     */
    public function getValidationRule()
    {
        return $this->container['validationRule'];
    }

    /**
     * Sets validationRule
     *
     * @param string|null $validationRule Validation rule type used to validate any attribute value when the attribute type is `pim_catalog_text` or `pim_catalog_identifier`
     *
     * @return self
     */
    public function setValidationRule($validationRule)
    {
        $this->container['validationRule'] = $validationRule;

        return $this;
    }

    /**
     * Gets wysiwygEnabled
     *
     * @return bool|null
     */
    public function getWysiwygEnabled()
    {
        return $this->container['wysiwygEnabled'];
    }

    /**
     * Sets wysiwygEnabled
     *
     * @param bool|null $wysiwygEnabled Whether the WYSIWYG interface is shown when the attribute type is `pim_catalog_textarea`
     *
     * @return self
     */
    public function setWysiwygEnabled($wysiwygEnabled)
    {
        $this->container['wysiwygEnabled'] = $wysiwygEnabled;

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

