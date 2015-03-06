<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferenceTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingNumberOfParticipants;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferenceAccountCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferenceAttendeeNotification;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferenceSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferencePassCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserMeetMeConferencingGetConferenceRequest.
 *         Contains the information of a conference.
 */
class UserMeetMeConferencingGetConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $title,
             $estimatedParticipants=null,
             $accountCode=null,
             $muteAllAttendeesOnEntry,
             $endConferenceOnModeratorExit,
             $moderatorRequired,
             $attendeeNotification,
             $conferenceSchedule,
             $moderatorPin
    ) {
        $this->title                        = $title;
        $this->estimatedParticipants        = $estimatedParticipants;
        $this->accountCode                  = $accountCode;
        $this->muteAllAttendeesOnEntry      = $muteAllAttendeesOnEntry;
        $this->endConferenceOnModeratorExit = $endConferenceOnModeratorExit;
        $this->moderatorRequired            = $moderatorRequired;
        $this->attendeeNotification         = $attendeeNotification;
        $this->conferenceSchedule           = $conferenceSchedule;
        $this->moderatorPin                 = $moderatorPin;
        $this->args                         = func_get_args();
    }

    public function setTitle($title)
    {
        $title and $this->title = new MeetMeConferencingConferenceTitle($title);
    }

    public function getTitle()
    {
        return (!$this->title) ?: $this->title->value();
    }

    public function setEstimatedParticipants($estimatedParticipants)
    {
        $estimatedParticipants and $this->estimatedParticipants = new MeetMeConferencingNumberOfParticipants($estimatedParticipants);
    }

    public function getEstimatedParticipants()
    {
        return (!$this->estimatedParticipants) ?: $this->estimatedParticipants->value();
    }

    public function setAccountCode($accountCode)
    {
        $accountCode and $this->accountCode = new MeetMeConferencingConferenceAccountCode($accountCode);
    }

    public function getAccountCode()
    {
        return (!$this->accountCode) ?: $this->accountCode->value();
    }

    public function setMuteAllAttendeesOnEntry($muteAllAttendeesOnEntry)
    {
        $muteAllAttendeesOnEntry and $this->muteAllAttendeesOnEntry = new xs:boolean($muteAllAttendeesOnEntry);
    }

    public function getMuteAllAttendeesOnEntry()
    {
        return (!$this->muteAllAttendeesOnEntry) ?: $this->muteAllAttendeesOnEntry->value();
    }

    public function setEndConferenceOnModeratorExit($endConferenceOnModeratorExit)
    {
        $endConferenceOnModeratorExit and $this->endConferenceOnModeratorExit = new xs:boolean($endConferenceOnModeratorExit);
    }

    public function getEndConferenceOnModeratorExit()
    {
        return (!$this->endConferenceOnModeratorExit) ?: $this->endConferenceOnModeratorExit->value();
    }

    public function setModeratorRequired($moderatorRequired)
    {
        $moderatorRequired and $this->moderatorRequired = new xs:boolean($moderatorRequired);
    }

    public function getModeratorRequired()
    {
        return (!$this->moderatorRequired) ?: $this->moderatorRequired->value();
    }

    public function setAttendeeNotification($attendeeNotification)
    {
        $attendeeNotification and $this->attendeeNotification = new MeetMeConferencingConferenceAttendeeNotification($attendeeNotification);
    }

    public function getAttendeeNotification()
    {
        return (!$this->attendeeNotification) ?: $this->attendeeNotification->value();
    }

    public function setConferenceSchedule($conferenceSchedule)
    {
        $conferenceSchedule and $this->conferenceSchedule = new MeetMeConferencingConferenceSchedule($conferenceSchedule);
    }

    public function getConferenceSchedule()
    {
        return (!$this->conferenceSchedule) ?: $this->conferenceSchedule->value();
    }

    public function setModeratorPin($moderatorPin)
    {
        $moderatorPin and $this->moderatorPin = new MeetMeConferencingConferencePassCode($moderatorPin);
    }

    public function getModeratorPin()
    {
        return (!$this->moderatorPin) ?: $this->moderatorPin->value();
    }
}