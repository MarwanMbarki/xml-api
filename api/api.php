<?php
/**
 * Created by PhpStorm.
 * User: MARWAN M
 * Date: 11/07/2017
 * GitHub: https://github.com/MarwanMbarki
 */
/*Funcion To insert the XML File to MySQL*/
function insertXml(){
    if(isset($_POST['btnImport'])) {
        /*CALL DATABASE*/
        require_once './db-connect.php';

        $target_dir = "./uploads/";
        $xml = simplexml_load_file($target_dir . basename($_FILES["xmlFile"]["name"])) or die("Error: Cannot create object");
        foreach ($xml->Vehicle as $car) {
            $manufacturer = $car['manufacturer'];
            $model = $car['model'];
            $type = $car->type_v;
            $usage = $car->usage_v;
            $license_plate = $car->license_plate;
            $weight_category = $car->weight_category;
            $no_seats = $car->no_seats;
            $has_boot = $car->has_boot;
            $has_trailer = $car->has_trailer;
            $owner_name = $car->owner_name;
            $owner_company = $car->owner_company;
            $owner_profession = $car->owner_profession;
            $transmission = $car->transmission;
            $colour = $car->colour;
            $is_hgv = $car->is_hgv;
            $no_doors = $car->no_doors;
            $sunroof = $car->sunroof;
            $has_gps = $car->has_gps;
            $no_wheels = $car->no_wheels;
            $engine_cc = $car->engine_cc;
            $fuel_type = $car->fuel_type;


            /*INSERTION QUERY*/
            $addData = "INSERT INTO vehicule (manufacturer,model,type_v,usage_v,license_plate,weight_category,no_seats,has_boot,has_trailer,
                                                  owner_name,owner_company,owner_profession,transmission,colour,is_hgv,no_doors,sunroof,has_gps,no_wheels,engine_cc,fuel_type) 
                            VALUES ('$manufacturer','$model','$type','$usage','$license_plate','$weight_category','$no_seats','$has_boot','$has_trailer',
                                                  '$owner_name','$owner_company','$owner_profession','$transmission','$colour','$is_hgv','$no_doors','$sunroof','$has_gps','$no_wheels','$engine_cc','$fuel_type')";
            $r = $dbcon->query($addData);
            /*If Data Inserted Display success message*/

        }
        if ($r > 0) {
            echo '<div class="alert alert-success">
                    <strong>Success!</strong> Xml File Insert To The Database. <code><a href="./catch-data.php">Click Here To visit the page</a></code>
                </div>';
        } else {
            echo '<div class="alert alert-danger">
                        <strong>We Are Sorry!</strong> This Data Already Exist, If you want to Delete it insert the new file,
                        than please <strong>DELETE DATA FROM VEHICULE TABLE FIRST.</strong>!.
                </div>';

        }
    }
}
/* FETCH THE DATA FROM THE DATABASE */
function getData(){
    /*CALL DATABASE*/
    require_once './db-connect.php';
    $sql = "SELECT * FROM vehicule";
    $results = $dbcon->query($sql);
    return $results;
}
/* CREATE A JSON API TO BE USED ON MOBILE APP OR THIRD PARTY SERVICES */
function getJson()
{
    require_once './db-connect.php';
    $getR = "SELECT * FROM vehicule";
    $resultR = $dbcon->query($getR);
    $rows = array();
    while ($rowR = mysqli_fetch_row($resultR)) {

        $rows[] = $rowR;
    }
    $json_string = json_encode($rows);
    $file = './vehicleData.json';
    file_put_contents($file, $json_string);
}

