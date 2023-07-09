<?php
/**
 * PropertyWithRooms
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
 * PropertyWithRooms Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PropertyWithRooms implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PropertyWithRooms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'operator_id' => 'string',
        'name' => 'string',
        'slug' => 'string',
        'price_range' => '\OpenAPI\Client\Model\PropertyPriceRange',
        'description' => 'string',
        'rich_description' => 'string',
        'summary' => 'string',
        'amenities' => '\OpenAPI\Client\Model\PropertyAmenities',
        '_links' => '\OpenAPI\Client\Model\HateoasLink[]',
        'coordinates' => '\OpenAPI\Client\Model\PropertyCoordinates',
        'address' => '\OpenAPI\Client\Model\PropertyAddress',
        'currency' => 'string',
        'location' => 'string',
        'location_slug' => 'string',
        'offer_amount' => 'int',
        'virtual_tours' => 'string[]',
        'images' => '\OpenAPI\Client\Model\PropertyImagesInner[]',
        'rooms' => '\OpenAPI\Client\Model\PropertyWithRoomsAllOfRooms[]'
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
        'slug' => null,
        'price_range' => null,
        'description' => null,
        'rich_description' => null,
        'summary' => null,
        'amenities' => null,
        '_links' => null,
        'coordinates' => null,
        'address' => null,
        'currency' => null,
        'location' => null,
        'location_slug' => null,
        'offer_amount' => null,
        'virtual_tours' => null,
        'images' => null,
        'rooms' => null
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
		'slug' => false,
		'price_range' => false,
		'description' => false,
		'rich_description' => false,
		'summary' => false,
		'amenities' => false,
		'_links' => false,
		'coordinates' => false,
		'address' => false,
		'currency' => false,
		'location' => false,
		'location_slug' => false,
		'offer_amount' => false,
		'virtual_tours' => false,
		'images' => false,
		'rooms' => false
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
        'slug' => 'slug',
        'price_range' => 'price_range',
        'description' => 'description',
        'rich_description' => 'rich_description',
        'summary' => 'summary',
        'amenities' => 'amenities',
        '_links' => '_links',
        'coordinates' => 'coordinates',
        'address' => 'address',
        'currency' => 'currency',
        'location' => 'location',
        'location_slug' => 'location_slug',
        'offer_amount' => 'offer_amount',
        'virtual_tours' => 'virtual_tours',
        'images' => 'images',
        'rooms' => 'rooms'
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
        'slug' => 'setSlug',
        'price_range' => 'setPriceRange',
        'description' => 'setDescription',
        'rich_description' => 'setRichDescription',
        'summary' => 'setSummary',
        'amenities' => 'setAmenities',
        '_links' => 'setLinks',
        'coordinates' => 'setCoordinates',
        'address' => 'setAddress',
        'currency' => 'setCurrency',
        'location' => 'setLocation',
        'location_slug' => 'setLocationSlug',
        'offer_amount' => 'setOfferAmount',
        'virtual_tours' => 'setVirtualTours',
        'images' => 'setImages',
        'rooms' => 'setRooms'
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
        'slug' => 'getSlug',
        'price_range' => 'getPriceRange',
        'description' => 'getDescription',
        'rich_description' => 'getRichDescription',
        'summary' => 'getSummary',
        'amenities' => 'getAmenities',
        '_links' => 'getLinks',
        'coordinates' => 'getCoordinates',
        'address' => 'getAddress',
        'currency' => 'getCurrency',
        'location' => 'getLocation',
        'location_slug' => 'getLocationSlug',
        'offer_amount' => 'getOfferAmount',
        'virtual_tours' => 'getVirtualTours',
        'images' => 'getImages',
        'rooms' => 'getRooms'
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
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('price_range', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('rich_description', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('amenities', $data ?? [], null);
        $this->setIfExists('_links', $data ?? [], null);
        $this->setIfExists('coordinates', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('location_slug', $data ?? [], null);
        $this->setIfExists('offer_amount', $data ?? [], null);
        $this->setIfExists('virtual_tours', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
        $this->setIfExists('rooms', $data ?? [], null);
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
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets price_range
     *
     * @return \OpenAPI\Client\Model\PropertyPriceRange|null
     */
    public function getPriceRange()
    {
        return $this->container['price_range'];
    }

    /**
     * Sets price_range
     *
     * @param \OpenAPI\Client\Model\PropertyPriceRange|null $price_range price_range
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
     * Gets amenities
     *
     * @return \OpenAPI\Client\Model\PropertyAmenities|null
     */
    public function getAmenities()
    {
        return $this->container['amenities'];
    }

    /**
     * Sets amenities
     *
     * @param \OpenAPI\Client\Model\PropertyAmenities|null $amenities amenities
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
     * Gets coordinates
     *
     * @return \OpenAPI\Client\Model\PropertyCoordinates|null
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \OpenAPI\Client\Model\PropertyCoordinates|null $coordinates coordinates
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
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets location_slug
     *
     * @return string|null
     */
    public function getLocationSlug()
    {
        return $this->container['location_slug'];
    }

    /**
     * Sets location_slug
     *
     * @param string|null $location_slug location_slug
     *
     * @return self
     */
    public function setLocationSlug($location_slug)
    {
        if (is_null($location_slug)) {
            throw new \InvalidArgumentException('non-nullable location_slug cannot be null');
        }
        $this->container['location_slug'] = $location_slug;

        return $this;
    }

    /**
     * Gets offer_amount
     *
     * @return int|null
     */
    public function getOfferAmount()
    {
        return $this->container['offer_amount'];
    }

    /**
     * Sets offer_amount
     *
     * @param int|null $offer_amount offer_amount
     *
     * @return self
     */
    public function setOfferAmount($offer_amount)
    {
        if (is_null($offer_amount)) {
            throw new \InvalidArgumentException('non-nullable offer_amount cannot be null');
        }
        $this->container['offer_amount'] = $offer_amount;

        return $this;
    }

    /**
     * Gets virtual_tours
     *
     * @return string[]|null
     */
    public function getVirtualTours()
    {
        return $this->container['virtual_tours'];
    }

    /**
     * Sets virtual_tours
     *
     * @param string[]|null $virtual_tours virtual_tours
     *
     * @return self
     */
    public function setVirtualTours($virtual_tours)
    {
        if (is_null($virtual_tours)) {
            throw new \InvalidArgumentException('non-nullable virtual_tours cannot be null');
        }
        $this->container['virtual_tours'] = $virtual_tours;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \OpenAPI\Client\Model\PropertyImagesInner[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \OpenAPI\Client\Model\PropertyImagesInner[]|null $images images
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
     * Gets rooms
     *
     * @return \OpenAPI\Client\Model\PropertyWithRoomsAllOfRooms[]|null
     */
    public function getRooms()
    {
        return $this->container['rooms'];
    }

    /**
     * Sets rooms
     *
     * @param \OpenAPI\Client\Model\PropertyWithRoomsAllOfRooms[]|null $rooms rooms
     *
     * @return self
     */
    public function setRooms($rooms)
    {
        if (is_null($rooms)) {
            throw new \InvalidArgumentException('non-nullable rooms cannot be null');
        }
        $this->container['rooms'] = $rooms;

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


