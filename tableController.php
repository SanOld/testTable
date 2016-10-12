<?php

require(__DIR__ . '/tableModel.php');

class tableController
{
    public $config;
    
    
    public function __construct($config){
        $this->config=$config;
    }

    public function createTable(){
        $model=new tableModel($this->config);
        $this->render('tableView',$model);
    }
    
    public function render($view,$model){
        require(__DIR__ . "/".$view.".php");
    }
}
