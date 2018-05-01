<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-18
 * Time: 오전 9:15
 */

namespace infobip\api\voiceMessage\VoiceResponse;

class VoiceResponse implements \JsonSerializable {

    /**
     * @var Message[]
     */
    private $messages;
    private $bulkId;

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() {
        return get_object_vars($this);
    }

    /**
     * @param mixed $messages
     * @return VoiceResponse
     */
    public function setMessages($messages) {
        $this->messages = $messages;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessages() {
        return $this->messages;
    }

    /**
     * @param mixed $bulkId
     * @return VoiceResponse
     */
    public function setBulkId($bulkId) {
        $this->bulkId = $bulkId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBulkId() {
        return $this->bulkId;
    }
}

class Message implements \JsonSerializable {

    private $to;
    /**
     * @var Status
     */
    private $status;
    private $messageId;


    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() {
        return get_object_vars($this);
    }

    /**
     * @param mixed $to
     * @return Message
     */
    public function setTo($to) {
        $this->to = $to;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * @param mixed $status
     * @return Message
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * @param mixed $messageId
     * @return Message
     */
    public function setMessageId($messageId) {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessageId() {
        return $this->messageId;
    }

    /**
     * @return mixed
     */
    public function getStatus() {
        return $this->status;
    }
}

class Status implements \JsonSerializable {

    private $groupId;
    private $groupName;
    private $id;
    private $name;
    private $description;

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

    /**
     * @param mixed $groupId
     * @return Status
     */
    public function setGroupId($groupId): Status {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroupId() {
        return $this->groupId;
    }

    /**
     * @param mixed $groupName
     * @return Status
     */
    public function setGroupName($groupName): Status {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroupName() {
        return $this->groupName;
    }

    /**
     * @param mixed $id
     * @return Status
     */
    public function setId($id): Status {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $name
     * @return Status
     */
    public function setName($name): Status {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $description
     * @return Status
     */
    public function setDescription($description): Status {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }
}
