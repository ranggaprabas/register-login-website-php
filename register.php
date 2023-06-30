<!doctype html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="Register Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <title>Register Akun</title>
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
                <img src="images/image2.svg" alt="">
                </div>
                </div>
              <div class="content-wthree">
                <h2>Register</h2>
                <p>Silakan mendaftar untuk akun anda. </p>
                        <p>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
                        </p>
                        <p>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Email">
                        </p>
                        <p>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                        </p>
                        <button class="btn btn-register btn-block btn-success">REGISTER</button>
                      <div class="social-icons">
                        <p>Punya akun? <a href="index.php"> Masuk Disini </a>.</p>
                      </div>
              </div>
          </div>
        </div>
      </div>
  </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script src="sweetalert.min.js"></script>


    <script>
      $(document).ready(function() {

        $(".btn-register").click( function() {
        
          var username = $("#username").val();
          var email = $("#email").val();
          var password = $("#password").val();

          if (username.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Eror!',
              text: 'Username Wajib Diisi !'
            });

          } else if(email.length == "") {

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

            //ajax
            $.ajax({

              url: "simpan-register.php",
              type: "POST",
              data: {
                  "username": username,
                  "email": email,
                  "password": password
              },

              success:function(response){

                if (response == "success") {

                  Swal.fire({
                    type: 'success',
                    title: 'Register Berhasil!',
                    text: 'silahkan login!'
                  });

                  $("#username").val('');
                  $("#email").val('');
                  $("#password").val('');

                } else {

                  Swal.fire({
                    type: 'error',
                    title: 'Register Gagal!',
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
              }

            })

          }

        }); 

      });
    </script>

  </body>
</html>