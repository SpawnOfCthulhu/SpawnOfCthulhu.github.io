<?php 

include('config/db_connect.php');

if(isset($_POST['submit']))
{
  $email = mysqli_real_escape_string($conn, $_POST['log_email']);
  $psw = mysqli_real_escape_string($conn, $_POST['log_psw']);
 

  $sql = "SELECT * FROM users WHERE email_address = '$email'";


  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $hashed_password_from_db = strval($row['user_password']);
  $name = strval($row['first_name']);
  

  if (password_verify($psw, $hashed_password_from_db)) {
    header('Location: index.php');

  } else {
    header('Location: login_fail.php');
  }

  session_start();
  $_SESSION['name'] = $name;

  mysqli_free_result($result);
  mysqli_close($conn);

  

}

?>

<!DOCTYPE html>
<html>
  <?php include('templates/header.php'); ?>
    <div class="main">
      <div class="login">
        <h2>Log-in</h2>
        <form id="login" action="login.php" method="POST">
          <label>Email Address</label>
          <br>
          <input type="text" name="log_email" id="info" placeholder="Enter Your Email Address" required>
          <br><br>
          <label>Password</label>
          <br>
          <input type="password" name="log_psw" id="info" placeholder="Enter Your Password" required>
          <br><br>
          <input type="submit" value="SUBMIT" name="submit" id="submit">
          <br><br>

          <div class="log_register">
            <p>Dont yet have an account? <a href="reg-form.php">Register</a>.</p>
          </div>
          
        </form>
      </div>
    </div>

  <?php include('templates/footer.php'); ?>
</html>