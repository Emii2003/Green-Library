<?php
    session_start();
    require_once '../../global.php';

    try{
        require_once '../../classes/Postagem.php';
        $post = new Postagem($_POST['txtConteudo'], $_POST['idMateria'],
                             $_POST['idAssuntoMateria'], $_SESSION['idUserSession']);
                             
        $post->insertDB($post);
        header('Location: ../index.php');
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>