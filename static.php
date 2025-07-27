<?php
class person{
    public static $age = 24;
    public static function log($message){
        echo $message;
    }
}
echo person::$age;


