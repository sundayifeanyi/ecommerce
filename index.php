<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>ecommerce.com</title>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand"> shopifyme </a>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">menu <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">mtn</a>
                        </li>
                        <li>
                            <a href="#">airtel</a>
                        </li>
                        <li>
                            <a href="#">glo</a>
                        </li>
                        <li>
                            <a href="#">9mobile</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div id="background">
    <div id="image1"> </div>
    <div id="image2">  </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <!-- featured products -->
    <div class="row">
    <h2 class="text-center">featured products</h2>
    <div class="col-md-3">
    <h4>jeans</h4>
    <img src="images/lapback.jpg" alt="lappy" id="image" width="200px">
    <p class="price_list text-danger">Price: <s>$24</s></p>
    <p class="price ">Price: <s>$19.99</s></p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detials">details</button>
    </div>
    <div class="col-md-3">
    <h4>shirt</h4>
    <img src="images/lapback.jpg" alt="shirt" id="image" width="200px">
    <p class="price_list text-danger">Price: <s>$24</s></p>
    <p class="price ">Price: <s>$19.99</s></p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detials">details</button>
    </div>
    <div class="col-md-3">
    <h4>mtn</h4>
    <img src="images/lapback.jpg" alt="mtn" id="image" width="200px">
    <p class="price_list text-danger">Price: <s>$24</s></p>
    <p class="price ">Price: <s>$19.99</s></p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detials">details</button>
    </div>
    <div class="col-md-3">
    <h4>glo</h4>
    <img src="images/lapback.jpg" alt="glo" id="image" width="200px">
    <p class="price_list text-danger">Price: <s>$24</s></p>
    <p class="price ">Price: <s>$19.99</s></p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detials">details</button>
    </div>
    <div class="col-md-3">
    <h4>etsalat</h4>
    <img src="images/lapback.jpg" alt="etsalat" id="image" width="200px">
    <p class="price_list text-danger">Price: <s>$24</s></p>
    <p class="price ">Price: <s>$19.99</s></p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detials">details</button>
    </div>
    <div class="col-md-3">
    <h4>airtel</h4>
    <img src="images/lapback.jpg" alt="airtel" id="image" width="200px">
    <p class="price_list text-danger">Price: <s>$24</s></p>
    <p class="price ">Price: <s>$19.99</s></p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detials">details</button>
    </div>
    </div>
    <footer class="text-center"><small>&copy; Copyright 2020-2021, ecommerce Corporation</small></footer>
    </div>
   <!-- detials modal -->
   <?php include 'image1-detials.php';?>
   <?php include 'image2-detials.php';?>
   <?php include 'image3-detials.php';?>
   <?php include 'image4-detials.php';?>
   <?php include 'image5-detials.php';?>
   <?php include 'image6-detials.php';?>

</body>
</html>