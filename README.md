# PHP Client library for SIWIAT Out App [JSON](http://siwiat.com/app/view/?appname=json)

## Features

* Provides easy access to [SIWIAT App-Box](http://www.siwiat.com) measurement values
* Full abstraction of the App JSON interface
* Handle channels and values as models

## Requirements

PHP 5.4.0 or later
PHP Extensions curl, json, mbstring
Tools: GIT, Composer

## Installation & Usage
### GIT
    git clone https://github.com/siwiat/...
    composer install
    
## Getting started
Change the host to your SIWIAT App-Box in ```sample.php```:

```php
$client->getConfig()->setHost('http://[IP-OF-YOUR-APP-BOX]/websites/ab/index.php/json/api');
```

Executing the ```sample.php```

    > php sample.php
    
will show the current value of the 0th channel:

    Value 0th Channel: 42

    
## Sample.php explained

In the sample.php you find a simple minimal client. This client
* Fetches all channels from the App-Box
* Extracts the valueid of the 0th channel
* Fetches the measurement value of the 0th channel with this valueid

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = new Swagger\Client\ApiClient();
$client->getConfig()->setHost('http://[IP-OF-YOUR-APP-BOX]/websites/ab/index.php/json/api');
$api = new Swagger\Client\Api\DefaultApi($client);

try {
    // Get valueid of first (0th) channel 
    $valueid = $api->getChannelsResponse()->getChannels()[0]->getValueid();
    // Get current value with this valueid
    $value = $api->getValuesResponse($valueid)->getValues()[0]->getValue();
    echo "Value 0th Channel: " . $value;
} catch (Exception $e) {
     echo 'Exception: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation

For full documentation of this PHP Client library see [DOCS](DOCS.md)

## Author

Ondics GmbH

## License

Apache License 2.0
For details see [LICENSE](./LICENSE)

## Notes
This project was partially funded by the german [BMBF](https://www.bmbf.de/) research project [ScaleIT](http://scale-it.org).

This client was initially generated with [Swagger](http://swagger.io). The world's most popular API Framework.
