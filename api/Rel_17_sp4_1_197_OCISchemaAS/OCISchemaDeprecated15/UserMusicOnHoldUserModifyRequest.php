<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\MusicOnHoldUserSourceModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify data for Music On Hold User.
 *         The response is either a SuccessResponse or an
 *         ErrorResponse.
 *         Replaced By: UserMusicOnHoldUserModifyRequest16
 */
class UserMusicOnHoldUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                               = 'UserMusicOnHoldUserModifyRequest';
    protected $userId                             = null;
    protected $source                             = null;
    protected $useAlternateSourceForInternalCalls = null;
    protected $internalSource                     = null;

    public function __construct(
         $userId,
         MusicOnHoldUserSourceModify $source = null,
         $useAlternateSourceForInternalCalls = null,
         MusicOnHoldUserSourceModify $internalSource = null
    ) {
        $this->setUserId($userId);
        $this->setSource($source);
        $this->setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls);
        $this->setInternalSource($internalSource);
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
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setSource(MusicOnHoldUserSourceModify $source = null)
    {
        if (!$source) return $this;
        $this->source = $source;
        $this->source->setName('source');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldUserSourceModify $source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * 
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls = null)
    {
        if (!$useAlternateSourceForInternalCalls) return $this;
        $this->useAlternateSourceForInternalCalls = new PrimitiveType($useAlternateSourceForInternalCalls);
        $this->useAlternateSourceForInternalCalls->setName('useAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useAlternateSourceForInternalCalls
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return $this->useAlternateSourceForInternalCalls->getValue();
    }

    /**
     * 
     */
    public function setInternalSource(MusicOnHoldUserSourceModify $internalSource = null)
    {
        if (!$internalSource) return $this;
        $this->internalSource = $internalSource;
        $this->internalSource->setName('internalSource');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldUserSourceModify $internalSource
     */
    public function getInternalSource()
    {
        return $this->internalSource;
    }
}
