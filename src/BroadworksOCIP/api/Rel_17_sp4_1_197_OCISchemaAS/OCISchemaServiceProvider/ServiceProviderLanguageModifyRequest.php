<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a language properties for a service provider/enterprise.
 *         If the becomeDefaultLanguage element is present, the language in this request
 *         Becomes the default language for the service provider/enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderLanguageModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderLanguageModifyRequest';
    protected $serviceProviderId;
    protected $language;
    protected $becomeDefaultLanguage;

    public function __construct(
         $serviceProviderId = '',
         $language = '',
         $becomeDefaultLanguage = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setLanguage($language);
        $this->setBecomeDefaultLanguage($becomeDefaultLanguage);
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
    public function setLanguage($language = null)
    {
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
        $this->language->setElementName('language');
        return $this;
    }

    /**
     * 
     * @return Language $language
     */
    public function getLanguage()
    {
        return ($this->language)
            ? $this->language->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBecomeDefaultLanguage($becomeDefaultLanguage = null)
    {
        $this->becomeDefaultLanguage = new PrimitiveType($becomeDefaultLanguage);
        $this->becomeDefaultLanguage->setElementName('becomeDefaultLanguage');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefaultLanguage
     */
    public function getBecomeDefaultLanguage()
    {
        return ($this->becomeDefaultLanguage)
            ? $this->becomeDefaultLanguage->getElementValue()
            : null;
    }
}
