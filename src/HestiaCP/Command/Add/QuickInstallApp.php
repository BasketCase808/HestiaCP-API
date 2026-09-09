<?php

namespace HestiaCP\Command\Add;

use HestiaCP\Command\ProcessCommand;
use HestiaCP\Command\ICommand;

class QuickInstallApp extends ProcessCommand implements ICommand 
{
    private string $user;
    private string $domain;
    private string $appName;
    private string $action;

    public function __construct(string $user, string $domain, string $appName, string $action = 'install') 
    {
        $this->user = $user;
        $this->domain = $domain;
        $this->appName = $appName;
        $this->action = $action;
    }

    public function getName(): string 
    {
        return 'v-quick-install-app';
    }

    public function getRequestParams(): array 
    {
        return [
            self::ARG_1 => $this->action,   // Maps to POST 'arg1' -> 'install'
            self::ARG_2 => $this->user,     // Maps to POST 'arg2' -> USER
            self::ARG_3 => $this->domain,   // Maps to POST 'arg3' -> DOMAIN
            self::ARG_4 => $this->appName,  // Maps to POST 'arg4' -> APPNAME
        ];
    }
}