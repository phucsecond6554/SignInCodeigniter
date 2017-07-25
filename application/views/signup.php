<!DOCTYPE html>
<html>
  <head>
    <title>Sign up Codeigniter</title>
    <meta charset="utf-8">
  </head>

  <body>
    <h1>Sign up</h1>

    <form action="<?php echo base_url('List_Test/signup') ?>" method="post">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="textinput"> <br>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="textinput"> <br>

      <label for="passconf">Password Confirm</label>
      <input type="password" name="passconf" id="passconf" class="textinput"> <br>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="textinput"><br>

      <label for="phonenumber">Phone Number</label>
      <input type="tel" name="phonenumber" id="phonenumber" class="textinput"><br>
      <input type="submit" name="signup_submit" id="signup_submit" class="submit"> <br>
    </form>

    <?php echo validation_errors(); ?>

  </body>

</html>
