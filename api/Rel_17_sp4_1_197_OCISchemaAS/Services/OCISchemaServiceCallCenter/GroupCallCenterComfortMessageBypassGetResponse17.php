<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterComfortMessageBypassThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterComfortMessageBypassGetRequest17.
 */
class GroupCallCenterComfortMessageBypassGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $callWaitingAgeThresholdSeconds,
             $playAnnouncementAfterRinging,
             $ringTimeBeforePlayingAnnouncementSeconds,
             $audioMessageSelection,
             CallCenterAnnouncementURLList $audioUrlList=null,
             CallCenterAnnouncementDescriptionList $audioFileList=null,
             CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList=null,
             $videoMessageSelection,
             CallCenterAnnouncementURLList $videoUrlList=null,
             CallCenterAnnouncementDescriptionList $videoFileList=null,
             CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList=null
    ) {
        $this->isActive                                 = $isActive;
        $this->callWaitingAgeThresholdSeconds           = $callWaitingAgeThresholdSeconds;
        $this->playAnnouncementAfterRinging             = $playAnnouncementAfterRinging;
        $this->ringTimeBeforePlayingAnnouncementSeconds = $ringTimeBeforePlayingAnnouncementSeconds;
        $this->audioMessageSelection                    = new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioUrlList                             = $audioUrlList;
        $this->audioFileList                            = $audioFileList;
        $this->audioMediaTypeList                       = $audioMediaTypeList;
        $this->videoMessageSelection                    = new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoUrlList                             = $videoUrlList;
        $this->videoFileList                            = $videoFileList;
        $this->videoMediaTypeList                       = $videoMediaTypeList;
        $this->args                                     = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setCallWaitingAgeThresholdSeconds($callWaitingAgeThresholdSeconds)
    {
        $callWaitingAgeThresholdSeconds and $this->callWaitingAgeThresholdSeconds = new CallCenterComfortMessageBypassThresholdSeconds($callWaitingAgeThresholdSeconds);
    }

    public function getCallWaitingAgeThresholdSeconds()
    {
        return (!$this->callWaitingAgeThresholdSeconds) ?: $this->callWaitingAgeThresholdSeconds->value();
    }

    public function setPlayAnnouncementAfterRinging($playAnnouncementAfterRinging)
    {
        $playAnnouncementAfterRinging and $this->playAnnouncementAfterRinging = new xs:boolean($playAnnouncementAfterRinging);
    }

    public function getPlayAnnouncementAfterRinging()
    {
        return (!$this->playAnnouncementAfterRinging) ?: $this->playAnnouncementAfterRinging->value();
    }

    public function setRingTimeBeforePlayingAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds)
    {
        $ringTimeBeforePlayingAnnouncementSeconds and $this->ringTimeBeforePlayingAnnouncementSeconds = new CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds);
    }

    public function getRingTimeBeforePlayingAnnouncementSeconds()
    {
        return (!$this->ringTimeBeforePlayingAnnouncementSeconds) ?: $this->ringTimeBeforePlayingAnnouncementSeconds->value();
    }

    public function setAudioMessageSelection($audioMessageSelection)
    {
        $audioMessageSelection and $this->audioMessageSelection = new ExtendedFileResourceSelection($audioMessageSelection);
    }

    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->value();
    }

    public function setAudioUrlList($audioUrlList)
    {
        $audioUrlList and $this->audioUrlList = new CallCenterAnnouncementURLList($audioUrlList);
    }

    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->value();
    }

    public function setAudioFileList($audioFileList)
    {
        $audioFileList and $this->audioFileList = new CallCenterAnnouncementDescriptionList($audioFileList);
    }

    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->value();
    }

    public function setAudioMediaTypeList($audioMediaTypeList)
    {
        $audioMediaTypeList and $this->audioMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($audioMediaTypeList);
    }

    public function getAudioMediaTypeList()
    {
        return (!$this->audioMediaTypeList) ?: $this->audioMediaTypeList->value();
    }

    public function setVideoMessageSelection($videoMessageSelection)
    {
        $videoMessageSelection and $this->videoMessageSelection = new ExtendedFileResourceSelection($videoMessageSelection);
    }

    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->value();
    }

    public function setVideoUrlList($videoUrlList)
    {
        $videoUrlList and $this->videoUrlList = new CallCenterAnnouncementURLList($videoUrlList);
    }

    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->value();
    }

    public function setVideoFileList($videoFileList)
    {
        $videoFileList and $this->videoFileList = new CallCenterAnnouncementDescriptionList($videoFileList);
    }

    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->value();
    }

    public function setVideoMediaTypeList($videoMediaTypeList)
    {
        $videoMediaTypeList and $this->videoMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($videoMediaTypeList);
    }

    public function getVideoMediaTypeList()
    {
        return (!$this->videoMediaTypeList) ?: $this->videoMediaTypeList->value();
    }
}