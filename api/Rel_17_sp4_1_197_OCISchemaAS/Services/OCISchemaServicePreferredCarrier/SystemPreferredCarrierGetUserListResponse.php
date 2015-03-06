<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to a SystemPreferredCarrierGetUserListRequest.
 *         Contains a table with one row per user.
 *         The table columns are: "User Id", "Service Provider Id", "Group Id", "Last Name", "First Name", "Phone Number", "Email Address",
 *         "Hiragana Last Name", and "Hiragana First Name".
 */
class SystemPreferredCarrierGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $usersUsingCarrierTable
    ) {
        $this->usersUsingCarrierTable = $usersUsingCarrierTable;
        $this->args                   = func_get_args();
    }

    public function setUsersUsingCarrierTable($usersUsingCarrierTable)
    {
        $usersUsingCarrierTable and $this->usersUsingCarrierTable = new core:OCITable($usersUsingCarrierTable);
    }

    public function getUsersUsingCarrierTable()
    {
        return (!$this->usersUsingCarrierTable) ?: $this->usersUsingCarrierTable->value();
    }
}