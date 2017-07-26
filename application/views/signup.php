<!DOCTYPE html>
<html>
  <head>
    <title>Sign up Codeigniter</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>"
  </head>

  <body>


    <form action="<?php echo base_url('List_Test/signup') ?>" method="post">
      <h1>Sign up</h1>
      <input type="text" name="username" id="username" class="textinput" placeholder="Username"
      value="<?php echo set_value('username'); ?>"> <br>

      <input type="password" name="password" id="password" class="textinput" placeholder="Password"
      value="<?php echo set_value('password') ?>"> <br>

      <input type="password" name="passconf" id="passconf" class="textinput" placeholder="Password Confirm"
      value="<?php echo set_value('passconf') ?>">> <br>

      <input type="email" name="email" id="email" class="textinput" placeholder="Email"
      value="<?php echo set_value('email') ?>">><br>

      <input type="tel" name="phonenumber" id="phonenumber" class="textinput" placeholder="Phone number"
      value="<?php echo set_value('phonenumber') ?>">><br>
      <input type="submit" name="signup_submit" id="signup_submit" class="submit"> <br>
    </form>

    <?php echo validation_errors(); ?>

  </body>

</html>
