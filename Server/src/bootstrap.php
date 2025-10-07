<!-- Eloquent-->

<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once 'vendor/autoload.php';

$dbConfig = require __DIR__ . '/Config/configDatabse.php.php';

$capsule = new Capsule;

$capsule->addConnection($dbConfig);

$capsule->setAsGlobal();

// Inicializa el ORM
$capsule->bootEloquent();
