<?php
class Database{
    public $driver;
    public $link;

    public function setDriver($driver){
        $this->driver = $driver;
    }

    public function connect(){
        if($this->driver == "mysql"){
            $mysql = new ManageMySQL();
            $mysql-> setHost($host);
            $mysql-> setDB($db);
            $mysql-> setUser($user);
            $mysql-> setpass($pass);
            $this->link = $mysql-> connect();
        }elseif($this->driver == "sqlite"){
            $sqlite = new ManageSqLite();
            $sqlite-> setHost($host);
            $sqlite-> setDB($db);
            $sqlite-> setUser($user);
            $sqlite-> setpass($pass);
            $this->link = $sqlite-> connect();
        }
    }
}


?>