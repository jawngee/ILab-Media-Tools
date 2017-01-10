<?php
namespace ILAB_Aws\ElasticLoadBalancing;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Elastic Load Balancing** service.
 *
 * @method \ILAB_Aws\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \ILAB_Aws\Result applySecurityGroupsToLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applySecurityGroupsToLoadBalancerAsync(array $args = [])
 * @method \ILAB_Aws\Result attachLoadBalancerToSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachLoadBalancerToSubnetsAsync(array $args = [])
 * @method \ILAB_Aws\Result configureHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configureHealthCheckAsync(array $args = [])
 * @method \ILAB_Aws\Result createAppCookieStickinessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppCookieStickinessPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result createLBCookieStickinessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLBCookieStickinessPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result createLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerAsync(array $args = [])
 * @method \ILAB_Aws\Result createLoadBalancerListeners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerListenersAsync(array $args = [])
 * @method \ILAB_Aws\Result createLoadBalancerPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteLoadBalancerListeners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerListenersAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteLoadBalancerPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterInstancesFromLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterInstancesFromLoadBalancerAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInstanceHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceHealthAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLoadBalancerAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLoadBalancerPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerPoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLoadBalancerPolicyTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerPolicyTypesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancersAsync(array $args = [])
 * @method \ILAB_Aws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \ILAB_Aws\Result detachLoadBalancerFromSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachLoadBalancerFromSubnetsAsync(array $args = [])
 * @method \ILAB_Aws\Result disableAvailabilityZonesForLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAvailabilityZonesForLoadBalancerAsync(array $args = [])
 * @method \ILAB_Aws\Result enableAvailabilityZonesForLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAvailabilityZonesForLoadBalancerAsync(array $args = [])
 * @method \ILAB_Aws\Result modifyLoadBalancerAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyLoadBalancerAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result registerInstancesWithLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerInstancesWithLoadBalancerAsync(array $args = [])
 * @method \ILAB_Aws\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \ILAB_Aws\Result setLoadBalancerListenerSSLCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLoadBalancerListenerSSLCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result setLoadBalancerPoliciesForBackendServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLoadBalancerPoliciesForBackendServerAsync(array $args = [])
 * @method \ILAB_Aws\Result setLoadBalancerPoliciesOfListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLoadBalancerPoliciesOfListenerAsync(array $args = [])
 */
class ElasticLoadBalancingClient extends AwsClient {}