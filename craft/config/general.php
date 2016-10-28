<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return [
    '*' => [
        'autoLoginAfterAccountActivation' => true,
        'overridePhpSessionLocation' => true,
        'omitScriptNameInUrls' => true,
        'defaultSearchTermOptions' => [
            'subLeft' => true,
            'subRight' => true,
        ],
        'setPasswordPath' => 'user/reset-password',
        'env' => 'dev',
        'tokenParam' => 't'
    ],

    'local.website-name' => [
        'devMode' => true,
        'siteUrl' => 'http://local.website-name/',
    ],

    'testing.website-name' => [
        'siteUrl' => 'http://testing.website-name/',
    ],

    'website-name.co.uk' => [
        'siteUrl' => 'http://website-name.co.uk/',
        'devMode' => false,
        'patrol' => [
            'primaryDomain'   => '*',
            'forceSsl'        => false,
            'restrictedAreas' => [
            ],
            'maintenanceUrl'  => '/offline.html',
            'authorizedIps'   => [
                '77.101.79.140',
                '86.27.201.244',
                // PayPal IPN servers
                '173.0.81.*',
                '173.0.82.*'
            ],
            'limitCpAccessTo' => [],
            'enableCpTab'     => false,
            'pluginAlias'     => 'Patrol'
        ],
        'env' => 'live'
    ],

    'staging.website-name.co.uk' => [
        'siteUrl' => 'http://staging.website-name.co.uk/',
        'devMode' => true,
        'patrol' => [
            'primaryDomain'   => '*',
            'maintenanceMode' => true,
            'maintenanceUrl'  => '/redirect.html'
        ],
        'env' => 'dev'
    ]
];
