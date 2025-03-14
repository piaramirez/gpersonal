<?php
class conn {
    protected $db;

    public function __construct() {
        $url = "localhost";
        $bdname = "mesatickets";
        $user = "root";
        $pass = "";

        try {
            $this->db = new PDO("mysql:host=$url;dbname=$bdname;charset=utf8mb4", $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }
    public static function ruta(){
        return "http://localhost/ticket/";
    }
}
?>
