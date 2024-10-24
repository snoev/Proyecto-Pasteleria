<?php
session_start();
echo "Hasta pronto ".$_SESSION['nombre'];

session_unset();//vacia las variables de sesion
session_destroy(); //destruye la sesion y sus variables al final del script
echo "<br>Se cerró la sesión";
header("location: index.php");