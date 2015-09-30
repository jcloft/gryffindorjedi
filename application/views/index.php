<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
        <link href='https://fonts.googleapis.com/css?family=Exo+2:400,200' rel='stylesheet' type='text/css'>
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.min.js"></script>
        
        
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="wrapper">
                <div class="col-xs-12 col-sm-8" id="bgleft"></div>
                <div class="col-xs-12 col-sm-4 col-sm-offset-8" id="bgright"></div>
                    <div class="col-xs-12 col-sm-8" id="left">
                        <p class="row" id="title">SLATE</p>
                        <div class="row" id="caption">
                            <div class="col-xs-12 col-sm-6">
                                <h2><a href="#">For Teachers</a></h2>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <h2><a href="#">For Students</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4" id="right">
                        <form action="/home" class="row col-xs-12 col-sm-10 col-sm-offset-1" id="signin">
                        <h1>Sign-In</h1>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-default">Sign-in</button>
                        </form>
                        <div class="row col-xs-12" id="signup">
                            <h3>Need an account?<br><a href="#">Sign Up</a></h3>
                        </div>
                
                    </div>
            </div>
        </div>
    </body>
    
</html>