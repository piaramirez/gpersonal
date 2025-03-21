<?php
class Usuario extends conn{
    private $nombre;
    private $apellidos;
    private $foto;
    private $puesto;
    private $email;
    public function __construct(){
        parent::__construct();
        //var_dump("Dentro de usuarios");
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
           // print($emailLogin." ".$passLogin);
            $pdo = $this->db->prepare("SELECT u.mtUsuarioID, u.mtUsuarioNombre, u.mtUsuarioApellido, u.mtUsuarioEmail, u.mtUsuarioImg, u.mtUsuarioTipo, r.mtRolesNombre AS rol 
            FROM mt_usuarios u
            LEFT JOIN mtroles r ON u.mtUsuarioTipo = r.mtRolesId
            WHERE u.mtUsuarioEmail =:emailLogin AND u.mtUsuarioPass = :passLogin  LIMIT 1");
            $pdo->bindParam(':emailLogin', $emailLogin);
            $pdo->bindParam(':passLogin', $passLogin);
            $pdo->execute();
            $usuario = $pdo->fetch(PDO::FETCH_ASSOC);
            if ($usuario) {
                $this->setDatos($usuario);
                var_dump($usuario);
                //die();
                $_SESSION['usuario'] = $usuario; 
                header("Location: " . conn::ruta() . "view/Home/index.php");
                exit();
            } else {
                header("Location: " . conn::ruta() . "index.php?m=1");
                exit();
            }

        }
        }
    }
    public function setDatos($usuario){
        $this->nombre=$usuario['mtUsuarioNombre'];
        $this->apellidos=$usuario['mtUsuarioApellido'];
        $this->foto=$usuario['mtUsuarioImg'];
        $this->puesto=$usuario['rol'];
        $this->email=$usuario['mtUsuarioEmail'];
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function nombreCompleto(){
        return $this->nombre." ".$this->apellidos;
    }
    public function getFoto(){
        return $this->foto;
    }
    public function getPuesto(){
       return $this->puesto;
    }
    function getEmail(){
        return $this->email;
    }
}