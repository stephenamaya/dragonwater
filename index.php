<?php include "include/header.php";?>


<h1 class ="welcome">
  DRAGON WATER
</h1>

<br><br><br>

<p>
  Dragon water is water in a can, yo.
</p>

<div id="carousel" style="width:20%;margin: auto; ">
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

<div class="overview" style="width:75%;margin: auto; ">
  <h3>What are we?</h3>
  <p>Dragon water is all about the environment and your health. Dragon water
    is a 0 waste and 0 calories drink. Cruelity free and not tested on animals.
    Our water is 100% vegan unlike our competitors. Canned water is not only better to recycle,
    our water will not contain by products of the plastics used for bottled water.</p>
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
  setTimeout(carousel, 2000);
}
</script>
