<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupInterceptGroupGetRequest16.
 *         Replaced By: GroupInterceptGroupGetResponse16sp1
 */
class GroupInterceptGroupGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $announcementSelection,
             $audioFileDescription=null,
             $audioMediaType=null,
             $videoFileDescription=null,
             $videoMediaType=null,
             $playNewPhoneNumber,
             $newPhoneNumber=null,
             $transferOnZeroToPhoneNumber,
             $transferPhoneNumber=null
    ) {
        $this->isActive                    = $isActive;
        $this->announcementSelection       = new AnnouncementSelection($announcementSelection);
        $this->audioFileDescription        = new FileDescription($audioFileDescription);
        $this->audioMediaType              = new MediaFileType($audioMediaType);
        $this->videoFileDescription        = new FileDescription($videoFileDescription);
        $this->videoMediaType              = new MediaFileType($videoMediaType);
        $this->playNewPhoneNumber          = $playNewPhoneNumber;
        $this->newPhoneNumber              = new DN($newPhoneNumber);
        $this->transferOnZeroToPhoneNumber = $transferOnZeroToPhoneNumber;
        $this->transferPhoneNumber         = new OutgoingDN($transferPhoneNumber);
        $this->args                        = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAnnouncementSelection($announcementSelection)
    {
        $announcementSelection and $this->announcementSelection = new AnnouncementSelection($announcementSelection);
    }

    public function getAnnouncementSelection()
    {
        return (!$this->announcementSelection) ?: $this->announcementSelection->value();
    }

    public function setAudioFileDescription($audioFileDescription)
    {
        $audioFileDescription and $this->audioFileDescription = new FileDescription($audioFileDescription);
    }

    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->value();
    }

    public function setAudioMediaType($audioMediaType)
    {
        $audioMediaType and $this->audioMediaType = new MediaFileType($audioMediaType);
    }

    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->value();
    }

    public function setVideoFileDescription($videoFileDescription)
    {
        $videoFileDescription and $this->videoFileDescription = new FileDescription($videoFileDescription);
    }

    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->value();
    }

    public function setVideoMediaType($videoMediaType)
    {
        $videoMediaType and $this->videoMediaType = new MediaFileType($videoMediaType);
    }

    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->value();
    }

    public function setPlayNewPhoneNumber($playNewPhoneNumber)
    {
        $playNewPhoneNumber and $this->playNewPhoneNumber = new xs:boolean($playNewPhoneNumber);
    }

    public function getPlayNewPhoneNumber()
    {
        return (!$this->playNewPhoneNumber) ?: $this->playNewPhoneNumber->value();
    }

    public function setNewPhoneNumber($newPhoneNumber)
    {
        $newPhoneNumber and $this->newPhoneNumber = new DN($newPhoneNumber);
    }

    public function getNewPhoneNumber()
    {
        return (!$this->newPhoneNumber) ?: $this->newPhoneNumber->value();
    }

    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber)
    {
        $transferOnZeroToPhoneNumber and $this->transferOnZeroToPhoneNumber = new xs:boolean($transferOnZeroToPhoneNumber);
    }

    public function getTransferOnZeroToPhoneNumber()
    {
        return (!$this->transferOnZeroToPhoneNumber) ?: $this->transferOnZeroToPhoneNumber->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $transferPhoneNumber and $this->transferPhoneNumber = new OutgoingDN($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }
}