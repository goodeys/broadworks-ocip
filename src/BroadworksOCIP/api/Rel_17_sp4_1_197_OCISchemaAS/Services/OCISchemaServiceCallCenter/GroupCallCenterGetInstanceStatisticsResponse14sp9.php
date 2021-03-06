<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentStatistics14sp9;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterQueueStatistics14sp9;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsRange;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains Call Center statistics.
 */
class GroupCallCenterGetInstanceStatisticsResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterGetInstanceStatisticsResponse14sp9';
    protected $statisticsRange;
    protected $queueStatistics;
    protected $agentStatistics;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetInstanceStatisticsResponse14sp9 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setStatisticsRange(CallCenterStatisticsRange $statisticsRange = null)
    {
        $this->statisticsRange = ($statisticsRange InstanceOf CallCenterStatisticsRange)
             ? $statisticsRange
             : new CallCenterStatisticsRange($statisticsRange);
        $this->statisticsRange->setElementName('statisticsRange');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsRange $statisticsRange
     */
    public function getStatisticsRange()
    {
        return $this->statisticsRange;
    }

    /**
     * 
     */
    public function setQueueStatistics(CallCenterQueueStatistics14sp9 $queueStatistics = null)
    {
        $this->queueStatistics = ($queueStatistics InstanceOf CallCenterQueueStatistics14sp9)
             ? $queueStatistics
             : new CallCenterQueueStatistics14sp9($queueStatistics);
        $this->queueStatistics->setElementName('queueStatistics');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueStatistics14sp9 $queueStatistics
     */
    public function getQueueStatistics()
    {
        return $this->queueStatistics;
    }

    /**
     * 
     */
    public function setAgentStatistics(CallCenterAgentStatistics14sp9 $agentStatistics = null)
    {
        $this->agentStatistics = ($agentStatistics InstanceOf CallCenterAgentStatistics14sp9)
             ? $agentStatistics
             : new CallCenterAgentStatistics14sp9($agentStatistics);
        $this->agentStatistics->setElementName('agentStatistics');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentStatistics14sp9 $agentStatistics
     */
    public function getAgentStatistics()
    {
        return $this->agentStatistics;
    }
}
