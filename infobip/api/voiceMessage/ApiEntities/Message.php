<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-26
 * Time: 오후 3:22
 */

namespace infobip\api\voiceMessage\ApiEntities;

class Message implements \JsonSerializable {

    private $from;
    /**
     * @var Destination[] $destinations
     */
    private $destinations;
    private $text;
    private $language;
    private $audioFileUrl;
    private $notifyUrl;
    private $notifyContentType;
    private $validityPeriod;
    private $sendAt;
    private $record;
    private $repeatDtmf;
    private $maxDtmf;
    private $ringTimeout;
    private $dtmfTimeout;
    private $callTimeout;
    private $machineDetection;
    private $callTransfers;
    private $track;
    private $processKey;
    private $callbackData;
    private $pause;
    /**
     * @var Retry $retry
     */
    private $retry;
    /**
     * @var SendingSpeed $sendingSpeed
     */
    private $sendingSpeed;

    /**
     * @return mixed
     */
    public function getFrom() {
        return $this->from;
    }

    /**
     * @param mixed $from
     * @return Message
     */
    public function setFrom($from) {
        $this->from = $from;
        return $this;
    }

    /**
     * @return Destination[]
     */
    public function getDestinations(): array {
        return $this->destinations;
    }

    /**
     * @param Destination[] $destinations
     * @return Message
     */
    public function setDestinations(array $destinations): Message {
        $this->destinations = $destinations;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getText() {
        return $this->text;
    }

    /**
     * @param mixed $text
     * @return Message
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLanguage() {
        return $this->language;
    }

    /**
     * @param mixed $language
     * @return Message
     */
    public function setLanguage($language) {
        $this->language = $language;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAudioFileUrl() {
        return $this->audioFileUrl;
    }

    /**
     * @param mixed $audioFileUrl
     * @return Message
     */
    public function setAudioFileUrl($audioFileUrl) {
        $this->audioFileUrl = $audioFileUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    /**
     * @param mixed $notifyUrl
     * @return Message
     */
    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotifyContentType() {
        return $this->notifyContentType;
    }

    /**
     * @param mixed $notifyContentType
     * @return Message
     */
    public function setNotifyContentType($notifyContentType) {
        $this->notifyContentType = $notifyContentType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidityPeriod() {
        return $this->validityPeriod;
    }

    /**
     * @param mixed $validityPeriod
     * @return Message
     */
    public function setValidityPeriod($validityPeriod) {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSendAt() {
        return $this->sendAt;
    }

    /**
     * @param mixed $sendAt
     * @return Message
     */
    public function setSendAt($sendAt) {
        $this->sendAt = $sendAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecord() {
        return $this->record;
    }

    /**
     * @param mixed $record
     * @return Message
     */
    public function setRecord($record) {
        $this->record = $record;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRepeatDtmf() {
        return $this->repeatDtmf;
    }

    /**
     * @param mixed $repeatDtmf
     * @return Message
     */
    public function setRepeatDtmf($repeatDtmf) {
        $this->repeatDtmf = $repeatDtmf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxDtmf() {
        return $this->maxDtmf;
    }

    /**
     * @param mixed $maxDtmf
     * @return Message
     */
    public function setMaxDtmf($maxDtmf) {
        $this->maxDtmf = $maxDtmf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRingTimeout() {
        return $this->ringTimeout;
    }

    /**
     * @param mixed $ringTimeout
     * @return Message
     */
    public function setRingTimeout($ringTimeout) {
        $this->ringTimeout = $ringTimeout;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtmfTimeout() {
        return $this->dtmfTimeout;
    }

    /**
     * @param mixed $dtmfTimeout
     * @return Message
     */
    public function setDtmfTimeout($dtmfTimeout) {
        $this->dtmfTimeout = $dtmfTimeout;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCallTimeout() {
        return $this->callTimeout;
    }

    /**
     * @param mixed $callTimeout
     * @return Message
     */
    public function setCallTimeout($callTimeout) {
        $this->callTimeout = $callTimeout;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMachineDetection() {
        return $this->machineDetection;
    }

    /**
     * @param mixed $machineDetection
     * @return Message
     */
    public function setMachineDetection($machineDetection) {
        $this->machineDetection = $machineDetection;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCallTransfers() {
        return $this->callTransfers;
    }

    /**
     * @param mixed $callTransfers
     * @return Message
     */
    public function setCallTransfers($callTransfers) {
        $this->callTransfers = $callTransfers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrack() {
        return $this->track;
    }

    /**
     * @param mixed $track
     * @return Message
     */
    public function setTrack($track) {
        $this->track = $track;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProcessKey() {
        return $this->processKey;
    }

    /**
     * @param mixed $processKey
     * @return Message
     */
    public function setProcessKey($processKey) {
        $this->processKey = $processKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCallbackData() {
        return $this->callbackData;
    }

    /**
     * @param mixed $callbackData
     * @return Message
     */
    public function setCallbackData($callbackData) {
        $this->callbackData = $callbackData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPause() {
        return $this->pause;
    }

    /**
     * @param mixed $pause
     * @return Message
     */
    public function setPause($pause) {
        $this->pause = $pause;
        return $this;
    }

    /**
     * @return Retry
     */
    public function getRetry(): Retry {
        return $this->retry;
    }

    /**
     * @param Retry $retry
     * @return Message
     */
    public function setRetry(Retry $retry): Message {
        $this->retry = $retry;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSendingSpeed() {
        return $this->sendingSpeed;
    }

    /**
     * @param mixed $sendingSpeed
     * @return Message
     */
    public function setSendingSpeed($sendingSpeed) {
        $this->sendingSpeed = $sendingSpeed;
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