<?php
class request{

    public $controller = 'defaultController';
    public $method = 'index';   
    
    public function __construct(){
        $this->getSystemPara();
    }

    public function post($name){
        return $_POST[$name] ? $_POST[$name] : null; 
    }

    public function get($name){
       return $_GET[$name] ? $_GET[$name] : null;
    }

    private function getSystemPara(){
        if($this->get('controller') != null){
            $this->controller = $this->get('controller').'Controller';
        }

        if($this->get('method') != null){
            $this->method = $this->get('method');
        }
    }
}