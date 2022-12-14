<?php

    require_once '../../global.php';

    try{
        require_once '../../classes/AssuntoMateria.php';
        $assunMateria = new AssuntoMateria(null, null);
        $assunMateria->deleteDB($_POST['txtIdAssuntoMateria']);
        header('Location: registerAssuntoMateria.php');
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>