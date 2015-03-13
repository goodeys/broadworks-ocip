<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get all service codes that have been defined in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either SystemServiceCodeGetListResponse or ErrorResponse.
 */
class SystemServiceCodeGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceCodeGetListResponse';
    public    $name                                 = 'SystemServiceCodeGetListRequest';
    protected $responseSizeLimit                    = null;
    protected $searchCriteriaServiceCode            = null;
    protected $searchCriteriaServiceCodeDescription = null;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaServiceCode $searchCriteriaServiceCode = null,
         SearchCriteriaServiceCodeDescription $searchCriteriaServiceCodeDescription = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaServiceCode($searchCriteriaServiceCode);
        $this->setSearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        if (!$responseSizeLimit) return $this;
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaServiceCode(SearchCriteriaServiceCode $searchCriteriaServiceCode = null)
    {
        if (!$searchCriteriaServiceCode) return $this;
        $this->searchCriteriaServiceCode = ($searchCriteriaServiceCode InstanceOf SearchCriteriaServiceCode)
             ? $searchCriteriaServiceCode
             : new SearchCriteriaServiceCode($searchCriteriaServiceCode);
        $this->searchCriteriaServiceCode->setName('searchCriteriaServiceCode');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaServiceCode $searchCriteriaServiceCode
     */
    public function getSearchCriteriaServiceCode()
    {
        return $this->searchCriteriaServiceCode;
    }

    /**
     * 
     */
    public function setSearchCriteriaServiceCodeDescription(SearchCriteriaServiceCodeDescription $searchCriteriaServiceCodeDescription = null)
    {
        if (!$searchCriteriaServiceCodeDescription) return $this;
        $this->searchCriteriaServiceCodeDescription = ($searchCriteriaServiceCodeDescription InstanceOf SearchCriteriaServiceCodeDescription)
             ? $searchCriteriaServiceCodeDescription
             : new SearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription);
        $this->searchCriteriaServiceCodeDescription->setName('searchCriteriaServiceCodeDescription');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaServiceCodeDescription $searchCriteriaServiceCodeDescription
     */
    public function getSearchCriteriaServiceCodeDescription()
    {
        return $this->searchCriteriaServiceCodeDescription;
    }
}
