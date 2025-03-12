<?php
class Core{
    protected $controller;
    protected $method;
    protected $parameters = [];
    public function __construct(){
        //print_r($this->getUrl());
        $url = $this->getUrl();
        //ucword convierte la primer letra de  cada palabra en mayusucl
        /**
         * Estás funcionen permiten saber que está buscando después de la url, 
         * en el caso del prime if busca en la carpeta controlers si está el archivo, a instanciarlo y
         * procede a eñiminarlo del array
         **/
        /*$test ='../app/controllers/' . ucwords($url[0]) . '.php';
        var_dump($test);*/
        if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
            $this->controller = ucwords($url[0]);
            //elimina una variable o un elemento de una array en tiempo real en el riempo de ejecución
            unset($url[0]);           
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        var_dump('../app/controllers/' . $this->controller . '.php');
        $this->controller = new $this->controller;
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->parameters = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->parameters);
    }
    public function getUrl(){
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
    
        return $url;
      }
    }
}
