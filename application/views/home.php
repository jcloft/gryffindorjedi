<!DOCTYPE html>
<html ng-app="webApp">
    <head>
        <title>Home</title>
        
<!--        <link rel=stylesheet href="<?//php echo base_url('assets/css/homeStyle.css')?>">-->
                <link rel=stylesheet href="assets/css/homeStyle.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
<!--        <link rel="stylesheet" href="<?//php base_url('..css/style.css')?>">-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Exo+2:400,200' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.min.js"></script>
        
<!--        <script src="<?php //echo base_url('assets/js/angular.js')?>"></script>-->
        <script src="assets/js/main.js"></script>
        
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="wrapper col-sm-12">
              
              <nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="#">SLATE</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><i class="fa fa-cog fa-2x menulink"></i></li>
        <li><i class="fa fa-power-off fa-2x menulink"></i></li>
        <li><i class="fa fa-user fa-2x menulink"></i></li>
        <li onclick="window.location.href='#/home'"><i class="fa fa-home fa-2x menulink"></i></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                <div class="row col-sm-12 classwrap">
                    <div class="row col-sm-9">
                    <div ng-view></div>
                  </div>
                    <div class="col-sm-3" id="chat">
                        <?php //include 'instant_messengr_files/index.html'?>
                    </div>
                    <div class="col-sm-12" id="timeline">
                        Timeline
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>