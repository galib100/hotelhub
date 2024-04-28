<?php
$page="home";
 include 'header.php';?>

<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">


        <div class="col-sm-6">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="img/d.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="img/b.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="img/c.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="img/a.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="img/h.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="img/e.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Places To Visit<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-6">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="img/t.jpg" class="img-responsive" alt="slide"></div>
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