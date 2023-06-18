<?php
    session_start(); // obtiene la sesion
    // echo $_SESSION['correo'];
    session_destroy(); // cierra la sesion 

    echo "<script> alert('Sesion Cerrada'); window.location='../index.php' </script>";
?>