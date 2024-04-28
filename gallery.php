<?php
$page = "gallery";
 include 'header.php';?>
<div class="container">

       <h1 class="title">Gallery</h1>
       <div class="row gallery">

              <?php
                require_once('db.php');
                $q = "SELECT * FROM rooms ORDER BY rooms.id ASC";
                $run = mysqli_query($con, $q);
                $count = 0;
                if(mysqli_num_rows($run) > 0){
                    while($row = mysqli_fetch_array($run)){
              ?>

              
       </div>
</div>
<?php include 'footer.php';?>
