<?php
/**
 * Address
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Housemates Connect API
 *
 * This is the API documentation for the Housemates Connect API.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: dev@housemates.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use ArrayAccess;
use InvalidArgumentException;
use JsonSerializable;
use OpenAPI\Client\ObjectSerializer;
use ReturnTypeWillChange;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Address implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Address';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'first_line' => 'string',
        'second_line' => 'string',
        'city' => 'string',
        'region' => 'string',
        'postcode' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'first_line' => null,
        'second_line' => null,
        'city' => null,
        'region' => null,
        'postcode' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'first_line' => false,
        'second_line' => true,
        'city' => false,
        'region' => true,
        'postcode' => false
    ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'first_line' => 'first_line',
        'second_line' => 'second_line',
        'city' => 'city',
        'region' => 'region',
        'postcode' => 'postcode'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_line' => 'setFirstLine',
        'second_line' => 'setSecondLine',
        'city' => 'setCity',
        'region' => 'setRegion',
        'postcode' => 'setPostcode'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_line' => 'getFirstLine',
        'second_line' => 'getSecondLine',
        'city' => 'getCity',
        'region' => 'getRegion',
        'postcode' => 'getPostcode'
    ];
    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var boolean[]
     */
    protected array $openAPINullablesSetToNull = [];
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param  mixed[]  $data  Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('first_line', $data ?? [], null);
        $this->setIfExists('second_line', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     *
     * @param  string  $variableName
     * @param  array  $fields
     * @param  mixed  $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName,
                $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Checks if a property is nullable
     *
     * @param  string  $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

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
     * Checks if a nullable property is set to null.
     *
     * @param  string  $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Gets first_line
     *
     * @return string|null
     */
    public function getFirstLine()
    {
        return $this->container['first_line'];
    }

    /**
     * Sets first_line
     *
     * @param  string|null  $first_line  first_line
     *
     * @return self
     */
    public function setFirstLine($first_line)
    {
        if (is_null($first_line)) {
            throw new InvalidArgumentException('non-nullable first_line cannot be null');
        }
        $this->container['first_line'] = $first_line;

        return $this;
    }

    /**
     * Gets second_line
     *
     * @return string|null
     */
    public function getSecondLine()
    {
        return $this->container['second_line'];
    }

    /**
     * Sets second_line
     *
     * @param  string|null  $second_line  second_line
     *
     * @return self
     */
    public function setSecondLine($second_line)
    {
        if (is_null($second_line)) {
            array_push($this->openAPINullablesSetToNull, 'second_line');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('second_line', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['second_line'] = $second_line;

        return $this;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param  boolean[]  $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param  string|null  $city  city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param  string|null  $region  region
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            array_push($this->openAPINullablesSetToNull, 'region');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('region', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param  string|null  $postcode  postcode
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        if (is_null($postcode)) {
            throw new InvalidArgumentException('non-nullable postcode cannot be null');
        }
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer  $offset  Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer  $offset  Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  int|null  $offset  Offset
     * @param  mixed  $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
     * @param  integer  $offset  Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
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
    #[ReturnTypeWillChange]
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


