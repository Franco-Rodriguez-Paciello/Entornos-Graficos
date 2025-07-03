<?php

include_once "conexion.php";

session_start();

// // 1. Conectar a la base de datos (ajustá estos valores a tu entorno)
// $host = 'localhost';
// $db = 'mi_base_de_datos';
// $user = 'root';
// $pass = '';
// $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

// try {
//     $pdo = new PDO($dsn, $user, $pass);
// } catch (PDOException $e) {
//     die("Error de conexión: " . $e->getMessage());
// }

// 2. Obtener y sanitizar los datos del formulario
$nombre     = htmlspecialchars($_POST["nombre2"] ?? '');
$email      = htmlspecialchars($_POST["email"] ?? '');
$producto   = htmlspecialchars($_POST["producto"] ?? '');
$mes        = htmlspecialchars($_POST["mes"] ?? '');
$cantidad   = intval($_POST["cantidad"] ?? 0);
$terminos   = isset($_POST["terminos"]) ? 1 : 0;
$fechaHora  = date("Y-m-d H:i:s");

// 3. Insertar en base de datos
$sql = "INSERT INTO compras (nombre, email, producto, mes, cantidad, fecha)
        VALUES (:nombre, :email, :producto, :mes, :cantidad, :fecha)";

consultaSql($sql);

$sqlValidacion = "SELECT * FROM compras WHERE email = $email AND mes = $me AND cantidad = $cantidad ";

$result = consultaSql($sqlValidacion);

if ($result->num_rows > 0) {
    echo "<p style='color:red;'>Ya existe una compra registrada con ese email, mes y cantidad.</p>";
} else {
    echo "<p style='color:green;'>No hay registros duplicados, puedes continuar.</p>";
}

// 4. Guardar en sesión agrupado por fecha-hora
if (!isset($_SESSION['registro'])) {
    $_SESSION['registro'] = [];
}

$_SESSION['registro'][$fechaHora] = [
    'nombre' => $nombre,
    'email' => $email,
    'producto' => $producto,
    'mes' => $mes,
    'cantidad' => $cantidad
];

// 5. Mostrar confirmación y el historial
echo "<h1>Formulario recibido correctamente</h1>";
echo "<p>Se guardó en la base de datos y en la sesión.</p>";

echo "<h2>Historial de envíos (sesión):</h2>";
foreach ($_SESSION['registro'] as $fecha => $datos) {
    echo "<div style='margin-bottom:1rem;'>";
    echo "<strong>$fecha</strong><br>";
    foreach ($datos as $campo => $valor) {
        echo ucfirst($campo) . ": $valor<br>";
    }
    echo "</div>";
}


setcookie("ultimo_registro", $fechaHora, time() + (60 * 60 * 24 * 30), "/");

// Mostrar mensaje
echo "<p>Registro exitoso. Última vez que enviaste el formulario: $fechaHora</p>";

if (isset($_COOKIE['ultimo_registro'])) {
    echo "Última vez que enviaste el formulario: " . $_COOKIE['ultimo_registro'];
}
?>