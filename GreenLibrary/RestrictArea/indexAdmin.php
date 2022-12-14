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
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
     <!-- Fontes -->
    <link rel="stylesheet" href="https://use.typekit.net/kgw6nxx.css">
    <title>TCC</title>
</head>

<?php include_once("sessionVerifyAdmin.php"); ?>

<body>
    <!-- Navegacao -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#"><img src="imagens/logo2.jpg" class="img-responsive" style="width: 80px;height: 40px;"></a> -->
              <a class="navbar-brand" href="#"><?php echo ucfirst($_SESSION['nomeSession']); ?></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav pe-5">
                  <li class="nav-item pe-1">
                    <a class="nav-link" aria-current="page" href="indexAdmin.php">Home</a>
                  </li>
                  <li class="nav-item pe-1">
                    <a class="nav-link" aria-current="page" href="rotinas/registerUser.php">User</a>
                  </li>
                  <li class="nav-item pe-2"></li>
                    <a class="nav-link" href="rotinas/registerMateria.php">Matéria</a>
                  </li>
                  <li class="nav-item pe-2">
                    <a class="nav-link" href="rotinas/registerAssuntoMateria.php">Assunto Materia</a>
                  </li>
                  <li class="nav-item pe-2">
                    <a class="nav-link" href="rotinas/registerPost.php">Post</a>
                  </li>
                  <li class="nav-item pe-2">
                    <a class="nav-link" href="../logout.php">Sair </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <main>
        <div class="container mt-5">
        <h1 class="txtWelcomeBg">Seja bem vindo, <?php echo ucfirst($_SESSION['nomeSession']); ?>!</h1>
        

            <div class="row">
                <div class="col-12 col-sm-5 text-center">
                    <section class="col-12">
                        <h1 class="text-center justify-content-center" style="margin-top: 20vh;"> Você é um administrador!</h1>
                        <h5 class="text-center mt-4 p-2">Aproveite a plataforma educativa Green Library. </h5>
                        <div class="col-12 text-center mt-3">
                            <a href = "index.php"><button class="btn" id="btnTop">Abrir rede</button></a>
                        </div>
                    </section>
                </div>
                <div class="col-12 col-sm-7">
                    <!-- imagem na direita -->
                    <section class="right-side mx-5">
                            <img src="imagens/home.svg" id="imgHome">
                    </section>
                </div>
            </div>
        </div>
        <!-- <h1 class="title text-center">Aprenda Aqui!</h1>
        <div class="linha container text-center"></div>
        <section class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="card-materia mt-5 mx-5">
                <div class="text-center">
                    <img src="imagens/iconMath.png">
                </div>
                <h1 class="text-center mt-5 m-2">MATEMÁTICA</h1>
                <div class="col-12 text-center mt-5">
                    <button type="submit" class="btn" id="btnTop" >Veja Mais</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="col-4 card-materia mt-5 mx-5">
                <div class="text-center">
                    <img src="imagens/icons8-livros-100.png">
                </div>
                <h1 class="text-center mt-5 m-2">PORTUGUÊS</h1>
                <div class="col-12 text-center mt-5">
                    <button type="submit" class="btn" id="btnTop" >Veja Mais</button>
                </div>
            </div>
            </div>
            <div class="col-sm-4">
              <div class="col-4 card-materia mt-5 mx-5">
                    <div class="text-center">
                        <img src="imagens/icons8-science-96.png">
                    </div>
                    <h1 class="text-center mt-5 m-2">CIÊNCIAS</h1>
                    <div class="col-12 text-center mt-5">
                        <button type="submit" class="btn" id="btnTop" >Veja Mais</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section> -->
    </main>


<!-- Bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>