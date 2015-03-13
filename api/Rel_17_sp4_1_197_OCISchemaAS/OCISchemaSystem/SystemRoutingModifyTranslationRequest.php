<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RouteName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a digit routing table entry in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingModifyTranslationRequest extends ComplexType implements ComplexInterface
{
    public    $name      = 'SystemRoutingModifyTranslationRequest';
    protected $digits    = null;
    protected $routeName = null;

    public function __construct(
         $digits,
         $routeName = null
    ) {
        $this->setDigits($digits);
        $this->setRouteName($routeName);
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
    public function setDigits($digits = null)
    {
        if (!$digits) return $this;
        $this->digits = ($digits InstanceOf RoutingDigits)
             ? $digits
             : new RoutingDigits($digits);
        $this->digits->setName('digits');
        return $this;
    }

    /**
     * 
     * @return RoutingDigits $digits
     */
    public function getDigits()
    {
        return $this->digits->getValue();
    }

    /**
     * 
     */
    public function setRouteName($routeName = null)
    {
        if (!$routeName) return $this;
        $this->routeName = ($routeName InstanceOf RouteName)
             ? $routeName
             : new RouteName($routeName);
        $this->routeName->setName('routeName');
        return $this;
    }

    /**
     * 
     * @return RouteName $routeName
     */
    public function getRouteName()
    {
        return $this->routeName->getValue();
    }
}
