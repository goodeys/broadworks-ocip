<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywherePhoneNumberDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a broadworks Anywhere phone number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksAnywhereAddPhoneNumberRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = 'UserBroadWorksAnywhereAddPhoneNumberRequest';
    protected $userId                     = null;
    protected $phoneNumber                = null;
    protected $description                = null;
    protected $isActive                   = null;
    protected $outboundAlternateNumber    = null;
    protected $broadworksCallControl      = null;
    protected $useDiversionInhibitor      = null;
    protected $answerConfirmationRequired = null;

    public function __construct(
         $userId,
         $phoneNumber,
         $description = null,
         $isActive,
         $outboundAlternateNumber = null,
         $broadworksCallControl,
         $useDiversionInhibitor,
         $answerConfirmationRequired
    ) {
        $this->setUserId($userId);
        $this->setPhoneNumber($phoneNumber);
        $this->setDescription($description);
        $this->setIsActive($isActive);
        $this->setOutboundAlternateNumber($outboundAlternateNumber);
        $this->setBroadworksCallControl($broadworksCallControl);
        $this->setUseDiversionInhibitor($useDiversionInhibitor);
        $this->setAnswerConfirmationRequired($answerConfirmationRequired);
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf BroadWorksAnywherePhoneNumberDescription)
             ? $description
             : new BroadWorksAnywherePhoneNumberDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywherePhoneNumberDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
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
    public function setOutboundAlternateNumber($outboundAlternateNumber = null)
    {
        if (!$outboundAlternateNumber) return $this;
        $this->outboundAlternateNumber = ($outboundAlternateNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundAlternateNumber
             : new OutgoingDNorSIPURI($outboundAlternateNumber);
        $this->outboundAlternateNumber->setName('outboundAlternateNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $outboundAlternateNumber
     */
    public function getOutboundAlternateNumber()
    {
        return $this->outboundAlternateNumber->getValue();
    }

    /**
     * 
     */
    public function setBroadworksCallControl($broadworksCallControl = null)
    {
        if (!$broadworksCallControl) return $this;
        $this->broadworksCallControl = new PrimitiveType($broadworksCallControl);
        $this->broadworksCallControl->setName('broadworksCallControl');
        return $this;
    }

    /**
     * 
     * @return boolean $broadworksCallControl
     */
    public function getBroadworksCallControl()
    {
        return $this->broadworksCallControl->getValue();
    }

    /**
     * 
     */
    public function setUseDiversionInhibitor($useDiversionInhibitor = null)
    {
        if (!$useDiversionInhibitor) return $this;
        $this->useDiversionInhibitor = new PrimitiveType($useDiversionInhibitor);
        $this->useDiversionInhibitor->setName('useDiversionInhibitor');
        return $this;
    }

    /**
     * 
     * @return boolean $useDiversionInhibitor
     */
    public function getUseDiversionInhibitor()
    {
        return $this->useDiversionInhibitor->getValue();
    }

    /**
     * 
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired = null)
    {
        if (!$answerConfirmationRequired) return $this;
        $this->answerConfirmationRequired = new PrimitiveType($answerConfirmationRequired);
        $this->answerConfirmationRequired->setName('answerConfirmationRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $answerConfirmationRequired
     */
    public function getAnswerConfirmationRequired()
    {
        return $this->answerConfirmationRequired->getValue();
    }
}
