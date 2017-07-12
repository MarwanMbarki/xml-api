<?php
/**
 * Created by PhpStorm.
 * User: MARWAN MBARKI
 * Date: 11/07/2017
 * GitHub: https://github.com/MarwanMbarki
 */
/*Database Connection*/
$servername = "localhost";
$username = "root";
$password = "";
$database = "vehiclesimple";
$dbcon = new mysqli($servername,$username,$password,$database);
// Check connection
if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
}

