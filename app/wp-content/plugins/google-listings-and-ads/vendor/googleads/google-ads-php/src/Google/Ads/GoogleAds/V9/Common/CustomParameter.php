<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/common/custom_parameter.proto

namespace Google\Ads\GoogleAds\V9\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mapping that can be used by custom parameter tags in a
 * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.common.CustomParameter</code>
 */
class CustomParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * The key matching the parameter tag name.
     *
     * Generated from protobuf field <code>optional string key = 3;</code>
     */
    protected $key = null;
    /**
     * The value to be substituted.
     *
     * Generated from protobuf field <code>optional string value = 4;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           The key matching the parameter tag name.
     *     @type string $value
     *           The value to be substituted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Common\CustomParameter::initOnce();
        parent::__construct($data);
    }

    /**
     * The key matching the parameter tag name.
     *
     * Generated from protobuf field <code>optional string key = 3;</code>
     * @return string
     */
    public function getKey()
    {
        return isset($this->key) ? $this->key : '';
    }

    public function hasKey()
    {
        return isset($this->key);
    }

    public function clearKey()
    {
        unset($this->key);
    }

    /**
     * The key matching the parameter tag name.
     *
     * Generated from protobuf field <code>optional string key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * The value to be substituted.
     *
     * Generated from protobuf field <code>optional string value = 4;</code>
     * @return string
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : '';
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * The value to be substituted.
     *
     * Generated from protobuf field <code>optional string value = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

