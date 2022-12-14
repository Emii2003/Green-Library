<?php

    class Materia{

        // Attributes

        private $idMateria;
        private $nomeMateria;
        // Constructor

        function __construct($idMateria, $nomeMateria){
            $this->setIdMateria($idMateria);
            $this->setNomeMateria($nomeMateria);
        }

        // Methods

        public function insertDB($Materia){
            require_once 'Connection.php';

            $datas = array($Materia->getNomeMateria()); 

            $connection = Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO tbMateria(nomeMateria)
                                                                        VALUES(?)");
            $statement->bindParam(1, $datas[0]);
            $statement->execute();
        }
        
        public function deleteDB($idMateria){
            require_once 'Connection.php';

            $datas = array($idMateria); 

            $connection = Connection::getConnection();
            $statement = $connection->prepare("DELETE FROM tbAssuntoMateria WHERE idMateria = (?)");
            $statement->bindParam(1, $datas[0]);
            $statement->execute();
            $statement = $connection->prepare("DELETE FROM tbPostagem WHERE idMateria = (?)");
            $statement->bindParam(1, $datas[0]);
            $statement->execute();
            $statement = $connection->prepare("DELETE FROM tbMateria WHERE idMateria = (?)");
            $statement->bindParam(1, $datas[0]);
            $statement->execute();
        }

        public function currentidMateria($idMateria){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT nomeMateria FROM tbMateria where idMateria=".$idMateria;
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        public function getMateria(){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT * FROM tbMateria";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }


        // Getters

        public function getIdMateria(){
            return $this->idMateria;
        }

        public function getNomeMateria(){
            return $this->nomeMateria;
        }

        // Setters

        public function setIdMateria($idMateria){
            $this->idMateria = $idMateria;
        }

        public function setNomeMateria($nomeMateria){
            $this->nomeMateria = $nomeMateria;
        }

    }

?>