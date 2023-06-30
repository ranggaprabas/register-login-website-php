<!doctype html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->


    <title>Login Akun</title>
  </head>
  <body>

    <!-- form section start -->
    <section class="w3l-mockup-form">
      <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid">
          <div class="main-mockup">
              <div class="w3l_form align-self">
                <div class="left_grid_info">
                  <img src="images/image.svg" alt="">
                </div>
              </div>
            <div class="content-wthree">
              <h2>Login</h2>
              <p>Silahkan masuk ke akun anda. </p>
                      <p>
                      <input type="email" class="email" name="email" id="email" placeholder="Masukkan Email">
                      </p>
                      <p>
                      <input type="password" class="password" name="password" id="password" placeholder="Masukkan Password">
                      </p>
                      <button class="btn btn-login btn-block btn-success">LOGIN</button>
                    <div class="social-icons">
                      <p>Tidak punya akun? <a href="register.php">Daftar Disini </a>.</p>
                    </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //form section start -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script src="sweetalert.min.js"></script>

    <script>
      $(document).ready(function() {

        $(".btn-login").click( function() {
        
          var email = $("#email").val();
          var password = $("#password").val();

          if(email.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Eror!',
              text: 'Email Wajib Diisi !'
            });

          } else if(password.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Eror!',
              text: 'Password Wajib Diisi !'
            });

          } else {

            $.ajax({

              url: "cek-login.php",
              type: "POST",
              data: {
                  "email": email,
                  "password": password
              },

              success:function(response){

                if (response == "success") {

                  Swal.fire({
                    type: 'success',
                    title: 'Login Berhasil!',
                    text: 'Anda akan di arahkan dalam 3 Detik',
                    timer: 3000,
                    showCancelButton: false,
                    showConfirmButton: false
                  })
                  .then (function() {
                    window.location.href = "welcome.php";
                  });

                } else {

                  Swal.fire({
                    type: 'error',
                    title: 'Login Gagal!',
                    text: 'silahkan coba lagi!'
                  });

                }

                console.log(response);

              },

              error:function(response){

                  Swal.fire({
                    type: 'error',
                    title: 'Opps!',
                    text: 'server error!'
                  });

                  console.log(response);

              }

            });

          }

        });

      });
    </script>

  </body>
</html>