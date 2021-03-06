<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemZoneNetAddressGetListRequest.
 */
class SystemZoneNetAddressGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemZoneNetAddressGetListResponse';
    protected $netAddress;
    protected $netAddressRange;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneNetAddressGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf IPAddress)
             ? $netAddress
             : new IPAddress($netAddress);
        $this->netAddress->setElementName('netAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress)
            ? $this->netAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetAddressRange(IPAddressRange $netAddressRange = null)
    {
        $this->netAddressRange = ($netAddressRange InstanceOf IPAddressRange)
             ? $netAddressRange
             : new IPAddressRange($netAddressRange);
        $this->netAddressRange->setElementName('netAddressRange');
        return $this;
    }

    /**
     * 
     * @return IPAddressRange $netAddressRange
     */
    public function getNetAddressRange()
    {
        return $this->netAddressRange;
    }
}
