<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportServerSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailboxIdType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailServer;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserThirdPartyVoiceMailSupportGetRequest13mp16.
 *         Replaced by: UserThirdPartyVoiceMailSupportGetResponse17
 */
class UserThirdPartyVoiceMailSupportGetResponse13mp16 extends ComplexType implements ComplexInterface
{
    public    $name                        = 'UserThirdPartyVoiceMailSupportGetResponse13mp16';
    protected $isActive                    = null;
    protected $busyRedirectToVoiceMail     = null;
    protected $noAnswerRedirectToVoiceMail = null;
    protected $serverSelection             = null;
    protected $userServer                  = null;
    protected $mailboxIdType               = null;
    protected $mailboxURL                  = null;
    protected $noAnswerNumberOfRings       = null;
    protected $alwaysRedirectToVoiceMail   = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserThirdPartyVoiceMailSupportGetResponse13mp16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail = null)
    {
        if (!$busyRedirectToVoiceMail) return $this;
        $this->busyRedirectToVoiceMail = new PrimitiveType($busyRedirectToVoiceMail);
        $this->busyRedirectToVoiceMail->setName('busyRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $busyRedirectToVoiceMail
     */
    public function getBusyRedirectToVoiceMail()
    {
        return $this->busyRedirectToVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail = null)
    {
        if (!$noAnswerRedirectToVoiceMail) return $this;
        $this->noAnswerRedirectToVoiceMail = new PrimitiveType($noAnswerRedirectToVoiceMail);
        $this->noAnswerRedirectToVoiceMail->setName('noAnswerRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $noAnswerRedirectToVoiceMail
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return $this->noAnswerRedirectToVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setServerSelection($serverSelection = null)
    {
        if (!$serverSelection) return $this;
        $this->serverSelection = ($serverSelection InstanceOf ThirdPartyVoiceMailSupportServerSelection)
             ? $serverSelection
             : new ThirdPartyVoiceMailSupportServerSelection($serverSelection);
        $this->serverSelection->setName('serverSelection');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportServerSelection $serverSelection
     */
    public function getServerSelection()
    {
        return $this->serverSelection->getValue();
    }

    /**
     * 
     */
    public function setUserServer($userServer = null)
    {
        if (!$userServer) return $this;
        $this->userServer = ($userServer InstanceOf ThirdPartyVoiceMailSupportMailServer)
             ? $userServer
             : new ThirdPartyVoiceMailSupportMailServer($userServer);
        $this->userServer->setName('userServer');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportMailServer $userServer
     */
    public function getUserServer()
    {
        return $this->userServer->getValue();
    }

    /**
     * 
     */
    public function setMailboxIdType($mailboxIdType = null)
    {
        if (!$mailboxIdType) return $this;
        $this->mailboxIdType = ($mailboxIdType InstanceOf ThirdPartyVoiceMailSupportMailboxIdType)
             ? $mailboxIdType
             : new ThirdPartyVoiceMailSupportMailboxIdType($mailboxIdType);
        $this->mailboxIdType->setName('mailboxIdType');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportMailboxIdType $mailboxIdType
     */
    public function getMailboxIdType()
    {
        return $this->mailboxIdType->getValue();
    }

    /**
     * 
     */
    public function setMailboxURL($mailboxURL = null)
    {
        if (!$mailboxURL) return $this;
        $this->mailboxURL = ($mailboxURL InstanceOf SIPURI)
             ? $mailboxURL
             : new SIPURI($mailboxURL);
        $this->mailboxURL->setName('mailboxURL');
        return $this;
    }

    /**
     * 
     * @return SIPURI $mailboxURL
     */
    public function getMailboxURL()
    {
        return $this->mailboxURL->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        if (!$noAnswerNumberOfRings) return $this;
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf ThirdPartyVoiceMailSupportNumberOfRings)
             ? $noAnswerNumberOfRings
             : new ThirdPartyVoiceMailSupportNumberOfRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportNumberOfRings $noAnswerNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail = null)
    {
        if (!$alwaysRedirectToVoiceMail) return $this;
        $this->alwaysRedirectToVoiceMail = new PrimitiveType($alwaysRedirectToVoiceMail);
        $this->alwaysRedirectToVoiceMail->setName('alwaysRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $alwaysRedirectToVoiceMail
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return $this->alwaysRedirectToVoiceMail->getValue();
    }
}
