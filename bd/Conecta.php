<?php


class Conecta {
    private static $url = "localhost:3306";
    private static $user = "root";
    private static $passord = "senac";
    private static $base = "dbphp01";
       public $db; 
    public function  __construct(){
      $db =  $this->conectadb;
    }
    public static function conectadb(){
        return mysqli_connect($this->getUrl, $this->getUser, $this->getPassord, $this->getBase)or die(mysqli_errno($link));
        return $db;
    }
    function getUrl(){
        return $this->url;
    }
    function getUser(){
        return $this->user;
    }
    function getPassord(){
        return $this->passord;
    }
    function getBase(){
        return $this->base;
    }
}
