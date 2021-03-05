<?php

namespace GHAPI;

use Github\Client;

/**
 * Engine Class
 *
 * @category Main
 * @package  ghapi
 * @author   Sandor Semsey <semseysandor@gmail.com>
 * @license  MIT https://choosealicense.com/licenses/mit/
 * php version 8.0
 */
class Engine
{
    protected string $token;

    protected int $argc;

    protected array $argv;

    protected string $action;

    /**
     * Engine constructor.
     * @param string $token
     */
    public function __construct(string $token,int $argc, array $argv)
    {
        $this->token=$token;
        $this->argc=$argc;
        $this->argv=$argv;
    }

    /**
     * Run application
     */
    public function run()
    {
        echo "TESTING\n";
        ;
        array_shift($this->argv);
        $this->action=$this->argv[0];

        echo $this->action;
        $client=new Client();
        $client->authenticate($this->token,null,Client::AUTH_ACCESS_TOKEN);
        $org=$client->user()->orgs();

        echo "\n";
    }
}
