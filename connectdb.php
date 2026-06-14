<?php
/*
 * Single database connection for the whole app.
 *
 * Every page that touches MySQL includes this file and reuses the $db
 * handle, so the credentials live in exactly one place and every query
 * runs through the same PDO connection. I keep the defaults pointed at a
 * stock XAMPP install (localhost / root / no password); change the four
 * values below to match your own MySQL setup.
 */

$db_host     = 'localhost';
$db_user     = 'root';
$db_pass     = '';
$db_database = 'elegal2';

$db = new PDO(
    'mysql:host=' . $db_host . ';dbname=' . $db_database . ';charset=utf8',
    $db_user,
    $db_pass
);

// Surface query errors as exceptions and hand back plain associative rows.
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
