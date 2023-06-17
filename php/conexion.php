<?php
class Db {
    private static $conexion = NULL;

    private function __construct() {}

    public static function conectar() {
        if (self::$conexion === NULL) {
            $pdo_options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            self::$conexion = new PDO('mysql:host=localhost;dbname=ventas_dos', 'root', '', $pdo_options);
        }
        return self::$conexion;
    }
}
?>
