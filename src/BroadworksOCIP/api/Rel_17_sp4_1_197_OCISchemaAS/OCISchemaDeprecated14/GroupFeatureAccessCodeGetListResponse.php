<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupFeatureAccessCodeGetListRequest.
 *         Replaced by: GroupFeatureAccessCodeGetResponse
 */
class GroupFeatureAccessCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupFeatureAccessCodeGetListResponse';
    protected $featureAccessCode;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupFeatureAccessCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        $this->featureAccessCode = ($featureAccessCode InstanceOf FeatureAccessCodeEntry)
             ? $featureAccessCode
             : new FeatureAccessCodeEntry($featureAccessCode);
        $this->featureAccessCode->setElementName('featureAccessCode');
        return $this;
    }

    /**
     * 
     * @return FeatureAccessCodeEntry $featureAccessCode
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode;
    }
}
