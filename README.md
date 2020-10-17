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
