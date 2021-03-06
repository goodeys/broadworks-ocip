<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactPolicySelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupLocationCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request the list of Voice VPN locations.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a EnterpriseVoiceVPNGetPolicyListResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNGetPolicyListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNGetPolicyListResponse';
    public    $elementName = 'EnterpriseVoiceVPNGetPolicyListRequest';
    protected $serviceProviderId;
    protected $responseSizeLimit;
    protected $searchCriteriaGroupLocationCode;
    protected $searchCriteriaExactPolicySelection;

    public function __construct(
         $serviceProviderId = '',
         $responseSizeLimit = null,
         $searchCriteriaGroupLocationCode = null,
         $searchCriteriaExactPolicySelection = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->setSearchCriteriaExactPolicySelection($searchCriteriaExactPolicySelection);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNGetPolicyListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setElementName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit)
            ? $this->responseSizeLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupLocationCode(SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null)
    {
        $this->searchCriteriaGroupLocationCode = ($searchCriteriaGroupLocationCode InstanceOf SearchCriteriaGroupLocationCode)
             ? $searchCriteriaGroupLocationCode
             : new SearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->searchCriteriaGroupLocationCode->setElementName('searchCriteriaGroupLocationCode');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return $this->searchCriteriaGroupLocationCode;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactPolicySelection(SearchCriteriaExactPolicySelection $searchCriteriaExactPolicySelection = null)
    {
        $this->searchCriteriaExactPolicySelection = ($searchCriteriaExactPolicySelection InstanceOf SearchCriteriaExactPolicySelection)
             ? $searchCriteriaExactPolicySelection
             : new SearchCriteriaExactPolicySelection($searchCriteriaExactPolicySelection);
        $this->searchCriteriaExactPolicySelection->setElementName('searchCriteriaExactPolicySelection');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactPolicySelection $searchCriteriaExactPolicySelection
     */
    public function getSearchCriteriaExactPolicySelection()
    {
        return $this->searchCriteriaExactPolicySelection;
    }
}
