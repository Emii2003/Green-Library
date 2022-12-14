<?php
    session_start();

    require_once '../classes/User.php';
    $usuario = new User(null, null, null, null);
    $usuarios = $usuario->getUser();
    $valido = false;
    if(!empty($usuarios)){
        foreach($usuarios as $u){ 
            if (!$valido){
                if(($_SESSION['usernameSession'] == $u['emailUser']) && (password_verify($_SESSION['passwordSession'], $u['senhaUser']))  && ($_SESSION['admin'] == $u['Admin'])){
                    $valido = true;
                }
                else{
                    $valido = false;
                }
            }
        }
    }else{
        // header("Location: ../index.php");
    }
    // testa se esta valido 
    if(!$valido){
        // header("Location: ../index.php");
    }
    
    
?>