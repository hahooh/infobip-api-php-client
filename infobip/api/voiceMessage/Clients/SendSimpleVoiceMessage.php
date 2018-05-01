<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-18
 * Time: 오전 8:41
 */

namespace infobip\api\voiceMessage\Clients;

use infobip\api\voiceMessage\VoiceClient;

class SendSimpleVoiceMessage extends VoiceClient {
    public function __construct($configuration) {
        parent::__construct($configuration);
        $this->setRestPath($this->getRestUrl('/tts/3/single'));
    }

}