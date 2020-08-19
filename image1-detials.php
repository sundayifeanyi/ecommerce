<!-- Modal -->

<?php

// INSERT INTO `products` (`id`, `product_title`, `product_price`, `product_list_price`, 
// `product_brand`, `product_category`, `product_image`, `product_desc`, `featured`, `size`)
//  VALUES (NULL, 'levis\'jeans', '40', '39', '1', '', 'ecommerce/images/ecom-dark.jpg', 
//  'awesome wear .. buy yours now', '1', 'no:1 no:2');

?>
<div class="modal fade detials" id="detial" tableindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title text-center">images 1</h4>
        <button class="close" type="button" data-dismiss="modal" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-6">
                    <div class="center-block">
                    <img src="images/lapback.jpg" alt="images1" class="detials img-responsive" height="200px">
                    </div>
                </div>

                <div class="col-sm-6">
                    <h4 class="text-center bg-primary">Details</h4>
                    <p class="text-center">amazing products</p>
                    <p class="text-center">Price: $24.99</p>
                    <p class="text-center">Brand: stuffs</p>
                </div>
                <form action="add-chat.php" method="post">
                <div class="form-group">
                <div class="col-xs-3">
                <label for="quantity" id="quantity-label">Quantity</label>
                <input type="text" name="quantity" id="quantity" class="form-control">
                <label for="size">size</label>
                <select name="size" id="size" class="form-control">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                </select>
                </div>
                </div>
                </form>
                <hr>
                </div>
            </div>
        </div>
        <div class="modal-footer bg-primary">
          <button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-shopping-cart"></span> Save changes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>



