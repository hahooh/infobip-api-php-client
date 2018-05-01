<?php

namespace infobip\api\voiceMessage;

use infobip\api\AbstractApiClient;
use infobip\api\voiceMessage\VoiceRequest\VoiceRequest;
use infobip\api\voiceMessage\VoiceResponse\VoiceResponse;

class VoiceClient extends AbstractApiClient {
    protected $restPath;

    /**
     * @param mixed $restPath
     * @return VoiceClient
     */
    protected function setRestPath($restPath) {
        $this->restPath = $restPath;
        return $this;
    }

    /**
     * @return mixed
     */
    private function getRestPath() {
        return $this->restPath;
    }

    public function execute(VoiceRequest $body) {
        $restPath = $this->getRestPath();
        $content = $this->executePOST($restPath, null, $body);
        return $this->map(json_decode($content), get_class(new VoiceResponse()));
    }
}