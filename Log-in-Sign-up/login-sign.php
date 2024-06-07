<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Green Unity Sign in & Sign up Form</title>
    <link rel="stylesheet" href="login-sign.css" />
    <link rel="icon" href="../Index/Green Unity Logo.png">
  </head>
  <body>
    <main>
      <div class="full-page-container">
        <img src="forest.jpg" alt="Environment Image" class="login__img" />
      </div>

      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <!-- Sign In Form -->
            <form action="process_login.php" autocomplete="off" class="sign-in-form" method="POST">
              <div class="logo">
                <a href="../Index/index-L.php">
                <img src="../Index/Green Unity Logo.png" alt="Green Unity Logo"/></a>
                <h4>Green<span>UNITY</span></h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registered yet?</h6>
                <a href="#" class="toggle">Create an account</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input type="email" name="email" class="input-field" autocomplete="off" required/>
                  <label for="input-text" class="email">Email</label>
                </div>

                <div class="input-wrap">
                  <input type="password" name="password" minlength="4" class="input-field" autocomplete="off" required/>
                  <label for="input-pass" class="pass-label">Password</label>
                </div>

                <div class="login__check">
                  <input type="checkbox" class="login__check-input" id="input-check"/>
                  <label for="input-check" class="login__check-label">Remember Me</label>
                </div>

                <input type="submit" name="loginBtn" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or your login details?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>
   
            <!-- Sign Up Form -->
            <form action="process_signup.php" autocomplete="off" class="sign-up-form" method="POST">
              <div class="logo">
                <a href="../Index/index-L.php">
                <img src="../Index/Green Unity Logo.png" alt="Green Unity Logo" /></a>
                <h4>Green<span>UNITY</span></h4>
              </div>

              <div class="heading">
                <h2>Join Green Unity</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input type="text" minlength="4" class="input-field" name="name" autocomplete="off" required/>
                  <label for="input-text" class="text-label">Name</label>
                </div>

                <div class="input-wrap">
                  <input type="email" class="input-field" name="email" autocomplete="off" required/>
                  <label for="input-email" class="email-label">Email</label>
                </div>

                <div class="input-wrap">
                  <input type="password" minlength="4" name="password" class="input-field" autocomplete="off" required/>
                  <label for="input-pass" class="pass-label">Password</label>
                </div>

                <input type="submit" value="Sign Up" name="signBtn" class="sign-btn"/>

                <p class="text">
                  By signing up, I agree to the
                  <a href="Terms.php">Terms & Conditions</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="image1.png" class="image img-1 show" alt="" />
              <img src="image2.png" class="image img-2" alt="" />
              <img src="image3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                 <h2>Join Our Green Initiatives</h2>
                 <h2>Contribute to a Sustainable Future</h2>
                <h2>Engage in Environmental Activities</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->
    <script src="login-sign.js"></script>
  </body>
</html>