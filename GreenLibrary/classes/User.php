<?php

    class User{

        // Attributes

        private $idUser;
        private $nomeUser;
        private $emailUser;
        private $senhaUser;
        private $admin;


        // // Constructor

        function __construct($nomeUser, $emailUser, $senhaUser, $admin){
            $this->setNomeUser($nomeUser);
            $this->setEmailUser($emailUser);
            $this->setAdminUser($admin);
            $this->setSenhaUser($senha =  password_hash($senhaUser, PASSWORD_DEFAULT));
        }
        // Method

        public function getUser(){
            require_once 'Connection.php';

            $connection = Connection::getConnection();
            $querySelect = "select * from tbUser";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        public function insertDB($user){
            require_once 'Connection.php';

            $datas = array( $user->getNomeUser(),   //0
                            $user->getEmailUser(),  //1
                            $user->getSenhaUser(), //2
                            $user->getAdminUser()); //3


            $connection = Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO tbUser(nomeUser, emailUser, senhaUser, Admin)
                                                                        VALUES(?, ?, ?, ?)");
            $statement->bindParam(1, $datas[0]); //nome
            $statement->bindParam(2, $datas[1]); //email
            $statement->bindParam(3, $datas[2]); //senha
            $statement->bindParam(4, $datas[3]); //senha

            $statement->execute();
        }

        public function currentidUser($idUser){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT nomeUser, idUser FROM tbuser where idUser=".$idUser;
            $result = $connection->query($querySelect);
         
            return $result->fetchAll();
        }
        public function deleteDB($idUser){
            require_once 'Connection.php';
            $datas = array($idUser); 
            $connection = Connection::getConnection();
            $statement = $connection->prepare("DELETE FROM tbUser WHERE idUser = (?)");
            $statement->bindParam(1, $datas[0]);
            $statement->execute();
            $statement = $connection->prepare("DELETE FROM tbPostagem WHERE idUser = (?)");
            $statement->bindParam(1, $datas[0]);
            $statement->execute();
        }

        // Getters

        public function getIdUser(){
            return $this->idUser;
        }

        public function getNomeUser(){
            return $this->nomeUser;
        }

        public function getEmailUser(){
            return $this->emailUser;
        }
        
        public function getSenhaUser(){
            return $this->senhaUser;
        }
        public function getAdminUser(){
            return $this->admin;
        }
        // Setters

        public function setIdUser($idUser){
            $this->codUser = $idUser;
        }

        public function setNomeUser($nomeUser){
            $this->nomeUser = $nomeUser;
        }

        public function setEmailUser($emailUser){
            $this->emailUser = $emailUser;
        }

        public function setSenhaUser($senhaUser){
            $this->senhaUser = $senhaUser;
        }
        public function setAdminUser($admin){
            $this->admin = $admin;
        }

    }

?>