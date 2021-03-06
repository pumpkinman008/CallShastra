<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A speech recognition result corresponding to a portion of the audio.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1beta1.SpeechRecognitionResult</code>
 */
class SpeechRecognitionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * *Output-only* May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionAlternative alternatives = 1;</code>
     */
    private $alternatives;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * *Output-only* May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionAlternative alternatives = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlternatives()
    {
        return $this->alternatives;
    }

    /**
     * *Output-only* May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionAlternative alternatives = 1;</code>
     * @param \Google\Cloud\Speech\V1beta1\SpeechRecognitionAlternative[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAlternatives($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1beta1\SpeechRecognitionAlternative::class);
        $this->alternatives = $arr;

        return $this;
    }

}

