# orca-lookup-php

This open source project is a an example of [how to scan barcodes using a smartphone](https://orcascan.com/mobile) and [present data from your system](https://orcascan.com/docs/api/lookup-url) using [PHP](https://www.php.net/).

**How it works:**

1. A user [scans a barcode](https://orcascan.com/mobile) using their smartphone
2. Orca Scan sends a HTTP GET request to your endpoint with `?barcode=value`
3. Your system queries a database or internal API for a `barcode` match
4. Your system returns the data in JSON format with keys matching column names
5. The [Orca Scan mobile](https://orcascan.com/mobile) app presents that data to the user

*If the mobile user has [update permission](https://orcascan.com/docs/getting-started/adding-users#selecting-user-permissions) and saves the data, it will saved to your Orca sheet.*

## Install

First ensure you have [PHP](https://www.php.net/) installed:

```bash
# should return 7.1 or higher
php -v
```

Then execute the following:

```bash
# download this example code
git clone https://github.com/orca-scan/orca-lookup-php.git

# go into the new directory
cd orca-lookup-php
```

## Run

```bash
# start the server
php -S localhost:5000
```

Visit [http://localhost:5000?barcode=4S3BMHB68B3286050](http://localhost:5000?barcode=4S3BMHB68B3286050) to see the following:

```json
{
    "VIN": "4S3BMHB68B3286050",
    "Make": "SUBARU",
    "Model": "Legacy",
    "Manufacturer Name": "FUJI HEAVY INDUSTRIES U.S.A",
    "Vehicle Type": "PASSENGER CAR",
    "Year": 1992
}
```

## How this example works

This is a very simple example using 1 [index.php](index.php) script:

```php
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
```

## Troubleshooting

If you run into any issues not listed here, please [open a ticket](https://github.com/orca-scan/orca-lookup-php/issues).

## Contributing

To contribute simply:

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -m 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request

## History

For change-log, check [releases](https://github.com/orca-scan/orca-lookup-php/releases).

## License

Licensed under [MIT License](LICENSE) &copy; [Orca Scan](https://orcascan.com)