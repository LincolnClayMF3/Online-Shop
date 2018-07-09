<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sample Web System</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Fontawesome core CSS -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="../assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <style media="screen">
      .dropdown, .dropdown2 {
        position: relative;
        /* display: inline-block; */
      }

      .dropdown-content, .dropdown-content2{
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        /* min-width: 160px; */
        width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
        top: 0;
        left: 100%;
        margin-top: -1px;
      }

      .dropdown-content a, .dropdown-content2 a {
        color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
      }

      .dropdown-content a:hover, .dropdown-content2 a:hover{
        background-color: #ddd;
      }

      .dropdown:hover .dropdown-content, .dropdown2:hover .dropdown-content2 {
        display: block;
      }

      .dropdown:hover, .dropdown2:hover{
          background-color: #3e8e41;
      }

    </style>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong>PC Online</strong> Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Track Order</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Signup</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">24x7 Support <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Call: </strong>0912 345 6789/a></li>
                            <li><a href="#"><strong>Mail: </strong>pconlineshop.com</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Address: </strong>
                                <div>
                                    Metro Manila<br />
                                    NCR, Philippines
                                </div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp;
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container">
      <div>
          <ol class="breadcrumb">
              <li><a href="../index.html">Home</a></li>
              <li class="active">Components</li>
              <li class="active">All Items</li>
          </ol>
      </div>

      <div class="row">

        <!-- <div class="form-group col-md-6">
          <label for="sel1">Platform:</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="sel1">Socket:</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div> -->

      </div>

      <div class="row">

        <div class="col-md-2 col-sm-12">

          <div>
              <a href="#" class="list-group-item active">Components
              </a>
              <ul class="list-group">

                <li class="list-group-item dropdown">

                    <a style="color: black;" href="#">Motherboard</a>
                    <div class="dropdown-content">
                      <a href="#">AMD Socket</a>
                      <a href="#">Intel Socket</a>
                    </div>

                </li>

                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">CPU</a>
                      <div class="dropdown-content">
                        <a href="#">AMD</a>
                        <a href="#">Intel</a>
                      </div>

                  </li>

                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">GPU</a>
                      <div class="dropdown-content">
                        <a href="#">AMD Radeon</a>
                        <a href="#">Nvidia</a>
                      </div>

                  </li>

                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">RAM</a>
                      <div class="dropdown-content">

                        <div class="dropdown2">
                          <a href="login.html">Lodimm</a>
                          <div class="dropdown-content2">
                            <a href="#">DDR4</a>
                            <a href="#">DDR3</a>
                          </div>
                      </div>

                        <a href="#">Sodimm</a>
                      </div>

                  </li>

                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">PSU</a>
                      <div class="dropdown-content">
                        <a href="#">300-600 watts</a>
                        <a href="#">700-1000 watts</a>
                        <a href="#">1000-15000 watts</a>
                      </div>

                  </li>

                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">Hard Drive</a>
                      <div class="dropdown-content">
                        <div class="dropdown2">
                          <a href="#">Internal</a>
                          <div class="dropdown-content2">
                            <a href="#">Desktop 3.5"</a>
                            <a href="#">Mobile 2.5"</a>
                          </div>
                        </div>
                        <a href="#">External/Portable</a>
                        <a href="#">Solid State Drive</a>
                      </div>

                  </li>


                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">Chassis</a>
                      <div class="dropdown-content">
                        <a href="#">Full Tower</a>
                        <a href="#">Mid Tower</a>
                        <a href="#">Mini Tower</a>
                        <a href="#">Cube</a>
                      </div>

                  </li>

              </ul>
          </div>

        </div>

        <div class="col-md-10">

          <div class="row">

            <?php

              require '../connection.php';

              $result = mysqli_query($conn, "SELECT * FROM product_table");

              while ($row = mysqli_fetch_array($result)) {
                $product_img = $row['product_img_path'];
                $product_name = $row['product_name'];
                $product_price = $row['product_price'];

                ?>

            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                <div class="thumbnail product-box">
                  <img style="height: 200px; width: 250px" class="image" src="<?php echo "../$product_img" ?>" alt="" />
                  <div class="caption">
                      <h3><a href="#"><?php echo $product_name ?></a></h3>
                      <p>Price : <strong><?php echo $product_price ?></strong>  </p>
                      <!-- <p>AMD/TR4/X399</p> -->
                      <p><a href="#" class="btn btn-success" role="button">Add To Cart</a>
                        <a target="_blank" href="#" class="btn btn-primary" role="button">See Details</a></p>
                  </div>
                  <div class="middle">
                    <a href="#" class="btn btn-warning" role="button">Check Item</a></p>
                  </div>
                </div>
            </div>

          <?php
            }

          ?>

        </div>

        </div>

      </div>

    </div><br>




    <!-- /.container -->
    <div class="col-md-12 download-app-box text-center">

        <span class="glyphicon glyphicon-download-alt"></span>Download Our Android App and Get 10% additional Off on all Products . <a href="#" class="btn btn-danger btn-lg">DOWNLOAD  NOW</a>

    </div>

    <!--Footer -->
    <div class="col-md-12 footer-box">


        <div class="row small-box ">
            <strong>Mobiles :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
            <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items

        </div>
        <div class="row small-box ">
            <strong>Laptops :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Laptops</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony Laptops</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
            <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
        </div>
        <div class="row small-box ">
            <strong>Tablets : </strong><a href="#">samsung</a> |  <a href="#">Sony Tablets</a> | <a href="#">Microx</a> |
            <a href="#">samsung </a>|  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> |
            <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
            <a href="#">Sony</a> | <a href="#">Microx Tablets</a> | view all items

        </div>
        <div class="row small-box pad-botom ">
            <strong>Computers :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
            <a href="#">Microx Computers</a> |<a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Computers</a> |<a href="#">samsung</a> |
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items

        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Send a Quick Query </strong>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <strong>Our Location</strong>
                <hr>
                <p>
                     234, New york Street,<br />
                                    Just Location, USA<br />
                    Call: +09-456-567-890<br>
                    Email: info@yourdomain.com<br>
                </p>

                2014 www.yourdomain.com | All Right Reserved
            </div>
            <div class="col-md-4 social-box">
                <strong>We are Social </strong>
                <hr>
                <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>
                <p>
                    Like our Facebook Page pconlineshop. <br>Follow our Tweets at pconlineshop. <br>
                    Email us at pconlineshop@gmail.com. <br>
                </p>
            </div>
        </div>
        <hr>
    </div>
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2018 | &nbsp; All Rights Reserved | &nbsp; www.pconlineshop.com | &nbsp; 24x7 support | &nbsp; Email us: pconlineshop.gmail.com
    </div>

</body>
</html>