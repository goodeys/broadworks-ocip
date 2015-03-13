<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemServerAddressesGetRequest.
 *         Contains a list of system Server Addresses.
 *         See also:
 *           PrimaryInfoGetResponse
 *           PublicClusterGetFullyQualifiedDomainNameResponse
 *           ServingInfoGetResponse
 */
class SystemServerAddressesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                         = 'SystemServerAddressesGetResponse';
    protected $webServerClusterPublicFQDN                   = null;
    protected $applicationServerClusterPrimaryPublicFQDN    = null;
    protected $applicationServerClusterSecondaryPublicFQDN  = null;
    protected $applicationServerClusterPrimaryPrivateFQDN   = null;
    protected $applicationServerClusterSecondaryPrivateFQDN = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServerAddressesGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setWebServerClusterPublicFQDN($webServerClusterPublicFQDN = null)
    {
        if (!$webServerClusterPublicFQDN) return $this;
        $this->webServerClusterPublicFQDN = ($webServerClusterPublicFQDN InstanceOf NetAddress)
             ? $webServerClusterPublicFQDN
             : new NetAddress($webServerClusterPublicFQDN);
        $this->webServerClusterPublicFQDN->setName('webServerClusterPublicFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $webServerClusterPublicFQDN
     */
    public function getWebServerClusterPublicFQDN()
    {
        return $this->webServerClusterPublicFQDN->getValue();
    }

    /**
     * 
     */
    public function setApplicationServerClusterPrimaryPublicFQDN($applicationServerClusterPrimaryPublicFQDN = null)
    {
        if (!$applicationServerClusterPrimaryPublicFQDN) return $this;
        $this->applicationServerClusterPrimaryPublicFQDN = ($applicationServerClusterPrimaryPublicFQDN InstanceOf NetAddress)
             ? $applicationServerClusterPrimaryPublicFQDN
             : new NetAddress($applicationServerClusterPrimaryPublicFQDN);
        $this->applicationServerClusterPrimaryPublicFQDN->setName('applicationServerClusterPrimaryPublicFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterPrimaryPublicFQDN
     */
    public function getApplicationServerClusterPrimaryPublicFQDN()
    {
        return $this->applicationServerClusterPrimaryPublicFQDN->getValue();
    }

    /**
     * 
     */
    public function setApplicationServerClusterSecondaryPublicFQDN($applicationServerClusterSecondaryPublicFQDN = null)
    {
        if (!$applicationServerClusterSecondaryPublicFQDN) return $this;
        $this->applicationServerClusterSecondaryPublicFQDN = ($applicationServerClusterSecondaryPublicFQDN InstanceOf NetAddress)
             ? $applicationServerClusterSecondaryPublicFQDN
             : new NetAddress($applicationServerClusterSecondaryPublicFQDN);
        $this->applicationServerClusterSecondaryPublicFQDN->setName('applicationServerClusterSecondaryPublicFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterSecondaryPublicFQDN
     */
    public function getApplicationServerClusterSecondaryPublicFQDN()
    {
        return $this->applicationServerClusterSecondaryPublicFQDN->getValue();
    }

    /**
     * 
     */
    public function setApplicationServerClusterPrimaryPrivateFQDN($applicationServerClusterPrimaryPrivateFQDN = null)
    {
        if (!$applicationServerClusterPrimaryPrivateFQDN) return $this;
        $this->applicationServerClusterPrimaryPrivateFQDN = ($applicationServerClusterPrimaryPrivateFQDN InstanceOf NetAddress)
             ? $applicationServerClusterPrimaryPrivateFQDN
             : new NetAddress($applicationServerClusterPrimaryPrivateFQDN);
        $this->applicationServerClusterPrimaryPrivateFQDN->setName('applicationServerClusterPrimaryPrivateFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterPrimaryPrivateFQDN
     */
    public function getApplicationServerClusterPrimaryPrivateFQDN()
    {
        return $this->applicationServerClusterPrimaryPrivateFQDN->getValue();
    }

    /**
     * 
     */
    public function setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN = null)
    {
        if (!$applicationServerClusterSecondaryPrivateFQDN) return $this;
        $this->applicationServerClusterSecondaryPrivateFQDN = ($applicationServerClusterSecondaryPrivateFQDN InstanceOf NetAddress)
             ? $applicationServerClusterSecondaryPrivateFQDN
             : new NetAddress($applicationServerClusterSecondaryPrivateFQDN);
        $this->applicationServerClusterSecondaryPrivateFQDN->setName('applicationServerClusterSecondaryPrivateFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterSecondaryPrivateFQDN
     */
    public function getApplicationServerClusterSecondaryPrivateFQDN()
    {
        return $this->applicationServerClusterSecondaryPrivateFQDN->getValue();
    }
}
