<?php

namespace infobip\api\smsMessage\client;

use infobip\api\smsMessage\model\omni\scenarios\Scenario;
use infobip\api\AbstractApiClient;

/**
 * This is a generated class and is not intended for modification!
 */
class GetSpecificScenario extends AbstractApiClient {

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @return Scenario
     */
    public function execute($scenarioKey) {
        $restPath = $this->getRestUrl("/omni/1/scenarios/{$scenarioKey}");
        $content = $this->executeGET($restPath, null);
        return $this->map(json_decode($content), get_class(new Scenario));
    }

}