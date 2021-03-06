<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackSettingLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPContact;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with External Custom Ringback.  
 *         The user SIP URI, when selected, it replaces the SP address, port and prefix.  
 *         The user SIP URI, if selected, is the Request URI of the SIP INVITE sent 
 *         to the external server.  When the service provider data is used instead, 
 *         the Request URI is constructed using the prefix, address, port and the user DN.  
 *         The timeout value is the only SP configuration used when the user SIP URI is selected.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserExternalCustomRingbackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserExternalCustomRingbackModifyRequest';
    protected $userId;
    protected $isActive;
    protected $useSettingLevel;
    protected $sipRequestURI;

    public function __construct(
         $userId = '',
         $isActive = null,
         $useSettingLevel = null,
         $sipRequestURI = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setUseSettingLevel($useSettingLevel);
        $this->setSipRequestURI($sipRequestURI);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        $this->useSettingLevel = ($useSettingLevel InstanceOf ExternalCustomRingbackSettingLevel)
             ? $useSettingLevel
             : new ExternalCustomRingbackSettingLevel($useSettingLevel);
        $this->useSettingLevel->setElementName('useSettingLevel');
        return $this;
    }

    /**
     * 
     * @return ExternalCustomRingbackSettingLevel $useSettingLevel
     */
    public function getUseSettingLevel()
    {
        return ($this->useSettingLevel)
            ? $this->useSettingLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipRequestURI($sipRequestURI = null)
    {
        $this->sipRequestURI = ($sipRequestURI InstanceOf SIPContact)
             ? $sipRequestURI
             : new SIPContact($sipRequestURI);
        $this->sipRequestURI->setElementName('sipRequestURI');
        return $this;
    }

    /**
     * 
     * @return SIPContact $sipRequestURI
     */
    public function getSipRequestURI()
    {
        return ($this->sipRequestURI)
            ? $this->sipRequestURI->getElementValue()
            : null;
    }
}
