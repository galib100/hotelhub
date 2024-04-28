<?php
$page = "rooms";
include 'header.php';?>

<div class="container">

<h2>Rooms &amp; Tariff</h2>


<!-- form -->

<div class="row">
  <form style="padding:20px"  method="post">
    <select class="" name="select">
      <option value="">Chosse a option</option>
      <option value="hostel">Hostel</option>
      <option value="hotel">Hotel</option>
      <option value="home">Home</option>
    </select>
    <input class="btn btn-primary" style="margin-top:10px" type="submit" name="search" value="Search">
  </form>

  <?php
    require_once('db.php');

     $q = "SELECT * FROM rooms";

  if(isset( $_POST['search'])){

$select = $_POST['select'];
if($select == ""){ ?>
<p style="color:red " class="text-center"> <?php
  echo "!! Please Select One !!";?> </p>
  <?php
}
$q = "SELECT * FROM rooms WHERE type= '$select'; ";

}
    $run = mysqli_query($con, $q);
    $count = 0;
    if(mysqli_num_rows($run) > 0){
        while($row = mysqli_fetch_array($run)){
  ?>

  <div class="col-sm-6 wowload fadeInUp">
      <div class="rooms">
          <img src="images/photos/<?php echo $row['image1']; ?>" class="img-responsive">
          <div class="info">
              <h3><?php echo $row['title']; ?></h3>
              <p style="color: darkgreen;"> Size: <?php echo $row['size']; ?> sq. feet<br> Per Night: <?php echo $row['price']; ?> Taka Only</p>
              <a href="room-details.php?id=<?php echo $row['id']; ?>" class="btn btn-default">Check Details</a>
              <button class="btn btn-primary pull-right" type="button" name="button"><?php echo $row['type']; ?></button>
          </div>
      </div>
  </div>
  <?php
        }
    }

  ?>


</div>


</div>
<?php include 'footer.php';?>
