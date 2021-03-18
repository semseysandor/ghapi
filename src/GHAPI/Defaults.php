<?php
/*
 * Copyright (c) 2021. Sandor Semsey <sandor@es-progress.hu
 *
 * This work is licensed under the MIT license.
 * For the details, see: https://choosealicense.com/licenses/mit/
 */

namespace GHAPI;

/**
 * Defaults
 *
 * @category config
 * @package  ghapi
 * @author   Sandor Semsey <sandor@es-progress.hu>
 * @license  MIT https://choosealicense.com/licenses/mit/
 * php version 8.0
 */
class Defaults
{
    /**
     * Default labels
     *
     * @var array
     */
    public const LABELS = [
        [
            'name' => 'maintenance',
            'desc' => 'Maintenance or administration related',
            'color' => '#EDF6BC',
        ],
        [
            'name' => 'automation',
            'desc' => 'Streamlining work-flows ',
            'color' => '#E04452',
        ],
        [
            'name' => 'concept',
            'desc' => 'New system concept, idea',
            'color' => '#DF38F8',
        ],
        [
            'name' => 'bug',
            'desc' => 'Something is not working',
            'color' => '#d73a4a',
        ],
        [
            'name' => 'documentation',
            'desc' => 'Improvements or additions to documentation ',
            'color' => '#0075ca',
        ],
        [
            'name' => 'enhancement',
            'desc' => 'New feature',
            'color' => '#a2eeef',
        ],
        [
            'name' => 'performance',
            'desc' => 'It makes the system faster',
            'color' => '#0052cc',
        ],
        [
            'name' => 'refactoring',
            'desc' => 'Restructure code, files etc.',
            'color' => '#077806',
        ],
        [
            'name' => 'security',
            'desc' => 'Security related improvements',
            'color' => '#D5B812',
        ],
        [
            'name' => 'stability',
            'desc' => 'It makes the system more robust ',
            'color' => '#5319e7',
        ],
    ];
}
