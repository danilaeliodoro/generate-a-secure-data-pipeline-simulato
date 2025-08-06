<?php
// Configuration file for Secure Data Pipeline Simulator

// Pipeline Configuration
$pipeline_config = [
    'name' => 'Secure Data Pipeline',
    'description' => 'Simulates a secure data pipeline for data processing and analysis',
    'version' => '1.0',
];

// Data Sources
$data_sources = [
    'source1' => [
        'type' => 'database',
        'connection_string' => 'mysql:host=localhost;dbname=test',
        'username' => 'root',
        'password' => 'password',
    ],
    'source2' => [
        'type' => 'api',
        'url' => 'https://example.com/api/data',
        'auth_token' => '1234567890abcdef',
    ],
];

// Data Processors
$data_processors = [
    'processor1' => [
        'type' => 'filter',
        'filter_type' => 'blacklist',
        'blacklist' => ['bad_data'],
    ],
    'processor2' => [
        'type' => 'transform',
        'transform_function' => 'trim',
    ],
];

// Data Sinks
$data_sinks = [
    'sink1' => [
        'type' => 'database',
        'connection_string' => 'mysql:host=localhost;dbname=test',
        'username' => 'root',
        'password' => 'password',
    ],
    'sink2' => [
        'type' => 'file',
        'file_path' => 'output/data.csv',
    ],
];

// Security Configuration
$security_config = [
    'encryption_type' => 'AES-256-CBC',
    'key' => '1234567890abcdef',
    'iv' => '1234567890abcdef',
];

// Simulator Settings
$simulator_settings = [
    'interval' => 10, // in seconds
    'data_size' => 1000, // in bytes
];