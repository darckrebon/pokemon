<?php
$conexao=mysqli_connect("localhost","root","","rpg");

if (mysqli_connect_errno()) {
  echo "Erro ao conectar ao banco: " . mysqli_connect_error();
  exit();
}else{

    if(isset($_GET['logout']) == 'sair'){
        
        session_start();
        $_SESSION['id'] = null;
        $_SESSION['email'] = null;
        $_SESSION['conexao'] = null;
        session_destroy();
        
    }

    if(isset($_POST['email']) != ''){
		
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT id, email, password from cliente WHERE email = '$email'";
        $resultado = mysqli_query($conexao,$sql);
        $linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

        if(isset($linha['email']) != null){

            $email_bd = $linha['email'];
            $password_bd = $linha['password'];

            if($email == $email_bd && $password == $password_bd){
                
                session_start();
                $_SESSION['id'] = $linha['id'];
                $_SESSION['email'] = $linha['email'];

                header('Location: dashboard.php');
                
            }else{

                echo 'Email ou senha incorretos.';
            }

        }else{

            echo 'Email não encontrado.';
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meu site</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="index.php" method="post">
              <h1>Entrar</h1>
              <div>
                <input type="text" name="email" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->
				<input type="submit" value="Enviar">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>