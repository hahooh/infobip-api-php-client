<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-26
 * Time: 오후 3:18
 */

namespace infobip\api\voiceMessage\ApiEntities;

class Error implements \JsonSerializable {
    private $groupId;
    private $groupName;
    private $id;
    private $name;
    private $description;
    private $permanent;

    /**
     * @return mixed
     */
    public function getGroupId() {
        return $this->groupId;
    }

    /**
     * @param mixed $groupId
     * @return Error
     */
    public function setGroupId($groupId): Error {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroupName() {
        return $this->groupName;
    }

    /**
     * @param mixed $groupName
     * @return Error
     */
    public function setGroupName($groupName): Error {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Error
     */
    public function setId($id): Error {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Error
     */
    public function setName($name): Error {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Error
     */
    public function setDescription($description): Error {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPermanent() {
        return $this->permanent;
    }

    /**
     * @param mixed $permanent
     * @return Error
     */
    public function setPermanent($permanent): Error {
        $this->permanent = $permanent;
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