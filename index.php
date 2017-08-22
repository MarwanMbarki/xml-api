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
<div class="container" style="padding-top: 70px;">
    <div class="jumbotron">
        <h2>VEHICLE XML TASK - MARWAN MBARKI</h2>
        <code>https://github.com/MarwanMbarki</code>
        <br>
        <p>You will find in this page all the details needed to get the information about the task</p>
        <ul>
            <li>Upload the XML file to MySQL Database</li>
            <li>Fetch readable Data from MySQL Database</li>
            <li>Parse The XML file with PHP</li>
            <li>API to get  JSON data format, which could be parsed and used on third parti service</li>
        </ul>
        <br>
        <div class="row">
            <div class="col-md-4">
                <a href="json.php" class="btn btn-info" role="button">JSON FILE</a>
            </div>
            <div class="col-md-4">
                <a href="parseXml.php" class="btn btn-info" role="button">XML PARSED FROM FILE</a>
            </div>
            <div class="col-md-4">
                <a href="catch-data.php" class="btn btn-info" role="button">XML PARSED FROM MYSQL</a>
            </div>
        </div>
        <br>
        <div class="alert alert-danger">
            <strong>IMPORTANT INFO!</strong> I HAVE ATTACHED DATABASE TABLE WHERE THE XML FILE WILL BE LOADED. <code><a href="Mysql\vehiclesimple.sql">Download Database</a></code></li>
        </div>
        <ul>
        <li>1- Add the attached database to your XAMPP or any other web server. <code><a href="Mysql\vehiclesimple.sql">Download Database</a></code></li>
        <li>2- From the index page, you can upload the xml file.<code><a href="#upload">Upload The XML File Here!</a></code></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row" id="upload">
        <!--Form To Upload The XML File-->
        <form action="" method="post" enctype="multipart/form-data">
            <h4>Upload The XML File To Mysql</h4><input type="file" name="xmlFile">
            <br>
            <input class="btn btn-info" type="submit" value="Import" name="btnImport">
        </form>
        <br>
        <!--The XML File Assigned to $xml Variable To be Used in later stage-->
        <?php
        require_once 'api/api.php';
        insertXml();
        ?>
    </div>
</div>
<div class="container">
    <div class="row">

    </div>
</div>
</body>
</html>
