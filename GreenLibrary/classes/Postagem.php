<?php

    class Postagem{

        // Attributes

        private $idPostagem;
        private $conteudoPostagem;
        private $idMateria;
        private $idAssuntoMateria;
        private $idUser;
        // Constructor

        function __construct($conteudoPostagem, $idMateria, $idAssuntoMateria, $idUser){
            $this->setConteudoPostagem($conteudoPostagem);
            $this->setIdMateria($idMateria);
            $this->setIdAssuntoMateria($idAssuntoMateria);
            $this->setIdUser($idUser);
        }

        // Methods

        public function insertDB($Postagem){
            require_once 'Connection.php';
            $datas = array( $Postagem->getConteudoPostagem(),
                            $Postagem->getIdMateria(),
                            $Postagem->getIdAssuntoMateria(),
                            $Postagem->getIdUser()
                            ); 
            echo $datas[0]. '.<br>';
            echo $datas[1]. '.<br>';
            echo $datas[2]. '.<br>';
            echo $datas[3]. '.<br>';
            $connection = Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO tbPostagem(conteudoPostagem, idMateria, idAssunto, idUser, dataPostagem)
                                                                        VALUES(?, ?, ?, ?, NOW())");
            $statement->bindParam(1, $datas[0]); //conteudo
            $statement->bindParam(2, $datas[1]); //materia
            $statement->bindParam(3, $datas[2]); //asssunto
            $statement->bindParam(4, $datas[3]); //user
            $statement->execute();
        }
        public function deleteDB($idPostagem){
            require_once 'Connection.php';
            $datas = array($idPostagem); 
            $connection = Connection::getConnection();
            $statement = $connection->prepare("DELETE FROM tbPostagem WHERE idPostagem = (?)");
            $statement->bindParam(1, $datas[0]);
            $statement->execute();
        }

        public function currentidPostagem($idPostagem){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT conteudoPostagem FROM tbPostagem where idPostagem=".$idPostagem;
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }

        public function getPostagem(){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT *, DATE_FORMAT(dataPostagem,
            '%d/%m/%Y %Hh%i'
            ) 
            AS 
            'dtPostagem'  FROM tbPostagem";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }
        public function getPost(){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "
            SELECT post.idPostagem, post.conteudoPostagem, materia.nomeMateria, AssunMateria.nomeAssunto, users.nomeUser, users.idUser, DATE_FORMAT(post.dataPostagem,
            '%d/%m/%Y %Hh%i'
            ) 
            AS 
            'dtPostagem'  FROM tbPostagem post
            LEFT JOIN tbuser users on users.idUser = post.idUser
            LEFT JOIN tbmateria materia on materia.idMateria = post.idMateria
            LEFT JOIN tbassuntomateria AssunMateria on AssunMateria.idAssunto = post.idAssunto 
            order by dataPostagem desc
            ";
            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }
        


        // Getters

        public function getIdPostagem(){
            return $this->idPostagem;
        }

        public function getConteudoPostagem(){
            return $this->conteudoPostagem;
        }

        public function getIdAssuntoMateria(){
            return $this->idAssuntoMateria;
        }

        public function getIdMateria(){
            return $this->idMateria;
        }

        public function getIdUser(){
            return $this->idUser;
        }

        // Setters

        public function setIdPostagem($idPostagem){
            $this->idPostagem = $idPostagem;
        }

        public function setConteudoPostagem($conteudoPostagem){
            $this->conteudoPostagem = $conteudoPostagem;
        }

        public function setIdAssuntoMateria($idAssuntoMateria){
            $this->idAssuntoMateria = $idAssuntoMateria;
        }

        public function setIdMateria($IdMateria){
            $this->idMateria = $IdMateria;
        }

        public function setIdUser($IdUser){
            $this->idUser = $IdUser;
        }

    }

?>