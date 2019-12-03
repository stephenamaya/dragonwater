<?php include "include/header.php";?>

<h1 class ="welcome">
  SIGN UP
</h1>
<?php
if(isset($_POST['submit'])){
  $user = mysqli_real_escape_string($con, $_POST["username"]);
  $password = mysqli_real_escape_string($con, ($_POST["password"]));
  $age = mysqli_real_escape_string($con, $_POST["age"]);


  $sql = 'SELECT * FROM users WHERE username="' . $user . '" LIMIT 1'; //Check to see if account already exists
  $result = mysqli_query($con, $sql)or die ("could not connect to mysql"); //store results of query in $result var

  if (mysqli_num_rows($result) == 1){	//If at least one result
    $nameError = "Username already exists!";
  }elseif(!$user){
    $nameError = "Enter a username!";
  }elseif(!$password){
    $passwordError = "Enter a password!";
  }elseif(strlen($age) >= 3){
    $ageError = "Enter a valid age!";
  }else{
    //If new account
    $password = sha1($password);
    $sql = "INSERT INTO users (username,password,age) VALUES('$user','$password','$age')"; //prepare to add stats to database table
    mysqli_query($con, $sql) or die ("could not connect to mysql"); //run the query
    echo "Account successfully created. Log in to get started! You will be redirected to the login page in 5 seconds.";
    $_SESSION['username'] = $user;
    header("Refresh: 3; url=index.php"); //Takes user to login page in 3 secs
  }
}
?>









<br><br>
<p>Fill in the fields to create an account.</p><br>
<form action="" method = "POST">
<p><input type="text" placeholder="Create a username" name = "username"></p>
<span class="error"><?php echo $nameError;?></span>
<p><input type="password" placeholder="Create a password" name = "password"></p>
<span class="error"><?php echo $passwordError;?></span>
<p><input type="text" placeholder="Enter your age" name = "age"></p>
<span class="error"><?php echo $passwordError;?></span>
<p><input type="submit" name = "submit" value="Create!" ></p>
</form>
