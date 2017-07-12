<?php
/**
 * Created by PhpStorm.
 * User: MARWAN M
 * Date: 11/07/2017
 */
/* EXECUTE THE JSON FUNCTION */
require_once 'api/api.php';
getJson();
header('location: vehicleData.json');

?>