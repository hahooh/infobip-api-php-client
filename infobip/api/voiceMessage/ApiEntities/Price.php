<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-26
 * Time: 오후 3:16
 */

namespace infobip\api\voiceMessage\ApiEntities;

class Price implements \JsonSerializable {
    private $pricePerSecond;
    private $currency;

    /**
     * @return mixed
     */
    public function getPricePerSecond() {
        return $this->pricePerSecond;
    }

    /**
     * @param mixed $pricePerSecond
     * @return Price
     */
    public function setPricePerSecond($pricePerSecond): Price {
        $this->pricePerSecond = $pricePerSecond;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return Price
     */
    public function setCurrency($currency): Price {
        $this->currency = $currency;
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