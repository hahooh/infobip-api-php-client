<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-26
 * Time: 오후 3:21
 */

namespace infobip\api\voiceMessage\ApiEntities;

class Destination implements \JsonSerializable {
    /**
     * @return mixed
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * @param mixed $to
     * @return Destination
     */
    public function setTo($to): Destination {
        $this->to = $to;
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
     * @return Destination
     */
    public function setMessageId($messageId): Destination {
        $this->messageId = $messageId;
        return $this;
    }

    private $to;
    private $messageId;

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