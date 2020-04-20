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
        <title>index | E-Store</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    </head>
    <body  style=" padding-top: 50px; ">
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container">
            <div class="row text-center height">
                <h1>Apple Mobiles</h1>
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Mobile 1</h4>
                            </div>
                            <div class="panel-body">
                                <img  src="img/1.jpg" alt="responsive image">
                                <p><b>Apple Iphone 11 pro</b></p>
                                <p>cost 121000.00</p>
                            </div>
                            <div class="panel-footer">         
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-default btn-block">Order Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) {//This is same if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Mobile 2</h4>
                            </div>
                            <div class="panel-body">
                                <img  src="img/2.jpg" alt="responsive image">
                                <p><b>Apple Iphone Xr pro</b></p>
                                <p>cost 64000.00</p>
                                <p> </p>
                            </div>
                            <div class="panel-footer">         
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-default btn-block">Order Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Mobile 3</h4>
                            </div>
                            <div class="panel-body">
                                <img  src="img/3.jpg" alt="responsive image">
                                <p><b>Apple Iphone Xs Max</b></p>
                                <p>cost 111000.00</p>
                                <p></p>
                                <p></p>
                            </div>
                            <div class="panel-footer">         
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-default btn-block">Order Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Mobile 4</h4>
                            </div>
                            <div class="panel-body">
                                <img  src="img/4.jpg" alt="responsive image">
                                <p><b>Apple Iphone 7 pro</b></p>
                                <p>cost 37000.00</p>
                            </div>
                            <div class="panel-footer">         
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-default btn-block">Order Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <h1>Samsung Mobiles</h1>
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Mobile 5</h4>
                            </div>
                            <div class="panel-body">
                                <img  src="img/5.jpg" alt="responsive image">
                                <p><b>Samsung Fold</b></p>
                                <p>cost 131000.00</p>
                            </div>
                            <div class="panel-footer">         
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-default btn-block">Order Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Mobile 6</h4>
                            </div>
                            <div class="panel-body">
                                <img  src="img/6.jpg" alt="responsive image">
                                <p><b>Samsung S20 pro</b></p>
                                <p>cost 94000.00</p>
                            </div>
                            <div class="panel-footer">         
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-default btn-block">Order Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Mobile 7</h4>
                            </div>
                            <div class="panel-body">
                                <img  src="img/7.jpg" alt="responsive image">
                                 <p><b>Samsung A50</b></p>
                                <p>cost 24000.00</p>                                
                            </div>
                            <div class="panel-footer">         
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-default btn-block">Order Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Mobile 8</h4>
                            </div>
                            <div class="panel-body">
                                <img  src="img/8.jpg" alt="responsive image">
                                <p><b>Samsung  S7 </b></p>
                                <p>cost 17000.00</p>
                            </div>
                            <div class="panel-footer">         
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-default btn-block">Order Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>    
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
</html>