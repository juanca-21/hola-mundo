<?php
// Parámetros de conexión a PostgreSQL
$host     = 'db.ajxkgdeuhbjgnciyxrsj.supabase.co'; // O la URL/IP de tu servidor remoto
$port     = '5432';      // Puerto por defecto de PostgreSQL
$db       = 'postgres';
$user     = 'postgres';
$password = 'WznQ-W+tZ-%Fc2F';

try {
    // Crear la cadena de conexión (DSN)
    $dsn = "pgsql:host=$host;port=$port;dbname=$db;";

    // Opciones adicionales recomendadas para manejo de errores y codificación
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lanza excepciones si hay errores
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Devuelve los resultados como arrays asociativos
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa preparaciones nativas
    ];

    // Instanciar la conexión PDO
    $pdo = new PDO($dsn, $user, $password, $options);

    // Mensaje opcional de éxito (puedes borrarlo en producción)
    // echo "¡Conexión exitosa a PostgreSQL!";

} catch (\PDOException $e) {
    // Si falla la conexión, muestra el error de forma segura
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
