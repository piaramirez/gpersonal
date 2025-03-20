<?php 
require_once("../../config/conn.php");
session_destroy();
header("Location:".conn::ruta()."index.php");
?>