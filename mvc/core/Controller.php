<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view){
        require_once "/Applications/XAMPP/xamppfiles/htdocs/Project-1/mvc/views/Templete/".$view.".php";
    }

}
?>