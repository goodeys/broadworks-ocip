<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoicePortalExternalRoutingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupVoiceMessagingGroupGetVoicePortalRequest17.
 */
class GroupVoiceMessagingGroupGetVoicePortalResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                                      = 'GroupVoiceMessagingGroupGetVoicePortalResponse17';
    protected $serviceUserId                                             = null;
    protected $serviceInstanceProfile                                    = null;
    protected $isActive                                                  = null;
    protected $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;
    protected $useVoicePortalWizard                                      = null;
    protected $voicePortalExternalRoutingScope                           = null;
    protected $useExternalRouting                                        = null;
    protected $externalRoutingAddress                                    = null;
    protected $homeZoneName                                              = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\GroupVoiceMessagingGroupGetVoicePortalResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile17 $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile17 $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null)
    {
        if (!$allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin) return $this;
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = new PrimitiveType($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin);
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->setName('allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     */
    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->getValue();
    }

    /**
     * 
     */
    public function setUseVoicePortalWizard($useVoicePortalWizard = null)
    {
        if (!$useVoicePortalWizard) return $this;
        $this->useVoicePortalWizard = new PrimitiveType($useVoicePortalWizard);
        $this->useVoicePortalWizard->setName('useVoicePortalWizard');
        return $this;
    }

    /**
     * 
     * @return boolean $useVoicePortalWizard
     */
    public function getUseVoicePortalWizard()
    {
        return $this->useVoicePortalWizard->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalExternalRoutingScope($voicePortalExternalRoutingScope = null)
    {
        if (!$voicePortalExternalRoutingScope) return $this;
        $this->voicePortalExternalRoutingScope = ($voicePortalExternalRoutingScope InstanceOf VoicePortalExternalRoutingScope)
             ? $voicePortalExternalRoutingScope
             : new VoicePortalExternalRoutingScope($voicePortalExternalRoutingScope);
        $this->voicePortalExternalRoutingScope->setName('voicePortalExternalRoutingScope');
        return $this;
    }

    /**
     * 
     * @return VoicePortalExternalRoutingScope $voicePortalExternalRoutingScope
     */
    public function getVoicePortalExternalRoutingScope()
    {
        return $this->voicePortalExternalRoutingScope->getValue();
    }

    /**
     * 
     */
    public function setUseExternalRouting($useExternalRouting = null)
    {
        if (!$useExternalRouting) return $this;
        $this->useExternalRouting = new PrimitiveType($useExternalRouting);
        $this->useExternalRouting->setName('useExternalRouting');
        return $this;
    }

    /**
     * 
     * @return boolean $useExternalRouting
     */
    public function getUseExternalRouting()
    {
        return $this->useExternalRouting->getValue();
    }

    /**
     * 
     */
    public function setExternalRoutingAddress($externalRoutingAddress = null)
    {
        if (!$externalRoutingAddress) return $this;
        $this->externalRoutingAddress = ($externalRoutingAddress InstanceOf OutgoingDNorSIPURI)
             ? $externalRoutingAddress
             : new OutgoingDNorSIPURI($externalRoutingAddress);
        $this->externalRoutingAddress->setName('externalRoutingAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $externalRoutingAddress
     */
    public function getExternalRoutingAddress()
    {
        return $this->externalRoutingAddress->getValue();
    }

    /**
     * 
     */
    public function setHomeZoneName($homeZoneName = null)
    {
        if (!$homeZoneName) return $this;
        $this->homeZoneName = ($homeZoneName InstanceOf ZoneName)
             ? $homeZoneName
             : new ZoneName($homeZoneName);
        $this->homeZoneName->setName('homeZoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName $homeZoneName
     */
    public function getHomeZoneName()
    {
        return $this->homeZoneName->getValue();
    }
}
