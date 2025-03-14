<?php

class Usuario extends conn{
    public function __construct(){
        parent::__construct();
    }
    public function login(){
        //recuerda La clase Usuario hereda de conn, pero en el constructor no llamas al constructor de la clase padre.
        //$conn=classe::funcion asplica cuando quieres una funcion, wey!
        $return= conn::ruta();
        //print_r($_POST);
        if(isset($_POST["btnEnviar"])){
            $emailLogin = $_POST['emailLogin'];
            $passLogin = $_POST['passLogin'];
            //print($emailLogin." ".$passLogin);
           if(empty($emailLogin) || empty($passLogin)){
            //Erro salta cuando viene vacío alguno de los dos
                header("Location:".conn::ruta()."index.php?m=2");
                exit();
           }else{
            print($emailLogin." ".$passLogin);
            $pdo = $this->db->prepare("SELECT * FROM mt_usuarios WHERE mtUsuarioEmail = :emailLogin AND mtUsuarioPass = :passLogin");
            $pdo->bindParam(':emailLogin', $emailLogin);
            $pdo->bindParam(':passLogin', $passLogin);
            $pdo->execute();
            $usuario = $pdo->fetch(PDO::FETCH_ASSOC);
            if ($usuario) {
                $_SESSION['usuario'] = $usuario; // Guardar usuario en sesión
                header("Location: " . conn::ruta() . "view/Home/index.php");
                exit();
            } else {
                header("Location: " . conn::ruta() . "index.php?m=1");
                exit();
            }

        }
        }
    }
}