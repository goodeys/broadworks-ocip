<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferRecallNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferBusyCampOnSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Call Transfer.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallTransferModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                      = 'UserCallTransferModifyRequest';
    protected $userId                                    = null;
    protected $isRecallActive                            = null;
    protected $recallNumberOfRings                       = null;
    protected $useDiversionInhibitorForBlindTransfer     = null;
    protected $useDiversionInhibitorForConsultativeCalls = null;
    protected $enableBusyCampOn                          = null;
    protected $busyCampOnSeconds                         = null;

    public function __construct(
         $userId,
         $isRecallActive = null,
         $recallNumberOfRings = null,
         $useDiversionInhibitorForBlindTransfer = null,
         $useDiversionInhibitorForConsultativeCalls = null,
         $enableBusyCampOn = null,
         $busyCampOnSeconds = null
    ) {
        $this->setUserId($userId);
        $this->setIsRecallActive($isRecallActive);
        $this->setRecallNumberOfRings($recallNumberOfRings);
        $this->setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer);
        $this->setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls);
        $this->setEnableBusyCampOn($enableBusyCampOn);
        $this->setBusyCampOnSeconds($busyCampOnSeconds);
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
    public function setIsRecallActive($isRecallActive = null)
    {
        if (!$isRecallActive) return $this;
        $this->isRecallActive = new PrimitiveType($isRecallActive);
        $this->isRecallActive->setName('isRecallActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isRecallActive
     */
    public function getIsRecallActive()
    {
        return $this->isRecallActive->getValue();
    }

    /**
     * 
     */
    public function setRecallNumberOfRings($recallNumberOfRings = null)
    {
        if (!$recallNumberOfRings) return $this;
        $this->recallNumberOfRings = ($recallNumberOfRings InstanceOf CallTransferRecallNumberOfRings)
             ? $recallNumberOfRings
             : new CallTransferRecallNumberOfRings($recallNumberOfRings);
        $this->recallNumberOfRings->setName('recallNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return CallTransferRecallNumberOfRings $recallNumberOfRings
     */
    public function getRecallNumberOfRings()
    {
        return $this->recallNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer = null)
    {
        if (!$useDiversionInhibitorForBlindTransfer) return $this;
        $this->useDiversionInhibitorForBlindTransfer = new PrimitiveType($useDiversionInhibitorForBlindTransfer);
        $this->useDiversionInhibitorForBlindTransfer->setName('useDiversionInhibitorForBlindTransfer');
        return $this;
    }

    /**
     * 
     * @return boolean $useDiversionInhibitorForBlindTransfer
     */
    public function getUseDiversionInhibitorForBlindTransfer()
    {
        return $this->useDiversionInhibitorForBlindTransfer->getValue();
    }

    /**
     * 
     */
    public function setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls = null)
    {
        if (!$useDiversionInhibitorForConsultativeCalls) return $this;
        $this->useDiversionInhibitorForConsultativeCalls = new PrimitiveType($useDiversionInhibitorForConsultativeCalls);
        $this->useDiversionInhibitorForConsultativeCalls->setName('useDiversionInhibitorForConsultativeCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useDiversionInhibitorForConsultativeCalls
     */
    public function getUseDiversionInhibitorForConsultativeCalls()
    {
        return $this->useDiversionInhibitorForConsultativeCalls->getValue();
    }

    /**
     * 
     */
    public function setEnableBusyCampOn($enableBusyCampOn = null)
    {
        if (!$enableBusyCampOn) return $this;
        $this->enableBusyCampOn = new PrimitiveType($enableBusyCampOn);
        $this->enableBusyCampOn->setName('enableBusyCampOn');
        return $this;
    }

    /**
     * 
     * @return boolean $enableBusyCampOn
     */
    public function getEnableBusyCampOn()
    {
        return $this->enableBusyCampOn->getValue();
    }

    /**
     * 
     */
    public function setBusyCampOnSeconds($busyCampOnSeconds = null)
    {
        if (!$busyCampOnSeconds) return $this;
        $this->busyCampOnSeconds = ($busyCampOnSeconds InstanceOf CallTransferBusyCampOnSeconds)
             ? $busyCampOnSeconds
             : new CallTransferBusyCampOnSeconds($busyCampOnSeconds);
        $this->busyCampOnSeconds->setName('busyCampOnSeconds');
        return $this;
    }

    /**
     * 
     * @return CallTransferBusyCampOnSeconds $busyCampOnSeconds
     */
    public function getBusyCampOnSeconds()
    {
        return $this->busyCampOnSeconds->getValue();
    }
}
