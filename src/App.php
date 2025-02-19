<?php
namespace Syeda\Classproject;
# Namespace can be found in composer.json

use Dotenv\Dotenv;
use \Exception;

class App{
    # In php, all variables start with '$'
    protected $config;

    # Create Constructor
    public function __construct()
    {
        
    }

    private function loadConfig(){
        try{
            $dotenv = Dotenv::createImmutable(__DIR__); 
            $dotenv->load();
        } 
        catch( Exception $exception){
            $msg = $exception -> getMessage();
            exit($msg);
        }
    }


}

?>

