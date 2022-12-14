<?php

    require_once '../../global.php';

    try{
        require_once '../../classes/Postagem.php';
        $post = new Postagem(null, null, null, null);
        $post->deleteDB($_POST['txtIdPostagem']);
        header('Location: registerPost.php');
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>