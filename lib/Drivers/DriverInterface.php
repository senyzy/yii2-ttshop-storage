<?php

namespace Ttshop\Storage\Drivers;

interface DriverInterface
{
    function put($localFile, $saveTo);
}