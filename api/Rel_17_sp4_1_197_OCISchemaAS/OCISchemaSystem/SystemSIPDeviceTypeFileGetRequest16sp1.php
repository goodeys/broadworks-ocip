<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get a sip device type file.
 *           The response is either SystemSIPDeviceTypeFileGetResponse16sp1 or ErrorResponse.
 */
class SystemSIPDeviceTypeFileGetRequest16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceType,
             $fileFormat
    ) {
        $this->deviceType = new AccessDeviceType($deviceType);
        $this->fileFormat = new DeviceManagementFileFormat($fileFormat);
        $this->args       = func_get_args();
    }

    public function setDeviceType($deviceType)
    {
        $deviceType and $this->deviceType = new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setFileFormat($fileFormat)
    {
        $fileFormat and $this->fileFormat = new DeviceManagementFileFormat($fileFormat);
    }

    public function getFileFormat()
    {
        return (!$this->fileFormat) ?: $this->fileFormat->value();
    }
}