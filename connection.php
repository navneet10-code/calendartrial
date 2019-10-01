<?php
// DATABASE CONNECTION STRING

define('HOST', 'sql12.freemysqlhosting.net');
define('USERNAME', 'sql12306370');
define('PASSWORD', 'tfR9HnxDVV');
define('DATABASE_NAME', 'sql12306370');

//Connect and select the database
$db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE_NAME);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>
