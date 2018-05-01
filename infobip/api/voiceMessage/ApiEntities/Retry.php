<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-26
 * Time: 오후 3:22
 */

namespace infobip\api\voiceMessage\ApiEntities;

class Retry implements \JsonSerializable {
    private $minPeriod;
    private $maxPeriod;
    private $maxCount;

    /**
     * @return mixed
     */
    public function getMinPeriod() {
        return $this->minPeriod;
    }

    /**
     * @param mixed $minPeriod
     * @return Retry
     */
    public function setMinPeriod($minPeriod): Retry {
        $this->minPeriod = $minPeriod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxPeriod() {
        return $this->maxPeriod;
    }

    /**
     * @param mixed $maxPeriod
     * @return Retry
     */
    public function setMaxPeriod($maxPeriod): Retry {
        $this->maxPeriod = $maxPeriod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxCount() {
        return $this->maxCount;
    }

    /**
     * @param mixed $maxCount
     * @return Retry
     */
    public function setMaxCount($maxCount): Retry {
        $this->maxCount = $maxCount;
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