<?php
    namespace Syeda\Classproject;

    use \Exception;
    use Syeda\Classproject;

    class Account extends Database{
        public function __construct(){
            try{
                parent::__construct();

                $db = new Database();   
                
                if(!$db){
                    throw new Exception("No database available.");
                }
                else{
                    $this -> connection = $db -> connection;
                }
            }
            catch(Exception $exc){
                exit($exc -> getMessage());
            }
        }

        public function create($email, $password){
            // Execute query to create user with email and password

            $create_query = 'INSERT INTO "Account (
                email, 
                password,
                reset,
                active,
                created
                VALUES(?,?,?,TRUE,NOW())
            )"';
        }

        // For resetting password
        public function update($email, $reset){

        }

        public function getAccount(){

        }

        public function deactivate(){

        }
    }
?>