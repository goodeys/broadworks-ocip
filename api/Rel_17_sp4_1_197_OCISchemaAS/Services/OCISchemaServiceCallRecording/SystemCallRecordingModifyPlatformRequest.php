<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallRecordingPlatformName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaStream;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallRecordingPlatformDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the specified Call Recording platform.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallRecordingModifyPlatformRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name,
             $netAddress=null,
             $port=null,
             $mediaStream=null,
             $becomeSystemDefault=null,
             $transportType=null,
             $description=null
    ) {
        $this->name                = $name;
        $this->netAddress          = new NetAddress($netAddress);
        $this->port                = new Port($port);
        $this->mediaStream         = $mediaStream;
        $this->becomeSystemDefault = $becomeSystemDefault;
        $this->transportType       = new TransportProtocol($transportType);
        $this->description         = $description;
        $this->args                = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new CallRecordingPlatformName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setNetAddress($netAddress)
    {
        $netAddress and $this->netAddress = new NetAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setPort($port)
    {
        $port and $this->port = new Port($port);
    }

    public function getPort()
    {
        return (!$this->port) ?: $this->port->value();
    }

    public function setMediaStream($mediaStream)
    {
        $mediaStream and $this->mediaStream = new MediaStream($mediaStream);
    }

    public function getMediaStream()
    {
        return (!$this->mediaStream) ?: $this->mediaStream->value();
    }

    public function setBecomeSystemDefault($becomeSystemDefault)
    {
        $becomeSystemDefault and $this->becomeSystemDefault = new xs:boolean($becomeSystemDefault);
    }

    public function getBecomeSystemDefault()
    {
        return (!$this->becomeSystemDefault) ?: $this->becomeSystemDefault->value();
    }

    public function setTransportType($transportType)
    {
        $transportType and $this->transportType = new TransportProtocol($transportType);
    }

    public function getTransportType()
    {
        return (!$this->transportType) ?: $this->transportType->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new CallRecordingPlatformDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}