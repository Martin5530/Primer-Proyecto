<?php
session_start();
if(session_destroy()) // Destruye todas las sesiones
{
header("Location: ../Index.php"); // Redireccionando a la pagina index.php
}
?>