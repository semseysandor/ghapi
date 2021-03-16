<?php
/*
 * Copyright (c) 2021. Sandor Semsey <sandor@es-progress.hu
 *
 * This work is licensed under the MIT license.
 * For the details, see: https://choosealicense.com/licenses/mit/
 */

namespace GHAPI\Owner;


/**
 * User
 *
 * @category owners
 * @package  ghapi
 * php version 8.0
 */
class User
{
    /**
     * Name of the user
     *
     * @var string
     */
    protected string $userName;

    /**
     * User constructor.
     *
     * @param string $user
     */
    public function __construct(string $user)
    {
        $this->userName = $user;
    }
}
