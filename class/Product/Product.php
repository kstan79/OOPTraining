<?php

namespace Product;

class Product{
    protected string $name="";
    protected string $id="";
    public function __construct(){

    }
    public function fetchProductFromId(string $id):bool{
        $this->id=$id;
        $this->name="Item ".$id;
        return true;
    }

}