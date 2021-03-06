<?php
namespace infobip\api\smsMessage\model\nc\notify;

/**
 * This is a generated class and is not intended for modification!
 */
class NumberContextResponse implements \JsonSerializable
{
    /**
     * @var \infobip\api\smsMessage\model\nc\notify\NumberContextResponseDetails[]
     */
    private $results;
    private $bulkId;


    /**
     * @param \infobip\api\smsMessage\model\nc\notify\NumberContextResponseDetails[] $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * @return \infobip\api\smsMessage\model\nc\notify\NumberContextResponseDetails[]
     */
    public function getResults()
    {
        return $this->results;
    }

    public function setBulkId($bulkId)
    {
        $this->bulkId = $bulkId;
    }
    public function getBulkId()
    {
        return $this->bulkId;
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