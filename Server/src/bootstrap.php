<!-- Eloquent-->

<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once '../vendor/autoload.php';

$dbConfig = require __DIR__ . '/Config/configDatabse.php';

$capsule = new Capsule;

$capsule->addConnection($dbConfig);

$capsule->setAsGlobal();

// Inicializa el ORM
$capsule->bootEloquent();
try {
    Capsule::connection()->getPdo();
    echo "✅ Conexión a la base de datos establecida correctamente.";
} catch (\Exception $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}