<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>OilRig | Sign in & Sign up Form</title>
  </head>
  <body>
    <div id="error"></div>

    <!-- LOGO -->

    <!-- <h1 class="logo"><a href="../index.html">OILRIG</a></h1> -->

    <!-- SIGN-IN -->

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="/" method="GET" class="sign-in-form">
            <!-- SIGN_IN TITLE -->
            <h2 class="title" style="color: #4481eb">Sign in</h2>
            <!-- USERNAME -->
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input
                id="username-signin"
                name="username"
                type="text"
                placeholder="Username"
              />
            </div>
            <!-- PASSWORD -->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                id="password-signin"
                name="password"
                type="password"
                placeholder="Password"
              />
            </div>
            <!-- LOGIN BUTTON AND SOCIAL MEDIA -->
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          <!-- SIGN-UP -->

          <form action="#" class="sign-up-form" id="form">
            <!-- SIGN-UP TITLE -->
            <h2 class="title" style="color: #4481eb">Sign up</h2>
            <!-- USERNAME -->
            <div class="form-control">
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input
                  id="username-signup"
                  type="text"
                  placeholder="Username"
                />
                <i class="fas fa-check-circle icons"></i>
                <i class="fas fa-exclamation-circle icons"></i>
                <small>Error message</small>
              </div>
            </div>
            <!-- EMAIL -->
            <div class="form-control">
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input id="email" type="email" placeholder="Email" />
                <i class="fas fa-check-circle icons"></i>
                <i class="fas fa-exclamation-circle icons"></i>
                <small>Error message</small>
              </div>
            </div>
            <!-- PASSWORD -->
            <div class="form-control">
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input
                  id="password-signup"
                  type="password"
                  placeholder="Password must be atleast 8 characters"
                />
                <i class="fas fa-check-circle icons"></i>
                <i class="fas fa-exclamation-circle icons"></i>
                <small>Error message</small>
              </div>
            </div>
            <!-- PASSWORD CHECK -->
            <div class="form-control">
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input
                  id="password2-signup"
                  type="password"
                  placeholder="Re-type password"
                />
                <i class="fas fa-check-circle icons"></i>
                <i class="fas fa-exclamation-circle icons"></i>
                <small>Error message</small>
              </div>
            </div>
            <!-- SIGN-UP BUTTON AND SOCIAL MEDIA -->
            <button
              onclick="validation()"
              type="submit"
              value="submit"
              class="btn"
            >
              Sign Up
            </button>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1 class="logo">
              <a href="../index.php"
                ><img src="../oil rig watermark6.png" alt="OILRIG"
              /></a>
            </h1>
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h1 class="logo">
              <a href="../index.html"
                ><img src="../oil rig watermark6.png" alt="OILRIG"
              /></a>
            </h1>
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
