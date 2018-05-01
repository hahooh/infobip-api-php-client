<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-18
 * Time: 오전 9:00
 */

namespace infobip\api\voiceMessage\VoiceRequest;

class SimpleVoiceMessageRequest implements \JsonSerializable, VoiceRequest {
    private $from;
    private $to;
    private $text;
    private $language;
    private $audioFileUrl;

    /**
     * @return mixed
     */
    public function getFrom() {
        return $this->from;
    }

    /**
     * @param mixed $from
     * @return SimpleVoiceMessageRequest
     */
    public function setFrom($from): SimpleVoiceMessageRequest {
        $this->from = $from;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * @param mixed $to
     * @return SimpleVoiceMessageRequest
     */
    public function setTo($to): SimpleVoiceMessageRequest {
        $this->to = $to;
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
     * @return SimpleVoiceMessageRequest
     */
    public function setText($text): SimpleVoiceMessageRequest {
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
     * @return SimpleVoiceMessageRequest
     */
    public function setLanguage($language): SimpleVoiceMessageRequest {
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
     * @return SimpleVoiceMessageRequest
     */
    public function setAudioFileUrl($audioFileUrl): SimpleVoiceMessageRequest {
        $this->audioFileUrl = $audioFileUrl;
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