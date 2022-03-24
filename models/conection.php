<?php

class Conection{

    public function conect(){
        $link = new PDO('mysql:host=localhost;dbname=comercial-eduardo', "root", "");
        $link->exec("set names utf8");
        return $link;
    }
}