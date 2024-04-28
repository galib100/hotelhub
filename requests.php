<?php 
session_start();
    require_once('db.php');
    
    if (strlen($_SESSION['username']== 0)) {
        header("Location:logout.php");
      }
      else {
      
    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $q = "DELETE FROM rooms WHERE rooms.id = $del";
        $run = mysqli_query($con, $q);
    }

?>
<?php
    require_once('db.php');
    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $q = "DELETE FROM requests WHERE requests.id = $del";
        $run = mysqli_query($con, $q);
    }
    if(isset($_GET['delete'])){
        $delete = $_GET['delete'];
        $q1 = "DELETE FROM hostel WHERE hostel.id = $delete";
        $run1 = mysqli_query($con, $q1);
    }
?>
  </head>
  <body>
    <div id="wrapper">
<?php require_once('header-admin.php');?>

        <div class="container-fluid body-section container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-square"></i> All Requests <small>Watch or Delete Request</small></h2>
<form class="" method="post">


                    <select class="form-control" name="find">
                      <option value="Home">Home or Hostel</option>
                      <option value="hotel">Hotel</option>
                    </select>
                    <input type="submit" name="search" value="search">
</form>
                    <?php

                    if (isset($_POST['search'])) {
                      $select = $_POST['find'] ;
                    if($select === "hotel"){

                    ?>

                    <div class="card">
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead class="text-danger">
                                    <th><center>ID</center></th>
                                    <th><center>Name</center></th>
                                    <th><center>Email</center></th>
                                    <th><center>Phone</center></th>
                                    <th><center>Date</center></th>
                                    <th><center>Adults</center></th>
                                    <th><center>Rooms</center></th>
                                    <th><center>Message</center></th>
                                    <th><center>Delete</center></th>
                                </thead>
                                <tbody>
                                    <?php
                                        $q = "SELECT * FROM requests ORDER BY requests.id ASC";
                                        $run = mysqli_query($con, $q);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_array($run)){

                                    ?>
                                    <tr>
                                        <td><center><?php echo $row['id']; ?></center></td>
                                        <td><center><?php echo $row['name']; ?></center></td>
                                        <td><center><?php echo $row['email']; ?></center></td>
                                        <td class="text-primary"><center><?php echo $row['phone']; ?></center></td>
                                        <td><center><?php echo $row['day']."-".$row['month']."-".$row['year']; ?></center></td>
                                        <td><center><?php echo $row['adults']; ?></center></td>
                                        <td><center><?php echo $row['rooms']; ?></center></td>
                                        <td><center><?php echo $row['message']; ?></center></td>
                                        <td><center><a href="requests.php?del=<?php echo $row['id']; ?>"><i class="fa fa-times"></i></a></center></td>
                                    </tr>
                                    <?php
                                            }

                                        }
                                    ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                  <?php }
                  else { ?>
                    <div class="card">
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead class="text-danger">
                                    <th><center>ID</center></th>
                                    <th><center>Name</center></th>
                                    <th><center>Email</center></th>
                                    <th><center>Phone</center></th>
                                    <th><center></center></th>
                                    <th><center>Message</center></th>
                                    <th><center>Delete</center></th>
                                </thead>
                                <tbody>
                                    <?php
                                        $q = "SELECT * FROM hostel ORDER BY hostel.id ASC";
                                        $run = mysqli_query($con, $q);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_array($run)){

                                    ?>
                                    <tr>
                                        <td><center><?php echo $row['id']; ?></center></td>
                                        <td><center><?php echo $row['name']; ?></center></td>
                                        <td><center><?php echo $row['email']; ?></center></td>
                                        <td class="text-primary"><center><?php echo $row['number']; ?></center></td>
                                        <td><center><?php echo $row['location']; ?></center></td>
                                        <td><center><?php echo $row['message']; ?></center></td>
                                        <td><center><a href="requests.php?delete=<?php echo $row['id']; ?>"><i class="fa fa-times"></i></a></center></td>
                                    </tr>
                                    <?php
                                            }

                                        }
                                    ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                  <?php }
                }
                ?>


                </div>
            </div>
        </div>
 <?php
}
 ?>
<?php require_once('footer-admin.php');?>
