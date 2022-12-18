<html>
<head>
<link href="style.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="assets/css/tooplate-main.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Login</title></head>
<body>
  

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <a class="navbar-brand" href="index.php" style="margin: 30px;"><img class="image-logo" src="assets/images/header-logo.png" alt="logo"></a>
    </div>

    <!-- Login Form -->
    <form action="checkLoginData.php" method="POST">
      <input type="text" require id="email" class="fadeIn second" name="email" placeholder="email">
      <input type="text" require id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="register.php">Don't have an account?</a>
    </div>

  </div>
</div>
</body>
</html>