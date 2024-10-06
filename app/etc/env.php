<?php
return [
    'backend' => [
        'frontName' => 'admin_panel'
    ],
    'crypt' => [
        'key' => '753f0833c2388eea8cb061a47ecf9686'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'db',
                'dbname' => 'db',
                'username' => 'db',
                'password' => 'db',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '40d_'
            ],
            'page_cache' => [
                'id_prefix' => '40d_'
            ]
        ],
        'graphql' => [
            'id_salt' => '41jBIOzA0D2jZ5sLIEdrMQpzfTXYYsxu'
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1,
        'graphql_query_resolver_result' => 1
    ],
    'install' => [
        'date' => 'Sun, 06 Oct 2024 08:05:46 +0000'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'downloadable_domains' => [
        'magento2-demo.ddev.site'
    ],
    'system' => [
        'default' => [
            'catalog' => [
                'search' => [
                    'engine' => 'opensearch',
                    'opensearch_server_hostname' => 'opensearch',
                    'opensearch_server_port' => '9200',
                    'opensearch_index_prefix' => 'magento2_demo',
                    'opensearch_enable_auth' => '0',
                    'opensearch_server_timeout' => '15',
                    'opensearch_minimum_should_match' => '75%'
                ]
            ]
        ]
    ]
];
