<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Query the provisioning server to verify the session is authorized. Most
 *         applications should not need this command, because the provisioning server
 *         verifies the session is authorized for all commands.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class VerifySessionIsValidRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'VerifySessionIsValidRequest';

    public function __construct(    ) {
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
