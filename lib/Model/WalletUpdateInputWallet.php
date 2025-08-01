<?php
/**
 * WalletUpdateInputWallet
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
 * WalletUpdateInputWallet Class Doc Comment
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WalletUpdateInputWallet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WalletUpdateInput_wallet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'expiration_at' => '\DateTime',
        'invoice_requires_successful_payment' => 'bool',
        'recurring_transaction_rules' => '\Lago\LagoPhpClient\Model\WalletUpdateInputWalletRecurringTransactionRulesInner[]',
        'applies_to' => '\Lago\LagoPhpClient\Model\WalletCreateInputWalletAppliesTo'
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
        'expiration_at' => 'date-time',
        'invoice_requires_successful_payment' => null,
        'recurring_transaction_rules' => null,
        'applies_to' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
        'expiration_at' => true,
        'invoice_requires_successful_payment' => false,
        'recurring_transaction_rules' => false,
        'applies_to' => false
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
        'expiration_at' => 'expiration_at',
        'invoice_requires_successful_payment' => 'invoice_requires_successful_payment',
        'recurring_transaction_rules' => 'recurring_transaction_rules',
        'applies_to' => 'applies_to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'expiration_at' => 'setExpirationAt',
        'invoice_requires_successful_payment' => 'setInvoiceRequiresSuccessfulPayment',
        'recurring_transaction_rules' => 'setRecurringTransactionRules',
        'applies_to' => 'setAppliesTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'expiration_at' => 'getExpirationAt',
        'invoice_requires_successful_payment' => 'getInvoiceRequiresSuccessfulPayment',
        'recurring_transaction_rules' => 'getRecurringTransactionRules',
        'applies_to' => 'getAppliesTo'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('expiration_at', $data ?? [], null);
        $this->setIfExists('invoice_requires_successful_payment', $data ?? [], null);
        $this->setIfExists('recurring_transaction_rules', $data ?? [], null);
        $this->setIfExists('applies_to', $data ?? [], null);
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
     * @param string|null $name The name of the wallet.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets expiration_at
     *
     * @return \DateTime|null
     */
    public function getExpirationAt()
    {
        return $this->container['expiration_at'];
    }

    /**
     * Sets expiration_at
     *
     * @param \DateTime|null $expiration_at The date and time that determines when the wallet will expire. It follows the ISO 8601 datetime format and is expressed in Coordinated Universal Time (UTC).
     *
     * @return self
     */
    public function setExpirationAt($expiration_at)
    {
        if (is_null($expiration_at)) {
            array_push($this->openAPINullablesSetToNull, 'expiration_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expiration_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expiration_at'] = $expiration_at;

        return $this;
    }

    /**
     * Gets invoice_requires_successful_payment
     *
     * @return bool|null
     */
    public function getInvoiceRequiresSuccessfulPayment()
    {
        return $this->container['invoice_requires_successful_payment'];
    }

    /**
     * Sets invoice_requires_successful_payment
     *
     * @param bool|null $invoice_requires_successful_payment A boolean setting that, when set to true, delays issuing an invoice for a wallet top-up until a successful payment is made; if false, the invoice is issued immediately upon wallet top-up, regardless of the payment status. Default value of false.
     *
     * @return self
     */
    public function setInvoiceRequiresSuccessfulPayment($invoice_requires_successful_payment)
    {
        if (is_null($invoice_requires_successful_payment)) {
            throw new \InvalidArgumentException('non-nullable invoice_requires_successful_payment cannot be null');
        }
        $this->container['invoice_requires_successful_payment'] = $invoice_requires_successful_payment;

        return $this;
    }

    /**
     * Gets recurring_transaction_rules
     *
     * @return \Lago\LagoPhpClient\Model\WalletUpdateInputWalletRecurringTransactionRulesInner[]|null
     */
    public function getRecurringTransactionRules()
    {
        return $this->container['recurring_transaction_rules'];
    }

    /**
     * Sets recurring_transaction_rules
     *
     * @param \Lago\LagoPhpClient\Model\WalletUpdateInputWalletRecurringTransactionRulesInner[]|null $recurring_transaction_rules List of recurring transaction rules. Currently, we only allow one recurring rule per wallet.
     *
     * @return self
     */
    public function setRecurringTransactionRules($recurring_transaction_rules)
    {
        if (is_null($recurring_transaction_rules)) {
            throw new \InvalidArgumentException('non-nullable recurring_transaction_rules cannot be null');
        }
        $this->container['recurring_transaction_rules'] = $recurring_transaction_rules;

        return $this;
    }

    /**
     * Gets applies_to
     *
     * @return \Lago\LagoPhpClient\Model\WalletCreateInputWalletAppliesTo|null
     */
    public function getAppliesTo()
    {
        return $this->container['applies_to'];
    }

    /**
     * Sets applies_to
     *
     * @param \Lago\LagoPhpClient\Model\WalletCreateInputWalletAppliesTo|null $applies_to applies_to
     *
     * @return self
     */
    public function setAppliesTo($applies_to)
    {
        if (is_null($applies_to)) {
            throw new \InvalidArgumentException('non-nullable applies_to cannot be null');
        }
        $this->container['applies_to'] = $applies_to;

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


