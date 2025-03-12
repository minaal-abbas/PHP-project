<?php
    namespace Syeda\Classproject;

use \Exception;
use Syeda\Classproject;

    class Database extends App{
        protected $connection; 
        protected function __construct()
        {
          try
          {
            // Checking if credentials loaded
            if(
                $_ENV['DBHOST'] &&
                $_ENV['DBUSER'] &&
                $_ENV['DBPASSWORD'] &&
                $_ENV['DBNAME']
            )
            {
                // Initialize connection
                try {
                    $this -> connection = mysqli_connect(
                        $_ENV['DBHOST'],
                        $_ENV['DBUSER'],
                        $_ENV['DBPASSWORD'],
                        $_ENV['DBNAME']
                    );
                    if(!$this->connection){
                        throw new Exception("Database connection cannot be created.");
                    }
                } 
                catch(Exception $exc)
                {
                    exit($exc -> getMessage());
                }
            }
            else {
                throw new Exception("Database credentials not loaded.");
            }
          }
          catch(Exception $exc)
          {
            exit($exc -> getMessage());
          }  
        }
    }

?>