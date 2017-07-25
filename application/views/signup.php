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
      <input type="text" name="username" id="username" class="textinput" placeholder="Username"> <br>

      <input type="password" name="password" id="password" class="textinput" placeholder="Password"> <br>

      <input type="password" name="passconf" id="passconf" class="textinput" placeholder="Password Confirm"> <br>

      <input type="email" name="email" id="email" class="textinput" placeholder="Email"><br>

      <input type="tel" name="phonenumber" id="phonenumber" class="textinput" placeholder="Phone number"><br>
      <input type="submit" name="signup_submit" id="signup_submit" class="submit"> <br>
    </form>

    <?php echo validation_errors(); ?>

  </body>

</html>
