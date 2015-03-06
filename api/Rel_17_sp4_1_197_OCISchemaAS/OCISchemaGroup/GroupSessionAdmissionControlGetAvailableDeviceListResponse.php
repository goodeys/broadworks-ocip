<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupSessionAdmissionControlGetAvailableDeviceListRequest.
 *         Contains a table of devices can be assigned to session admission control group in the group.
 */
class GroupSessionAdmissionControlGetAvailableDeviceListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             AccessDevice $accessDevice=null
    ) {
        $this->accessDevice = $accessDevice;
        $this->args         = func_get_args();
    }

    public function setAccessDevice($accessDevice)
    {
        $accessDevice and $this->accessDevice = new AccessDevice($accessDevice);
    }

    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->value();
    }
}