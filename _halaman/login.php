<?php

require '../_helpers/helper.php';

if (isset($_POST["login"])) {
    $username = $_POST["username_user"];
    $password = $_POST["password_user"];

    $result = mysqli_query($db, "SELECT * FROM tb_users WHERE username_user = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password_user"])) {
            header("Location:index.php");
            exit;
        }
    }
}
;

?>

<!DOCTYPE html>
<html>

<head>
  <title>SPK B.I Topsis Login</title>
  <link rel="stylesheet" type="text/css" href="../_assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <img class="wave" src="../_assets/img/wave.png">
  <div class="container">
    <div class="img">
      <img src="../_assets/img/bg.svg">
    </div>
    <div class="login-content">
      <form action="index.php">
        <img src="../_assets/img/avatar.svg">
        <h2 class="title">Welcome</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Username</h5>
            <input type="text" class="input" name="username_user" id="username_user">
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input type="password" class="input" name="password_user" id="password_user">
          </div>
        </div>
        <a href="#">Forgot Password?</a>
        <input type="submit" class="btn" name="login" value="Login">
      </form>
    </div>
  </div>
  <script type="text/javascript" src="../_assets/js/main.js"></script>
</body>

</html>