<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-26
 * Time: 오후 3:21
 */

namespace infobip\api\voiceMessage\ApiEntities;

class SendingSpeed implements \JsonSerializable {
    private $speed;
    private $timeUnit;

    /**
     * @return mixed
     */
    public function getSpeed() {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     * @return SendingSpeed
     */
    public function setSpeed($speed) {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeUnit() {
        return $this->timeUnit;
    }

    /**
     * @param mixed $timeUnit
     * @return SendingSpeed
     */
    public function setTimeUnit($timeUnit) {
        $this->timeUnit = $timeUnit;
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