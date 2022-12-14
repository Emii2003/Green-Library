<?php

    require_once '../../global.php';

    try{
        require_once '../../classes/User.php';
        $user = new User($_POST['txtNome'], $_POST['txtEmail'], $_POST['txtSenha'], null);
        $user->insertDB($user);
        header('Location: ../../index.php');
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>