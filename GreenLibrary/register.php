<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- CSS Puro -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <!-- Fontes -->
    <link rel="stylesheet" href="https://use.typekit.net/kgw6nxx.css">
    <title>TCC</title>
</head>
<body class='bg-login'>
    
    <main>
        <div class="container mt-5">
            <div class="row" id="card-Cadastro">
                <div class="col-12 col-sm-4" id="Cadastro">
                    <!-- imagem na direita -->
                    <h1 class="d-flex justify-content-center" id="titulo">Bem vindo!</h1>     
                    <h3 id="subtitulo">Acesse sua conta agora mesmo.</h3>
                    <div class="col-12 text-center mt-3">
                        <a href="index.php"><button class="btn" id="btnTop">Entrar</button></a>
                    </div>
                </div>
                <div class="col-12 col-sm-8 text-center" id="form-sign-up">
                    <section class="col-12">
                        <h1 class="d-flex justify-content-center" id="titulo">Crie sua conta</h1>
                        <form method="POST" action="RestrictArea/rotinas/insertUser.php" id="form">
                            <div class="input-group flex-nowrap d-flex justify-content-center">
                                <input type="text" class="inputs required input-form" id="input-cadastro" placeholder="Nome" aria-label="Nome" name="txtNome" aria-describedby="addon-wrapping" oninput="nameValidate()" >
                            </div>
                            <div class="input-group flex-nowrap d-flex justify-content-center">
                                <input type="email" class="inputs required input-form " id="input-cadastro" placeholder="Email" aria-label="Email" name="txtEmail" aria-describedby="addon-wrapping" oninput="emailValidate()">
                            </div>
                            <div class="input-group flex-nowrap d-flex justify-content-center">
                                <input type="password" class="inputs required input-form" id="input-cadastro" placeholder="Senha" aria-label="Senha" name="txtSenha" aria-describedby="addon-wrapping" oninput="mainPasswordValidate()">
                            </div>
                            <div class="col-12 text-center mt-3">
                                <input type="submit" class="btn" id="btnTop">
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </main>
    
    

<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- Inclusão do Plugin jQuery Validation-->
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

<!-- Bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>


</body>
</html>
