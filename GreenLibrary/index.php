<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
  <!-- CSS Puro -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
  <!-- Fontes -->
  <link rel="stylesheet" href="https://use.typekit.net/kgw6nxx.css">
  <title>TCC</title>
</head>

<body class='bg-login'>

  <main>
    <div class="container mt-5">
      <div class="row m-5" id="card-login">
        <div class="col-12 col-sm-6">
          <!-- imagem na direita -->
          <section id="img">
            <img src="imgs/Happy student-amico.svg" id="imgHome" class="">
          </section>
        </div>
        <div class="col-12 col-sm-6 text-center" id="form-sign">
          <section class="col-12">
            <!-- forms -->
            <form method="POST" action="loginVerify.php" id="form">
              <h1 class="mt-5" id="titulo">Login</h1>
              <div class="input-group flex-nowrap mt-4">
                <span class="input-group-text " id="icone-input">
                  <svg class="icon">
                    <use xlink:href="#icon-user"></use>
                  </svg>
                </span>
                  <input maxlength="30" class="inputs required input-form" id="email" type="text" placeholder="Username" autocomplete="off" name="txtUser"><br>
              </div>
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="icone-input">
                  <svg class="icon">
                    <use xlink:href="#icon-lock"></use>
                  </svg>
                </span>
                  <input class="inputs required input-form" id="pswd" type="password" placeholder="Senha" autocomplete="off" name="txtPassword"><br>
              </div>

              <div class="input-group flex-nowrap col-12">
                <label class="checkbox col-4 text-white ">
                  <input type="checkbox" value="remember-me"> Lembrar de mim
                </label>
                <label class="checkbox col-11">
                  <a href="" class="text-white"> Esqueceu sua senha ? </a>
                </label>
              </div>

              <!-- SVG -->
              <div class="d-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="icons">
                  <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
                    <path
                      d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
                  </symbol>
                  <symbol id="icon-lock" viewBox="0 0 1792 1792">
                    <path
                      d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
                  </symbol>
                  <symbol id="icon-user" viewBox="0 0 1792 1792">
                    <path
                      d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
                  </symbol>
                </svg>
              </div>
              <div class="col-12 text-center mt-3">
                <button type="submit" class="btn" id="btnTop" onClick="validar()" >Entrar</button>
              </div>
            </form>
            <div class="col-12 text-center mt-5">
              <a href="register.php"><button type="submit" class="btn" id="btnTop" >Criar Conta</button></a>
            </div>
          </section>
        </div>
      </div>
  </main>
 
  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <!-- ALERTA BONITO -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
  <!-- Bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>

</body>

</html>
