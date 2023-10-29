<?php

namespace YusamHub\Project0001ClientVivahaSdk;

use YusamHub\Project0001ClientAuthSdk\Tokens\JwtAuthAppUserTokenHelper;

class ClientVivahaSdk extends BaseClientSdk
{
    protected function generateToken(string $method, array|string $content): string
    {
        return JwtAuthAppUserTokenHelper::toJwt(
            $this->appId,
            $this->userId,
            $this->deviceUuid,
            $this->privateKey,
            md5(parent::generateToken($method, $content))
        );
    }

    public function getApiV1Test(): ?array
    {
        return $this->doAppRequest(
            $this->api::METHOD_GET,
            '/api/v1/test',
            get_defined_vars(),
            true
        );
    }
}