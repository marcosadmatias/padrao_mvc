<?php
Class NotFoundController extends Controller{
    public function index(){
        $this->loadView("404");
    }
}