<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the originating permissions for Pinhole digit patterns for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserOutgoingCallingPlanPinholeDigitPlanOriginatingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserOutgoingCallingPlanPinholeDigitPlanOriginatingModifyRequest';
    protected $userId;
    protected $useCustomSettings;
    protected $userPermissions;

    public function __construct(
         $userId = '',
         $useCustomSettings = null,
         $userPermissions = null
    ) {
        $this->setUserId($userId);
        $this->setUseCustomSettings($useCustomSettings);
        $this->setUserPermissions($userPermissions);
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
    public function setUseCustomSettings($useCustomSettings = null)
    {
        $this->useCustomSettings = new PrimitiveType($useCustomSettings);
        $this->useCustomSettings->setElementName('useCustomSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $useCustomSettings
     */
    public function getUseCustomSettings()
    {
        return ($this->useCustomSettings)
            ? $this->useCustomSettings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserPermissions(OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $userPermissions = null)
    {
        $this->userPermissions = ($userPermissions InstanceOf OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions)
             ? $userPermissions
             : new OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions($userPermissions);
        $this->userPermissions->setElementName('userPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $userPermissions
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }
}
