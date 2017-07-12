<?php
/**
 * Created by PhpStorm.
 * User: MARWAN M
 * Date: 11/07/2017
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
        <h2>Data Loaded from the database</h2>
        <br>
        <hr>

    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <h4>Fetch Data From The Database</h4>
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
            require_once 'api/api.php';
            $results = getData();
            while (($rw = mysqli_fetch_assoc($results)) > 0){

                ?>
                <tr>
                    <td><?php echo $rw['manufacturer']; ?></td>
                    <td><?php echo $rw['model']; ?></td>
                    <td><?php echo $rw['type_v']; ?></td>
                    <td><?php echo $rw['usage_v']; ?></td>
                    <td><?php echo $rw['license_plate']; ?></td>
                    <td><?php echo $rw['weight_category']; ?></td>
                    <td><?php echo $rw['no_seats']; ?></td>
                    <td><?php echo $rw['has_boot']; ?></td>
                    <td><?php echo $rw['has_trailer']; ?></td>
                    <td><?php echo $rw['owner_name']; ?></td>
                    <td><?php echo $rw['owner_company']; ?></td>
                    <td><?php echo $rw['owner_profession']; ?></td>
                    <td><?php echo $rw['transmission']; ?></td>
                    <td><?php echo $rw['colour']; ?></td>
                    <td><?php echo $rw['is_hgv']; ?></td>
                    <td><?php echo $rw['no_doors']; ?></td>
                    <td><?php echo $rw['sunroof']; ?></td>
                    <td><?php echo $rw['has_gps']; ?></td>
                    <td><?php echo $rw['no_wheels']; ?></td>
                    <td><?php echo $rw['engine_cc']; ?></td>
                    <td><?php echo $rw['fuel_type']; ?></td>
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