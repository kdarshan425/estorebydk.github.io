<html>
    <head>
        <title>Contact us | E-store</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
              
              <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    </head>
    <body  style=" padding-top: 50px; padding-left: 50px; ">
        <?php
        include 'includes/header.php';
        ?>
        <div class="row text-left">           
            <div class="col-md-3  col-md-6">
                <h5>LIVE SUPPORT</h5>
                <h8>24 hours | 7days  a week | 365 days a year Live technical Support</h8>
                <p>
                    Its a long established fact that a reader will destracted by areadablee content of a 
                    page whhen looking  at its layout. The pont i\of using Lorem  Ipsum  is  aa long  
                    istablished fact  is that it has a more or less normal distribution of letterss . 
                    Ther are many variation in tthe passsages  of Lorem Ipsum  available but  the majority
                    have sufferd the altereattionn in some form, by injected humers .
                </p>
            </div>
            <div class="col-md-3  col-md-6">
                <img src="img/13.jpg"
            </div>
        </div>
        <div class="row text-left">           
            <div class="col-md-3  col-md-6">
                <h1>CONTACT US</h1>
                <form action="contactUs1.php" method="POST">                        
                        <div class="form-group">
                            <input type="text" class="form control" caption="email" name="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form control" caption="Number" name="number" placeholder="number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form control" caption="message" name="message" placeholder="message">
                        </div>
                        <button type="submit" class="btn btn-primary" value="registration_submit">Submit</button>
                    </form>
            </div>
            <div class="col-md-3  col-md-6">
                <h2>Company Information</h2>
                <h6>
                     500 Leorem Ipsum Dolor Sit,<br>
                     22-56-2-9 Sit Amet ,Lorem ,<br>
                     USA<br>
                     Phone:(00)222 666 444<br>
                     email:info@mycompany.com<br>
                     Follow on:Facebook,Instagram,Twitter;
                </h6>
            </div>
        </div>
    </body>
</html>