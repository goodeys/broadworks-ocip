<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * The ErrorResponse is concrete response sent whenever a transaction fails and does not return any data.
 */
class ErrorResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ErrorResponse';
    protected $errorCode;
    protected $summary;
    protected $summaryEnglish;
    protected $detail;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE\ErrorResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setErrorCode($errorCode = null)
    {
        $this->errorCode = new PrimitiveType($errorCode);
        $this->errorCode->setElementName('errorCode');
        return $this;
    }

    /**
     * 
     * @return int $errorCode
     */
    public function getErrorCode()
    {
        return ($this->errorCode)
            ? $this->errorCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSummary($summary = null)
    {
        $this->summary = new PrimitiveType($summary);
        $this->summary->setElementName('summary');
        return $this;
    }

    /**
     * 
     * @return string $summary
     */
    public function getSummary()
    {
        return ($this->summary)
            ? $this->summary->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSummaryEnglish($summaryEnglish = null)
    {
        $this->summaryEnglish = new PrimitiveType($summaryEnglish);
        $this->summaryEnglish->setElementName('summaryEnglish');
        return $this;
    }

    /**
     * 
     * @return string $summaryEnglish
     */
    public function getSummaryEnglish()
    {
        return ($this->summaryEnglish)
            ? $this->summaryEnglish->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDetail($detail = null)
    {
        $this->detail = new PrimitiveType($detail);
        $this->detail->setElementName('detail');
        return $this;
    }

    /**
     * 
     * @return string $detail
     */
    public function getDetail()
    {
        return ($this->detail)
            ? $this->detail->getElementValue()
            : null;
    }
}
