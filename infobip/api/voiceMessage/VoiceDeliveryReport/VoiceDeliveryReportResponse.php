<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-19
 * Time: 오전 11:08
 */

namespace infobip\api\voiceMessage\VoiceDeliveryReport;

use infobip\api\voiceMessage\ApiEntities\Price;
use infobip\api\voiceMessage\ApiEntities\Status;
use infobip\api\voiceMessage\ApiEntities\Error;

class VoiceDeliveryReportResponse implements \JsonSerializable {

    public static $STATUS_ID_DELIVERED_TO_HANDSET = 5;

    private $bulkId;
    private $messageId;
    private $to;
    private $sentAt;
    private $doneAt;
    private $duration;
    private $mccMnc;
    private $dtmfCodes;
    private $recordedAudioFileUrl;

    /**
     * @var Price $price
     */
    private $price;
    /**
     * @var Status $status
     */
    private $status;
    /**
     * @var Error $error
     */
    private $error;

    /**
     * @return mixed
     */
    public function getBulkId() {
        return $this->bulkId;
    }

    /**
     * @param mixed $bulkId
     * @return VoiceDeliveryReportResponse
     */
    public function setBulkId($bulkId): VoiceDeliveryReportResponse {
        $this->bulkId = $bulkId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessageId() {
        return $this->messageId;
    }

    /**
     * @param mixed $messageId
     * @return VoiceDeliveryReportResponse
     */
    public function setMessageId($messageId): VoiceDeliveryReportResponse {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * @param mixed $to
     * @return VoiceDeliveryReportResponse
     */
    public function setTo($to): VoiceDeliveryReportResponse {
        $this->to = $to;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSentAt() {
        return $this->sentAt;
    }

    /**
     * @param mixed $sentAt
     * @return VoiceDeliveryReportResponse
     */
    public function setSentAt($sentAt): VoiceDeliveryReportResponse {
        $this->sentAt = $sentAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDoneAt() {
        return $this->doneAt;
    }

    /**
     * @param mixed $doneAt
     * @return VoiceDeliveryReportResponse
     */
    public function setDoneAt($doneAt): VoiceDeliveryReportResponse {
        $this->doneAt = $doneAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     * @return VoiceDeliveryReportResponse
     */
    public function setDuration($duration): VoiceDeliveryReportResponse {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMccMnc() {
        return $this->mccMnc;
    }

    /**
     * @param mixed $mccMnc
     * @return VoiceDeliveryReportResponse
     */
    public function setMccMnc($mccMnc): VoiceDeliveryReportResponse {
        $this->mccMnc = $mccMnc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtmfCodes() {
        return $this->dtmfCodes;
    }

    /**
     * @param mixed $dtmfCodes
     * @return VoiceDeliveryReportResponse
     */
    public function setDtmfCodes($dtmfCodes): VoiceDeliveryReportResponse {
        $this->dtmfCodes = $dtmfCodes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecordedAudioFileUrl() {
        return $this->recordedAudioFileUrl;
    }

    /**
     * @param mixed $recordedAudioFileUrl
     * @return VoiceDeliveryReportResponse
     */
    public function setRecordedAudioFileUrl($recordedAudioFileUrl): VoiceDeliveryReportResponse {
        $this->recordedAudioFileUrl = $recordedAudioFileUrl;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return VoiceDeliveryReportResponse
     */
    public function setPrice($price): VoiceDeliveryReportResponse {
        $this->price = $price;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return VoiceDeliveryReportResponse
     */
    public function setStatus($status): VoiceDeliveryReportResponse {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Error
     */
    public function getError() {
        return $this->error;
    }

    /**
     * @param mixed $error
     * @return VoiceDeliveryReportResponse
     */
    public function setError($error): VoiceDeliveryReportResponse {
        $this->error = $error;
        return $this;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);
    }
}

