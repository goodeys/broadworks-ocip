<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNExtensionLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add the enterprise level data associated with a Voice VPN location code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNAddPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = 'EnterpriseVoiceVPNAddPolicyRequest';
    protected $serviceProviderId   = null;
    protected $locationDialingCode = null;
    protected $minExtensionLength  = null;
    protected $maxExtensionLength  = null;
    protected $description         = null;
    protected $routeGroupId        = null;
    protected $policySelection     = null;

    public function __construct(
         $serviceProviderId,
         $locationDialingCode,
         $minExtensionLength,
         $maxExtensionLength,
         $description = null,
         $routeGroupId = null,
         $policySelection
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setLocationDialingCode($locationDialingCode);
        $this->setMinExtensionLength($minExtensionLength);
        $this->setMaxExtensionLength($maxExtensionLength);
        $this->setDescription($description);
        $this->setRouteGroupId($routeGroupId);
        $this->setPolicySelection($policySelection);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setLocationDialingCode($locationDialingCode = null)
    {
        if (!$locationDialingCode) return $this;
        $this->locationDialingCode = ($locationDialingCode InstanceOf EnterpriseVoiceVPNLocationCode)
             ? $locationDialingCode
             : new EnterpriseVoiceVPNLocationCode($locationDialingCode);
        $this->locationDialingCode->setName('locationDialingCode');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNLocationCode $locationDialingCode
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode->getValue();
    }

    /**
     * 
     */
    public function setMinExtensionLength($minExtensionLength = null)
    {
        if (!$minExtensionLength) return $this;
        $this->minExtensionLength = ($minExtensionLength InstanceOf EnterpriseVoiceVPNExtensionLength)
             ? $minExtensionLength
             : new EnterpriseVoiceVPNExtensionLength($minExtensionLength);
        $this->minExtensionLength->setName('minExtensionLength');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNExtensionLength $minExtensionLength
     */
    public function getMinExtensionLength()
    {
        return $this->minExtensionLength->getValue();
    }

    /**
     * 
     */
    public function setMaxExtensionLength($maxExtensionLength = null)
    {
        if (!$maxExtensionLength) return $this;
        $this->maxExtensionLength = ($maxExtensionLength InstanceOf EnterpriseVoiceVPNExtensionLength)
             ? $maxExtensionLength
             : new EnterpriseVoiceVPNExtensionLength($maxExtensionLength);
        $this->maxExtensionLength->setName('maxExtensionLength');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNExtensionLength $maxExtensionLength
     */
    public function getMaxExtensionLength()
    {
        return $this->maxExtensionLength->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf EnterpriseVoiceVPNDescription)
             ? $description
             : new EnterpriseVoiceVPNDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setRouteGroupId($routeGroupId = null)
    {
        if (!$routeGroupId) return $this;
        $this->routeGroupId = ($routeGroupId InstanceOf GroupId)
             ? $routeGroupId
             : new GroupId($routeGroupId);
        $this->routeGroupId->setName('routeGroupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $routeGroupId
     */
    public function getRouteGroupId()
    {
        return $this->routeGroupId->getValue();
    }

    /**
     * 
     */
    public function setPolicySelection($policySelection = null)
    {
        if (!$policySelection) return $this;
        $this->policySelection = ($policySelection InstanceOf EnterpriseVoiceVPNPolicySelection)
             ? $policySelection
             : new EnterpriseVoiceVPNPolicySelection($policySelection);
        $this->policySelection->setName('policySelection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNPolicySelection $policySelection
     */
    public function getPolicySelection()
    {
        return $this->policySelection->getValue();
    }
}
