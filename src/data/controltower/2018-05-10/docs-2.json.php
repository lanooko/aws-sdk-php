<?php
// This file was auto-generated from sdk-root/src/data/controltower/2018-05-10/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>These interfaces allow you to apply the Amazon Web Services library of pre-defined <i>controls</i> to your organizational units, programmatically. In Amazon Web Services Control Tower, the terms "control" and "guardrail" are synonyms.</p> <p>To call these APIs, you\'ll need to know:</p> <ul> <li> <p>the <code>controlIdentifier</code> for the control--or guardrail--you are targeting.</p> </li> <li> <p>the ARN associated with the target organizational unit (OU), which we call the <code>targetIdentifier</code>.</p> </li> <li> <p>the ARN associated with a resource that you wish to tag or untag.</p> </li> </ul> <p> <b>To get the <code>controlIdentifier</code> for your AWS Control Tower control:</b> </p> <p>The <code>controlIdentifier</code> is an ARN that is specified for each control. You can view the <code>controlIdentifier</code> in the console on the <b>Control details</b> page, as well as in the documentation.</p> <p>The <code>controlIdentifier</code> is unique in each Amazon Web Services Region for each control. You can find the <code>controlIdentifier</code> for each Region and control in the <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-metadata-tables.html">Tables of control metadata</a> in the <i>Amazon Web Services Control Tower User Guide.</i> </p> <p>A quick-reference list of control identifers for the Amazon Web Services Control Tower legacy <i>Strongly recommended</i> and <i>Elective</i> controls is given in <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-identifiers.html.html">Resource identifiers for APIs and controls</a> in the <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-identifiers.html">Controls reference guide section</a> of the <i>Amazon Web Services Control Tower User Guide</i>. Remember that <i>Mandatory</i> controls cannot be added or removed.</p> <note> <p> <b>ARN format:</b> <code>arn:aws:controltower:{REGION}::control/{CONTROL_NAME}</code> </p> <p> <b>Example:</b> </p> <p> <code>arn:aws:controltower:us-west-2::control/AWS-GR_AUTOSCALING_LAUNCH_CONFIG_PUBLIC_IP_DISABLED</code> </p> </note> <p> <b>To get the <code>targetIdentifier</code>:</b> </p> <p>The <code>targetIdentifier</code> is the ARN for an OU.</p> <p>In the Amazon Web Services Organizations console, you can find the ARN for the OU on the <b>Organizational unit details</b> page associated with that OU.</p> <note> <p> <b>OU ARN format:</b> </p> <p> <code>arn:${Partition}:organizations::${MasterAccountId}:ou/o-${OrganizationId}/ou-${OrganizationalUnitId}</code> </p> </note> <p class="title"> <b>Details and examples</b> </p> <ul> <li> <p> <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-api-examples-short.html">Control API input and output examples with CLI</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/controltower/latest/userguide/enable-controls.html">Enable controls with CloudFormation</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-metadata-tables.html">Control metadata tables</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-identifiers.html">List of identifiers for legacy controls</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/controltower/latest/userguide/controls.html">Controls reference guide</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/controltower/latest/userguide/controls-reference.html">Controls library groupings</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/controltower/latest/userguide/creating-resources-with-cloudformation.html">Creating Amazon Web Services Control Tower resources with Amazon Web Services CloudFormation</a> </p> </li> </ul> <p>To view the open source resource repository on GitHub, see <a href="https://github.com/aws-cloudformation/aws-cloudformation-resource-providers-controltower">aws-cloudformation/aws-cloudformation-resource-providers-controltower</a> </p> <p> <b>Recording API Requests</b> </p> <p>Amazon Web Services Control Tower supports Amazon Web Services CloudTrail, a service that records Amazon Web Services API calls for your Amazon Web Services account and delivers log files to an Amazon S3 bucket. By using information collected by CloudTrail, you can determine which requests the Amazon Web Services Control Tower service received, who made the request and when, and so on. For more about Amazon Web Services Control Tower and its support for CloudTrail, see <a href="https://docs.aws.amazon.com/controltower/latest/userguide/logging-using-cloudtrail.html">Logging Amazon Web Services Control Tower Actions with Amazon Web Services CloudTrail</a> in the Amazon Web Services Control Tower User Guide. To learn more about CloudTrail, including how to turn it on and find your log files, see the Amazon Web Services CloudTrail User Guide.</p>', 'operations' => [ 'CreateLandingZone' => '<p>Creates a new landing zone. This starts an asynchronous operation that creates and configures a landing zone based on the parameters specified in the manifest JSON file. </p>', 'DeleteLandingZone' => '<p>This decommissions a landing zone. This starts an asynchronous operation that deletes Amazon Web Services Control Tower resources deployed in Amazon Web Services Control Tower managed accounts. </p>', 'DisableControl' => '<p>This API call turns off a control. It starts an asynchronous operation that deletes Amazon Web Services resources on the specified organizational unit and the accounts it contains. The resources will vary according to the control that you specify. For usage examples, see <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-api-examples-short.html"> <i>the Amazon Web Services Control Tower User Guide</i> </a>.</p>', 'EnableControl' => '<p>This API call activates a control. It starts an asynchronous operation that creates Amazon Web Services resources on the specified organizational unit and the accounts it contains. The resources created will vary according to the control that you specify. For usage examples, see <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-api-examples-short.html"> <i>the Amazon Web Services Control Tower User Guide</i> </a>.</p>', 'GetControlOperation' => '<p>Returns the status of a particular <code>EnableControl</code> or <code>DisableControl</code> operation. Displays a message in case of error. Details for an operation are available for 90 days. For usage examples, see <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-api-examples-short.html"> <i>the Amazon Web Services Control Tower User Guide</i> </a>.</p>', 'GetEnabledControl' => '<p>Retrieves details about an enabled control. For usage examples, see <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-api-examples-short.html"> <i>the Amazon Web Services Control Tower User Guide</i> </a>.</p>', 'GetLandingZone' => '<p>Returns details about the landing zone. Displays a message in case of error. </p>', 'GetLandingZoneOperation' => '<p>Returns the status of the specified landing zone operation. Details for an operation are available for X days. </p>', 'ListEnabledControls' => '<p>Lists the controls enabled by Amazon Web Services Control Tower on the specified organizational unit and the accounts it contains. For usage examples, see <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-api-examples-short.html"> <i>the Amazon Web Services Control Tower User Guide</i> </a>.</p>', 'ListLandingZones' => '<p>Returns the landing zone ARN for the landing zone deployed in your managed account. This API also creates an ARN for existing accounts that do not yet have a landing zone ARN. </p> <p>The return limit is one landing zone ARN. </p>', 'ListTagsForResource' => '<p>Returns a list of tags associated with the resource. For usage examples, see <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-api-examples-short.html"> <i>the Amazon Web Services Control Tower User Guide</i> </a>.</p>', 'ResetLandingZone' => '<p>This API call resets a landing zone. It starts an asynchronous operation that resets the landing zone to the parameters specified in its original configuration. </p>', 'TagResource' => '<p>Applies tags to a resource. For usage examples, see <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-api-examples-short.html"> <i>the Amazon Web Services Control Tower User Guide</i> </a>.</p>', 'UntagResource' => '<p>Removes tags from a resource. For usage examples, see <a href="https://docs.aws.amazon.com/controltower/latest/userguide/control-api-examples-short.html"> <i>the Amazon Web Services Control Tower User Guide</i> </a>.</p>', 'UpdateLandingZone' => '<p>This API call updates the landing zone. It starts an asynchronous operation that updates the landing zone based on the new landing zone version or the updated parameters specified in the updated manifest file. </p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You do not have sufficient access to perform this action.</p>', 'refs' => [], ], 'Arn' => [ 'base' => NULL, 'refs' => [ 'CreateLandingZoneOutput$arn' => '<p>The ARN of the landing zone. </p>', 'EnableControlOutput$arn' => '<p>The ARN of the <code>EnabledControl</code> resource.</p>', 'EnabledControlDetails$arn' => '<p>The ARN of the enabled control.</p>', 'EnabledControlSummary$arn' => '<p>The ARN of the enabled control.</p>', 'GetEnabledControlInput$enabledControlIdentifier' => '<p>The <code>controlIdentifier</code> of the enabled control.</p>', 'LandingZoneDetail$arn' => '<p>The ARN of the landing zone. </p>', 'LandingZoneSummary$arn' => '<p>The ARN of the landing zone. </p>', 'ListTagsForResourceInput$resourceArn' => '<p> The ARN of the resource.</p>', 'TagResourceInput$resourceArn' => '<p>The ARN of the resource to be tagged.</p>', 'UntagResourceInput$resourceArn' => '<p>The ARN of the resource.</p>', ], ], 'ConflictException' => [ 'base' => '<p>Updating or deleting a resource can cause an inconsistent state.</p>', 'refs' => [], ], 'ControlIdentifier' => [ 'base' => NULL, 'refs' => [ 'DisableControlInput$controlIdentifier' => '<p>The ARN of the control. Only <b>Strongly recommended</b> and <b>Elective</b> controls are permitted, with the exception of the <b>Region deny</b> control. For information on how to find the <code>controlIdentifier</code>, see <a href="https://docs.aws.amazon.com/controltower/latest/APIReference/Welcome.html">the overview page</a>.</p>', 'EnableControlInput$controlIdentifier' => '<p>The ARN of the control. Only <b>Strongly recommended</b> and <b>Elective</b> controls are permitted, with the exception of the <b>Region deny</b> control. For information on how to find the <code>controlIdentifier</code>, see <a href="https://docs.aws.amazon.com/controltower/latest/APIReference/Welcome.html">the overview page</a>.</p>', 'EnabledControlDetails$controlIdentifier' => '<p>The control identifier of the enabled control. For information on how to find the <code>controlIdentifier</code>, see <a href="https://docs.aws.amazon.com/controltower/latest/APIReference/Welcome.html">the overview page</a>.</p>', 'EnabledControlSummary$controlIdentifier' => '<p>The <code>controlIdentifier</code> of the enabled control.</p>', ], ], 'ControlOperation' => [ 'base' => '<p>An operation performed by the control.</p>', 'refs' => [ 'GetControlOperationOutput$controlOperation' => '<p>An operation performed by the control.</p>', ], ], 'ControlOperationStatus' => [ 'base' => NULL, 'refs' => [ 'ControlOperation$status' => '<p>One of <code>IN_PROGRESS</code>, <code>SUCEEDED</code>, or <code>FAILED</code>.</p>', ], ], 'ControlOperationType' => [ 'base' => NULL, 'refs' => [ 'ControlOperation$operationType' => '<p>One of <code>ENABLE_CONTROL</code> or <code>DISABLE_CONTROL</code>.</p>', ], ], 'CreateLandingZoneInput' => [ 'base' => NULL, 'refs' => [], ], 'CreateLandingZoneOutput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteLandingZoneInput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteLandingZoneOutput' => [ 'base' => NULL, 'refs' => [], ], 'DisableControlInput' => [ 'base' => NULL, 'refs' => [], ], 'DisableControlOutput' => [ 'base' => NULL, 'refs' => [], ], 'DriftStatus' => [ 'base' => NULL, 'refs' => [ 'DriftStatusSummary$driftStatus' => '<p> The drift status of the enabled control.</p> <p>Valid values:</p> <ul> <li> <p> <code>DRIFTED</code>: The <code>enabledControl</code> deployed in this configuration doesn’t match the configuration that Amazon Web Services Control Tower expected. </p> </li> <li> <p> <code>IN_SYNC</code>: The <code>enabledControl</code> deployed in this configuration matches the configuration that Amazon Web Services Control Tower expected.</p> </li> <li> <p> <code>NOT_CHECKING</code>: Amazon Web Services Control Tower does not check drift for this enabled control. Drift is not supported for the control type.</p> </li> <li> <p> <code>UNKNOWN</code>: Amazon Web Services Control Tower is not able to check the drift status for the enabled control. </p> </li> </ul>', ], ], 'DriftStatusSummary' => [ 'base' => '<p> The drift summary of the enabled control.</p> <p>Amazon Web Services Control Tower expects the enabled control configuration to include all supported and governed Regions. If the enabled control differs from the expected configuration, it is defined to be in a state of drift. You can repair this drift by resetting the enabled control.</p>', 'refs' => [ 'EnabledControlDetails$driftStatusSummary' => '<p>The drift status of the enabled control.</p>', 'EnabledControlSummary$driftStatusSummary' => '<p>The drift status of the enabled control.</p>', ], ], 'EnableControlInput' => [ 'base' => NULL, 'refs' => [], ], 'EnableControlOutput' => [ 'base' => NULL, 'refs' => [], ], 'EnabledControlDetails' => [ 'base' => '<p>Information about the enabled control.</p>', 'refs' => [ 'GetEnabledControlOutput$enabledControlDetails' => '<p>Information about the enabled control.</p>', ], ], 'EnabledControlSummary' => [ 'base' => '<p>Returns a summary of information about an enabled control.</p>', 'refs' => [ 'EnabledControls$member' => NULL, ], ], 'EnabledControls' => [ 'base' => NULL, 'refs' => [ 'ListEnabledControlsOutput$enabledControls' => '<p>Lists the controls enabled by Amazon Web Services Control Tower on the specified organizational unit and the accounts it contains.</p>', ], ], 'EnablementStatus' => [ 'base' => NULL, 'refs' => [ 'EnablementStatusSummary$status' => '<p> The deployment status of the enabled control.</p> <p>Valid values:</p> <ul> <li> <p> <code>SUCCEEDED</code>: The <code>enabledControl</code> configuration was deployed successfully.</p> </li> <li> <p> <code>UNDER_CHANGE</code>: The <code>enabledControl</code> configuration is changing. </p> </li> <li> <p> <code>FAILED</code>: The <code>enabledControl</code> configuration failed to deploy.</p> </li> </ul>', ], ], 'EnablementStatusSummary' => [ 'base' => '<p>The deployment summary of the enabled control.</p>', 'refs' => [ 'EnabledControlDetails$statusSummary' => '<p>The deployment summary of the enabled control.</p>', 'EnabledControlSummary$statusSummary' => '<p>A short description of the status of the enabled control.</p>', ], ], 'GetControlOperationInput' => [ 'base' => NULL, 'refs' => [], ], 'GetControlOperationOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetEnabledControlInput' => [ 'base' => NULL, 'refs' => [], ], 'GetEnabledControlOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetLandingZoneInput' => [ 'base' => NULL, 'refs' => [], ], 'GetLandingZoneOperationInput' => [ 'base' => NULL, 'refs' => [], ], 'GetLandingZoneOperationOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetLandingZoneOutput' => [ 'base' => NULL, 'refs' => [], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'ThrottlingException$retryAfterSeconds' => '<p>The number of seconds the caller should wait before retrying.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>Unexpected error during processing of request.</p>', 'refs' => [], ], 'LandingZoneDetail' => [ 'base' => '<p>Information about the landing zone. </p>', 'refs' => [ 'GetLandingZoneOutput$landingZone' => '<p>Information about the landing zone. </p>', ], ], 'LandingZoneDriftStatus' => [ 'base' => NULL, 'refs' => [ 'LandingZoneDriftStatusSummary$status' => '<p>The drift status of the landing zone. </p> <p>Valid values:</p> <ul> <li> <p> <code>DRIFTED</code>: The landing zone deployed in this configuration does not match the configuration that Amazon Web Services Control Tower expected. </p> </li> <li> <p> <code>IN_SYNC</code>: The landing zone deployed in this configuration matches the configuration that Amazon Web Services Control Tower expected. </p> </li> </ul>', ], ], 'LandingZoneDriftStatusSummary' => [ 'base' => '<p>The drift status summary of the landing zone. </p> <p>If the landing zone differs from the expected configuration, it is defined to be in a state of drift. You can repair this drift by resetting the landing zone. </p>', 'refs' => [ 'LandingZoneDetail$driftStatus' => '<p>The drift status of the landing zone. </p>', ], ], 'LandingZoneOperationDetail' => [ 'base' => '<p>Information about a landing zone operation. </p>', 'refs' => [ 'GetLandingZoneOperationOutput$operationDetails' => '<p>The landing zone operation details. </p>', ], ], 'LandingZoneOperationStatus' => [ 'base' => NULL, 'refs' => [ 'LandingZoneOperationDetail$status' => '<p>The landing zone operation status. </p> <p>Valid values:</p> <ul> <li> <p> <code>SUCCEEDED</code>: The landing zone operation succeeded. </p> </li> <li> <p> <code>IN_PROGRESS</code>: The landing zone operation is in progress. </p> </li> <li> <p> <code>FAILED</code>: The landing zone operation failed. </p> </li> </ul>', ], ], 'LandingZoneOperationType' => [ 'base' => NULL, 'refs' => [ 'LandingZoneOperationDetail$operationType' => '<p>The landing zone operation type. </p> <p>Valid values:</p> <ul> <li> <p> <code>DELETE</code>: The <code>DeleteLandingZone</code> operation. </p> </li> <li> <p> <code>CREATE</code>: The <code>CreateLandingZone</code> operation. </p> </li> <li> <p> <code>UPDATE</code>: The <code>UpdateLandingZone</code> operation. </p> </li> <li> <p> <code>RESET</code>: The <code>ResetLandingZone</code> operation. </p> </li> </ul>', ], ], 'LandingZoneStatus' => [ 'base' => NULL, 'refs' => [ 'LandingZoneDetail$status' => '<p>The landing zone deployment status. </p> <p>Valid values:</p> <ul> <li> <p> <code>ACTIVE</code>: The landing zone is actively deployed. </p> </li> <li> <p> <code>PROCESSING</code>: The landing zone is processing deployment. </p> </li> <li> <p> <code>FAILED</code>: The landing zone failed deployment. </p> </li> </ul>', ], ], 'LandingZoneSummary' => [ 'base' => '<p>Returns a summary of information about a landing zone. </p>', 'refs' => [ 'ListLandingZonesOutputLandingZonesList$member' => NULL, ], ], 'LandingZoneVersion' => [ 'base' => NULL, 'refs' => [ 'CreateLandingZoneInput$version' => '<p>The landing zone version. </p>', 'LandingZoneDetail$latestAvailableVersion' => '<p>The latest available version of the landing zone. </p>', 'LandingZoneDetail$version' => '<p>The landing zone\'s current deployed version. </p>', 'UpdateLandingZoneInput$version' => '<p>The landing zone version. </p>', ], ], 'ListEnabledControlsInput' => [ 'base' => NULL, 'refs' => [], ], 'ListEnabledControlsOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListLandingZonesInput' => [ 'base' => NULL, 'refs' => [], ], 'ListLandingZonesMaxResults' => [ 'base' => NULL, 'refs' => [ 'ListLandingZonesInput$maxResults' => '<p>The maximum number of returned landing zone ARNs. </p>', ], ], 'ListLandingZonesOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListLandingZonesOutputLandingZonesList' => [ 'base' => NULL, 'refs' => [ 'ListLandingZonesOutput$landingZones' => '<p>The ARN of the landing zone. </p>', ], ], 'ListTagsForResourceInput' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceOutput' => [ 'base' => NULL, 'refs' => [], ], 'Manifest' => [ 'base' => NULL, 'refs' => [ 'CreateLandingZoneInput$manifest' => '<p>The manifest.yaml file is a text file that describes your Amazon Web Services resources. For examples, review <a href="https://docs.aws.amazon.com/controltower/latest/userguide/the-manifest-file">The manifest file</a>. </p>', 'LandingZoneDetail$manifest' => '<p>The landing zone manifest.yaml text file that specifies the landing zone configurations. </p>', 'UpdateLandingZoneInput$manifest' => '<p>The manifest.yaml file is a text file that describes your Amazon Web Services resources. For examples, review <a href="https://docs.aws.amazon.com/controltower/latest/userguide/the-manifest-file">The manifest file</a> </p>', ], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListEnabledControlsInput$maxResults' => '<p>How many results to return per API call.</p>', ], ], 'OperationIdentifier' => [ 'base' => NULL, 'refs' => [ 'CreateLandingZoneOutput$operationIdentifier' => '<p>A unique identifier assigned to a <code>CreateLandingZone</code> operation. You can use this identifier as an input of <code>GetLandingZoneOperation</code> to check the operation\'s status. </p>', 'DeleteLandingZoneOutput$operationIdentifier' => '<p>A unique identifier assigned to a <code>DeleteLandingZone</code> operation. You can use this identifier as an input of <code>GetLandingZoneOperation</code> to check the operation\'s status. </p>', 'DisableControlOutput$operationIdentifier' => '<p>The ID of the asynchronous operation, which is used to track status. The operation is available for 90 days.</p>', 'EnableControlOutput$operationIdentifier' => '<p>The ID of the asynchronous operation, which is used to track status. The operation is available for 90 days.</p>', 'EnablementStatusSummary$lastOperationIdentifier' => '<p>The last operation identifier for the enabled control.</p>', 'GetControlOperationInput$operationIdentifier' => '<p>The ID of the asynchronous operation, which is used to track status. The operation is available for 90 days.</p>', 'GetLandingZoneOperationInput$operationIdentifier' => '<p>A unique identifier assigned to a landing zone operation. </p>', 'ResetLandingZoneOutput$operationIdentifier' => '<p>A unique identifier assigned to a <code>ResetLandingZone</code> operation. You can use this identifier as an input of <code>GetLandingZoneOperation</code> to check the operation\'s status.</p>', 'UpdateLandingZoneOutput$operationIdentifier' => '<p>A unique identifier assigned to a <code>UpdateLandingZone</code> operation. You can use this identifier as an input of <code>GetLandingZoneOperation</code> to check the operation\'s status.</p>', ], ], 'Region' => [ 'base' => '<p>An Amazon Web Services Region in which Amazon Web Services Control Tower expects to find the control deployed. </p> <p>The expected Regions are based on the Regions that are governed by the landing zone. In certain cases, a control is not actually enabled in the Region as expected, such as during drift, or <a href="https://docs.aws.amazon.com/controltower/latest/userguide/region-how.html#mixed-governance">mixed governance</a>.</p>', 'refs' => [ 'TargetRegions$member' => NULL, ], ], 'RegionName' => [ 'base' => NULL, 'refs' => [ 'Region$name' => '<p>The Amazon Web Services Region name.</p>', ], ], 'ResetLandingZoneInput' => [ 'base' => NULL, 'refs' => [], ], 'ResetLandingZoneOutput' => [ 'base' => NULL, 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>Request references a resource which does not exist.</p>', 'refs' => [], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>Request would cause a service quota to be exceeded. The limit is 10 concurrent operations.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$message' => NULL, 'ConflictException$message' => NULL, 'ControlOperation$statusMessage' => '<p>If the operation result is <code>FAILED</code>, this string contains a message explaining why the operation failed.</p>', 'DeleteLandingZoneInput$landingZoneIdentifier' => '<p>The unique identifier of the landing zone. </p>', 'GetLandingZoneInput$landingZoneIdentifier' => '<p>The unique identifier of the landing zone. </p>', 'InternalServerException$message' => NULL, 'LandingZoneOperationDetail$statusMessage' => '<p>If the operation result is FAILED, this string contains a message explaining why the operation failed. </p>', 'ListEnabledControlsInput$nextToken' => '<p>The token to continue the list from a previous API call with the same parameters.</p>', 'ListEnabledControlsOutput$nextToken' => '<p>Retrieves the next page of results. If the string is empty, the current response is the end of the results.</p>', 'ListLandingZonesInput$nextToken' => '<p>The token to continue the list from a previous API call with the same parameters. </p>', 'ListLandingZonesOutput$nextToken' => '<p>Retrieves the next page of results. If the string is empty, the current response is the end of the results. </p>', 'ResetLandingZoneInput$landingZoneIdentifier' => '<p>The unique identifier of the landing zone. </p>', 'ResourceNotFoundException$message' => NULL, 'ServiceQuotaExceededException$message' => NULL, 'ThrottlingException$message' => NULL, 'ThrottlingException$quotaCode' => '<p>The ID of the service quota that was exceeded.</p>', 'ThrottlingException$serviceCode' => '<p>The ID of the service that is associated with the error.</p>', 'UpdateLandingZoneInput$landingZoneIdentifier' => '<p>The unique identifier of the landing zone. </p>', 'ValidationException$message' => NULL, ], ], 'SyntheticTimestamp_date_time' => [ 'base' => NULL, 'refs' => [ 'ControlOperation$endTime' => '<p>The time that the operation finished.</p>', 'ControlOperation$startTime' => '<p>The time that the operation began.</p>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeys$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeys' => [ 'base' => NULL, 'refs' => [ 'UntagResourceInput$tagKeys' => '<p>Tag keys to be removed from the resource.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'CreateLandingZoneInput$tags' => '<p>Tags to be applied to the landing zone. </p>', 'EnableControlInput$tags' => '<p>Tags to be applied to the <code>EnabledControl</code> resource.</p>', 'ListTagsForResourceOutput$tags' => '<p>A list of tags, as <code>key:value</code> strings.</p>', 'TagResourceInput$tags' => '<p>Tags to be applied to the resource.</p>', ], ], 'TagResourceInput' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceOutput' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'TargetIdentifier' => [ 'base' => NULL, 'refs' => [ 'DisableControlInput$targetIdentifier' => '<p>The ARN of the organizational unit. For information on how to find the <code>targetIdentifier</code>, see <a href="https://docs.aws.amazon.com/controltower/latest/APIReference/Welcome.html">the overview page</a>.</p>', 'EnableControlInput$targetIdentifier' => '<p>The ARN of the organizational unit. For information on how to find the <code>targetIdentifier</code>, see <a href="https://docs.aws.amazon.com/controltower/latest/APIReference/Welcome.html">the overview page</a>.</p>', 'EnabledControlDetails$targetIdentifier' => '<p>The ARN of the organizational unit. For information on how to find the <code>targetIdentifier</code>, see <a href="https://docs.aws.amazon.com/controltower/latest/APIReference/Welcome.html">the overview page</a>.</p>', 'EnabledControlSummary$targetIdentifier' => '<p> The ARN of the organizational unit. </p>', 'ListEnabledControlsInput$targetIdentifier' => '<p>The ARN of the organizational unit. For information on how to find the <code>targetIdentifier</code>, see <a href="https://docs.aws.amazon.com/controltower/latest/APIReference/Welcome.html">the overview page</a>.</p>', ], ], 'TargetRegions' => [ 'base' => NULL, 'refs' => [ 'EnabledControlDetails$targetRegions' => '<p>Target Amazon Web Services Regions for the enabled control.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>Request was denied due to request throttling.</p>', 'refs' => [], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'LandingZoneOperationDetail$endTime' => '<p>The landing zone operation end time. </p>', 'LandingZoneOperationDetail$startTime' => '<p>The landing zone operation start time. </p>', ], ], 'UntagResourceInput' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceOutput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLandingZoneInput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLandingZoneOutput' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>The input fails to satisfy the constraints specified by an Amazon Web Services service.</p>', 'refs' => [], ], ],];
