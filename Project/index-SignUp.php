<?php

//The Sign up form 

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Forms</title>  
  <link rel="stylesheet" href="style.css"> <!--linking the css file-->

<body>

    <div class="container">
        <h2>Registrations</h2>
        <form action="controler.php" method="post">
            <div class="form-group">
                <label for="first name">First Name:</label>
                <input type="text" name="firstname" id="firstname" required>
            </div>
            <div class="form-group">
                <label for="last name">Last Name:</label>
                <input type="text" name="lastname" id="lastname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="submit" value="REGISTER"  style="margin-top: 20px;">
        </form>
    </div>

</body>
</html>
