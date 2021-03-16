<?php
/*
 * Copyright (c) 2021. Sandor Semsey <sandor@es-progress.hu
 *
 * This work is licensed under the MIT license.
 * For the details, see: https://choosealicense.com/licenses/mit/
 */

namespace GHAPI\Owner;


use http\Exception\BadMethodCallException;

/**
 * Organization Class
 *
 * @category owner
 * @package  ghapi
 * php version 8.0
 */
class Organization
{
    /**
     * Name of organization
     *
     * @var string
     */
    protected string $orgName;

    /**
     * Organization constructor.
     *
     * @param string $org_name
     */
    public function __construct(string $org_name)
    {
        $this->orgName=$org_name;
    }
}
