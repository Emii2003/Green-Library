<?php

    class AssuntoMateria{

        // Attributes

        private $idAssuntoMateria;
        private $nomeAssuntoMateria;
        private $idMateria;


        // // Constructor

        function __construct( $nomeAssuntoMateria, $idMateria){
            $this->setNomeAssuntoMateria($nomeAssuntoMateria);
            $this->setIdMateria($idMateria);
        }
        // Method

        public function getAssuntoMateria(){
            require_once 'Connection.php';

            $connection = Connection::getConnection();
            $querySelect = "select * from tbAssuntoMateria";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        public function insertDB($AssuntoMateria){
            require_once 'Connection.php';

            $datas = array( $AssuntoMateria->getNomeAssuntoMateria(), //0
                        $AssuntoMateria->getIdMateria());            //1

            $connection = Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO tbAssuntoMateria(nomeAssunto, idMateria)
                                                                        VALUES(?, ?)");
            $statement->bindParam(1, $datas[0]); //Assunto
            $statement->bindParam(2, $datas[1]); //idMateria
            $statement->execute();
        }

        public function deleteDB($idAssuntoMateria){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $datas = array($idAssuntoMateria); 
            $statement = $connection->prepare("DELETE FROM tbPostagem WHERE idAssunto = (?)");
            $statement->bindParam(1, $datas[0]);
            $statement->execute();
            $statement = $connection->prepare("DELETE FROM tbAssuntoMateria WHERE idAssunto = (?)");
            $statement->bindParam(1, $datas[0]);
            $statement->execute();
        }

        public function currentidAssuntoMateria($idAssuntoMateria){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT nomeAssunto FROM tbAssuntoMateria where idAssunto=".$idAssuntoMateria;
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        // Getters

        public function getIdAssuntoMateria(){
            return $this->idAssuntoMateria;
        }

        public function getNomeAssuntoMateria(){
            return $this->nomeAssuntoMateria;
        }
        
        public function getIdMateria(){
            return $this->idMateria;
        }


        // Setters

        public function setIdAssuntoMateria($idAssuntoMateria){
            $this->idAssuntoMateria = $idAssuntoMateria;
        }

        public function setNomeAssuntoMateria($nomeAssuntoMateria){
            $this->nomeAssuntoMateria = $nomeAssuntoMateria;
        }

        public function setIdMateria($idMateria){
            $this->idMateria = $idMateria;
        }

    }

?>