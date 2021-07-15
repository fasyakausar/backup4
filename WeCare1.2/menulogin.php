<!DOCTYPE html>
<html>
  <head>
    <title>Login WeCare!</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>

        <div class="col-lg-6 col-md-6 form-container">
          <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
            <div class="logo mb-3">
              <img src="image/logotelkom.png" width="150px" />
            </div>
            <div class="heading mb-4">
              <h4>Login WeCare</h4>
            </div>
            <form action="verifikasi_login.php" method="post">
              <div class="form-input">
                <span><i class="fa fa-envelope"></i></span>
                <input type="text" placeholder="E-mail" name="email" required />
              </div>
              <div class="form-input">
                <span><i class="fa fa-lock"></i></span>
                <input type="password" placeholder="Password"  name="kata_sandi" required />
              </div>
              <div class="row mb-3">
                <div class="col-6 d-flex">
                </div>
              </div>
              <div class="text-left mb-3">
                <button class="btn btn-primary" type="submit" name="login">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
