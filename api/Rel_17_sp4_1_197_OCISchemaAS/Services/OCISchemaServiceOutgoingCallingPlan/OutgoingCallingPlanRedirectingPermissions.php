<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Outgoing Calling Plan initiating call forwards/transfer permissions.
 */
class OutgoingCallingPlanRedirectingPermissions extends ComplexType implements ComplexInterface
{
    public    $name                        = 'OutgoingCallingPlanRedirectingPermissions';
    protected $group                       = null;
    protected $local                       = null;
    protected $tollFree                    = null;
    protected $toll                        = null;
    protected $international               = null;
    protected $operatorAssisted            = null;
    protected $chargeableDirectoryAssisted = null;
    protected $specialServicesI            = null;
    protected $specialServicesII           = null;
    protected $premiumServicesI            = null;
    protected $premiumServicesII           = null;
    protected $casual                      = null;
    protected $urlDialing                  = null;
    protected $unknown                     = null;

    public function __construct(
         $group,
         $local,
         $tollFree,
         $toll,
         $international,
         $operatorAssisted,
         $chargeableDirectoryAssisted,
         $specialServicesI,
         $specialServicesII,
         $premiumServicesI,
         $premiumServicesII,
         $casual,
         $urlDialing,
         $unknown
    ) {
        $this->setGroup($group);
        $this->setLocal($local);
        $this->setTollFree($tollFree);
        $this->setToll($toll);
        $this->setInternational($international);
        $this->setOperatorAssisted($operatorAssisted);
        $this->setChargeableDirectoryAssisted($chargeableDirectoryAssisted);
        $this->setSpecialServicesI($specialServicesI);
        $this->setSpecialServicesII($specialServicesII);
        $this->setPremiumServicesI($premiumServicesI);
        $this->setPremiumServicesII($premiumServicesII);
        $this->setCasual($casual);
        $this->setUrlDialing($urlDialing);
        $this->setUnknown($unknown);
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
    public function setGroup($group = null)
    {
        if (!$group) return $this;
        $this->group = new SimpleContent($group);
        $this->group->setName('group');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $group
     */
    public function getGroup()
    {
        return $this->group->getValue();
    }

    /**
     * 
     */
    public function setLocal($local = null)
    {
        if (!$local) return $this;
        $this->local = new SimpleContent($local);
        $this->local->setName('local');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $local
     */
    public function getLocal()
    {
        return $this->local->getValue();
    }

    /**
     * 
     */
    public function setTollFree($tollFree = null)
    {
        if (!$tollFree) return $this;
        $this->tollFree = new SimpleContent($tollFree);
        $this->tollFree->setName('tollFree');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $tollFree
     */
    public function getTollFree()
    {
        return $this->tollFree->getValue();
    }

    /**
     * 
     */
    public function setToll($toll = null)
    {
        if (!$toll) return $this;
        $this->toll = new SimpleContent($toll);
        $this->toll->setName('toll');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $toll
     */
    public function getToll()
    {
        return $this->toll->getValue();
    }

    /**
     * 
     */
    public function setInternational($international = null)
    {
        if (!$international) return $this;
        $this->international = new SimpleContent($international);
        $this->international->setName('international');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $international
     */
    public function getInternational()
    {
        return $this->international->getValue();
    }

    /**
     * 
     */
    public function setOperatorAssisted($operatorAssisted = null)
    {
        if (!$operatorAssisted) return $this;
        $this->operatorAssisted = new SimpleContent($operatorAssisted);
        $this->operatorAssisted->setName('operatorAssisted');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $operatorAssisted
     */
    public function getOperatorAssisted()
    {
        return $this->operatorAssisted->getValue();
    }

    /**
     * 
     */
    public function setChargeableDirectoryAssisted($chargeableDirectoryAssisted = null)
    {
        if (!$chargeableDirectoryAssisted) return $this;
        $this->chargeableDirectoryAssisted = new SimpleContent($chargeableDirectoryAssisted);
        $this->chargeableDirectoryAssisted->setName('chargeableDirectoryAssisted');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $chargeableDirectoryAssisted
     */
    public function getChargeableDirectoryAssisted()
    {
        return $this->chargeableDirectoryAssisted->getValue();
    }

    /**
     * 
     */
    public function setSpecialServicesI($specialServicesI = null)
    {
        if (!$specialServicesI) return $this;
        $this->specialServicesI = new SimpleContent($specialServicesI);
        $this->specialServicesI->setName('specialServicesI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $specialServicesI
     */
    public function getSpecialServicesI()
    {
        return $this->specialServicesI->getValue();
    }

    /**
     * 
     */
    public function setSpecialServicesII($specialServicesII = null)
    {
        if (!$specialServicesII) return $this;
        $this->specialServicesII = new SimpleContent($specialServicesII);
        $this->specialServicesII->setName('specialServicesII');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $specialServicesII
     */
    public function getSpecialServicesII()
    {
        return $this->specialServicesII->getValue();
    }

    /**
     * 
     */
    public function setPremiumServicesI($premiumServicesI = null)
    {
        if (!$premiumServicesI) return $this;
        $this->premiumServicesI = new SimpleContent($premiumServicesI);
        $this->premiumServicesI->setName('premiumServicesI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $premiumServicesI
     */
    public function getPremiumServicesI()
    {
        return $this->premiumServicesI->getValue();
    }

    /**
     * 
     */
    public function setPremiumServicesII($premiumServicesII = null)
    {
        if (!$premiumServicesII) return $this;
        $this->premiumServicesII = new SimpleContent($premiumServicesII);
        $this->premiumServicesII->setName('premiumServicesII');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $premiumServicesII
     */
    public function getPremiumServicesII()
    {
        return $this->premiumServicesII->getValue();
    }

    /**
     * 
     */
    public function setCasual($casual = null)
    {
        if (!$casual) return $this;
        $this->casual = new SimpleContent($casual);
        $this->casual->setName('casual');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $casual
     */
    public function getCasual()
    {
        return $this->casual->getValue();
    }

    /**
     * 
     */
    public function setUrlDialing($urlDialing = null)
    {
        if (!$urlDialing) return $this;
        $this->urlDialing = new SimpleContent($urlDialing);
        $this->urlDialing->setName('urlDialing');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $urlDialing
     */
    public function getUrlDialing()
    {
        return $this->urlDialing->getValue();
    }

    /**
     * 
     */
    public function setUnknown($unknown = null)
    {
        if (!$unknown) return $this;
        $this->unknown = new SimpleContent($unknown);
        $this->unknown->setName('unknown');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $unknown
     */
    public function getUnknown()
    {
        return $this->unknown->getValue();
    }
}
