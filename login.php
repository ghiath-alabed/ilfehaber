<?php
include_once 'includes/dbh.inc.php';

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if user exists
    $sql = "SELECT * FROM User WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // User exists, continue and navigate to the index
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        header("Location: index.php?id=$id");
        exit();
    } else {
        // User doesn't exist, show error message
        $errorMessage = "Username or password doesn't match.";
        echo "<script>console.log('Debug Objects: " . $errorMessage . "' );</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/form.css">
  </head>

  <body>
    <section>
      <form method="POST">
        <div class="form-box">
          <div class="form-value">
            <form action="">
              <h2>Login</h2>
              <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email" required>
                <label for="">Email</label>
              </div>
              
              <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password" required>
                <label for="">Password</label>
              </div>
              
              <div class="forget">
                <label for="">
                  <input type="checkbox"> Remember <a href="#">Forget Password</a>
                </label>
              </div>
              <input class="button" type="submit" name="submit" value="Log in">
              <div class="register">
                <p>
                  Don't have an account
                  <a href="register.php#">Register</a>
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