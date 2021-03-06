<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Cloud\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of the k-anonymity computation.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.KAnonymityResult</code>
 */
class RiskAnalysisOperationResult_KAnonymityResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Histogram of k-anonymity equivalence classes.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.KAnonymityResult.KAnonymityHistogramBucket equivalence_class_histogram_buckets = 5;</code>
     */
    private $equivalence_class_histogram_buckets;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Histogram of k-anonymity equivalence classes.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.KAnonymityResult.KAnonymityHistogramBucket equivalence_class_histogram_buckets = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEquivalenceClassHistogramBuckets()
    {
        return $this->equivalence_class_histogram_buckets;
    }

    /**
     * Histogram of k-anonymity equivalence classes.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.KAnonymityResult.KAnonymityHistogramBucket equivalence_class_histogram_buckets = 5;</code>
     * @param \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_KAnonymityResult_KAnonymityHistogramBucket[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEquivalenceClassHistogramBuckets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_KAnonymityResult_KAnonymityHistogramBucket::class);
        $this->equivalence_class_histogram_buckets = $arr;

        return $this;
    }

}

