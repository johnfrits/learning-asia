<!DOCTYPE html>
<html lang="en">

    <?php
        //connection
        include "inc/connection.inc.php";
        //head
        include "inc/head.inc.php";
        $countryname = $_GET['countryname'];

        $query = "SELECT * FROM countries c INNER JOIN flag_images f ON f.cNo = c.cNo INNER JOIN
         content t ON t.cNo = c.cNo WHERE c.cName = '$countryname'; ";

        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result)){
            $cName = $row['cName'];
            $cRegion = $row['cRegion'];
            $cImage = $row['image_name'];
            $language = $row['language'];
            $capital = $row['capital'];
            $history = $row['history'];
            $governmment = $row['government'];
            $population = $row['population'];
            $currency = $row['currency'];
        }

        mysqli_close($conn);
    ?>
<head>
    <style type="text/css">
        .dropdown{
            margin-bottom: 50px;
        }
        .navbar-right hr{
            margin-top: -10px;
        }
    </style>

</head>
<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Learning Asia</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About <?php echo $cName; ?></a>
                          <hr class="primary">
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">More Countries</a>
                          <hr class="primary">
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Share</a>
                          <hr class="primary">
                    </li>
                      <li>
                        <a class="index.html" href="index.html">Home</a>
                          <hr class="primary">
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   <!--  style="background-image: url(../flags/<?php echo $cImage; ?>.jpg);" -->

    <header <?php echo "style='opacity:0.9; background-image: url(flags/".$cImage.");' "; ?> >
        <div class="header-content">
            <div class="header-content-inner">
                <h1 style='color:#202020; margin-top: 0 auto;'><?php echo $cName; ?></h1>
                <hr>
                <p style="color:#282828; font-weight:bolder;"><?php echo $cRegion; ?></p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Learn More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h3 class="section-heading"><span class="glyphicon glyphicon-road"></span> History</h3>
                    <hr class="light">
                    <p class="text-faded" style="color: #000;"><?php echo $history; ?></p>
                </div>

                <br/><br/><br/><br/>

                <div class="row"> 
                    <div class='col-lg-4 text-center'>
                        <h3 class="section-heading"><span class="glyphicon glyphicon-globe"></span> Language</h3>
                        <hr class="light">
                        <p class="text-faded" style="color: #000;"><?php echo $language; ?></p>
                    </div>
                    <div class='col-lg-4 text-center'>
                        <h3 class="section-heading"><span class="glyphicon glyphicon-equalizer"></span> Government</h3>
                        <hr class="light">
                        <p class="text-faded" style="color: #000;"><?php echo $governmment; ?></p>
                    </div>
                    <div class='col-lg-4 text-center'>
                        <h3 class="section-heading"><span class="glyphicon glyphicon-user"></span> Population</h3>
                        <hr class="light">
                        <p class="text-faded" style="color: #000;"><?php echo $population; ?></p>
                    </div>                    
                </div>
                <br/><br/><br/><br/>
                <div class="row">
                    <div class='col-lg-6 text-center'>
                        <h3 class="section-heading"><span class="glyphicon glyphicon-flag"></span> Capital</h3>
                        <hr class="light">
                        <p class="text-faded" style="color: #000;"><?php echo $capital; ?></p>
                    </div>
                    <div class='col-lg-6 text-center'>
                        <h3 class="section-heading"><span class="glyphicon glyphicon-bookmark"></span> Currency</h3>
                        <hr class="light">
                        <p class="text-faded" style="color: #000;"><?php echo $currency; ?></p>
                    </div>
                </div>

                <div class="row text-center">
                <a href="#page-top" class="btn btn-default btn-xl wow tada page-scroll"><?php echo $cName; ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Learn More About Asia</h1>
                    <hr class="primary">
                    <h2 class="section-heading">Countries Of Asia</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" id="countries">
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <div class="dropdown">
                          <button class="btn btn-danger dropdown-toggle wow bounceIn" type="button" data-toggle="dropdown">Central Asia
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu" style=" color: #f0ad4e; background-color: #d9534f; border-color: #d43f3a;">
                            <li><a href="./content.php?countryname=Kazakhstan">Kazakhstan</a></li>
                            <li><a href="./content.php?countryname=Kyrgyzstan">Kyrgyzstan</a></li>
                            <li><a href="./content.php?countryname=Tajikistan">Tajikistan</a></li>
                            <li><a href="./content.php?countryname=Turkmenistan">Turkmenistan</a></li>
                            <li><a href="./content.php?countryname=Uzbekistan">Uzbekistan</a></li>
                          </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        
                        <div class="dropdown">
                          <button class="btn btn-warning dropdown-toggle wow bounceIn" type="button" data-toggle="dropdown">East Asia
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu" style="color: #f0ad4e; background-color: #f0ad4e; border-color: #eea236;">
                            <li><a href="./content.php?countryname=China">China</a></li>
                            <li><a href="./content.php?countryname=Hong Kong">Hong Kong</a></li>
                            <li><a href="./content.php?countryname=Tajikistan">Tajikistan</a></li>
                            <li><a href="./content.php?countryname=Japan">Japan</a></li>
                            <li><a href="./content.php?countryname=South Korea">South Korea</a></li>
                            <li><a href="./content.php?countryname=North Korea">North Korea</a></li>
                            <li><a href="./content.php?countryname=Macau">Macau</a></li>
                            <li><a href="./content.php?countryname=Mongolia">Mongolia</a></li>
                            <li><a href="./content.php?countryname=Taiwan">Taiwan</a></li>
                          </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <div class="dropdown">
                          <button class="btn btn-success dropdown-toggle wow bounceIn" type="button" data-toggle="dropdown">North Asia
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu" style=" color: #f0ad4e; background-color: #5cb85c; border-color: #4cae4c;">
                            <li><a href="./content.php?countryname=Belarus">Belarus</a></li>
                            <li><a href="./content.php?countryname=Moldova">Moldova</a></li>
                            <li><a href="./content.php?countryname=Russia">Russia</a></li>
                            <li><a href="./content.php?countryname=Ukraine">Ukraine</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <div class="dropdown">
                          <button class="btn btn-info dropdown-toggle wow bounceIn" type="button" data-toggle="dropdown">South Asia
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu" style=" color: #f0ad4e; background-color: #5bc0de; border-color: #46b8da;">
                            <li><a href="./content.php?countryname=Afghanistan">Afghanistan</a></li>
                            <li><a href="./content.php?countryname=Bangladesh">Bangladesh</a></li>
                            <li><a href="./content.php?countryname=Bhutan">Bhutan</a></li>
                            <li><a href="./content.php?countryname=Iran">Iran</a></li>
                            <li><a href="./content.php?countryname=India">India</a></li>
                            <li><a href="./content.php?countryname=Maldives">Maldives</a></li>
                            <li><a href="./content.php?countryname=Nepal">Nepal</a></li>
                            <li><a href="./content.php?countryname=Pakistan">Pakistan</a></li>
                            <li><a href="./content.php?countryname=Sri Lanka">Sri Lanka</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle wow bounceIn" type="button" data-toggle="dropdown">South East Asia
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu" style=" color: #f0ad4e; background-color: #f05f40; border-color: #f05f40;">
                            <li><a href="./content.php?countryname=Brunei Darrusalam">Brunei Darrusalam</a></li>
                            <li><a href="./content.php?countryname=Cambodia">Cambodia</a></li>
                            <li><a href="./content.php?countryname=Indonesia">Indonesia</a></li>
                            <li><a href="./content.php?countryname=Laos">Laos</a></li>
                            <li><a href="./content.php?countryname=Myanmar">Myanmar</a></li>
                            <li><a href="./content.php?countryname=Philippines">Philippines</a></li>
                            <li><a href="./content.php?countryname=Singapore">Singapore</a></li>
                            <li><a href="./content.php?countryname=Thailand">Thailand</a></li>
                            <li><a href="./content.php?countryname=Timor-Leste">Timor-Leste</a></li>
                            <li><a href="./content.php?countryname=Vietnam">Viet Nam</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle wow bounceIn" id="westasiabtn" style="color: #FFF; background-color: #ac39ac; border-color: #c653c6;" type="button" data-toggle="dropdown">West Asia
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="./content.php?countryname=Armenia">Armenia</a></li>
                            <li><a href="./content.php?countryname=Azerbaijan">Azerbaijan</a></li>
                            <li><a href="./content.php?countryname=Bahrain">Bahrain</a></li>
                            <li><a href="./content.php?countryname=Cyprus">Cyprus</a></li>
                            <li><a href="./content.php?countryname=Georgia">Georgia</a></li>
                            <li><a href="./content.php?countryname=Iraq">Iraq</a></li>
                            <li><a href="./content.php?countryname=Jordan">Jordan</a></li>
                            <li><a href="./content.php?countryname=Kuwait">Kuwait</a></li>
                            <li><a href="./content.php?countryname=Lebanon">Lebanon</a></li>
                            <li><a href="./content.php?countryname=Oman">Oman</a></li>
                            <li><a href="./content.php?countryname=Palestine">Palestine</a></li>
                            <li><a href="./content.php?countryname=Qatar">Qatar</a></li>
                            <li><a href="./content.php?countryname=Saudi Arabia">Saudi Arabia</a></li>
                            <li><a href="./content.php?countryname=Syria">Syria</a></li>
                            <li><a href="./content.php?countryname=United Arab Emirates">United Arab Emirates</a></li>
                            <li><a href="./content.php?countryname=Yemen">Yemen</a></li>
                            <li><a href="./content.php?countryname=Israel">Israel</a></li>
                            <li><a href="./content.php?countryname=Turkey">Turkey</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-20 text-center">
                    <div class="service-box">
                          <a href="viewallcountry.php" class="btn btn-primary btn-xl wow tada">View All</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Share This To Your Friends</h2>
            <a class="btn btn-default wow tada"href="https://www.facebook.com/dialog/feed?
  app_id=145634995501895
  &amp;display=popup&amp;caption=Noce%20Share%20Lang 
  &amp;link=http://learningasia.azurewebsites.net/
  &amp;redirect_uri=https://developers.facebook.com/tools/explorer">Share</a>
            </div>
        </div>
    </aside>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Team Achup!</h2>
                    <hr class="primary">
                    <p>Bachelor of Science in Information Technology - Holy Cross of Davao College, Inc.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>235-451-229</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
          <p><a href="mailto:your-email@your-domain.com">teamachupapings@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="bootstrap/js/jquery.easing.min.js"></script>
    <script src="bootstrap/js/jquery.fittext.js"></script>
    <script src="bootstrap/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="bootstrap/js/creative.js"></script>

</body>

</html>
