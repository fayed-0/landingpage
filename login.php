<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles_login.css" />
    <title>Web Design Mastery | Welcome Back</title>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <h1>Welcome Back</h1>
        <p>Please enter your details.</p>
        <form action="/">
          <div class="input__group">
            <label for="email">E-mail</label>
            <input type="email" placeholder="Enter your e-mail" />
          </div>
          <div class="input__group">
            <label for="password">Password</label>
            <input type="password" placeholder="Enter your password" />
          </div>
          <div class="actions">
            <div>
              <input type="checkbox" />
              <span>Remember me</span>
            </div>
            <a href="#">Forgot your password?</a>
          </div>
          <button type="button" onclick="window.location.href='http://localhost/resident/index.php'">Log In</button>
          </form>
                </form>
        <p>Don't have an account? <a href="http://localhost/landingpage/register.php">Register here</a></p>
      </div>
    </div>
  </body>
</html>