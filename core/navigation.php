
 <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
        <div class="container">
            <a href="index.php" class="navbar-brand"> shopifyme </a>
            <ul class="nav navbar-nav">
            <?php
            $query= "SELECT * FROM category WHERE parent = 0 ";
            $createquery = mysqli_query($db,$query);
            while($parent = mysqli_fetch_assoc($createquery)){
             $p_id= $parent['id'];
             $p_category = $parent['category'];
        }
            ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $p_category?>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                    <?php
                    $query2= "SELECT * FROM category WHERE parent = 2";
                    $queryp = mysqli_query($db,$query2);
                     while($child = mysqli_fetch_assoc($queryp)){
                        $category = $child['category'];
                        
                        echo "<li><a href='#'> {$category} </a></li>";

                    }
                        ?>
                     
                    </ul>
                </li>
                <li class=""><a href="cart.php"> <span class="glyphicon glyphicon-shopping-cart"></span>my cart</a></li>
            </ul>
            
        </div>
    </nav>