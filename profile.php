<?php include "include/header.php";?>

<h1 class ="welcome">  Account  </h1>

<div class="grid-profile">
          <div class="grid-item">
            <?php
            $result = mysqli_query($con, 'SELECT age FROM users WHERE username="'.$_SESSION['username'].'"') or die ("could not connect to mysql");
            echo $result;

            echo "<h3>".$_SESSION['username']."</h3>";
            echo "<p>Age: " . $result . "</p>";
             ?>
          </div>

</div>

<?php include "include/footer.php";?>
</body>
</html>
