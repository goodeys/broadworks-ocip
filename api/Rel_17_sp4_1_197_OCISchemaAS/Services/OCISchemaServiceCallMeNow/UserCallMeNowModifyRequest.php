<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowAnswerConfirmation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's call me now service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallMeNowModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = 'UserCallMeNowModifyRequest';
    protected $userId             = null;
    protected $isActive           = null;
    protected $answerConfirmation = null;
    protected $criteriaActivation = null;

    public function __construct(
         $userId,
         $isActive = null,
         $answerConfirmation = null,
         CriteriaActivation $criteriaActivation = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setAnswerConfirmation($answerConfirmation);
        $this->setCriteriaActivation($criteriaActivation);
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
    public function setAnswerConfirmation($answerConfirmation = null)
    {
        if (!$answerConfirmation) return $this;
        $this->answerConfirmation = ($answerConfirmation InstanceOf CallMeNowAnswerConfirmation)
             ? $answerConfirmation
             : new CallMeNowAnswerConfirmation($answerConfirmation);
        $this->answerConfirmation->setName('answerConfirmation');
        return $this;
    }

    /**
     * 
     * @return CallMeNowAnswerConfirmation $answerConfirmation
     */
    public function getAnswerConfirmation()
    {
        return $this->answerConfirmation->getValue();
    }

    /**
     * 
     */
    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
        if (!$criteriaActivation) return $this;
        $this->criteriaActivation = $criteriaActivation;
        $this->criteriaActivation->setName('criteriaActivation');
        return $this;
    }

    /**
     * 
     * @return CriteriaActivation $criteriaActivation
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }
}
