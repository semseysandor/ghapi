<?php
/*
 * Copyright (c) 2021. Sandor Semsey <sandor@es-progress.hu
 *
 * This work is licensed under the MIT license.
 * For the details, see: https://choosealicense.com/licenses/mit/
 */

namespace GHAPI;

use Github\Api\Issue;
use Github\Api\Repository\Labels;
use Github\Client;
use Throwable;

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
     *
     * @param string $token GitHub token
     * @param int $argc Number of arguments passed to the script
     * @param array $argv Array of command line arguments
     */
    public function __construct(string $token, int $argc, array $argv)
    {
        $this->token = $token;
        $this->argc = $argc;
        $this->argv = $argv;
    }

    /**
     * Run application
     */
    public function run()
    {
        try {
            array_shift($this->argv);
            $this->action = $this->argv[0] ?? "";
            echo $this->action;

            // Authenticate
            $client = new Client();
            $client->authenticate($this->token, null, Client::AUTH_ACCESS_TOKEN);

            $org = 'es-progress';
            // Action
            $repo = $client->repo()->org($org);
            $labels = $client->issue()->labels();

            foreach ($repo as $item) {

                $repo_name = $item['name'];
//                var_dump($item);

                if ($repo_name != 'postfixadmin') {
                    continue;
                }
                printf("Repo: %s\n", $repo_name);

                $repo_labels = $labels->all($org, $repo_name);

                foreach ($repo_labels as $item) {


//
                    $label_name = $item['name'];
//                    $label_desc = $item['description'];
//                    $label_color = $item['color'];
                    printf("\nName: %s", $label_name);

//                    $labels->deleteLabel($org,$repo_name,$label_name);

//                    var_dump($labels->show($org,$repo_name,$label_name));
//                    printf("Desc: %s\n", $label_desc);
//                    printf("Color: %s\n", $label_color);
                }
//
                break;
            }

            echo "\n";
        } catch (Throwable $ex) {
            printf("\nFATAL ERROR: %s\n", $ex->getMessage());
            exit($ex->getCode());
        }
    }
}
