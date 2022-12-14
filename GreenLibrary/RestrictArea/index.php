<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Css reciclado -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
    <!-- Css arearestrita -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <!--  -->
    <link rel="stylesheet" href="css/tweet.css" />
 <!-- ICONES -->
    <link href='https://use.fontawesome.com/releases/v5.1.0/css/all.css' rel='stylesheet' integrity='sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt' crossorigin='anonymous' />
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php include_once("sessionVerify.php"); ?>
<body>

<div class="container-fluid">
        <div class="row">
            <!-- ABA ESQUERDA -->
          <div class="col-1 left-bar bg-light">
            <ul class="nav flex-column">
                <li class="nav-item ">
                  <img class="card-photo col-1" src="data:image/png;base64,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">
                  <h2 class="yourProfile mt-3"><?php echo $_SESSION["nomeSession"]?></h2>
                
                </li>
                

                <?php if($_SESSION['admin'] == 1){ ?>
                    <li class="nav-item">
                      <a href="indexAdmin.php"><input type="button" class="btnPost mt-4" id="btnPost" value="ADMIN"></a>
                    </li>  
                <?php }?>
                
              </ul>
              <br>
              <div class="logout">
                <a href="../logout.php">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAsklEQVRIie2WMQ7CMAxFH70DiF6FlYVybEYKCwzsDRNnQCoDjYTaqqROYiTkL3mIlfxnRXESMP1Ie8ABrTAcUEnAMVAfTQho0Ru3kmoDfAcqEoFmy8B/BT4AJ2A1NSm2lXx86tjlrlPwHOAlcOnyN6DUAgfBQ0w3YxXP9KklhyvLgdTa6rUG+Cs0F7hmpJ00LpAncAa2wMMn7Vk0sBr4nsDTSRZVvH+J0v5tgF1k4aa0egGdNMkISBZ3YAAAAABJRU5ErkJggg==">
                  <h2 class="yourProfile mt-3">Sair</h2>
                </a>
              </div>
        </div>
        <!-- CENTRO POSTS -->
          <div class="col-12">
                <div class="card mt-5 mx-auto">
                <form method="POST" action="rotinas/insertPostComum.php" onSubmit="alerta()" id="form">
                    <div class="row">
                        <img class="card-photo col-1" src="data:image/png;base64,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">
                        
                        <select class="select-box form-select-sm col-3 mx-2 mt-4" name="idMateria" id="idMateria">
                        <?php 
                            require_once '../global.php';
                            require_once '../classes/Materia.php';
                            require_once '../classes/AssuntoMateria.php';
                            $assunMateria = new AssuntoMateria(null, null);
                            $assunMaterias = $assunMateria->getAssuntoMateria();
                            $materia = new Materia(null, null);
                            $materias = $materia->getMateria(); 
                            if(!empty($materias)){
                                foreach($materias as $m){ ?>
                                    <option value="<?php echo $m['idMateria']; ?>"><?php echo $m['nomeMateria']; ?></option>
                            <?php }}else{ ?>
                                    <option value="">Sem Materias Cadastradas</option>
                            <?php } ?>
                        </select>
                        <select class="select-box form-select-sm col-3 mx-1 mt-4" name="idAssuntoMateria" id="idAssuntoMateria"  >
                            <?php
                                if(!empty($assunMaterias) ){
                                    foreach($assunMaterias as $am){ ?>
                                            <option value="<?php echo $am['idAssunto']; ?>"><?php echo $am['nomeAssunto']; ?></option>
                          <?php }} else { ?>
                                        <option value="">Sem Assuntos Cadastradas</option>
                          <?php } ?>
                        </select>
                    </div>
                    <div class="card-body mt-5">
                      <!-- CONTEUDO  -->
                      <div class="input-group flex-nowrap d-flex justify-content-center">
                        <textarea class="input-form" id="input-cadastro" placeholder="Compartilhe algo educativo..." aria-label="Compartilhe algo educativo..." name="txtConteudo" aria-describedby="addon-wrapping" cols="30" rows="10" maxlength="999" autofocus></textarea>
                        </textarea>
                        
                      </div>
                        <!-- BTN CADASTRAR -->
                      <div class="form-group">
                        <button class="btn" id="btnPost" style="margin-left:80%;" type="submit"> 
                            Postar
                        </button>
                      </div>
                    </div>
                                
                  </form>
            <?php
        date_default_timezone_set('America/Sao_Paulo');
        require_once '../global.php';
        require_once '../classes/Postagem.php';
        
        $post = new Postagem(null, null, null, null);
        $posts = $post->getPost();
        if(!empty($posts)){
          foreach($posts as $p){ 
            ?>
            <div class="tweet">
              <img class="tweet__author-logo" src="data:image/png;base64,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">
              <div class="tweet__main">
                <div class="tweet__header">
                  <div class="tweet__author-name">
                    <?php echo $p['nomeUser']; ?>
                  </div>
                  <div class="tweet__author-slug">
                    @<?php echo $p['idUser'].'_'.$p['nomeUser'];  ?>
                  </div>
                  <div class="tweet__publish-time">
                    <?php echo $p['dtPostagem']; ?>
                  </div>
                </div>
                <div class="tweet__content" style>
                <?php echo $p['nomeMateria'].' - '.$p['nomeAssunto']; ?> 
                <hr>
                <!-- conteudo -->
                <?php echo $p['conteudoPostagem']; ?>
                </div>
              </div>
            </div>
          <?php } 
        }else{ ?>
            <div class="tweet">
              <img class="tweet__author-logo" src="data:image/png;base64,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">
              <div class="tweet__main">
                <div class="tweet__header">
                  <div class="tweet__author-name">
                    <?php echo $_SESSION['nomeSession'] ?>
                  </div>
                  <div class="tweet__author-slug">
                    <?php echo $_SESSION['usernameSession'] ?>
                  </div>
                  <div class="tweet__publish-time">
                    <?php 
                    $today = date("j/n/Y G:i:s");                 
                          print_r($today);
                    ?>
                  </div>
                </div>
                <div class="tweet__content">
                  Ainda Não existem postagens
                  <br>
                </div>
              </div>
            </div>
            
        <?php } ?>


                    </div>
                </div> 
          </div>

        </div>
      </div>


    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
     <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <!-- ALERTA BONITO -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>

<script>
  $("#form" ).submit(function() {
    Swal.fire({
      icon: 'success',
      title: 'Sucesso',
      showConfirmButton: false,
      timer: 2000
    })
  });


</script>

</body>
</html>