<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ISAA-da3:Mohit</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
     <?php
      $conn = mysqli_connect("localhost","root","mohit95","isaaDa3");
      $passk = mysqli_query($conn, "SELECT * FROM users");
      $qts = mysqli_query($conn, "SELECT * FROM purchase");
      $result = mysqli_query($conn, "SELECT * FROM passkeys");
     ?>
     <form class="" name="form1" method="get">
       <table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
         <tr class="tableheader">
           <td align="center" colspan="2">Login Page</td>
         </tr>
         <tr class="tablerow">
           <td><input type="text" name="username" placeholder="USER-NAME" class="login-input" /></td>
         </tr>
         <tr class="tablerow">
           <td><input type="password" name="password" placeholder="PASSWORD" class="login-input" /></td>
         </tr>
         <tr class="tableheader">
           <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"</td>
         </tr>
       </table>
     </form>
     <?php
      $pass = $_GET['password'];
      $user = $_GET['username'];
      $result = mysqli_query($conn,'SELECT * FROM users WHERE username=" '.$user.'";');
      while($row = mysqli_fetch_assoc($result)){
        if($pass==$row['password']){
          echo '<br>Welcome!';
        }else{
          echo '<br>Invalid Credentials!!';
        }
      }
     ?>
  </body>
</html> -->









<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
$conn = mysqli_connect("localhost","root","mohit95","isaaDa3");
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
 $query = "SELECT * FROM `users` WHERE username='$username'
and password='$password'";
$result = mysqli_query($conn,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);
 if($rows==1){
   echo '<br>Welcome!';
   echo $_SESSION["username"];
 }else{
echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
}
 }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password"
required />
<input name="submit" type="submit" value="Login" />
</div>
<?php } ?>
</body>
</html>
