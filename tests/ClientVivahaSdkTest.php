<?php

namespace YusamHub\Project0001ClientVivahaSdk\Tests;

use YusamHub\Project0001ClientVivahaSdk\ClientVivahaSdk;

class ClientVivahaSdkTest extends \PHPUnit\Framework\TestCase
{
    public function testGetApiV1Test()
    {
        $clientDemoSdk = new ClientVivahaSdk(Config::getConfig('vivaha-sdk'));
        $v1Test = $clientDemoSdk->getApiV1Test();
        $this->assertTrue(is_array($v1Test));
    }
}