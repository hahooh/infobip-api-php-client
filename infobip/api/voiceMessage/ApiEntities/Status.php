<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-26
 * Time: 오후 3:18
 */

namespace infobip\api\voiceMessage\ApiEntities;

class Status implements \JsonSerializable {
    private $id;
    private $groupId;
    private $groupName;
    private $name;
    private $description;

    /**
     * @return mixed
     */
    public function getGroupName() {
        return $this->groupName;
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
    public function getName() {
        return $this->name;
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
    public function getDescription() {
        return $this->description;
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
    public function getId() {
        return $this->id;
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
    public function getGroupId() {
        return $this->groupId;
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