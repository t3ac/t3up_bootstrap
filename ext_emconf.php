<?php

/********************************************************************
 * Extension Manager/Repository config file for ext "t3up_bootstrap".
 * Based on Pascal Maywe bootstrap_grids
 *******************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - bootstrap 5 Gridelements',
    'description'      => 'Gridelements for bootstrap 5. Column grids, grids for simple accordions, tabs and content slider.',
    'version'          => '0.0.1',
    'state'            => 'alpha',
    'category'         => 'templates',
    'author'           => 'Michael Lang',
    'author_email'     => 'michael.lang@h-da.de',
    'author_company'   => 'h_da Hochschule Darmstadt',
    'uploadfolder'     => false,
    'createDirs'       => '',
    'clearCacheOnLoad' => true,
    'constraints'      => [
        'depends'   => [
            'typo3'        => '10.4.0-10.4.99',
            'gridelements' => '9.7.0-10.99.99',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];

