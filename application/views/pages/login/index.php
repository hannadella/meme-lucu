<!DOCTYPE html>
<html lang="en">

<head>
  <title>LOGIN MEME</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view("components/stylesheets") ?>
</head>

<body>
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/uw.jpg');">
      <div class="wrap-login100">
        <?= form_open("auth/login", ["class" => "login100-form validate-form"]) ?>
        <span class="login100-form-logo">
          <i class="zmdi zmdi-landscape"></i>
        </span>

        <span class="login100-form-title p-b-34 p-t-27">
          Log in
        </span>

        <div class="wrap-input100 validate-input" data-validate="Enter username">
          <input class="input100" type="text" name="username" placeholder="Username">
          <span class="focus-input100" data-placeholder="&#xf207;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Enter password">
          <input class="input100" type="password" name="password" placeholder="Password">
          <span class="focus-input100" data-placeholder="&#xf191;"></span>
        </div>

        <div class="contact100-form-checkbox">
          <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
          <label class="label-checkbox100" for="ckb1">
            Remember me
          </label>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Login
          </button>
        </div>

        <div class="text-center p-t-90">
          <a class="txt1" href="#">
            Forgot Password?
          </a>
        </div>
        <div class="text-center p-t-10">
          <a class="txt1" href="#">
            Sign-up?
          </a>
        </div>
        </form>
      </div>
    </div>
  </div>

  <?php $this->load->view("components/scripts") ?>
</body>

</html>