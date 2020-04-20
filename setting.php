<?php
require_once("includes/common.php");
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <title>setting | E-Store</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form method="POST" action="setting1.php" >
                        <div class="form-group">
                            <input type="old-password" class="form-control" name="old-password"  placeholder="old-password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="new-password" class="form-control" name="new-password" placeholder="new-password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="re-type_new-password" class="form-control" name="re-type_new-password"  placeholder="re-type_new-password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                                               
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>