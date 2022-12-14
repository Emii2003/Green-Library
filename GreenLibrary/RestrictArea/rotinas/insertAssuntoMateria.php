<?php

    require_once '../../global.php';

    try{
        require_once '../../classes/AssuntoMateria.php';
        $assunMateria = new AssuntoMateria($_POST['txtAssunto'], $_POST['idMateria']);
        $assunMateria->insertDB($assunMateria);
        header('Location: registerAssuntoMateria.php');
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>