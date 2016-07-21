<?php
/**
 * Copyright 2010-2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

return array(
    'class' => 'ILAB_Aws\Common\Aws',
    'services' => array(

        'default_settings' => array(
            'params' => array()
        ),

        'autoscaling' => array(
            'alias'   => 'AutoScaling',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\AutoScaling\AutoScalingClient'
        ),

        'cloudformation' => array(
            'alias'   => 'CloudFormation',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CloudFormation\CloudFormationClient'
        ),

        'cloudfront' => array(
            'alias'   => 'CloudFront',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CloudFront\CloudFrontClient'
        ),

        'cloudfront_20120505' => array(
            'extends' => 'cloudfront',
            'params' => array(
                'version' => '2012-05-05'
            )
        ),

        'cloudhsm' => array(
            'alias'   => 'CloudHsm',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CloudHsm\CloudHsmClient'
        ),

        'cloudsearch' => array(
            'alias'   => 'CloudSearch',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CloudSearch\CloudSearchClient'
        ),

        'cloudsearch_20110201' => array(
            'extends' => 'cloudsearch',
            'params' => array(
                'version' => '2011-02-01'
            )
        ),

        'cloudsearchdomain' => array(
            'alias'   => 'CloudSearchDomain',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CloudSearchDomain\CloudSearchDomainClient'
        ),

        'cloudtrail' => array(
            'alias'   => 'CloudTrail',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CloudTrail\CloudTrailClient'
        ),

        'cloudwatch' => array(
            'alias'   => 'CloudWatch',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CloudWatch\CloudWatchClient'
        ),

        'cloudwatchlogs' => array(
            'alias'   => 'CloudWatchLogs',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CloudWatchLogs\CloudWatchLogsClient'
        ),

        'cognito-identity' => array(
            'alias'   => 'CognitoIdentity',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CognitoIdentity\CognitoIdentityClient'
        ),

        'cognitoidentity' => array('extends' => 'cognito-identity'),

        'cognito-sync' => array(
            'alias'   => 'CognitoSync',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CognitoSync\CognitoSyncClient'
        ),

        'cognitosync' => array('extends' => 'cognito-sync'),

        'codecommit' => array(
            'alias'   => 'CodeCommit',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CodeCommit\CodeCommitClient'
        ),

        'codedeploy' => array(
            'alias'   => 'CodeDeploy',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CodeDeploy\CodeDeployClient'
        ),

        'codepipeline' => array(
            'alias'   => 'CodePipeline',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\CodePipeline\CodePipelineClient'
        ),

        'config' => array(
            'alias'   => 'ConfigService',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\ConfigService\ConfigServiceClient'
        ),

        'datapipeline' => array(
            'alias'   => 'DataPipeline',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\DataPipeline\DataPipelineClient'
        ),

        'devicefarm' => array(
            'alias'   => 'DeviceFarm',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\DeviceFarm\DeviceFarmClient'
        ),

        'directconnect' => array(
            'alias'   => 'DirectConnect',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\DirectConnect\DirectConnectClient'
        ),

        'ds' => array(
            'alias'   => 'DirectoryService',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\DirectoryService\DirectoryServiceClient'
        ),

        'dynamodb' => array(
            'alias'   => 'DynamoDb',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\DynamoDb\DynamoDbClient'
        ),

        'dynamodb_20111205' => array(
            'extends' => 'dynamodb',
            'params' => array(
                'version' => '2011-12-05'
            )
        ),

        'dynamodbstreams' => array(
            'alias'   => 'DynamoDbStreams',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\DynamoDbStreams\DynamoDbStreamsClient'
        ),

        'ec2' => array(
            'alias'   => 'Ec2',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Ec2\Ec2Client'
        ),

        'ecs' => array(
            'alias'   => 'Ecs',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Ecs\EcsClient'
        ),

        'elasticache' => array(
            'alias'   => 'ElastiCache',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\ElastiCache\ElastiCacheClient'
        ),

        'elasticbeanstalk' => array(
            'alias'   => 'ElasticBeanstalk',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\ElasticBeanstalk\ElasticBeanstalkClient'
        ),

        'efs' => array(
            'alias'   => 'Efs',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Efs\EfsClient'
        ),

        'elasticloadbalancing' => array(
            'alias'   => 'ElasticLoadBalancing',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\ElasticLoadBalancing\ElasticLoadBalancingClient'
        ),

        'elastictranscoder' => array(
            'alias'   => 'ElasticTranscoder',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\ElasticTranscoder\ElasticTranscoderClient'
        ),

        'emr' => array(
            'alias'   => 'Emr',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Emr\EmrClient'
        ),

        'glacier' => array(
            'alias'   => 'Glacier',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Glacier\GlacierClient'
        ),

        'kinesis' => array(
            'alias'   => 'Kinesis',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Kinesis\KinesisClient'
        ),

        'kms' => array(
            'alias'   => 'Kms',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Kms\KmsClient'
        ),

        'lambda' => array(
            'alias'   => 'Lambda',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Lambda\LambdaClient'
        ),

        'iam' => array(
            'alias'   => 'Iam',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Iam\IamClient'
        ),

        'importexport' => array(
            'alias'   => 'ImportExport',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\ImportExport\ImportExportClient'
        ),

        'machinelearning' => array(
            'alias'   => 'MachineLearning',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\MachineLearning\MachineLearningClient'
        ),

        'opsworks' => array(
            'alias'   => 'OpsWorks',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\OpsWorks\OpsWorksClient'
        ),

        'rds' => array(
            'alias'   => 'Rds',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Rds\RdsClient'
        ),

        'redshift' => array(
            'alias'   => 'Redshift',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Redshift\RedshiftClient'
        ),

        'route53' => array(
            'alias'   => 'Route53',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Route53\Route53Client'
        ),

        'route53domains' => array(
            'alias'   => 'Route53Domains',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Route53Domains\Route53DomainsClient'
        ),

        's3' => array(
            'alias'   => 'S3',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\S3\S3Client'
        ),

        'sdb' => array(
            'alias'   => 'SimpleDb',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\SimpleDb\SimpleDbClient'
        ),

        'ses' => array(
            'alias'   => 'Ses',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Ses\SesClient'
        ),

        'sns' => array(
            'alias'   => 'Sns',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Sns\SnsClient'
        ),

        'sqs' => array(
            'alias'   => 'Sqs',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Sqs\SqsClient'
        ),

        'ssm' => array(
            'alias'   => 'Ssm',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Ssm\SsmClient'
        ),

        'storagegateway' => array(
            'alias'   => 'StorageGateway',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\StorageGateway\StorageGatewayClient'
        ),

        'sts' => array(
            'alias'   => 'Sts',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Sts\StsClient'
        ),

        'support' => array(
            'alias'   => 'Support',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Support\SupportClient'
        ),

        'swf' => array(
            'alias'   => 'Swf',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\Swf\SwfClient'
        ),

        'workspaces' => array(
            'alias'   => 'WorkSpaces',
            'extends' => 'default_settings',
            'class'   => 'ILAB_Aws\WorkSpaces\WorkSpacesClient'
        ),
    )
);
