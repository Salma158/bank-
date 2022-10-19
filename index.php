<!doctype html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">
    <link rel="shortcut icon" type="img/png" href=".img/Bank_loho.png">
    <title>Basic Banking System</title>  
</head>

<body>
    <?php
    include 'navbar.php';
    ?>

    <!-- Start Main area -->
    <section class="site-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text">Sparks Foundation Bank</h3>
                    <h4 class="title-text">Delivering value to our clients, our community and our shareholders</h4>
                </div>
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="./img/home.jpg" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- End Main area -->
    
    <!-- Start Service area -->
    <section class="container" id="services">
        <h2 class="heading">Our Services</h2>
        <div class="container  text-center">
          <div class="row">
            <div class="card col-md-3 mx-auto" style="width: 18rem;">
              <img src="./img/customers.jpg" class="card-img-top mt-3 img" alt="Responsive image">
              <div class="card-body">
                <h5 class="card-title">View Customers</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <br><a href="transfermoney.php" class="btn btn-success">View Customers</a>
              </div>
            </div>
            <div class="card col-md-3 mx-auto" style="width: 18rem;">
              <img src="./img/Trans.jfif" class="card-img-top mt-3 img" alt="Responsive image">
              <div class="card-body">
                <h5 class="card-title">View Transactions</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="transactionhistory.php" class="btn btn-success">View Transactions</a>
              </div>
            </div>
            <div class="card col-md-3 mx-auto" style="width: 18rem;">
              <img src="./img/money.jpg" class="card-img-top mt-3 img" alt="Responsive image">
              <div class="card-body">
                <h5 class="card-title" id="harry">Transfer Money</h5>
                <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <br> <a href="transfermoney.php" class="btn btn-success">Transfer Money</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
    <!-- End Service area -->
    <br>
    <br>
    <br>

</body>
</html>
