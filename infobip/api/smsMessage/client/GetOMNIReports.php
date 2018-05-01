<?php

namespace infobip\api\smsMessage\client;

use infobip\api\AbstractApiClient;
use infobip\api\smsMessage\model\omni\reports\GetOMNIReportsExecuteContext;
use infobip\api\smsMessage\model\omni\reports\OMNIReportsResponse;

/**
 * This is a generated class and is not intended for modification!
 */
class GetOMNIReports extends AbstractApiClient {

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param GetOMNIReportsExecuteContext $params
     * @return OMNIReportsResponse
     */
    public function execute(GetOMNIReportsExecuteContext $params) {
        $restPath = $this->getRestUrl("/omni/1/reports");
        $content = $this->executeGET($restPath, $params);
        return $this->map(json_decode($content), get_class(new OMNIReportsResponse));
    }

}