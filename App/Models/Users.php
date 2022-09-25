<?php
Class Users extends Model{
    public function __construct()
    {
        parent::__construct("users");
    }

    public function find($terms = null, $params = null, $columns = "*")
    {
        return parent::find(null, null, "first_name")->fetch(true);
    }
}