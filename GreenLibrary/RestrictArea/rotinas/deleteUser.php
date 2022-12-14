<?php

    require_once '../../global.php';

    try{
        require_once '../../classes/User.php';
        $user = new User(null, null, null, null);
        $user->deleteDB($_POST['txtIdUser']);
        header('Location: registerUser.php');
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>