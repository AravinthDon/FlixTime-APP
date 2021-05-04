<?php
    include("../config/core.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlixTime - Sign in</title>

    <?php include($components."stylesheet.php"); ?>

</head>
<body>
    <?php  
        $header = $components."header.php";
        include($header);
    ?>

    <div class="container">
        <div class="login-form">
            <form action="/examples/actions/confirmation.php" method="post">
                <h2 class="text-center">Log in</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
                <!--div class="clearfix">
                    <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                    <a href="#" class="float-right">Forgot Password?</a>
                </div-->        
            </form>
            <p class="text-center"><a href="#">Create an Account</a></p>
        </div>
    </div>
    
    <?php include($components."script.php"); ?>
</body>
</html>