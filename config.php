<?php

/**
 * Config for db tilkobling
 * Default XAMPP MySQL settings
 */

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "example";
$dsn        = "mysql:host=$host;dbname=$dbname"; 
$options    = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];