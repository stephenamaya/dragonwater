<?php include "include/header.php";?>

<h1 class ="welcome">
  STORE
</h1>
<br><br><br><br>



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
