<?php
/**
 * Created by PhpStorm.
 * User: MARWAN MBARKI
 * Date: 11/07/2017
 * GitHub: https://github.com/MarwanMbarki
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: MARWAN MBARKI
 * Date: 11/07/2017
 * Time: 12:06
 * GitHub: https://github.com/MarwanMbarki
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vehicle Data</title>

    <!--BOOTSTRAP CDN-->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <h2>Sample Vehicle Details loaded From an XML File</h2>
        <br>
    </div>
</div>
<hr>
<!--The XML File Assigned to $xml Variable To be Used in later stage-->
<?php
$xml = simplexml_load_file("uploads/vehicleSample.xml") or die("Erroe: Cannot create object");
?>
<div class="container">
    <div class="row">
        <div class="alert alert-info">
            <strong>Info!</strong> In this Example Data will be loaded from XML File.
        </div>
        <h4>Parse the XML File</h4>
        <!--Table Created To hold the Vehicle Data-->
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Manufacturer</th>
                <th>Model</th>
                <th>Type</th>
                <th>Usage</th>
                <th>Licence Plate</th>
                <th>Weight Category</th>
                <th>Nbr/Seats</th>
                <th>Has Boot?</th>
                <th>Has Trailer</th>
                <th>Owner Name</th>
                <th>Owner Company</th>
                <th>Owner Profession</th>
                <th>Transmission</th>
                <th>Colour</th>
                <th>Is HGV</th>
                <th>No Doors</th>
                <th>Sunroof</th>
                <th>Has GPS</th>
                <th>Nbr Wheels</th>
                <th>eEngine cc</th>
                <th>Fuel Type</th>
            </tr>
            </thead>
            <tbody>
            <!--XML Data Pareced Fom an XML File-->
            <?php
            foreach ($xml->Vehicle as $car){
                ?>
                <tr>
                    <td><?php echo $car['manufacturer']; ?></td>
                    <td><?php echo $car['model']; ?></td>
                    <td><?php echo $car->type; ?></td>
                    <td><?php echo $car->usage; ?></td>
                    <td><?php echo $car->license_plate; ?></td>
                    <td><?php echo $car->weight_category; ?></td>
                    <td><?php echo $car->no_seats; ?></td>
                    <td><?php echo $car->has_boot; ?></td>
                    <td><?php echo $car->has_trailer; ?></td>
                    <td><?php echo $car->owner_name; ?></td>
                    <td><?php echo $car->owner_company; ?></td>
                    <td><?php echo $car->owner_profession; ?></td>
                    <td><?php echo $car->transmission; ?></td>
                    <td><?php echo $car->colour; ?></td>
                    <td><?php echo $car->is_hgv; ?></td>
                    <td><?php echo $car->no_doors; ?></td>
                    <td><?php echo $car->sunroof; ?></td>
                    <td><?php echo $car->has_gps; ?></td>
                    <td><?php echo $car->no_wheels; ?></td>
                    <td><?php echo $car->engine_cc; ?></td>
                    <td><?php echo $car->fuel_type; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
