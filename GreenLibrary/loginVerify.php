<?php

    require_once 'classes/User.php';
    $usuario = new User(null, null, null, null);
    $usuarios = $usuario->getUser();
    //usuarios 
    $user = $_POST['txtUser'];
    $password = $_POST['txtPassword'];

    if (empty($user)){
        echo 'Email inválida!<br>';
        // header("Location: index.php");
    }
    if (empty($password) || $password <= 4){
        echo 'Senha inválida!<br>';
        // header("Location: index.php");
    }
    
    if(!empty($usuarios)){
        foreach($usuarios as $u){ 
            if(($user == $u['emailUser']) && (password_verify($password, $u['senhaUser']))){
                session_start();
                $_SESSION['idUserSession'] = $u['idUser'];
                $_SESSION['usernameSession'] = $u['emailUser'];
                $_SESSION['nomeSession'] = $u['nomeUser'];
                $_SESSION['passwordSession'] =  $password;
                $_SESSION['admin'] = $u['Admin'];
                if($_SESSION['admin'] == 1){
                    header("Location: RestrictArea/indexAdmin.php");
                    break;
                }else{
                    header("Location: RestrictArea/index.php");
                    break;
                }
            }else{
                echo '<br>User:'.$u['emailUser'].' = '.$user;
                echo '<br>Senha:'.$u['senhaUser'].' = '.$password;
            }
            header("Location: index.php");
        }


    }else{
        echo 'Sem user no banco!<br>';
        header("Location: index.php");

    }

?>