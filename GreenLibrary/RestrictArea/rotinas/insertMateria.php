<?php

    require_once '../../global.php';

    try{
        require_once '../../classes/Materia.php';
        $materia = new Materia(null, $_POST['txtMateria']);
        $materia->insertDB($materia);
        header('Location: registerMateria.php');
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>