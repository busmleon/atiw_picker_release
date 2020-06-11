<?php
// Connection
$servername = "127.0.0.1";
$username = "admin";
$password = "admin";
$db = "moodle";

// Query
// Query has to deliver students data with the following structure (column names as described): id, firstname, lastname, school_class
// Example: 1, Max, Mustermann, FS172
$query = "SELECT u1.userid as id, u2.firstname, u2.lastname, u1.data as school_class FROM user_info_data u1, user u2 WHERE u1.userid = u2.id";
