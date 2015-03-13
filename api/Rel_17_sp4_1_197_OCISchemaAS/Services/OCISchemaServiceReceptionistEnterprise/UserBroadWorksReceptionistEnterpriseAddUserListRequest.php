<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceReceptionistEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add users to the BroadWorks Receptionist - Enterprise monitored user list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksReceptionistEnterpriseAddUserListRequest extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserBroadWorksReceptionistEnterpriseAddUserListRequest';
    protected $userId          = null;
    protected $monitoredUserId = null;

    public function __construct(
         $userId,
         $monitoredUserId = null
    ) {
        $this->setUserId($userId);
        $this->setMonitoredUserId($monitoredUserId);
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
    public function setMonitoredUserId($monitoredUserId = null)
    {
        if (!$monitoredUserId) return $this;
        $this->monitoredUserId = ($monitoredUserId InstanceOf UserId)
             ? $monitoredUserId
             : new UserId($monitoredUserId);
        $this->monitoredUserId->setName('monitoredUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $monitoredUserId
     */
    public function getMonitoredUserId()
    {
        return $this->monitoredUserId->getValue();
    }
}
