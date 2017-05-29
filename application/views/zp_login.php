<head>
  <title>Login</title>
    <style type="text/css">
       table{
           position: absolute;
           height: 100px;    
           top: 50%;    
           left: 50%;    
           margin: -100px 0 0 -150px;   
        }

    </style> 
</head> 
<body>
  <form method="post" action="<?php echo base_url().'index.php/p_control/login'?>">
  <table>
  	<tr>
  		<td></td>
  		<td><pre>Login Admin : </pre></td>
    <tr>
         <td><pre>Username</pre></td>    
         <td><pre><input type="text" name="uname"></pre></td>   
    </tr>   
    <tr>
        <td><pre>Password</pre></td>
        <td><pre><input type="password" name="pass"></pre></td>   
    </tr>   
    <tr>
        <td></td>
        <td><pre><input type="submit" value="LOGIN"></pre></td>
    </tr>
    <tr><pre><td colspan="2" style="color: red"><?php echo $err_message;?></pre></td>   
    </tr>
  </table>
  </form> 
</body>