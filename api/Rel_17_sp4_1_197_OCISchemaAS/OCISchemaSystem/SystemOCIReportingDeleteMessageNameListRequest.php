<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a list of reported messages from a host in the OCI Reporting
 *         Access Control List. The response is either a SuccessResponse or an
 *         ErrorResponse.
 */
class SystemOCIReportingDeleteMessageNameListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $netAddress
    ) {
        $this->netAddress = new NetAddress($netAddress);
        $this->args       = func_get_args();
    }

    public function setNetAddress($netAddress)
    {
        $netAddress and $this->netAddress = new NetAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }
}