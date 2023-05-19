<?php

include_once 'includes/dbh.inc.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO User(username, email, password) values ('$name', '$email' ,'$password')";
    mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);

    header("Location: index.php?id=$id");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="icon" href="css/images/icon.png" type="image/x-icon">
  </head>

  <body>
    <section>
      <form method="POST">
        <div class="form-box">
          <div class="form-value">
            <form action="">
              <h2>Register</h2>
              <div class="inputbox">
                <ion-icon name="person-outline"></ion-icon>
                <input name="name" type="name" required>
                <label for="">Full Name</label>
              </div>
              
              <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input name="email" type="email" required>
                <label for="">Email</label>
              </div>
              
              <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input name="password" type="password" required>
                <label for="">Password</label>
              </div>

              <input class="button" type="submit" name="submit" value="Sign Up">
              <div class="register">
                <p>
                  I already have an account
                  <a href="login.php#"> > Log in <</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </form>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>