<?php
class Config{

    private $_host;
    private $_replication;
    private $_host_backup;
    private $_db_users;
    private $_db_pass;

    private function _connection(){
        //logic conection 
    }

    public function getConnection(){
        $this->__connection();
    }
}

$reflec_class = new ReflectionClass('Config');
Reflection::export($reflec_class);