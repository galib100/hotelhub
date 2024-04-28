<?php
$page="home";
 include 'header.php';
      
?>
<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
  <!-- youtube_SECTION -->

    <!-- <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/5u1WISBbo5I" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div> -->
    <div class="">
    <p class="p-2" style="font-size: 20px">  Reservation Home and hostel </p>
    <?php
    require_once('db.php');
    $error1 = "";
    $color1 = "red";
    if(isset($_POST['submit1'])){
        $name1 = mysqli_real_escape_string($con,$_POST['name1']);
        $email1 = mysqli_real_escape_string($con,$_POST['email1']);
        $phone1 = mysqli_real_escape_string($con,$_POST['phone1']);
        $location1 = mysqli_real_escape_string($con,$_POST['location1']);
        $message1 = mysqli_real_escape_string($con,$_POST['message1']);
        $type1 = $_POST['type1'];

        if(empty($name1) or empty($email1) or empty($phone1) or empty($message1)or $type1=="no"){
            $error1 = "All Feilds Required, Try Again";
        }
        else{
            $insert_query1 = "INSERT INTO `hostel`(`name`, `email`, `number`,`location`,`message`,`type`) VALUES ('$name1','$email1','$phone1','$location1','$message1','$type1');";
            if(mysqli_query($con, $insert_query1)){
                $error1 = "We've got your request";
                $color1 = "green";
            }
            else{
                $error1 = "Error occured";
            }
        }

      }

      ?>
      <form class="wowload fadeInRight" method="post">
        <div class="" style="color: <?php echo  $color1 ;?>">
<p ><?php echo $error1 ?></p>
        </div>

          <div class="form-group mb-2 p-2 m-3">
                <input class="form-control" type="text" name="name1" placeholder="Your Name">
          </div>
          <div class="form-group">
              <input type="Phone" name="phone1" class="form-control"  placeholder="Phone">
          </div>
          <div class="form-group mb-2 p-2 m-3">
                <input class="form-control" type="text" name="email1" placeholder="Your Email">
          </div>
          <div required class="form-group m-3">Message
              <textarea class="form-control" name="message1" placeholder="Message" rows="4">
            </textarea>
          </div>

          <div class="form-group ">
                <input class="form-control" type="text" name="location1" placeholder="Your location">
         </div>
         <div class="form-group">
              <select required class="form-control" name="type1">
                <option value="no">Type</option>
                <option value="home">Home</option>
                <option value="home">Hostel</option>
              </select>
          </div>
          <input class="btn btn-success" type="submit" name="submit1" value="Request">

      </form>
    </div>
 </div>

 
<div class="col-sm-5 col-md-4">
<h3>Reservation Hotel</h3>
    <?php
        require_once('db.php');
        $error = "";
        $color = "red";
        if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $phone = mysqli_real_escape_string($con,$_POST['phone']);
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $adults = $_POST['no_adults'];
            $rooms = $_POST['no_rooms'];
            $message = mysqli_real_escape_string($con,$_POST['message']);

            $q = "SELECT * FROM requests ORDER BY requests.id DESC LIMIT 1";
            $r = mysqli_query($con, $q);
            if(mysqli_num_rows($r) > 0){
                $row = mysqli_fetch_array($r);
                $id = $row['id'];
                $id = $id + 1;
            }
            else{
                $id = 1;
            }


            if(empty($name) or empty($email) or empty($phone) or $adults == "no" or $rooms == "no" or empty($message) or $day == "no" or $month == "no" or $year == "no"){
                $error = "All Feilds Required, Try Again";

            }
            else{
                $insert_query = "INSERT INTO `requests`(`id`, `name`, `email`, `phone`, `day`, `month`, `year`, `adults`, `rooms`, `message`) VALUES ('$id','$name','$email','$phone','$day','$month','$year','$adults','$rooms','$message')";
                if(mysqli_query($con, $insert_query)){
                    $error = "We've got your request";
                    $color = "green";
                }
                else{
                    $error = "Error occured";
                }
            }
        }

    ?>
    <label style="color: <?php echo $color; ?>">
        <?php
            echo $error;
        ?>
    </label>
    <form role="form" class="wowload fadeInRight" method="post">
        <div class="form-group">
            <input type="text" name="name" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control"  placeholder="Email">
        </div>
        <div class="form-group">
            <input type="Phone" name="phone" class="form-control"  placeholder="Phone">
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="no_rooms">
              <option value="no">No. of Rooms</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            </div>
            <div class="col-xs-6">
            <select class="form-control" name="no_adults">
              <option value="no">No. of Adults</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="day" id="day">
                <option value="no">Day</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>

              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="month" id="month">
                <option value="no">Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="year">
                <option value="no">Year</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2017">2024</option>
                <option value="2018">2025</option>
                <option value="2019">2026</option>

              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Message" rows="4">
            </textarea>
        </div>
        <input type="submit" class="btn btn-success" value="Request" name="submit">
    </form>
</div>
</div>
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                    $q = "SELECT * FROM rooms LIMIT 3";
                    $run = mysqli_query($con, $q);
                    $count = 0;
                    if(mysqli_num_rows($run) > 0){
                        while($row = mysqli_fetch_array($run)){
                            $image = $row['image1'];
                            if($count == 0){
                                echo "<div class='item active'><img src='img/$image' class='img-responsive' alt='slide'></div>";
                            }
                            else{
                                echo "<div class='item  height-full'><img src='img/$image' class='img-responsive' alt='slide'></div>";
                            }
                            $count++;
                        }
                    }
                ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="img/d.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="img/b.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="img/c.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Places To Visit<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="img/t.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="img/t2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="img/t3.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->
<?php include 'footer.php';?>