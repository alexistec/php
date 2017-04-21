<?php
trait enviromentConfig{
    echo "Version ".$this->version." Host ".$this->port." Replication ".$this->replication. "Environment ".$this->environment;
} 


interface engineDB{
    public function connect();
}

class Mysql implements engineDB{
    use enviromentConfig;
    public $environment = "localhost";
    public $version     = "TEST version";
    public $port        = "TEST version";
    public $replication = "TEST version";
    public $version     = "TEST version";

    private $db_mysql_user;
    private $db_mysql_pass;
    private $db_mysql_host;

    public function connect(){
        echo "Logic connection";
    }


}

class Oracle implements engineDB{
    use enviromentConfig;
    public $environment = "localhost";
    public $version     = "TEST version";
    public $port        = "TEST version";
    public $replication = "TEST version";
    public $version     = "TEST version";

    private $db_oracle_user;
    private $db_oracle_pass;
    private $db_oracle_host;
    public function connect(){
        echo "Logic connection";
    }
}

class mongoDB implements engineDB{
    use enviromentConfig;
    public $environment = "localhost";
    public $version     = "TEST version";
    public $port        = "TEST version";
    public $replication = "TEST version";
    public $version     = "TEST version";

    private $db_mongodb_user;
    private $db_mongodb_pass;
    private $db_mongodb_host;
    public function connect(){
        echo "Logic connection";
    }
}


$mysql = new Mysql();
$mysql->enviromentConfig();