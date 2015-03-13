<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSMDIMessageDeskGetServerRouteListRequest.
 *         The SMDI Server route table column headings are: "Destination" and "SMDI Servers".
 */
class SystemSMDIMessageDeskGetServerRouteListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemSMDIMessageDeskGetServerRouteListResponse';
    protected $smdiServerRouteTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SystemSMDIMessageDeskGetServerRouteListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSmdiServerRouteTable(TableType $smdiServerRouteTable = null)
    {
        if (!$smdiServerRouteTable) return $this;
        $this->smdiServerRouteTable = $smdiServerRouteTable;
        $this->smdiServerRouteTable->setName('smdiServerRouteTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSmdiServerRouteTable()
    {
        return $this->smdiServerRouteTable;
    }
}
