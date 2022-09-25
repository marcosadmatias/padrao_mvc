<?php
Class HomeController extends Controller{
    private $data = array();

    public function index(){
        $users = new Users();
        $this->data["users"] = $users->find();
        
        $this->loadTemplate("Home/index", $this->data);
    }
}