<?php include "include/header.php";?>


<h1 class ="welcome">
  DRAGON WATER
</h1>

<br><br><br>

<p>
  Dragon water is water in a can, yo.
</p>

<div class="carousel" style="width:20%;margin: auto; ">
  <div class="mySlides">
    <img src="img/raspberry.png" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="img/lemon.png" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="img/kiwi.png" class = "watercan" style="width:100%">
  </div>
</div>
</body>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 9000);
}
</script>
