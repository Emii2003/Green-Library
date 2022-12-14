<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- CSS Puro -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen" />
    <!-- Fontes -->
    <link rel="stylesheet" href="https://use.typekit.net/kgw6nxx.css">
   <!-- ICONES -->
   <link href='https://use.fontawesome.com/releases/v5.1.0/css/all.css' rel='stylesheet' integrity='sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt' crossorigin='anonymous' />
    <title>TCC</title>
</head>
<?php include_once("sessionVerify.php"); ?>

<body class='bg-login'>
<main>
        <div class="container mt-5">
                <div class="col-12" id="form-sign-up" style="border-radius:15px;">
                    <a href = "../indexAdmin.php">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAAvUlEQVRoge3ZwQqCUBRF0U0fmBWFg/r3oMACP8HABjYIew28Du7hcRY49mzUgQpmVdsDD6AHjslbwlpgAMbP0efOiZlHjMAzdVFAKWIADpmjljrxG/ECzpmjlnKECkeocIQKR6hwhApHqHCEiioidpRfitrMURF3xCI2mSdXUM2tBdP3p9LDfskcFeUYVY5R5RhVjlHlGFWOUeUYVVXF/PsZ2mSOiirF3FIXrTCP6XLnrNMAV6arsU3eYvbtDV2c58xqHOMTAAAAAElFTkSuQmCC">
                    </a>
                    <section class="col-12">
                        <h1 class="d-flex justify-content-center" id="titulo">POSTAGEM</h1>
                        <center>
                            <?php 
                            require_once '../../global.php';
                            require_once '../../classes/Materia.php';
                            require_once '../../classes/AssuntoMateria.php';
                            $assunMateria = new AssuntoMateria(null, null);
                            $assunMaterias = $assunMateria->getAssuntoMateria();
                            $materia = new Materia(null, null);
                            $materias = $materia->getMateria();
                            ?>
                            <form method="POST" action="insertPost.php">
                                <!-- selectbox Materia -->
                                <select name="idMateria" id="idMateria" class="form-select" style="width:200px;" aria-label="Default select example">
                                    <?php
                                if(!empty($materias)){
                                    foreach($materias as $m){ ?>
                                        <option value="<?php echo $m['idMateria']; ?>"><?php echo $m['nomeMateria']; ?></option>
                                <?php } ?>
                                </select>
                                <br>
                                <?php
                                    if(!empty($assunMaterias)){?>
                                <!-- selectbox Assunto Materia -->
                                <select name="idAssuntoMateria" id="idAssuntoMateria" class="form-select" style="width:200px;" aria-label="Default select example">
                                        <?php
                                            foreach($assunMaterias as $am){ 
                                                ?>
                                                <option value="<?php echo $am['idAssunto']; ?>"><?php echo $am['nomeAssunto']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php
                                        }else{
                                        ?>
                                        <h3>Sem Assuntos de Materias Cadastradas</h3>
                                        <hr style="width:12vh" class="bg-danger border-4 border-top border-secondary">
                                        <a href="registerAssuntosMateria.php">
                                            <input type="submit" class="btn" id="btnTop" value="Cadastrar Assuntos de Materias">
                                        </a>
                                <?php } ?>
                                <?php
                                    }else{
                                    ?>
                                    <h3>Sem Materias Cadastradas</h3>
                                    <hr style="width:12vh" class="bg-danger border-4 border-top border-secondary">
                                    <a href="registerMateria.php">
                                        <input type="submit" class="btn" id="btnTop" value="Cadastrar Materias">
                                    </a>
                                    <?php } ?>
                                    <br>
                                    
                                <!-- CONTEUDO  -->
                                <div class="input-group flex-nowrap d-flex justify-content-center">
                                    <textarea class="input-form" id="input-cadastro" placeholder="Compartilhe algo educativo..." aria-label="Compartilhe algo educativo..." name="txtConteudo" aria-describedby="addon-wrapping" cols="30" rows="10" maxlength="250" autofocus></textarea>
                                    </textarea>    
                                </div>
                                <!-- BTN CADASTRAR -->
                                <div class="col-12 text-center mt-3">
                                    <input type="submit" class="btn" id="btnTop" value="Cadastrar">
                                </div>
                            </form>
                        </center>
                    </section>
                    <br>
                    <?php 
                    require_once '../../global.php';
                    require_once '../../classes/Postagem.php';
                    
                    $post = new Postagem(null, null, null, null);
                    $posts = $post->getPost();

                    if(!empty($posts)){
                            ?>
                    <section class="col-10 container text-center mt-5">
                    <form action="deletePost.php" method="POST">
                        <table class="table table-striped table-light table-bordered">
                            <thead>
                                <tr>
                                <th class="col-1">id</th>
                                <th class="col-3">Conteudo</th>
                                <th class="col-3">Data</th>
                                <th class="col-2">Assunto</th>
                                <th class="col-2">Materia</th>
                                <th class="col-3">User</th>
                                <th class="col-1">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                foreach($posts as $p){ 
                                    ?>
                                    <tr>
                                        <td><?php echo $p['idPostagem']; ?></td>
                                        <td><?php echo $p['conteudoPostagem']; ?></td>
                                        <td><?php echo $p['dtPostagem']; ?></td>
                                        <td><?php echo $p['nomeAssunto']; ?></td>
                                        <td><?php echo $p['nomeMateria']; ?></td>
                                        <td><?php echo $p['idUser']."-".$p['nomeUser']; ?></td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletar(<?php echo $p['idPostagem']; ?>)">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php 
                                } ?>
                                </tbody>
                            </table>
                            <input type="hidden" id="txtIdPostagem" name="txtIdPostagem"/>
                        </form>
                        
                    </section>
                    <?php } ?>
            </div>
        </div>
    </main>
    
<script>
    function deletar(idPostagem){
        $('#txtIdPostagem').val(idPostagem);
    }
</script>

<!-- JQUERY-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>
