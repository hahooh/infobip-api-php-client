<?php
/**
 * Created by PhpStorm.
 * User: hahooh
 * Date: 2018-04-18
 * Time: 오후 2:25
 */

namespace infobip\api\voiceMessage\Clients;

use infobip\api\voiceMessage\VoiceClient;

class SendFeaturedVoiceMessage extends VoiceClient {
    public function __construct($configuration) {
        parent::__construct($configuration);
        $this->setRestPath($this->getRestUrl('/tts/3/advanced'));
    }
}