<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a language properties in the system.
 *         If the becomeDefaultLanguage element is present, the language in this request becomes
 *         the default language for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLanguageModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'SystemLanguageModifyRequest';
    protected $language              = null;
    protected $becomeDefaultLanguage = null;
    protected $locale                = null;
    protected $encoding              = null;

    public function __construct(
         $language,
         $becomeDefaultLanguage = null,
         $locale = null,
         $encoding = null
    ) {
        $this->setLanguage($language);
        $this->setBecomeDefaultLanguage($becomeDefaultLanguage);
        $this->setLocale($locale);
        $this->setEncoding($encoding);
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
    public function setLanguage($language = null)
    {
        if (!$language) return $this;
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
        $this->language->setName('language');
        return $this;
    }

    /**
     * 
     * @return Language $language
     */
    public function getLanguage()
    {
        return $this->language->getValue();
    }

    /**
     * 
     */
    public function setBecomeDefaultLanguage($becomeDefaultLanguage = null)
    {
        if (!$becomeDefaultLanguage) return $this;
        $this->becomeDefaultLanguage = new PrimitiveType($becomeDefaultLanguage);
        $this->becomeDefaultLanguage->setName('becomeDefaultLanguage');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefaultLanguage
     */
    public function getBecomeDefaultLanguage()
    {
        return $this->becomeDefaultLanguage->getValue();
    }

    /**
     * 
     */
    public function setLocale($locale = null)
    {
        if (!$locale) return $this;
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
        $this->locale->setName('locale');
        return $this;
    }

    /**
     * 
     * @return OCILocale $locale
     */
    public function getLocale()
    {
        return $this->locale->getValue();
    }

    /**
     * 
     */
    public function setEncoding($encoding = null)
    {
        if (!$encoding) return $this;
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
        $this->encoding->setName('encoding');
        return $this;
    }

    /**
     * 
     * @return Encoding $encoding
     */
    public function getEncoding()
    {
        return $this->encoding->getValue();
    }
}
