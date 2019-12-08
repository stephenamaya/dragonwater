<?php include "include/header.php";?>

<h1 class ="welcome">
 SIGN UP
</h1>
<?php
$nameError = "";
$passwordError = "";
$ageError = "";

if(isset($_POST['submit'])){
 $user = mysqli_real_escape_string($con, $_POST["username"]);
 $password = mysqli_real_escape_string($con, ($_POST["password"]));
 $age = mysqli_real_escape_string($con, $_POST["age"]);
 $sql = 'SELECT * FROM users WHERE username="' . $user . '" LIMIT 1'; //Check to see if account already exists
 $result = mysqli_query($con, $sql)or die ("could not connect to mysql"); //store results of query in $result var
 $success = true;
  if (mysqli_num_rows($result) == 1){
    $nameError = "Username already exists!";
    $success = false;
  }if(!$user){
    $nameError = "Enter a username!";
    $success = false;
  }if(!$password){
    $passwordError = "Enter a password!";
    $success = false;
  }if(strlen($age) >= 3){
    $ageError = "Enter a valid age!";
    $success = false;
  }if(!$age){
    $ageError = "Enter a valid age!";
    $success = false;
  }else{
    if($success){
      $password = sha1($password);
      $sql = "INSERT INTO users (username,password,age) VALUES('$user','$password','$age')"; //prepare to add stats to database table
      mysqli_query($con, $sql) or die ("could not connect to mysql"); //run the query
      echo "<h3>Account successfully created. Enjoy our members exclusive flavors!</h3>";
      $_SESSION['username'] = $user;
       header( "refresh:5;url=store.php" ); //Takes user to loggedin in 3 secs
    }
  }
}
?>









<br><br>
<p>Fill in the fields to create an account.</p><br>
<form action="" method = "POST">
<p><input type="text" placeholder="Create a username" name = "username"></p>
<p class="error"><?php echo $nameError;?></p>
<p><input type="password" placeholder="Create a password" name = "password"></p>
<p class="error"><?php echo $passwordError;?></p>
<p><input type="text" placeholder="Enter your age" name = "age"></p>
<p class="error"><?php echo $ageError;?></p>
<p><input type="submit" name = "submit" value="Create!" ></p>
</form>
<?php include "include/footer.php";?>
