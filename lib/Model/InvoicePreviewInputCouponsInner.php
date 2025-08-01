<?php
/**
 * InvoicePreviewInputCouponsInner
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lago API documentation
 *
 * Lago API allows your application to push customer information and metrics (events) from your application to the billing application.
 *
 * The version of the OpenAPI document: 1.31.0
 * Contact: tech@getlago.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Lago\LagoPhpClient\Model;

use \ArrayAccess;
use \Lago\LagoPhpClient\ObjectSerializer;

/**
 * InvoicePreviewInputCouponsInner Class Doc Comment
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InvoicePreviewInputCouponsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoicePreviewInput_coupons_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'code' => 'string',
        'coupon_type' => 'string',
        'amount_cents' => 'int',
        'amount_currency' => '\Lago\LagoPhpClient\Model\CurrencyOrNull',
        'percentage_rate' => 'string',
        'frequency_duration' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'code' => null,
        'coupon_type' => null,
        'amount_cents' => null,
        'amount_currency' => null,
        'percentage_rate' => null,
        'frequency_duration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'code' => false,
        'coupon_type' => false,
        'amount_cents' => true,
        'amount_currency' => true,
        'percentage_rate' => true,
        'frequency_duration' => true
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
        'name' => 'name',
        'code' => 'code',
        'coupon_type' => 'coupon_type',
        'amount_cents' => 'amount_cents',
        'amount_currency' => 'amount_currency',
        'percentage_rate' => 'percentage_rate',
        'frequency_duration' => 'frequency_duration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'code' => 'setCode',
        'coupon_type' => 'setCouponType',
        'amount_cents' => 'setAmountCents',
        'amount_currency' => 'setAmountCurrency',
        'percentage_rate' => 'setPercentageRate',
        'frequency_duration' => 'setFrequencyDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'code' => 'getCode',
        'coupon_type' => 'getCouponType',
        'amount_cents' => 'getAmountCents',
        'amount_currency' => 'getAmountCurrency',
        'percentage_rate' => 'getPercentageRate',
        'frequency_duration' => 'getFrequencyDuration'
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

    public const COUPON_TYPE_FIXED_AMOUNT = 'fixed_amount';
    public const COUPON_TYPE_PERCENTAGE = 'percentage';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCouponTypeAllowableValues()
    {
        return [
            self::COUPON_TYPE_FIXED_AMOUNT,
            self::COUPON_TYPE_PERCENTAGE,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('coupon_type', $data ?? [], null);
        $this->setIfExists('amount_cents', $data ?? [], null);
        $this->setIfExists('amount_currency', $data ?? [], null);
        $this->setIfExists('percentage_rate', $data ?? [], null);
        $this->setIfExists('frequency_duration', $data ?? [], null);
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

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        $allowedValues = $this->getCouponTypeAllowableValues();
        if (!is_null($this->container['coupon_type']) && !in_array($this->container['coupon_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'coupon_type', must be one of '%s'",
                $this->container['coupon_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['percentage_rate']) && !preg_match("/^[0-9]+.?[0-9]*$/", $this->container['percentage_rate'])) {
            $invalidProperties[] = "invalid value for 'percentage_rate', must be conform to the pattern /^[0-9]+.?[0-9]*$/.";
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
     * @param string|null $name The name of the coupon.
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
     * @param string $code Unique code used to identify the coupon.
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets coupon_type
     *
     * @return string|null
     */
    public function getCouponType()
    {
        return $this->container['coupon_type'];
    }

    /**
     * Sets coupon_type
     *
     * @param string|null $coupon_type The type of the coupon. It can have two possible values: `fixed_amount` or `percentage`.  - If set to `fixed_amount`, the coupon represents a fixed amount discount. - If set to `percentage`, the coupon represents a percentage-based discount.
     *
     * @return self
     */
    public function setCouponType($coupon_type)
    {
        if (is_null($coupon_type)) {
            throw new \InvalidArgumentException('non-nullable coupon_type cannot be null');
        }
        $allowedValues = $this->getCouponTypeAllowableValues();
        if (!in_array($coupon_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'coupon_type', must be one of '%s'",
                    $coupon_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['coupon_type'] = $coupon_type;

        return $this;
    }

    /**
     * Gets amount_cents
     *
     * @return int|null
     */
    public function getAmountCents()
    {
        return $this->container['amount_cents'];
    }

    /**
     * Sets amount_cents
     *
     * @param int|null $amount_cents The amount of the coupon in cents. This field is required only for coupon with `fixed_amount` type.
     *
     * @return self
     */
    public function setAmountCents($amount_cents)
    {
        if (is_null($amount_cents)) {
            array_push($this->openAPINullablesSetToNull, 'amount_cents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_cents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_cents'] = $amount_cents;

        return $this;
    }

    /**
     * Gets amount_currency
     *
     * @return \Lago\LagoPhpClient\Model\CurrencyOrNull|null
     */
    public function getAmountCurrency()
    {
        return $this->container['amount_currency'];
    }

    /**
     * Sets amount_currency
     *
     * @param \Lago\LagoPhpClient\Model\CurrencyOrNull|null $amount_currency The currency of the coupon. This field is required only for coupon with `fixed_amount` type.
     *
     * @return self
     */
    public function setAmountCurrency($amount_currency)
    {
        if (is_null($amount_currency)) {
            array_push($this->openAPINullablesSetToNull, 'amount_currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_currency'] = $amount_currency;

        return $this;
    }

    /**
     * Gets percentage_rate
     *
     * @return string|null
     */
    public function getPercentageRate()
    {
        return $this->container['percentage_rate'];
    }

    /**
     * Sets percentage_rate
     *
     * @param string|null $percentage_rate The percentage rate of the coupon. This field is required only for coupons with a `percentage` coupon type.
     *
     * @return self
     */
    public function setPercentageRate($percentage_rate)
    {
        if (is_null($percentage_rate)) {
            array_push($this->openAPINullablesSetToNull, 'percentage_rate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('percentage_rate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($percentage_rate) && (!preg_match("/^[0-9]+.?[0-9]*$/", ObjectSerializer::toString($percentage_rate)))) {
            throw new \InvalidArgumentException("invalid value for \$percentage_rate when calling InvoicePreviewInputCouponsInner., must conform to the pattern /^[0-9]+.?[0-9]*$/.");
        }

        $this->container['percentage_rate'] = $percentage_rate;

        return $this;
    }

    /**
     * Gets frequency_duration
     *
     * @return int|null
     */
    public function getFrequencyDuration()
    {
        return $this->container['frequency_duration'];
    }

    /**
     * Sets frequency_duration
     *
     * @param int|null $frequency_duration Specifies the number of billing periods to which the coupon applies. This field is required only for coupons with a `recurring` frequency type
     *
     * @return self
     */
    public function setFrequencyDuration($frequency_duration)
    {
        if (is_null($frequency_duration)) {
            array_push($this->openAPINullablesSetToNull, 'frequency_duration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('frequency_duration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['frequency_duration'] = $frequency_duration;

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


