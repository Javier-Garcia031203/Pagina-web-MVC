<?php
import('appmodules.users.models.user');
import('appmodules.users.views.user');

#[AllowDynamicProperties]
class UserController extends Controller {

    function login(){
$this->view->login();
}

    function add(){
        $this->view->create();
    }
    function save(){
        $dataArrived =  $_POST;
        $this->view->show($dataArrived);
    }
         
}
?>
