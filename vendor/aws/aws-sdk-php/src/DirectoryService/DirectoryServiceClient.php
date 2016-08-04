<?php
namespace ILAB_Aws\DirectoryService;

use ILAB_Aws\AwsClient;

/**
 * AWS Directory Service client
 *
 * @method \ILAB_Aws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result connectDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise connectDirectoryAsync(array $args = [])
 * @method \ILAB_Aws\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result createComputer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComputerAsync(array $args = [])
 * @method \ILAB_Aws\Result createConditionalForwarder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConditionalForwarderAsync(array $args = [])
 * @method \ILAB_Aws\Result createDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectoryAsync(array $args = [])
 * @method \ILAB_Aws\Result createMicrosoftAD(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMicrosoftADAsync(array $args = [])
 * @method \ILAB_Aws\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \ILAB_Aws\Result createTrust(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrustAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteConditionalForwarder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConditionalForwarderAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectoryAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteTrust(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrustAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterEventTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterEventTopicAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConditionalForwarders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConditionalForwardersAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDirectories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectoriesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEventTopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventTopicsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeTrusts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustsAsync(array $args = [])
 * @method \ILAB_Aws\Result disableRadius(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableRadiusAsync(array $args = [])
 * @method \ILAB_Aws\Result disableSso(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableSsoAsync(array $args = [])
 * @method \ILAB_Aws\Result enableRadius(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRadiusAsync(array $args = [])
 * @method \ILAB_Aws\Result enableSso(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSsoAsync(array $args = [])
 * @method \ILAB_Aws\Result getDirectoryLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDirectoryLimitsAsync(array $args = [])
 * @method \ILAB_Aws\Result getSnapshotLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnapshotLimitsAsync(array $args = [])
 * @method \ILAB_Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result registerEventTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerEventTopicAsync(array $args = [])
 * @method \ILAB_Aws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result restoreFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreFromSnapshotAsync(array $args = [])
 * @method \ILAB_Aws\Result updateConditionalForwarder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConditionalForwarderAsync(array $args = [])
 * @method \ILAB_Aws\Result updateRadius(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRadiusAsync(array $args = [])
 * @method \ILAB_Aws\Result verifyTrust(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyTrustAsync(array $args = [])
 */
class DirectoryServiceClient extends AwsClient {}
