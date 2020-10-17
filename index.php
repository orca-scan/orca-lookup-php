<?php
    // set HTTP content type
    header("Content-Type: application/json");

    // get the incoming barcode sent from Orca Scan (scanned by a user)
    $barcode = $_GET['barcode'];

    // TODO: query a database or API to retrieve some data based on barcode value

    // build up data to return as an object (property names must match Orca column names inc spaces)
    $myObj->{"VIN"} = $barcode;
    $myObj->{"Make"} = "SUBARU";
    $myObj->{"Model"} = "Legacy";
    $myObj->{"Manufacturer Name"} = "FUJI HEAVY INDUSTRIES U.S.A";
    $myObj->{"Vehicle Type"} = "PASSENGER CAR";
    $myObj->{"Year"} = 1992;

    // return data as JSON object
    echo json_encode($myObj);
?>