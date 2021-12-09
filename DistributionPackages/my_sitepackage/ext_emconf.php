<?php

/**
 * Extension Manager/Repository config file for ext "my_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'My Sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Techdivision\\MySitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Matthias Witte',
    'author_email' => 'm.witte@techdivision.com',
    'author_company' => 'TechDivision',
    'version' => '1.0.0',
];
