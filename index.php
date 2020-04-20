<?php
require 'includes/common.php';
session_start();

if(isset($_SESSION['id']  )){
    echo "Hello".$_SESSION['id'];
    echo $_SESSION['email'];
    echo $_SESSION['id'];
}
?>
<html>
    <head>
        <title>E-Store</title>
        
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    
    <script>
	  var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null,    // optional scroll container selector, otherwise use window,
    resetAnimation: true,     // reset animation on end (default is true)
  }
);
wow.init();
	</script>
    

    </head>
   
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

    <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/46.png" alt="E-store" style="width:100%;">
                 </div>

                <div class="item">
                    <img src="img/41.jpg" alt="Samsung U20 Ultra" style="width:100%;">
                </div>
    
                <div class="item">
                    <img src="img/336.jpg" alt="Iphone 11 pro" style="width:100%;">
                </div>
            </div>

    <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
     </div>
</div>
        <div  class="container" style=" padding: 20px">
            <div>
                <center>
                    <div>
                        <h1 class="wow slideInLeft"> Premium Apple Mobiles </h1>
                        <a href="product.php"><img class="img-fluid wow zoomIn" data-wow-duration="2s"  src="img/16.jpg" alt="Apple mobiles" style=" max-height: 800px; max-width: 500px;"></a>                        
                    </div>
                </center>
            </div>
            <div>
                <center>
                    <div>
                        <h1 class="wow slideInRight"> Premium SAMSUNG Mobiles </h1>
                        <a href="product.php"><img class="wow zoomIn" data-wow-duration="2s"  src="img/65.jpg" alt="Apple mobiles" style=" max-height: 800px; max-width: 500px;"></a>                        
                    </div>
                </center>
            </div>
        </div>   
         <?php
        include 'includes/footer.php';
        ?>
    </body>
    
</html>


