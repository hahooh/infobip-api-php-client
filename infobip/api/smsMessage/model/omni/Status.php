<?php
namespace infobip\api\smsMessage\model\omni;

/**
 * This is a generated class and is not intended for modification!
 */
class Status implements \JsonSerializable
{
    private $groupId;
    private $groupName;
    private $id;
    private $name;
    private $description;
    private $action;


    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    }
    public function getGroupId()
    {
        return $this->groupId;
    }

    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    }
    public function getGroupName()
    {
        return $this->groupName;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setAction($action)
    {
        $this->action = $action;
    }
    public function getAction()
    {
        return $this->action;
    }


  /**
   * (PHP 5 &gt;= 5.4.0)<br/>
   * Specify data which should be serialized to JSON
   * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
   * @return mixed data which can be serialized by <b>json_encode</b>,
   * which is a value of any type other than a resource.
   */
  function jsonSerialize()
  {
      return get_object_vars($this);
  }
}