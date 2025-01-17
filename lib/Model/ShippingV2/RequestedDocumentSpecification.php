<?php
/**
 * RequestedDocumentSpecification
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV2;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * RequestedDocumentSpecification Class Doc Comment
 *
 * @category Class
 * @description The document specifications requested. For calls to the purchaseShipment operation, the shipment purchase fails if the specified document specifications are not among those returned in the response to the getRates operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RequestedDocumentSpecification implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RequestedDocumentSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'format' => '\SellingPartnerApi\Model\ShippingV2\DocumentFormat',
        'size' => '\SellingPartnerApi\Model\ShippingV2\DocumentSize',
        'dpi' => 'int',
        'page_layout' => 'string',
        'need_file_joining' => 'bool',
        'requested_document_types' => '\SellingPartnerApi\Model\ShippingV2\DocumentType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'format' => null,
        'size' => null,
        'dpi' => null,
        'page_layout' => null,
        'need_file_joining' => null,
        'requested_document_types' => null
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
        'format' => 'format',
        'size' => 'size',
        'dpi' => 'dpi',
        'page_layout' => 'pageLayout',
        'need_file_joining' => 'needFileJoining',
        'requested_document_types' => 'requestedDocumentTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'format' => 'setFormat',
        'size' => 'setSize',
        'dpi' => 'setDpi',
        'page_layout' => 'setPageLayout',
        'need_file_joining' => 'setNeedFileJoining',
        'requested_document_types' => 'setRequestedDocumentTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat',
        'size' => 'getSize',
        'dpi' => 'getDpi',
        'page_layout' => 'getPageLayout',
        'need_file_joining' => 'getNeedFileJoining',
        'requested_document_types' => 'getRequestedDocumentTypes'
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
        $this->container['format'] = $data['format'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['dpi'] = $data['dpi'] ?? null;
        $this->container['page_layout'] = $data['page_layout'] ?? null;
        $this->container['need_file_joining'] = $data['need_file_joining'] ?? null;
        $this->container['requested_document_types'] = $data['requested_document_types'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['need_file_joining'] === null) {
            $invalidProperties[] = "'need_file_joining' can't be null";
        }
        if ($this->container['requested_document_types'] === null) {
            $invalidProperties[] = "'requested_document_types' can't be null";
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
     * Gets format
     *
     * @return \SellingPartnerApi\Model\ShippingV2\DocumentFormat
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param \SellingPartnerApi\Model\ShippingV2\DocumentFormat $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }
    /**
     * Gets size
     *
     * @return \SellingPartnerApi\Model\ShippingV2\DocumentSize
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \SellingPartnerApi\Model\ShippingV2\DocumentSize $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }
    /**
     * Gets dpi
     *
     * @return int|null
     */
    public function getDpi()
    {
        return $this->container['dpi'];
    }

    /**
     * Sets dpi
     *
     * @param int|null $dpi The dots per inch (DPI) value used in printing. This value represents a measure of the resolution of the document.
     *
     * @return self
     */
    public function setDpi($dpi)
    {
        $this->container['dpi'] = $dpi;

        return $this;
    }
    /**
     * Gets page_layout
     *
     * @return string|null
     */
    public function getPageLayout()
    {
        return $this->container['page_layout'];
    }

    /**
     * Sets page_layout
     *
     * @param string|null $page_layout Indicates the position of the label on the paper. Should be the same value as returned in getRates response.
     *
     * @return self
     */
    public function setPageLayout($page_layout)
    {
        $this->container['page_layout'] = $page_layout;

        return $this;
    }
    /**
     * Gets need_file_joining
     *
     * @return bool
     */
    public function getNeedFileJoining()
    {
        return $this->container['need_file_joining'];
    }

    /**
     * Sets need_file_joining
     *
     * @param bool $need_file_joining When true, files should be stitched together. Otherwise, files should be returned separately. Defaults to false.
     *
     * @return self
     */
    public function setNeedFileJoining($need_file_joining)
    {
        $this->container['need_file_joining'] = $need_file_joining;

        return $this;
    }
    /**
     * Gets requested_document_types
     *
     * @return \SellingPartnerApi\Model\ShippingV2\DocumentType[]
     */
    public function getRequestedDocumentTypes()
    {
        return $this->container['requested_document_types'];
    }

    /**
     * Sets requested_document_types
     *
     * @param \SellingPartnerApi\Model\ShippingV2\DocumentType[] $requested_document_types A list of the document types requested.
     *
     * @return self
     */
    public function setRequestedDocumentTypes($requested_document_types)
    {
        $this->container['requested_document_types'] = $requested_document_types;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

    /**
     * Enable iterating over all of the model's attributes in $key => $value format
     *
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
        return (function () {
            foreach ($this->container as $key => $value) {
                yield $key => $value;
            }
        })();
    }

    /**
     * Retrieves the property with the given name by converting the property accession
     * to a getter call.
     *
     * @param string $propertyName
     * @return mixed
     */
    public function __get($propertyName)
    {
        // This doesn't make a syntactical difference since PHP is case-insensitive, but
        // makes error messages clearer (e.g. "Call to undefined method getFoo()" rather
        // than "Call to undefined method getfoo()").
        $ucProp = ucfirst($propertyName);
        $getter = "get$ucProp";
        return $this->$getter();
    }

    /**
     * Sets the property with the given name by converting the property accession
     * to a setter call.
     *
     * @param string $propertyName
     * @param mixed $propertyValue
     * @return SellingPartnerApi\Model\ShippingV2\RequestedDocumentSpecification
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


