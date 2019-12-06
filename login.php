<?php include "include/header.php";?>

<h1 class ="welcome">
  LOG IN
</h1>

<?php
  for($i=0;$i<4;$i++){
    echo '<br>';
  }
 ?>

<?php
if(!isset($_SESSION['username'])):
  if(isset($_POST['submit'])){

    $user = mysqli_real_escape_string($con, $_POST["username"]);
    $password = mysqli_real_escape_string($con, sha1($_POST["password"]));
    echo $user.$password;
    $result = mysqli_query($con, 'SELECT * FROM users WHERE username="'.$user.'" and password="'.$password.'"') or die ("could not connect to mysql");
    if(mysqli_num_rows($result)==1){
      $_SESSION['username'] = $user;
      header('Location: index.php');
    }
    else {
      echo "<script type='text/javascript'>alert('Incorrect username or password');</script>";

    }
}

?>
<form action="" method = "POST">
<p><input type="text" placeholder="Your username" name = "username" minlength="3"></p>
<p><input type="password" placeholder="Your password" name = "password"></p>
<p><input type="submit" name = "submit" value="Login!" ></p>
</form>

<?php
  else:
  header("Location: index.php");
  endif;
  require 'include/footer.php';
?>
