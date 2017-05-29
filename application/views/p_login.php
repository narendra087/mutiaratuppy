<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="<?php echo base_url().'p_control/login'?>">
      <input type="text" placeholder="username" name="uname" />
      <input type="password" placeholder="password" name="pass" />
      <button>login</button>
      <p class="message"><?php echo $err_message;?></p>
    </form>
  </div>
</div>
</body>
</html>
