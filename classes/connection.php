<?php
/**
 * Created by PhpStorm.
 * User: Evil25
 * Date: 22/05/2018
 * Time: 18:06
 */

class connection
{
    public $connection = null;
    private $dsn;
    private $user;
    private $pass;

    public function __construct($dsn,$user,$pass)
    {
        $this->dsn = $dsn;
        $this->user = $user ;
        $this->pass = $pass;
        $this->getConnection();
    }
    private function getConnection(){
        if($this->connection === null){
            $this->connection = new PDO($this->dsn,$this->user,$this->pass);
        }
    }

}