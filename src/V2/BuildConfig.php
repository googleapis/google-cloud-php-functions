<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the Build step of the function that builds a container from the
 * given source.
 *
 * Generated from protobuf message <code>google.cloud.functions.v2.BuildConfig</code>
 */
class BuildConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The Cloud Build name of the latest successful deployment of
     * the function.
     *
     * Generated from protobuf field <code>string build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $build = '';
    /**
     * The runtime in which to run the function. Required when deploying a new
     * function, optional when updating an existing function. For a complete
     * list of possible choices, see the
     * [`gcloud` command
     * reference](https://cloud.google.com/sdk/gcloud/reference/functions/deploy#--runtime).
     *
     * Generated from protobuf field <code>string runtime = 2;</code>
     */
    protected $runtime = '';
    /**
     * The name of the function (as defined in source code) that will be
     * executed. Defaults to the resource name suffix, if not specified. For
     * backward compatibility, if function with given name is not found, then the
     * system will try to use function named "function".
     * For Node.js this is name of a function exported by the module specified
     * in `source_location`.
     *
     * Generated from protobuf field <code>string entry_point = 3;</code>
     */
    protected $entry_point = '';
    /**
     * The location of the function source code.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.Source source = 4;</code>
     */
    protected $source = null;
    /**
     * Output only. A permanent fixed identifier for source.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.SourceProvenance source_provenance = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $source_provenance = null;
    /**
     * Name of the Cloud Build Custom Worker Pool that should be used to build the
     * function. The format of this field is
     * `projects/{project}/locations/{region}/workerPools/{workerPool}` where
     * {project} and {region} are the project id and region respectively where the
     * worker pool is defined and {workerPool} is the short name of the worker
     * pool.
     * If the project id is not the same as the function, then the Cloud
     * Functions Service Agent
     * (service-<project_number>&#64;gcf-admin-robot.iam.gserviceaccount.com) must be
     * granted the role Cloud Build Custom Workers Builder
     * (roles/cloudbuild.customworkers.builder) in the project.
     *
     * Generated from protobuf field <code>string worker_pool = 5 [(.google.api.resource_reference) = {</code>
     */
    protected $worker_pool = '';
    /**
     * User-provided build-time environment variables for the function
     *
     * Generated from protobuf field <code>map<string, string> environment_variables = 6;</code>
     */
    private $environment_variables;
    /**
     * Docker Registry to use for this deployment. This configuration is only
     * applicable to 1st Gen functions, 2nd Gen functions can only use Artifact
     * Registry.
     * Deprecated: As of March 2025, `CONTAINER_REGISTRY` option is no longer
     * available in response to Container Registry's deprecation:
     * https://cloud.google.com/artifact-registry/docs/transition/transition-from-gcr
     * Please use Artifact Registry instead, which is the default choice.
     * If unspecified, it defaults to `ARTIFACT_REGISTRY`.
     * If `docker_repository` field is specified, this field should either be left
     * unspecified or set to `ARTIFACT_REGISTRY`.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.BuildConfig.DockerRegistry docker_registry = 10 [deprecated = true];</code>
     * @deprecated
     */
    protected $docker_registry = 0;
    /**
     * Repository in Artifact Registry to which the function docker image will be
     * pushed after it is built by Cloud Build. If specified by user, it is
     * created and managed by user with a customer managed encryption key.
     * Otherwise, GCF will create and use a repository named 'gcf-artifacts'
     * for every deployed region.
     * It must match the pattern
     * `projects/{project}/locations/{location}/repositories/{repository}`.
     * Repository format must be 'DOCKER'.
     *
     * Generated from protobuf field <code>string docker_repository = 7 [(.google.api.resource_reference) = {</code>
     */
    protected $docker_repository = '';
    /**
     * Service account to be used for building the container. The format of this
     * field is `projects/{projectId}/serviceAccounts/{serviceAccountEmail}`.
     *
     * Generated from protobuf field <code>string service_account = 27;</code>
     */
    protected $service_account = '';
    protected $runtime_update_policy;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Functions\V2\AutomaticUpdatePolicy $automatic_update_policy
     *     @type \Google\Cloud\Functions\V2\OnDeployUpdatePolicy $on_deploy_update_policy
     *     @type string $build
     *           Output only. The Cloud Build name of the latest successful deployment of
     *           the function.
     *     @type string $runtime
     *           The runtime in which to run the function. Required when deploying a new
     *           function, optional when updating an existing function. For a complete
     *           list of possible choices, see the
     *           [`gcloud` command
     *           reference](https://cloud.google.com/sdk/gcloud/reference/functions/deploy#--runtime).
     *     @type string $entry_point
     *           The name of the function (as defined in source code) that will be
     *           executed. Defaults to the resource name suffix, if not specified. For
     *           backward compatibility, if function with given name is not found, then the
     *           system will try to use function named "function".
     *           For Node.js this is name of a function exported by the module specified
     *           in `source_location`.
     *     @type \Google\Cloud\Functions\V2\Source $source
     *           The location of the function source code.
     *     @type \Google\Cloud\Functions\V2\SourceProvenance $source_provenance
     *           Output only. A permanent fixed identifier for source.
     *     @type string $worker_pool
     *           Name of the Cloud Build Custom Worker Pool that should be used to build the
     *           function. The format of this field is
     *           `projects/{project}/locations/{region}/workerPools/{workerPool}` where
     *           {project} and {region} are the project id and region respectively where the
     *           worker pool is defined and {workerPool} is the short name of the worker
     *           pool.
     *           If the project id is not the same as the function, then the Cloud
     *           Functions Service Agent
     *           (service-<project_number>&#64;gcf-admin-robot.iam.gserviceaccount.com) must be
     *           granted the role Cloud Build Custom Workers Builder
     *           (roles/cloudbuild.customworkers.builder) in the project.
     *     @type array|\Google\Protobuf\Internal\MapField $environment_variables
     *           User-provided build-time environment variables for the function
     *     @type int $docker_registry
     *           Docker Registry to use for this deployment. This configuration is only
     *           applicable to 1st Gen functions, 2nd Gen functions can only use Artifact
     *           Registry.
     *           Deprecated: As of March 2025, `CONTAINER_REGISTRY` option is no longer
     *           available in response to Container Registry's deprecation:
     *           https://cloud.google.com/artifact-registry/docs/transition/transition-from-gcr
     *           Please use Artifact Registry instead, which is the default choice.
     *           If unspecified, it defaults to `ARTIFACT_REGISTRY`.
     *           If `docker_repository` field is specified, this field should either be left
     *           unspecified or set to `ARTIFACT_REGISTRY`.
     *     @type string $docker_repository
     *           Repository in Artifact Registry to which the function docker image will be
     *           pushed after it is built by Cloud Build. If specified by user, it is
     *           created and managed by user with a customer managed encryption key.
     *           Otherwise, GCF will create and use a repository named 'gcf-artifacts'
     *           for every deployed region.
     *           It must match the pattern
     *           `projects/{project}/locations/{location}/repositories/{repository}`.
     *           Repository format must be 'DOCKER'.
     *     @type string $service_account
     *           Service account to be used for building the container. The format of this
     *           field is `projects/{projectId}/serviceAccounts/{serviceAccountEmail}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V2\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.functions.v2.AutomaticUpdatePolicy automatic_update_policy = 40;</code>
     * @return \Google\Cloud\Functions\V2\AutomaticUpdatePolicy|null
     */
    public function getAutomaticUpdatePolicy()
    {
        return $this->readOneof(40);
    }

    public function hasAutomaticUpdatePolicy()
    {
        return $this->hasOneof(40);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.functions.v2.AutomaticUpdatePolicy automatic_update_policy = 40;</code>
     * @param \Google\Cloud\Functions\V2\AutomaticUpdatePolicy $var
     * @return $this
     */
    public function setAutomaticUpdatePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V2\AutomaticUpdatePolicy::class);
        $this->writeOneof(40, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.functions.v2.OnDeployUpdatePolicy on_deploy_update_policy = 41;</code>
     * @return \Google\Cloud\Functions\V2\OnDeployUpdatePolicy|null
     */
    public function getOnDeployUpdatePolicy()
    {
        return $this->readOneof(41);
    }

    public function hasOnDeployUpdatePolicy()
    {
        return $this->hasOneof(41);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.functions.v2.OnDeployUpdatePolicy on_deploy_update_policy = 41;</code>
     * @param \Google\Cloud\Functions\V2\OnDeployUpdatePolicy $var
     * @return $this
     */
    public function setOnDeployUpdatePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V2\OnDeployUpdatePolicy::class);
        $this->writeOneof(41, $var);

        return $this;
    }

    /**
     * Output only. The Cloud Build name of the latest successful deployment of
     * the function.
     *
     * Generated from protobuf field <code>string build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Output only. The Cloud Build name of the latest successful deployment of
     * the function.
     *
     * Generated from protobuf field <code>string build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBuild($var)
    {
        GPBUtil::checkString($var, True);
        $this->build = $var;

        return $this;
    }

    /**
     * The runtime in which to run the function. Required when deploying a new
     * function, optional when updating an existing function. For a complete
     * list of possible choices, see the
     * [`gcloud` command
     * reference](https://cloud.google.com/sdk/gcloud/reference/functions/deploy#--runtime).
     *
     * Generated from protobuf field <code>string runtime = 2;</code>
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * The runtime in which to run the function. Required when deploying a new
     * function, optional when updating an existing function. For a complete
     * list of possible choices, see the
     * [`gcloud` command
     * reference](https://cloud.google.com/sdk/gcloud/reference/functions/deploy#--runtime).
     *
     * Generated from protobuf field <code>string runtime = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRuntime($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime = $var;

        return $this;
    }

    /**
     * The name of the function (as defined in source code) that will be
     * executed. Defaults to the resource name suffix, if not specified. For
     * backward compatibility, if function with given name is not found, then the
     * system will try to use function named "function".
     * For Node.js this is name of a function exported by the module specified
     * in `source_location`.
     *
     * Generated from protobuf field <code>string entry_point = 3;</code>
     * @return string
     */
    public function getEntryPoint()
    {
        return $this->entry_point;
    }

    /**
     * The name of the function (as defined in source code) that will be
     * executed. Defaults to the resource name suffix, if not specified. For
     * backward compatibility, if function with given name is not found, then the
     * system will try to use function named "function".
     * For Node.js this is name of a function exported by the module specified
     * in `source_location`.
     *
     * Generated from protobuf field <code>string entry_point = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEntryPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry_point = $var;

        return $this;
    }

    /**
     * The location of the function source code.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.Source source = 4;</code>
     * @return \Google\Cloud\Functions\V2\Source|null
     */
    public function getSource()
    {
        return $this->source;
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * The location of the function source code.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.Source source = 4;</code>
     * @param \Google\Cloud\Functions\V2\Source $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V2\Source::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Output only. A permanent fixed identifier for source.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.SourceProvenance source_provenance = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Functions\V2\SourceProvenance|null
     */
    public function getSourceProvenance()
    {
        return $this->source_provenance;
    }

    public function hasSourceProvenance()
    {
        return isset($this->source_provenance);
    }

    public function clearSourceProvenance()
    {
        unset($this->source_provenance);
    }

    /**
     * Output only. A permanent fixed identifier for source.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.SourceProvenance source_provenance = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Functions\V2\SourceProvenance $var
     * @return $this
     */
    public function setSourceProvenance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V2\SourceProvenance::class);
        $this->source_provenance = $var;

        return $this;
    }

    /**
     * Name of the Cloud Build Custom Worker Pool that should be used to build the
     * function. The format of this field is
     * `projects/{project}/locations/{region}/workerPools/{workerPool}` where
     * {project} and {region} are the project id and region respectively where the
     * worker pool is defined and {workerPool} is the short name of the worker
     * pool.
     * If the project id is not the same as the function, then the Cloud
     * Functions Service Agent
     * (service-<project_number>&#64;gcf-admin-robot.iam.gserviceaccount.com) must be
     * granted the role Cloud Build Custom Workers Builder
     * (roles/cloudbuild.customworkers.builder) in the project.
     *
     * Generated from protobuf field <code>string worker_pool = 5 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWorkerPool()
    {
        return $this->worker_pool;
    }

    /**
     * Name of the Cloud Build Custom Worker Pool that should be used to build the
     * function. The format of this field is
     * `projects/{project}/locations/{region}/workerPools/{workerPool}` where
     * {project} and {region} are the project id and region respectively where the
     * worker pool is defined and {workerPool} is the short name of the worker
     * pool.
     * If the project id is not the same as the function, then the Cloud
     * Functions Service Agent
     * (service-<project_number>&#64;gcf-admin-robot.iam.gserviceaccount.com) must be
     * granted the role Cloud Build Custom Workers Builder
     * (roles/cloudbuild.customworkers.builder) in the project.
     *
     * Generated from protobuf field <code>string worker_pool = 5 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWorkerPool($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_pool = $var;

        return $this;
    }

    /**
     * User-provided build-time environment variables for the function
     *
     * Generated from protobuf field <code>map<string, string> environment_variables = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEnvironmentVariables()
    {
        return $this->environment_variables;
    }

    /**
     * User-provided build-time environment variables for the function
     *
     * Generated from protobuf field <code>map<string, string> environment_variables = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEnvironmentVariables($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->environment_variables = $arr;

        return $this;
    }

    /**
     * Docker Registry to use for this deployment. This configuration is only
     * applicable to 1st Gen functions, 2nd Gen functions can only use Artifact
     * Registry.
     * Deprecated: As of March 2025, `CONTAINER_REGISTRY` option is no longer
     * available in response to Container Registry's deprecation:
     * https://cloud.google.com/artifact-registry/docs/transition/transition-from-gcr
     * Please use Artifact Registry instead, which is the default choice.
     * If unspecified, it defaults to `ARTIFACT_REGISTRY`.
     * If `docker_repository` field is specified, this field should either be left
     * unspecified or set to `ARTIFACT_REGISTRY`.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.BuildConfig.DockerRegistry docker_registry = 10 [deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getDockerRegistry()
    {
        @trigger_error('docker_registry is deprecated.', E_USER_DEPRECATED);
        return $this->docker_registry;
    }

    /**
     * Docker Registry to use for this deployment. This configuration is only
     * applicable to 1st Gen functions, 2nd Gen functions can only use Artifact
     * Registry.
     * Deprecated: As of March 2025, `CONTAINER_REGISTRY` option is no longer
     * available in response to Container Registry's deprecation:
     * https://cloud.google.com/artifact-registry/docs/transition/transition-from-gcr
     * Please use Artifact Registry instead, which is the default choice.
     * If unspecified, it defaults to `ARTIFACT_REGISTRY`.
     * If `docker_repository` field is specified, this field should either be left
     * unspecified or set to `ARTIFACT_REGISTRY`.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.BuildConfig.DockerRegistry docker_registry = 10 [deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setDockerRegistry($var)
    {
        @trigger_error('docker_registry is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkEnum($var, \Google\Cloud\Functions\V2\BuildConfig\DockerRegistry::class);
        $this->docker_registry = $var;

        return $this;
    }

    /**
     * Repository in Artifact Registry to which the function docker image will be
     * pushed after it is built by Cloud Build. If specified by user, it is
     * created and managed by user with a customer managed encryption key.
     * Otherwise, GCF will create and use a repository named 'gcf-artifacts'
     * for every deployed region.
     * It must match the pattern
     * `projects/{project}/locations/{location}/repositories/{repository}`.
     * Repository format must be 'DOCKER'.
     *
     * Generated from protobuf field <code>string docker_repository = 7 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDockerRepository()
    {
        return $this->docker_repository;
    }

    /**
     * Repository in Artifact Registry to which the function docker image will be
     * pushed after it is built by Cloud Build. If specified by user, it is
     * created and managed by user with a customer managed encryption key.
     * Otherwise, GCF will create and use a repository named 'gcf-artifacts'
     * for every deployed region.
     * It must match the pattern
     * `projects/{project}/locations/{location}/repositories/{repository}`.
     * Repository format must be 'DOCKER'.
     *
     * Generated from protobuf field <code>string docker_repository = 7 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDockerRepository($var)
    {
        GPBUtil::checkString($var, True);
        $this->docker_repository = $var;

        return $this;
    }

    /**
     * Service account to be used for building the container. The format of this
     * field is `projects/{projectId}/serviceAccounts/{serviceAccountEmail}`.
     *
     * Generated from protobuf field <code>string service_account = 27;</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Service account to be used for building the container. The format of this
     * field is `projects/{projectId}/serviceAccounts/{serviceAccountEmail}`.
     *
     * Generated from protobuf field <code>string service_account = 27;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRuntimeUpdatePolicy()
    {
        return $this->whichOneof("runtime_update_policy");
    }

}

