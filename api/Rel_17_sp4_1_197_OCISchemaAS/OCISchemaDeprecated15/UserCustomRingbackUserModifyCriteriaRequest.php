<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDnModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a criteria for the user's custom ringback service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserCustomRingbackUserModifyCriteriaRequest16
 */
class UserCustomRingbackUserModifyCriteriaRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = 'UserCustomRingbackUserModifyCriteriaRequest';
    protected $userId                    = null;
    protected $criteriaName              = null;
    protected $newCriteriaName           = null;
    protected $timeSchedule              = null;
    protected $fromDnCriteria            = null;
    protected $audioSelection            = null;
    protected $audioFile                 = null;
    protected $videoSelection            = null;
    protected $videoFile                 = null;
    protected $callWaitingAudioSelection = null;
    protected $callWaitingAudioFile      = null;
    protected $callWaitingVideoSelection = null;
    protected $callWaitingVideoFile      = null;

    public function __construct(
         $userId,
         $criteriaName,
         $newCriteriaName = null,
         TimeSchedule $timeSchedule = null,
         CriteriaFromDnModify $fromDnCriteria = null,
         $audioSelection = null,
         ExtendedFileResource $audioFile = null,
         $videoSelection = null,
         ExtendedFileResource $videoFile = null,
         $callWaitingAudioSelection = null,
         ExtendedFileResource $callWaitingAudioFile = null,
         $callWaitingVideoSelection = null,
         ExtendedFileResource $callWaitingVideoFile = null
    ) {
        $this->setUserId($userId);
        $this->setCriteriaName($criteriaName);
        $this->setNewCriteriaName($newCriteriaName);
        $this->setTimeSchedule($timeSchedule);
        $this->setFromDnCriteria($fromDnCriteria);
        $this->setAudioSelection($audioSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoSelection($videoSelection);
        $this->setVideoFile($videoFile);
        $this->setCallWaitingAudioSelection($callWaitingAudioSelection);
        $this->setCallWaitingAudioFile($callWaitingAudioFile);
        $this->setCallWaitingVideoSelection($callWaitingVideoSelection);
        $this->setCallWaitingVideoFile($callWaitingVideoFile);
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
    public function setCriteriaName($criteriaName = null)
    {
        if (!$criteriaName) return $this;
        $this->criteriaName = ($criteriaName InstanceOf CriteriaName)
             ? $criteriaName
             : new CriteriaName($criteriaName);
        $this->criteriaName->setName('criteriaName');
        return $this;
    }

    /**
     * 
     * @return CriteriaName $criteriaName
     */
    public function getCriteriaName()
    {
        return $this->criteriaName->getValue();
    }

    /**
     * 
     */
    public function setNewCriteriaName($newCriteriaName = null)
    {
        if (!$newCriteriaName) return $this;
        $this->newCriteriaName = ($newCriteriaName InstanceOf CriteriaName)
             ? $newCriteriaName
             : new CriteriaName($newCriteriaName);
        $this->newCriteriaName->setName('newCriteriaName');
        return $this;
    }

    /**
     * 
     * @return CriteriaName $newCriteriaName
     */
    public function getNewCriteriaName()
    {
        return $this->newCriteriaName->getValue();
    }

    /**
     * 
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        if (!$timeSchedule) return $this;
        $this->timeSchedule = $timeSchedule;
        $this->timeSchedule->setName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule $timeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * 
     */
    public function setFromDnCriteria(CriteriaFromDnModify $fromDnCriteria = null)
    {
        if (!$fromDnCriteria) return $this;
        $this->fromDnCriteria = $fromDnCriteria;
        $this->fromDnCriteria->setName('fromDnCriteria');
        return $this;
    }

    /**
     * 
     * @return CriteriaFromDnModify $fromDnCriteria
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }

    /**
     * 
     */
    public function setAudioSelection($audioSelection = null)
    {
        if (!$audioSelection) return $this;
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
        $this->audioSelection->setName('audioSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioSelection
     */
    public function getAudioSelection()
    {
        return $this->audioSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioFile(ExtendedFileResource $audioFile = null)
    {
        if (!$audioFile) return $this;
        $this->audioFile = $audioFile;
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResource $audioFile
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * 
     */
    public function setVideoSelection($videoSelection = null)
    {
        if (!$videoSelection) return $this;
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
        $this->videoSelection->setName('videoSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoSelection
     */
    public function getVideoSelection()
    {
        return $this->videoSelection->getValue();
    }

    /**
     * 
     */
    public function setVideoFile(ExtendedFileResource $videoFile = null)
    {
        if (!$videoFile) return $this;
        $this->videoFile = $videoFile;
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResource $videoFile
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * 
     */
    public function setCallWaitingAudioSelection($callWaitingAudioSelection = null)
    {
        if (!$callWaitingAudioSelection) return $this;
        $this->callWaitingAudioSelection = ($callWaitingAudioSelection InstanceOf ExtendedFileResourceSelection)
             ? $callWaitingAudioSelection
             : new ExtendedFileResourceSelection($callWaitingAudioSelection);
        $this->callWaitingAudioSelection->setName('callWaitingAudioSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $callWaitingAudioSelection
     */
    public function getCallWaitingAudioSelection()
    {
        return $this->callWaitingAudioSelection->getValue();
    }

    /**
     * 
     */
    public function setCallWaitingAudioFile(ExtendedFileResource $callWaitingAudioFile = null)
    {
        if (!$callWaitingAudioFile) return $this;
        $this->callWaitingAudioFile = $callWaitingAudioFile;
        $this->callWaitingAudioFile->setName('callWaitingAudioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResource $callWaitingAudioFile
     */
    public function getCallWaitingAudioFile()
    {
        return $this->callWaitingAudioFile;
    }

    /**
     * 
     */
    public function setCallWaitingVideoSelection($callWaitingVideoSelection = null)
    {
        if (!$callWaitingVideoSelection) return $this;
        $this->callWaitingVideoSelection = ($callWaitingVideoSelection InstanceOf ExtendedFileResourceSelection)
             ? $callWaitingVideoSelection
             : new ExtendedFileResourceSelection($callWaitingVideoSelection);
        $this->callWaitingVideoSelection->setName('callWaitingVideoSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $callWaitingVideoSelection
     */
    public function getCallWaitingVideoSelection()
    {
        return $this->callWaitingVideoSelection->getValue();
    }

    /**
     * 
     */
    public function setCallWaitingVideoFile(ExtendedFileResource $callWaitingVideoFile = null)
    {
        if (!$callWaitingVideoFile) return $this;
        $this->callWaitingVideoFile = $callWaitingVideoFile;
        $this->callWaitingVideoFile->setName('callWaitingVideoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResource $callWaitingVideoFile
     */
    public function getCallWaitingVideoFile()
    {
        return $this->callWaitingVideoFile;
    }
}
