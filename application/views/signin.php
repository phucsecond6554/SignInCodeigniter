<!DOCTYPE html>
<html>
  <head>
    <title>Sign in Codeigniter</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>"
  </head>

  <body>
    <?php echo validation_errors(); ?>




      <form action="<?php echo base_url('List_Test/signin') ?>" method="post">
        <h1>Sign in</h1>
        <input type="text" name="username" id="username" class="textinput" placeholder="Username"> <br>

        <input type="password" name="password" id="password" class="textinput" placeholder="Password"> <br>
        <input type="submit" name="signin_submit" id="signin_submit" class="submit"> <br>
        <a class="btn" href="<?php echo base_url('List_Test/signup') ?>">Sign up</a>
      </form>


  </body>

</html>
