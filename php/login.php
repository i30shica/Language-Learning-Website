<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Ishica </title>
  <link rel="stylesheet" href="../css/login2.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <style>
      .test {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #ffffff;
      }

      .navbar {
        background-color: rgb(105, 64, 31);
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .navbar-brand {
        font-size: 24px;
        color: #ffffff;
        text-decoration: none;
      }

      .nav-links {
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
      }

      .nav-links li {
        margin: 0 15px;
      }

      .nav-links a {
        text-decoration: none;
        color: #ffffff;
        font-size: 18px;
      }

      .nav-links a:hover {
        text-decoration: underline;
      }
    </style>
  </head>

  </html>

</head>

<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="../images/login.jpg" alt>
      </div>
      <div class="back">
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login</div>
          <form action="../api/login.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="psw" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
          </form>
        </div>
        <div class="signup-form">
          <div class="title">Signup</div>
          <form action="api/signup.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="psw" placeholder="Enter your password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="cpsw" placeholder="Cofirm your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>