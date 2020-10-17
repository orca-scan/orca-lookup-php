<?php
    // set HTTP content type
    header("Content-Type: application/json");

    // get the incoming barcode sent from Orca Scan (scanned by a user)
    $barcode = $_GET['barcode'];

    // TODO: query a database or API to retrieve some data based on barcode value

    // build up data to return as an object (property names must match Orca column names inc spaces)
    $data = [
        'VIN' => $barcode,
        'Make' => "SUBARU",
        'Model' => "Legacy",
        'Manufacturer Name' => "FUJI HEAVY INDUSTRIES U.S.A",
        'Vehicle Type' => "PASSENGER CAR",
        'Year' => 1992
    ];

    // return data as JSON object
    echo json_encode($data);
?>