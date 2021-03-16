<?php
/*
 * Copyright (c) 2021. Sandor Semsey <sandor@es-progress.hu
 *
 * This work is licensed under the MIT license.
 * For the details, see: https://choosealicense.com/licenses/mit/
 */

namespace GHAPI\Action;


/**
 * Label Class
 *
 * @category actions
 * @package  ghapi
 * php version 8.0
 */
class Label
{
    /**
     * Owner of the repos
     *
     * @var string
     */
    protected string $owner;

    /**
     * Name of the repo
     *
     * @var string
     */
    protected string $repo;

    /**
     * Label constructor.
     *
     * @param string $owner Owner of repo
     * @param string $repo Name of repo
     */
    public function __construct(string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
    }
}
