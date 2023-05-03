<?php

  include('config/db_connect.php');
  $errors = array('email'=>'','psw'=>'');

 

  if(isset($_POST['submit']))
  {
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'Email must be a valid address e.g. you@yourdomain.com .';
    }

    $psw = $_POST['psw'];
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z.!@#$%]{8,20}$/', $psw)){
      $errors['psw'] = 'Password must be alphanumeric. (., !, @, #, $ and % characters are also allowed) and must be between 8 - 20 characters.';
    }

    if(array_filter($errors)){
      
    }else{
      $fname = mysqli_real_escape_string($conn, $_POST['fname']);
      $lname = mysqli_real_escape_string($conn, $_POST['lname']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $psw = mysqli_real_escape_string($conn, $_POST['psw']);

      // Hash the password using bcrypt
      $hashed_password = password_hash($psw, PASSWORD_BCRYPT);

      //create sql
      $sql = "INSERT INTO users(first_name, last_name, email_address, user_password) VALUES('$fname', '$lname', '$email', '$hashed_password')";

      //save to db and check
      if(mysqli_query($conn, $sql)){
        //success
        header('Location: index.php');
      }else{
        //error
        echo 'query error: ' . mysqli_error($conn);
      }
    }

  }

?>
<!DOCTYPE html>
<html>
  <?php include('templates/header.php'); ?>

    <div class="main">
      <div class="register">
        <h2>Register</h2>
        <form id="register" action="reg-form.php" method="POST">
          <label>First Name</label>
          <br>
          <input type="text" name="fname" id="info" placeholder="Enter Your First Name" required>
          <br><br>
          <label>Last Name</label>
          <br>
          <input type="text" name="lname" id="info" placeholder="Enter Your Last Name" required>
          <br><br>
          <label>Email Address</label>
          <br>
          <input type="text" name="email" id="info" placeholder="Enter Your Email Address" required>
          <div class="red-text"><?php echo $errors['email']; ?></div>
          <br>
          <label>Password</label>
          <br>
          <input type="password" name="psw" id="info" placeholder="Enter Your Password" required>
          <div class="red-text"><?php echo $errors['psw']; ?></div>
          <br>
          <p>By creating an account you agree to our <a href="placeholder.php">Terms & Privacy</a>.</p>
          <br><br>
          <input type="submit" value="SUBMIT" name="submit" id="submit">
          <br><br>

          <div class="signin">
            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
          </div>
          
        </form>
      </div>
    </div>

  <?php include('templates/footer.php'); ?>
</html>

