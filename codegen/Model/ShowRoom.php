<?php
/**
 * ShowRoom
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ShowRoom Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShowRoom implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShowRoom';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'operator_id' => 'string',
        'name' => 'string',
        'max_rooms_left' => 'int',
        'is_available' => 'bool',
        'price' => 'string',
        'is_estimated_price' => 'bool',
        'cancellation' => '\OpenAPI\Client\Model\RoomCancellation',
        'price_range' => '\OpenAPI\Client\Model\RoomPriceRange',
        'coordinates' => '\OpenAPI\Client\Model\RoomCoordinates',
        'address' => '\OpenAPI\Client\Model\PropertyAddress',
        'summary' => 'string',
        'description' => 'string',
        'rich_description' => 'string',
        'amenities' => '\OpenAPI\Client\Model\RoomAmenities',
        'currency' => 'string',
        'images' => '\OpenAPI\Client\Model\RoomImages[]',
        'property' => '\OpenAPI\Client\Model\RoomProperty',
        'booking_periods' => '\OpenAPI\Client\Model\BookingPeriod[]',
        '_links' => '\OpenAPI\Client\Model\HateoasLink[]',
        'universities' => '\OpenAPI\Client\Model\ShowRoomAllOfUniversities[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'operator_id' => null,
        'name' => null,
        'max_rooms_left' => null,
        'is_available' => null,
        'price' => null,
        'is_estimated_price' => null,
        'cancellation' => null,
        'price_range' => null,
        'coordinates' => null,
        'address' => null,
        'summary' => null,
        'description' => null,
        'rich_description' => null,
        'amenities' => null,
        'currency' => null,
        'images' => null,
        'property' => null,
        'booking_periods' => null,
        '_links' => null,
        'universities' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'operator_id' => false,
		'name' => false,
		'max_rooms_left' => false,
		'is_available' => false,
		'price' => false,
		'is_estimated_price' => false,
		'cancellation' => false,
		'price_range' => false,
		'coordinates' => false,
		'address' => false,
		'summary' => false,
		'description' => false,
		'rich_description' => false,
		'amenities' => false,
		'currency' => false,
		'images' => false,
		'property' => false,
		'booking_periods' => false,
		'_links' => false,
		'universities' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'operator_id' => 'operator_id',
        'name' => 'name',
        'max_rooms_left' => 'max_rooms_left',
        'is_available' => 'is_available',
        'price' => 'price',
        'is_estimated_price' => 'is_estimated_price',
        'cancellation' => 'cancellation',
        'price_range' => 'price_range',
        'coordinates' => 'coordinates',
        'address' => 'address',
        'summary' => 'summary',
        'description' => 'description',
        'rich_description' => 'rich_description',
        'amenities' => 'amenities',
        'currency' => 'currency',
        'images' => 'images',
        'property' => 'property',
        'booking_periods' => 'booking_periods',
        '_links' => '_links',
        'universities' => 'universities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'operator_id' => 'setOperatorId',
        'name' => 'setName',
        'max_rooms_left' => 'setMaxRoomsLeft',
        'is_available' => 'setIsAvailable',
        'price' => 'setPrice',
        'is_estimated_price' => 'setIsEstimatedPrice',
        'cancellation' => 'setCancellation',
        'price_range' => 'setPriceRange',
        'coordinates' => 'setCoordinates',
        'address' => 'setAddress',
        'summary' => 'setSummary',
        'description' => 'setDescription',
        'rich_description' => 'setRichDescription',
        'amenities' => 'setAmenities',
        'currency' => 'setCurrency',
        'images' => 'setImages',
        'property' => 'setProperty',
        'booking_periods' => 'setBookingPeriods',
        '_links' => 'setLinks',
        'universities' => 'setUniversities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'operator_id' => 'getOperatorId',
        'name' => 'getName',
        'max_rooms_left' => 'getMaxRoomsLeft',
        'is_available' => 'getIsAvailable',
        'price' => 'getPrice',
        'is_estimated_price' => 'getIsEstimatedPrice',
        'cancellation' => 'getCancellation',
        'price_range' => 'getPriceRange',
        'coordinates' => 'getCoordinates',
        'address' => 'getAddress',
        'summary' => 'getSummary',
        'description' => 'getDescription',
        'rich_description' => 'getRichDescription',
        'amenities' => 'getAmenities',
        'currency' => 'getCurrency',
        'images' => 'getImages',
        'property' => 'getProperty',
        'booking_periods' => 'getBookingPeriods',
        '_links' => 'getLinks',
        'universities' => 'getUniversities'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('operator_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('max_rooms_left', $data ?? [], null);
        $this->setIfExists('is_available', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('is_estimated_price', $data ?? [], null);
        $this->setIfExists('cancellation', $data ?? [], null);
        $this->setIfExists('price_range', $data ?? [], null);
        $this->setIfExists('coordinates', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('rich_description', $data ?? [], null);
        $this->setIfExists('amenities', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
        $this->setIfExists('property', $data ?? [], null);
        $this->setIfExists('booking_periods', $data ?? [], null);
        $this->setIfExists('_links', $data ?? [], null);
        $this->setIfExists('universities', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets operator_id
     *
     * @return string|null
     */
    public function getOperatorId()
    {
        return $this->container['operator_id'];
    }

    /**
     * Sets operator_id
     *
     * @param string|null $operator_id operator_id
     *
     * @return self
     */
    public function setOperatorId($operator_id)
    {
        if (is_null($operator_id)) {
            throw new \InvalidArgumentException('non-nullable operator_id cannot be null');
        }
        $this->container['operator_id'] = $operator_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets max_rooms_left
     *
     * @return int|null
     */
    public function getMaxRoomsLeft()
    {
        return $this->container['max_rooms_left'];
    }

    /**
     * Sets max_rooms_left
     *
     * @param int|null $max_rooms_left max_rooms_left
     *
     * @return self
     */
    public function setMaxRoomsLeft($max_rooms_left)
    {
        if (is_null($max_rooms_left)) {
            throw new \InvalidArgumentException('non-nullable max_rooms_left cannot be null');
        }
        $this->container['max_rooms_left'] = $max_rooms_left;

        return $this;
    }

    /**
     * Gets is_available
     *
     * @return bool|null
     */
    public function getIsAvailable()
    {
        return $this->container['is_available'];
    }

    /**
     * Sets is_available
     *
     * @param bool|null $is_available is_available
     *
     * @return self
     */
    public function setIsAvailable($is_available)
    {
        if (is_null($is_available)) {
            throw new \InvalidArgumentException('non-nullable is_available cannot be null');
        }
        $this->container['is_available'] = $is_available;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets is_estimated_price
     *
     * @return bool|null
     */
    public function getIsEstimatedPrice()
    {
        return $this->container['is_estimated_price'];
    }

    /**
     * Sets is_estimated_price
     *
     * @param bool|null $is_estimated_price is_estimated_price
     *
     * @return self
     */
    public function setIsEstimatedPrice($is_estimated_price)
    {
        if (is_null($is_estimated_price)) {
            throw new \InvalidArgumentException('non-nullable is_estimated_price cannot be null');
        }
        $this->container['is_estimated_price'] = $is_estimated_price;

        return $this;
    }

    /**
     * Gets cancellation
     *
     * @return \OpenAPI\Client\Model\RoomCancellation|null
     */
    public function getCancellation()
    {
        return $this->container['cancellation'];
    }

    /**
     * Sets cancellation
     *
     * @param \OpenAPI\Client\Model\RoomCancellation|null $cancellation cancellation
     *
     * @return self
     */
    public function setCancellation($cancellation)
    {
        if (is_null($cancellation)) {
            throw new \InvalidArgumentException('non-nullable cancellation cannot be null');
        }
        $this->container['cancellation'] = $cancellation;

        return $this;
    }

    /**
     * Gets price_range
     *
     * @return \OpenAPI\Client\Model\RoomPriceRange|null
     */
    public function getPriceRange()
    {
        return $this->container['price_range'];
    }

    /**
     * Sets price_range
     *
     * @param \OpenAPI\Client\Model\RoomPriceRange|null $price_range price_range
     *
     * @return self
     */
    public function setPriceRange($price_range)
    {
        if (is_null($price_range)) {
            throw new \InvalidArgumentException('non-nullable price_range cannot be null');
        }
        $this->container['price_range'] = $price_range;

        return $this;
    }

    /**
     * Gets coordinates
     *
     * @return \OpenAPI\Client\Model\RoomCoordinates|null
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \OpenAPI\Client\Model\RoomCoordinates|null $coordinates coordinates
     *
     * @return self
     */
    public function setCoordinates($coordinates)
    {
        if (is_null($coordinates)) {
            throw new \InvalidArgumentException('non-nullable coordinates cannot be null');
        }
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\PropertyAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\PropertyAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }
        $this->container['summary'] = $summary;

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
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets rich_description
     *
     * @return string|null
     */
    public function getRichDescription()
    {
        return $this->container['rich_description'];
    }

    /**
     * Sets rich_description
     *
     * @param string|null $rich_description rich_description
     *
     * @return self
     */
    public function setRichDescription($rich_description)
    {
        if (is_null($rich_description)) {
            throw new \InvalidArgumentException('non-nullable rich_description cannot be null');
        }
        $this->container['rich_description'] = $rich_description;

        return $this;
    }

    /**
     * Gets amenities
     *
     * @return \OpenAPI\Client\Model\RoomAmenities|null
     */
    public function getAmenities()
    {
        return $this->container['amenities'];
    }

    /**
     * Sets amenities
     *
     * @param \OpenAPI\Client\Model\RoomAmenities|null $amenities amenities
     *
     * @return self
     */
    public function setAmenities($amenities)
    {
        if (is_null($amenities)) {
            throw new \InvalidArgumentException('non-nullable amenities cannot be null');
        }
        $this->container['amenities'] = $amenities;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \OpenAPI\Client\Model\RoomImages[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \OpenAPI\Client\Model\RoomImages[]|null $images images
     *
     * @return self
     */
    public function setImages($images)
    {
        if (is_null($images)) {
            throw new \InvalidArgumentException('non-nullable images cannot be null');
        }
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets property
     *
     * @return \OpenAPI\Client\Model\RoomProperty|null
     */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
     * Sets property
     *
     * @param \OpenAPI\Client\Model\RoomProperty|null $property property
     *
     * @return self
     */
    public function setProperty($property)
    {
        if (is_null($property)) {
            throw new \InvalidArgumentException('non-nullable property cannot be null');
        }
        $this->container['property'] = $property;

        return $this;
    }

    /**
     * Gets booking_periods
     *
     * @return \OpenAPI\Client\Model\BookingPeriod[]|null
     */
    public function getBookingPeriods()
    {
        return $this->container['booking_periods'];
    }

    /**
     * Sets booking_periods
     *
     * @param \OpenAPI\Client\Model\BookingPeriod[]|null $booking_periods booking_periods
     *
     * @return self
     */
    public function setBookingPeriods($booking_periods)
    {
        if (is_null($booking_periods)) {
            throw new \InvalidArgumentException('non-nullable booking_periods cannot be null');
        }
        $this->container['booking_periods'] = $booking_periods;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \OpenAPI\Client\Model\HateoasLink[]|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \OpenAPI\Client\Model\HateoasLink[]|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links)
    {
        if (is_null($_links)) {
            throw new \InvalidArgumentException('non-nullable _links cannot be null');
        }
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets universities
     *
     * @return \OpenAPI\Client\Model\ShowRoomAllOfUniversities[]|null
     */
    public function getUniversities()
    {
        return $this->container['universities'];
    }

    /**
     * Sets universities
     *
     * @param \OpenAPI\Client\Model\ShowRoomAllOfUniversities[]|null $universities universities
     *
     * @return self
     */
    public function setUniversities($universities)
    {
        if (is_null($universities)) {
            throw new \InvalidArgumentException('non-nullable universities cannot be null');
        }
        $this->container['universities'] = $universities;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
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
     * @param integer $offset Offset
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
    #[\ReturnTypeWillChange]
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


