<?php include "include/header.php";
if(isset($_SESSION['username'])):
  ?>
<h1 class ="welcome">  Account  </h1>

<div class="grid-profile">
          <div class="grid-item">
            <?php
            $result = mysqli_query($con, 'SELECT age FROM users WHERE username="'.$_SESSION['username'].'"') or die ("could not connect to mysql");
        //    $row = $result->fetch_array(MYSQLI_NUM);
            echo "<h3>".$_SESSION['username']."</h3>";
            if(mysqli_num_rows($result) > 0 ){
               while ($row = mysqli_fetch_array ($result)) {
                  echo "<p>Age: " . $row["age"] . "</p>";
              }
            }
             ?>
          </div>

</div>
<?php else:
header('Location: index.php');
endif;?>

<?php include "include/footer.php";?>
</body>
</html>
