<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/Register_Page.css">
  </head>

  <body>
    <section>
      <div class="form-box">
        <div class="form-value">
          <form action="">
            <h2>Register</h2>
            <div class="inputbox">
              <ion-icon name="person-outline"></ion-icon>
              <input type="name" required>
              <label for="">Full Name</label>
            </div>
            <!-- <div class="forget">
              <label for="">
                <input type="radio"> Male
              </label>
              <label for="">
                <input type="radio"> Female
              </label>
              <ion-icon name="transgender-outline"></ion-icon>
            </div> -->
            
            <div class="inputbox">
              <ion-icon name="mail-outline"></ion-icon>
              <input type="email" required>
              <label for="">Email</label>
            </div>
            
            <div class="inputbox">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input type="password" required>
              <label for="">Password</label>
            </div>

            <button>Sign Up</button>
            <div class="register">
              <p>
                I already have an account
                <a href="test.php#">-> Log in</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>