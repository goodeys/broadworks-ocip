<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupFileRepositoryDeviceUserGetListRequest.
 *         Contains a table with column headings : "User Name","Allow Delete","Allow Get","Allow Put" in a row for each file repository service provider user.
 */
class GroupFileRepositoryDeviceUserGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $fileRepositoryUserTable
    ) {
        $this->fileRepositoryUserTable = $fileRepositoryUserTable;
        $this->args                    = func_get_args();
    }

    public function setFileRepositoryUserTable($fileRepositoryUserTable)
    {
        $fileRepositoryUserTable and $this->fileRepositoryUserTable = new core:OCITable($fileRepositoryUserTable);
    }

    public function getFileRepositoryUserTable()
    {
        return (!$this->fileRepositoryUserTable) ?: $this->fileRepositoryUserTable->value();
    }
}