<?php

$statuses = [
	7 => 'DECLINED',
	5 => 'ACTIVE',
	3 => 'PAUSED',
	9 => 'ACTIVE',
];

$databases = [
	['status' => 5, 'name' => 'MSSQL'],
	['status' => 3, 'name' => 'MySQLL'],
	['status' => 5, 'name' => 'PostgreSQL'],
	['status' => 7, 'name' => 'MariaDB'],
	['status' => 9, 'name' => 'MongoDB'],
	['status' => 5, 'name' => 'Cassandra'],
	['status' => 3, 'name' => 'Snowflake'],
	['status' => 5, 'name' => 'Oracle'],
	['status' => 5, 'name' => 'Salesforce'],
];


$activeDatabases = [];

// copy ACTIVE $databases to $activeDatabases
$activeDatabases = array_filter($databases, fn($v) => in_array($v['status'], array_keys($statuses, 'ACTIVE')));

var_dump($activeDatabases);