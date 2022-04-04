<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1/operations.proto

namespace Google\Cloud\Functions\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata describing an [Operation][google.longrunning.Operation]
 *
 * Generated from protobuf message <code>google.cloud.functions.v1.OperationMetadataV1</code>
 */
class OperationMetadataV1 extends \Google\Protobuf\Internal\Message
{
    /**
     * Target of the operation - for example
     * `projects/project-1/locations/region-1/functions/function-1`
     *
     * Generated from protobuf field <code>string target = 1;</code>
     */
    protected $target = '';
    /**
     * Type of operation.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1.OperationType type = 2;</code>
     */
    protected $type = 0;
    /**
     * The original request that started the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Any request = 3;</code>
     */
    protected $request = null;
    /**
     * Version id of the function created or updated by an API call.
     * This field is only populated for Create and Update operations.
     *
     * Generated from protobuf field <code>int64 version_id = 4;</code>
     */
    protected $version_id = 0;
    /**
     * The last update timestamp of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     */
    protected $update_time = null;
    /**
     * The Cloud Build ID of the function created or updated by an API call.
     * This field is only populated for Create and Update operations.
     *
     * Generated from protobuf field <code>string build_id = 6;</code>
     */
    protected $build_id = '';
    /**
     * An identifier for Firebase function sources. Disclaimer: This field is only
     * supported for Firebase function deployments.
     *
     * Generated from protobuf field <code>string source_token = 7;</code>
     */
    protected $source_token = '';
    /**
     * The Cloud Build Name of the function deployment.
     * This field is only populated for Create and Update operations.
     * `projects/<project-number>/locations/<region>/builds/<build-id>`.
     *
     * Generated from protobuf field <code>string build_name = 8;</code>
     */
    protected $build_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target
     *           Target of the operation - for example
     *           `projects/project-1/locations/region-1/functions/function-1`
     *     @type int $type
     *           Type of operation.
     *     @type \Google\Protobuf\Any $request
     *           The original request that started the operation.
     *     @type int|string $version_id
     *           Version id of the function created or updated by an API call.
     *           This field is only populated for Create and Update operations.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The last update timestamp of the operation.
     *     @type string $build_id
     *           The Cloud Build ID of the function created or updated by an API call.
     *           This field is only populated for Create and Update operations.
     *     @type string $source_token
     *           An identifier for Firebase function sources. Disclaimer: This field is only
     *           supported for Firebase function deployments.
     *     @type string $build_name
     *           The Cloud Build Name of the function deployment.
     *           This field is only populated for Create and Update operations.
     *           `projects/<project-number>/locations/<region>/builds/<build-id>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V1\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Target of the operation - for example
     * `projects/project-1/locations/region-1/functions/function-1`
     *
     * Generated from protobuf field <code>string target = 1;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Target of the operation - for example
     * `projects/project-1/locations/region-1/functions/function-1`
     *
     * Generated from protobuf field <code>string target = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

    /**
     * Type of operation.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1.OperationType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of operation.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1.OperationType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Functions\V1\OperationType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The original request that started the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Any request = 3;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function hasRequest()
    {
        return isset($this->request);
    }

    public function clearRequest()
    {
        unset($this->request);
    }

    /**
     * The original request that started the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Any request = 3;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->request = $var;

        return $this;
    }

    /**
     * Version id of the function created or updated by an API call.
     * This field is only populated for Create and Update operations.
     *
     * Generated from protobuf field <code>int64 version_id = 4;</code>
     * @return int|string
     */
    public function getVersionId()
    {
        return $this->version_id;
    }

    /**
     * Version id of the function created or updated by an API call.
     * This field is only populated for Create and Update operations.
     *
     * Generated from protobuf field <code>int64 version_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->version_id = $var;

        return $this;
    }

    /**
     * The last update timestamp of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * The last update timestamp of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The Cloud Build ID of the function created or updated by an API call.
     * This field is only populated for Create and Update operations.
     *
     * Generated from protobuf field <code>string build_id = 6;</code>
     * @return string
     */
    public function getBuildId()
    {
        return $this->build_id;
    }

    /**
     * The Cloud Build ID of the function created or updated by an API call.
     * This field is only populated for Create and Update operations.
     *
     * Generated from protobuf field <code>string build_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBuildId($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_id = $var;

        return $this;
    }

    /**
     * An identifier for Firebase function sources. Disclaimer: This field is only
     * supported for Firebase function deployments.
     *
     * Generated from protobuf field <code>string source_token = 7;</code>
     * @return string
     */
    public function getSourceToken()
    {
        return $this->source_token;
    }

    /**
     * An identifier for Firebase function sources. Disclaimer: This field is only
     * supported for Firebase function deployments.
     *
     * Generated from protobuf field <code>string source_token = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_token = $var;

        return $this;
    }

    /**
     * The Cloud Build Name of the function deployment.
     * This field is only populated for Create and Update operations.
     * `projects/<project-number>/locations/<region>/builds/<build-id>`.
     *
     * Generated from protobuf field <code>string build_name = 8;</code>
     * @return string
     */
    public function getBuildName()
    {
        return $this->build_name;
    }

    /**
     * The Cloud Build Name of the function deployment.
     * This field is only populated for Create and Update operations.
     * `projects/<project-number>/locations/<region>/builds/<build-id>`.
     *
     * Generated from protobuf field <code>string build_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setBuildName($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_name = $var;

        return $this;
    }

}

