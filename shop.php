<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php") ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_folder/shop.css">
    <title>Document</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="shop_landing">
        <div data-aos="fade" data-aos-duration="2000" data-aos-once="true"><h1 class="shop_heading">SHOP</h1></div>
    </div>

    <div data-aos="fade" data-aos-duration="1000" data-aos-once="true" class="shop_nav">
        <div class="nav_head">
            <h1>FILTER</h1>
        </div>
        <div class="nav_filter">
            <form action="">
                <select name="branch" id="branch" form="branch_form">
                    <option value="Categories">All Categories</option>
                    <option value="category1">category1</option>
                    <option value="category2">category2</option>
                    <option value="category3">category3</option>
                </select>
            </form>
            <form action="">
                <select name="branch" id="branch" form="branch_form">
                    <option value="Categories1">All Categories</option>
                    <option value="category1">category1</option>
                    <option value="category2">category2</option>
                    <option value="category3">category3</option>
                </select>
            </form>
            <form action="">
                <select name="branch" id="branch" form="branch_form">
                    <option value="Categories2">All Categories</option>
                    <option value="category1">category1</option>
                    <option value="category2">category2</option>
                    <option value="category3">category3</option>
                </select>
            </form>
            <input type="text" id="shop_search" name="shop_search" placeholder="Search">
        </div>
    </div>

    <div class="shop">
        <div  class="shop_card">
            <a href="shop_item.php">
            <img src="img/shop_item1.png" alt="">
            </a>
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>
        <div class="shop_card">
            <a href="shop_item.php">
            <img src="img/shop_item2.png" alt="">
            </a>
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>
        <div class="shop_card">
            <a href="shop_item.php">
            <img src="img/shop_item3.png" alt="">
            </a>
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>
        <div class="shop_card">
            <a href="shop_item.php">
            <img src="img/shop_item4.png" alt="">
            </a>
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>
        <div class="shop_card">
            <a href="shop_item.php">
            <img src="img/shop_item5.png" alt="">
            </a>
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>
        <div class="shop_card">
            <a href="shop_item.php">
            <img src="img/shop_item6.png" alt="">
            </a>
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>
        <div class="shop_card">
            <a href="shop_item.php">
            <img src="img/shop_item6.png" alt="">
            </a>
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>
        <div class="shop_card">
            <a href="shop_item.php">
            <img src="img/shop_item5.png" alt="">
            </a>
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>
        <div class="shop_card">
            <a href="shop_item.php">
            <img src="img/shop_item4.png" alt="">
            </a>
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>
        
    </div>
    
    <div class="more">
        <?php include("loading.php") ?>
        <button onclick="more_item()">+</button>
    </div>
    <?php include("footer.php") ?>
</body>
<script src="javascript/more_item.js">  
</script>
</html>