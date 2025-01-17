<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: zeebe.proto

namespace Camundity\PhpZeebe\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway_protocol.ThrowErrorRequest</code>
 */
class ThrowErrorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * the unique job identifier, as obtained when activating the job
     *
     * Generated from protobuf field <code>int64 jobKey = 1;</code>
     */
    protected $jobKey = 0;
    /**
     * the error code that will be matched with an error catch event
     *
     * Generated from protobuf field <code>string errorCode = 2;</code>
     */
    protected $errorCode = '';
    /**
     * an optional error message that provides additional context
     *
     * Generated from protobuf field <code>string errorMessage = 3;</code>
     */
    protected $errorMessage = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $jobKey
     *           the unique job identifier, as obtained when activating the job
     *     @type string $errorCode
     *           the error code that will be matched with an error catch event
     *     @type string $errorMessage
     *           an optional error message that provides additional context
     * }
     */
    public function __construct($data = NULL) {
        \Camundity\PhpZeebe\Command\Zeebe::initOnce();
        parent::__construct($data);
    }

    /**
     * the unique job identifier, as obtained when activating the job
     *
     * Generated from protobuf field <code>int64 jobKey = 1;</code>
     * @return int|string
     */
    public function getJobKey()
    {
        return $this->jobKey;
    }

    /**
     * the unique job identifier, as obtained when activating the job
     *
     * Generated from protobuf field <code>int64 jobKey = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setJobKey($var)
    {
        GPBUtil::checkInt64($var);
        $this->jobKey = $var;

        return $this;
    }

    /**
     * the error code that will be matched with an error catch event
     *
     * Generated from protobuf field <code>string errorCode = 2;</code>
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * the error code that will be matched with an error catch event
     *
     * Generated from protobuf field <code>string errorCode = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->errorCode = $var;

        return $this;
    }

    /**
     * an optional error message that provides additional context
     *
     * Generated from protobuf field <code>string errorMessage = 3;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * an optional error message that provides additional context
     *
     * Generated from protobuf field <code>string errorMessage = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->errorMessage = $var;

        return $this;
    }

}

