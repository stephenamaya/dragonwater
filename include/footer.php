<footer>
<br>
<br>
<br>
<br>
<p>Dragonwater, Copyright &copy;<?php echo date("Y"); echo "</p>";

$img = imagecreatefrompng('img/icon.png');
imagefilter($img, IMG_FILTER_GRAYSCALE);
//imagepng($img, 'img/icon.png');
 ?>

<img src="img/icon.png" class="img-footer" alt="dragonwater icon" height="50" width="50" style="margin-left:auto; margin-right:auto; display:block; border-radius: 50%;">

</footer>
