<?php include 'core/header.php';?>
<?php include 'core/navigation.php';?>

<?php
$select = "SELECT * FROM products";
$exequery = mysqli_query($db, $select);
?>
<?php
while($row = mysqli_fetch_assoc($exequery)){
     $title = $row['product_title'];
     $image = $row['product_image'];
     $price = $row['product_price'];
     $discount = $row['product_list_price'];
}
?>
    <div id="background">
    <!-- <div id="image1"> </div>
    <div id="image2">  </div> -->
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <!-- featured products -->
    <div class="row">
    <h2 class="text-center">featured products</h2>
    <div class="col-md-3">
    <h4><?php echo $title; ?></h4>
    <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" id="image" width="200px">
    <p class="price_list text-danger">Price: <s>$<?php echo $price; ?></s></p>
    <p class="price ">Price: <small>$<?php echo $discount; ?></small></p>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detial">details</button>
    
    </div>
    
    
    </div>
    <?php include 'core/footer.php';?>
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