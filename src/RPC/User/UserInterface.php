<?php

declare(strict_types=1);

namespace Liyuchuan\PltCommon\RPC\User;

use Liyuchuan\PltCommon\Constant\OAuthType;

interface UserInterface
{
    public const NAME = 'UserUserInterface';

    public function ping(): bool;

    /**
     * @return array{id: int, openid: string}
     */
    public function firstByCode(string $code, string $appid, int|OAuthType $type = OAuthType::WECHAT_MINI_APP): array;
}
