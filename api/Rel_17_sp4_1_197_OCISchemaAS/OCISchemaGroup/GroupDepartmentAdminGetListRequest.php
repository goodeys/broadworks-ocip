<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a list of department administrators for the department.
 *         The response is either a GroupDepartmentAdminGetListResponse or an ErrorResponse.
 */
class GroupDepartmentAdminGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             GroupDepartmentKey $departmentKey
    ) {
        $this->departmentKey = $departmentKey;
        $this->args          = func_get_args();
    }

    public function setDepartmentKey($departmentKey)
    {
        $departmentKey and $this->departmentKey = new GroupDepartmentKey($departmentKey);
    }

    public function getDepartmentKey()
    {
        return (!$this->departmentKey) ?: $this->departmentKey->value();
    }
}