<?php

namespace src\app\Services;

use PDO;

class ConnectionCreator {
    public static function CreateConnection(){
        return new PDO('mysql:host=127.0.0.1;dbname=ibike_db','root','');
    }
}