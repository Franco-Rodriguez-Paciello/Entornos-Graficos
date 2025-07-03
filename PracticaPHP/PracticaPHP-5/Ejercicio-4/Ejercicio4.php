<?php
session_start();
if (!isset($_SESSION['paginas_visitadas'])) {
    $_SESSION['paginas_visitadas'] = 1;
} else {
    $_SESSION['paginas_visitadas']++;
}
echo "Página 1 - Has visitado " . $_SESSION['paginas_visitadas'] . " página(s).";
?>
<a href="Ejercicio4-2.php">Otra pagina</a>