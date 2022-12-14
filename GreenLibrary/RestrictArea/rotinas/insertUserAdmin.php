<?php

    require_once '../../global.php';

    try{
        require_once '../../classes/User.php';
        $admin = (isset($_POST['ckbAdmin']) ) ? 1 : 0;
        $user = new User($_POST['txtNome'], $_POST['txtEmail'], $_POST['txtSenha'], $admin);
        $user->insertDB($user);
        header('Location: registerUser.php');
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>