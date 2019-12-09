<?php include "include/header.php";?>

<h1 class ="welcome">
  STORE
</h1>
<br><br><br><br>

<?php
if(isset($_SESSION['username'])){
  $result = mysqli_query($con, 'SELECT age FROM users WHERE username="'.$_SESSION['username'].'"') or die ("could not connect to mysql");
  if(mysqli_num_rows($result) > 0 ){
     while ($row = mysqli_fetch_array ($result)) {
       if($row["age"]>=21){
         echo "<p>Since you are over 21, all our Dragon Water products now of the option to contain alcohol!</p>";
       }
     }
  }
}

 ?>
<br>
<br>
<div class="storegrid">
	<div class = "column">
   <img src="img/kiwi.png" class = "watercan">
	<h3>Kiwi</h3>
	</div>

	<div class = "column">
   <img src="img/lemon.png" class = "watercan">
	 <h3>Lemon</h3>
	</div>

	<div class = "column">
	 <img src="img/raspberry.png" class = "watercan">
	 <h3>Raspberry</h3>
	</div>

</div>
<?php
if(isset($_SESSION['username'])){
  echo "<br>";
  echo "<hr width='50%';>";
  echo "<br>";
echo "<div class='storegrid'>
	<div class = 'column'>
   <img src='img/darkKiwi.png' class = 'watercan'>
	<h3>Dark Kiwi</h3>
	</div>

	<div class = 'column'>
   <img src='img/darkLemon.png' class = 'watercan'>
	 <h3>Dark Lemon</h3>
	</div>

	<div class = 'column'>
	 <img src='img/darkRaspberry.png' class = 'watercan'>
	 <h3>Dark Raspberry</h3>
	</div>";


}
?>
<br>
<?php include "include/footer.php";?>
