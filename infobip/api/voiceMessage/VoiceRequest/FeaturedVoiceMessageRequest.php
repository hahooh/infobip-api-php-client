<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-18
 * Time: 오후 1:54
 */

namespace infobip\api\voiceMessage\VoiceRequest;

class FeaturedVoiceMessageRequest implements \JsonSerializable, VoiceRequest {

    static public $NOTIFICATION_CONTENT_TYPE_JSON = 'application/json';
    static public $NOTIFICATION_CONTENT_TYPE_XML = 'application/xml';
    static public $MACHINE_DETECTION_DISABLE = 'disable';
    static public $MACHINE_DETECTION_HANGUP = 'hangup';
    static public $MACHINE_DETECTION_CONTINUE = 'continue';

    private $bulkId;
    /**
     * @var \infobip\api\voiceMessage\ApiEntities\Message[] $messages
     */
    private $messages;

    /**
     * @return mixed
     */
    public function getBulkId() {
        return $this->bulkId;
    }

    /**
     * @param mixed $bulkId
     * @return FeaturedVoiceMessageRequest
     */
    public function setBulkId($bulkId): FeaturedVoiceMessageRequest {
        $this->bulkId = $bulkId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessages() {
        return $this->messages;
    }

    /**
     * @param mixed $messages
     * @return FeaturedVoiceMessageRequest
     */
    public function setMessages($messages): FeaturedVoiceMessageRequest {
        $this->messages = $messages;
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
        $property = get_object_vars($this);
        unset($property['NOTIFICATION_CONTENT_TYPE_JSON'], $property['NOTIFICATION_CONTENT_TYPE_XML'], $property['MACHINE_DETECTION_DISABLED'], $property['MACHINE_DETECTION_HANGUP']);
        return $property;
    }
}