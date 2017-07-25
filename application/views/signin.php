<!DOCTYPE html>
<html>
  <head>
    <title>Sign in Codeigniter</title>
    <meta charset="utf-8">
  </head>

  <body>
    <?php echo validation_errors(); ?>

    <h1>Sign in</h1>

    <?php echo form_open('List_Test'); ?>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="textinput"> <br>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="textinput"> <br>
      <input type="submit" name="signin_submit" id="signin_submit" class="submit"> <br>
    </form>

    <a href="<?php echo base_url('List_Test/signup') ?>">Sign up</a>
  </body>

</html>
