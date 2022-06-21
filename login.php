<?php session_start(); ?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="src/logo-djcorp.png" type="image/ico" />

    <title>Aplikasi kas desa </title>

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
            <form method="post" action="">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="username">
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password">
              </div>
              <div>
                <button type="Submit" class="btn btn-info" name="login">Login</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> Kas Desa</h1>
                </div>
              </div>
            </form>
           <?php 
           include"koneksi.php";
          
           if(isset($_POST['login'])){   
            $username = $_POST['username'];
           $password = md5($_POST['password']); 
           $cek = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'  AND password = '$password'");
          if ($cek) {
            $hasil = mysqli_fetch_array($cek, MYSQLI_ASSOC);
          $count = mysqli_num_rows($cek);
          $nama = $hasil['nama'];
          $foto = $hasil['foto'];
          if ($count > 0) {
            $_SESSION['nama'] = $nama;
            $_SESSION['foto'] = $foto;
            header('location:index.php');
          }else{
            echo "<div class='alert alert-danger'>username atau password yang anda masukkan salah</div>";
            }

          }
          }
            ?>
          
          </section>
        </div>
         
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>