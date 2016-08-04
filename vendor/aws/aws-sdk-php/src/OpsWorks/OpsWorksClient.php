<?php
namespace ILAB_Aws\OpsWorks;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS OpsWorks** service.
 *
 * @method \ILAB_Aws\Result assignInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assignInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result assignVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assignVolumeAsync(array $args = [])
 * @method \ILAB_Aws\Result associateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpAsync(array $args = [])
 * @method \ILAB_Aws\Result attachElasticLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachElasticLoadBalancerAsync(array $args = [])
 * @method \ILAB_Aws\Result cloneStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cloneStackAsync(array $args = [])
 * @method \ILAB_Aws\Result createApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppAsync(array $args = [])
 * @method \ILAB_Aws\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \ILAB_Aws\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result createLayer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLayerAsync(array $args = [])
 * @method \ILAB_Aws\Result createStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackAsync(array $args = [])
 * @method \ILAB_Aws\Result createUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteLayer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLayerAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterEcsCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterEcsClusterAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterElasticIpAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterRdsDbInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterRdsDbInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterVolumeAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAgentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentVersionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeCommands(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCommandsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeploymentsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEcsClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEcsClustersAsync(array $args = [])
 * @method \ILAB_Aws\Result describeElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeElasticLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticLoadBalancersAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLayers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLayersAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLoadBasedAutoScaling(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBasedAutoScalingAsync(array $args = [])
 * @method \ILAB_Aws\Result describeMyUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMyUserProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result describePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePermissionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeRaidArrays(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRaidArraysAsync(array $args = [])
 * @method \ILAB_Aws\Result describeRdsDbInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRdsDbInstancesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeServiceErrors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServiceErrorsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStackProvisioningParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackProvisioningParametersAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStackSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackSummaryAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStacksAsync(array $args = [])
 * @method \ILAB_Aws\Result describeTimeBasedAutoScaling(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTimeBasedAutoScalingAsync(array $args = [])
 * @method \ILAB_Aws\Result describeUserProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserProfilesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVolumesAsync(array $args = [])
 * @method \ILAB_Aws\Result detachElasticLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachElasticLoadBalancerAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpAsync(array $args = [])
 * @method \ILAB_Aws\Result getHostnameSuggestion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHostnameSuggestionAsync(array $args = [])
 * @method \ILAB_Aws\Result grantAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise grantAccessAsync(array $args = [])
 * @method \ILAB_Aws\Result rebootInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result registerEcsCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerEcsClusterAsync(array $args = [])
 * @method \ILAB_Aws\Result registerElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerElasticIpAsync(array $args = [])
 * @method \ILAB_Aws\Result registerInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result registerRdsDbInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerRdsDbInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result registerVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerVolumeAsync(array $args = [])
 * @method \ILAB_Aws\Result setLoadBasedAutoScaling(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLoadBasedAutoScalingAsync(array $args = [])
 * @method \ILAB_Aws\Result setPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setPermissionAsync(array $args = [])
 * @method \ILAB_Aws\Result setTimeBasedAutoScaling(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setTimeBasedAutoScalingAsync(array $args = [])
 * @method \ILAB_Aws\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result startStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startStackAsync(array $args = [])
 * @method \ILAB_Aws\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result stopStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopStackAsync(array $args = [])
 * @method \ILAB_Aws\Result unassignInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unassignInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result unassignVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unassignVolumeAsync(array $args = [])
 * @method \ILAB_Aws\Result updateApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAppAsync(array $args = [])
 * @method \ILAB_Aws\Result updateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateElasticIpAsync(array $args = [])
 * @method \ILAB_Aws\Result updateInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateLayer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLayerAsync(array $args = [])
 * @method \ILAB_Aws\Result updateMyUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMyUserProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result updateRdsDbInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRdsDbInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStackAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result updateVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVolumeAsync(array $args = [])
 */
class OpsWorksClient extends AwsClient {}
