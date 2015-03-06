<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobilityServiceProviderSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the service provider level BroadWorks Mobility service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderBroadWorksMobilityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $useSettingLevel=null,
             $enableLocationServices=null,
             $enableMSRNLookup=null,
             $enableMobileStateChecking=null,
             $denyCallOriginations=null,
             $denyCallTerminations=null
    ) {
        $this->serviceProviderId         = new ServiceProviderId($serviceProviderId);
        $this->useSettingLevel           = $useSettingLevel;
        $this->enableLocationServices    = $enableLocationServices;
        $this->enableMSRNLookup          = $enableMSRNLookup;
        $this->enableMobileStateChecking = $enableMobileStateChecking;
        $this->denyCallOriginations      = $denyCallOriginations;
        $this->denyCallTerminations      = $denyCallTerminations;
        $this->args                      = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setUseSettingLevel($useSettingLevel)
    {
        $useSettingLevel and $this->useSettingLevel = new BroadWorksMobilityServiceProviderSettingLevel($useSettingLevel);
    }

    public function getUseSettingLevel()
    {
        return (!$this->useSettingLevel) ?: $this->useSettingLevel->value();
    }

    public function setEnableLocationServices($enableLocationServices)
    {
        $enableLocationServices and $this->enableLocationServices = new xs:boolean($enableLocationServices);
    }

    public function getEnableLocationServices()
    {
        return (!$this->enableLocationServices) ?: $this->enableLocationServices->value();
    }

    public function setEnableMSRNLookup($enableMSRNLookup)
    {
        $enableMSRNLookup and $this->enableMSRNLookup = new xs:boolean($enableMSRNLookup);
    }

    public function getEnableMSRNLookup()
    {
        return (!$this->enableMSRNLookup) ?: $this->enableMSRNLookup->value();
    }

    public function setEnableMobileStateChecking($enableMobileStateChecking)
    {
        $enableMobileStateChecking and $this->enableMobileStateChecking = new xs:boolean($enableMobileStateChecking);
    }

    public function getEnableMobileStateChecking()
    {
        return (!$this->enableMobileStateChecking) ?: $this->enableMobileStateChecking->value();
    }

    public function setDenyCallOriginations($denyCallOriginations)
    {
        $denyCallOriginations and $this->denyCallOriginations = new xs:boolean($denyCallOriginations);
    }

    public function getDenyCallOriginations()
    {
        return (!$this->denyCallOriginations) ?: $this->denyCallOriginations->value();
    }

    public function setDenyCallTerminations($denyCallTerminations)
    {
        $denyCallTerminations and $this->denyCallTerminations = new xs:boolean($denyCallTerminations);
    }

    public function getDenyCallTerminations()
    {
        return (!$this->denyCallTerminations) ?: $this->denyCallTerminations->value();
    }
}