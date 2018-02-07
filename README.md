HbsResearch\Tilkee PHP
==========

**HbsResearch\Tilkee PHP** is a [HbsResearch\Tilkee](https://www.tilkee.fr/) client written in PHP.  
This client supports the [API v1](https://tilkee.readme.io/v1.0/docs)

> **Important:** This library doesn't support the full API for now.  
You are more than welcome to contribute to the swagger specifications

Installation
------------

The recommended way to install HbsResearch\Tilkee PHP is through [Composer](http://getcomposer.org/):

```bash
composer require hbs-research/tilkee-php
```

Usage Examples
--------------

### List projects

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Http\Message\Authentication\Bearer;

use HbsResearch\Tilkee\HbsResearch\Tilkee;
use HbsResearch\Tilkee\TilkeeClient;

// Place here your API key or Oauth Token
$token = 'YOUR_TOKEN';
// Here is your unique tilk ref provided by HbsResearch\Tilkee
$tilkRef = 'TilkTestClient';


$authentication = new Bearer($token);
$tilkeeClient = new TilkeeClient($authentication, $tilkRef);
$tilkee = new HbsResearch\Tilkee($tilkeeClient);

$projectList = $tilkee->getProjectManager()->listProject()->getContents();

foreach ($projectList as $project) {
    echo sprintf("%s: %s\n", $project->getId(), $project->getName());
}
```

### Regenerating the API stubs

```bash
# get jane OpenAPI
composer install --dev

rm -rf generated/*
./vendor/bin/jane-openapi generate -c .jane-openapi 

```

### Using docker

If you don't want to mess up your system, you can use the provided Docker [Dockerfile](Dockerfile).

```bash
docker build --rm -t tilkee-php .
```

Then, use the shortcut [tilkee](bin/tilkee)

```bash
./bin/tilkee your_command_here 
```

Contributing
------------

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.



Credits
-------

This library use [Jane Open Api](https://github.com/janephp/openapi) to generate the API stubs from a custom [OpenApi (Swagger) specification](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md) file: [tilkee-swagger.yml](tilkee-swagger.yml)

This README is inspired by [willdurand/Negotiation](https://github.com/willdurand/Negotiation) by @willdurand.


License
-------

The MIT License (MIT). Please see [License File](LICENSE) for more information.