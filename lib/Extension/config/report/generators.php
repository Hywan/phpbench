<?php

/*
 * This file is part of the PHPBench package
 *
 * (c) Daniel Leech <daniel@dantleech.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

return [
    'aggregate' => [
        'generator' => 'table',
        'cols' => ['benchmark', 'subject', 'groups', 'params', 'revs', 'its', 'mem_peak', 'best', 'mean', 'mode', 'worst', 'stdev', 'rstdev', 'diff'],
    ],
    'default' => [
        'generator' => 'table',
        'iterations' => true,
        'cols' => ['benchmark', 'subject', 'groups', 'params', 'revs', 'iter', 'mem_peak', 'iter', 'time_rev', 'comp_z_value', 'comp_deviation'],
        'diff_col' => 'time_rev',
    ],
    'memory' => [
        'generator' => 'table',
        'iterations' => true,
        'cols' => ['benchmark', 'subject', 'groups', 'params', 'revs', 'iter', 'mem_final', 'mem_real', 'mem_peak'],
    ],
    'compare' => [
        'generator' => 'table',
        'cols' => ['benchmark', 'subject', 'groups', 'params', 'revs'],
        'compare' => 'vcs_branch',
        'break' => ['benchmark', 'subject'],
    ],
    'env' => [
        'generator' => 'env',
    ],
];
