<?php
session_start();


if (!isset($_SESSION['paginas_visitadas'])) {
    $_SESSION['paginas_visitadas'] = 1;
} else {
    $_SESSION['paginas_visitadas']++;
}
echo "Has visitado" . $_SESSION['paginas_visitadas'] . " página(s).";
echo '<a href="Ejercicio4.php">Volver a la Página anterior</a>';
echo '<a href="Ejercicio4-3.php">Cerrar Sesión</a>';
?>