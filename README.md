Google Map
==========
Google Map in your web app

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist alexrvs/yii2-map "*"
```

or add

```
"alexrvs/yii2-map": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

use namespace 

```php 

<?php 
use alexrvs\Map;		

?>

how to use widget: 

```php

<?= 

Map::widget([
    'zoom' => 16,
    'center' => 'Red Square',
    'width' => 700,
    'height' => 400,
    'mapType' => Map::MAP_TYPE_SATELLITE,
]);
?> 