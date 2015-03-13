<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneNetworkCountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneMobileCountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneLocationAreaCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneCellId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a home zone to the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerAddHomeZoneRequest extends ComplexType implements ComplexInterface
{
    public    $name               = 'EnterpriseBroadWorksMobileManagerAddHomeZoneRequest';
    protected $serviceProviderId  = null;
    protected $homeZoneDomainName = null;
    protected $mobileCountryCode  = null;
    protected $mobileNetworkCode  = null;
    protected $locationAreaCode   = null;
    protected $cellIdentity       = null;

    public function __construct(
         $serviceProviderId,
         $homeZoneDomainName,
         $mobileCountryCode,
         $mobileNetworkCode,
         $locationAreaCode,
         $cellIdentity
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setHomeZoneDomainName($homeZoneDomainName);
        $this->setMobileCountryCode($mobileCountryCode);
        $this->setMobileNetworkCode($mobileNetworkCode);
        $this->setLocationAreaCode($locationAreaCode);
        $this->setCellIdentity($cellIdentity);
    }

    /**
     * @return mixed $response
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setHomeZoneDomainName($homeZoneDomainName = null)
    {
        if (!$homeZoneDomainName) return $this;
        $this->homeZoneDomainName = ($homeZoneDomainName InstanceOf BroadWorksMobileManagerDomainName)
             ? $homeZoneDomainName
             : new BroadWorksMobileManagerDomainName($homeZoneDomainName);
        $this->homeZoneDomainName->setName('homeZoneDomainName');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDomainName $homeZoneDomainName
     */
    public function getHomeZoneDomainName()
    {
        return $this->homeZoneDomainName->getValue();
    }

    /**
     * 
     */
    public function setMobileCountryCode($mobileCountryCode = null)
    {
        if (!$mobileCountryCode) return $this;
        $this->mobileCountryCode = ($mobileCountryCode InstanceOf BroadWorksMobileManagerHomeZoneMobileCountryCode)
             ? $mobileCountryCode
             : new BroadWorksMobileManagerHomeZoneMobileCountryCode($mobileCountryCode);
        $this->mobileCountryCode->setName('mobileCountryCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneMobileCountryCode $mobileCountryCode
     */
    public function getMobileCountryCode()
    {
        return $this->mobileCountryCode->getValue();
    }

    /**
     * 
     */
    public function setMobileNetworkCode($mobileNetworkCode = null)
    {
        if (!$mobileNetworkCode) return $this;
        $this->mobileNetworkCode = ($mobileNetworkCode InstanceOf BroadWorksMobileManagerHomeZoneNetworkCountryCode)
             ? $mobileNetworkCode
             : new BroadWorksMobileManagerHomeZoneNetworkCountryCode($mobileNetworkCode);
        $this->mobileNetworkCode->setName('mobileNetworkCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneNetworkCountryCode $mobileNetworkCode
     */
    public function getMobileNetworkCode()
    {
        return $this->mobileNetworkCode->getValue();
    }

    /**
     * 
     */
    public function setLocationAreaCode($locationAreaCode = null)
    {
        if (!$locationAreaCode) return $this;
        $this->locationAreaCode = ($locationAreaCode InstanceOf BroadWorksMobileManagerHomeZoneLocationAreaCode)
             ? $locationAreaCode
             : new BroadWorksMobileManagerHomeZoneLocationAreaCode($locationAreaCode);
        $this->locationAreaCode->setName('locationAreaCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneLocationAreaCode $locationAreaCode
     */
    public function getLocationAreaCode()
    {
        return $this->locationAreaCode->getValue();
    }

    /**
     * 
     */
    public function setCellIdentity($cellIdentity = null)
    {
        if (!$cellIdentity) return $this;
        $this->cellIdentity = ($cellIdentity InstanceOf BroadWorksMobileManagerHomeZoneCellId)
             ? $cellIdentity
             : new BroadWorksMobileManagerHomeZoneCellId($cellIdentity);
        $this->cellIdentity->setName('cellIdentity');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneCellId $cellIdentity
     */
    public function getCellIdentity()
    {
        return $this->cellIdentity->getValue();
    }
}
