<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Doctrine DBAL for TYPO3 7.6.x',
    'description' => 'Doctrine query builder TYPO3 implementation backport for TYPO3 7.6.x',
    'category' => 'be',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Marcin Sągol',
    'author_email' => 'm.sagol@macopedia.pl',
    'author_company' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-7.6.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
