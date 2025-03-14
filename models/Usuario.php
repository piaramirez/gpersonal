<?php
class Usuario extends conn{
    public function __construct(){
        parent::__construct();
    }
    public function login(){
        session_start();
        //recuerda La clase Usuario hereda de conn, pero en el constructor no llamas al constructor de la clase padre.
        //$conn=classe::funcion asplica cuando quieres una funcion, wey!
        $return= conn::ruta();
        if(isset($_POST["btnEnviar"])){
            $emailLogin = htmlspecialchars($_POST['emailLogin']);
            $passLogin = htmlspecialchars($_POST['passLogin']);
           if(empty($emailLogin) || empty($passLogin)){
                header("Location:".conn::ruta()."index.php?m=2");
                exit();
           }
        }else{
            $pdo = $this->db->prepare("SELECT * FROM mt_usuarios WHERE mtUsuarioEmail = :emailLogin AND mtUsuarioPass = :passLogin");
            $pdo->bindParam(':emailLogin', $emailLogin);
            $pdo->bindParam(':passLogin', $passLogin);
            $pdo->execute();
            $usuario = $pdo->fetch(PDO::FETCH_ASSOC);
            if ($usuario) {
                $_SESSION['usuario'] = $usuario; // Guardar usuario en sesión
                header("Location: " . conn::ruta() . "view/Home/.php");
                exit();
            } else {
                header("Location: " . conn::ruta() . "index.php?m=1");
                exit();
            }

        }
    }
}