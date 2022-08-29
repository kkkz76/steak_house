<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php") ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_folder/shop_item.css?version=2">
    <title>Document</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="detail_row1">
        
        <div class="item_img">
            <img src="img/chef_recommend.png" alt="">
        </div>
        <div class="item_info">
            <h1>Medium Rare Steak</h1>
            <h2>by chef David</h2>
            <h3>$ 150.00</h3>
            <p>Decipherment muse about the carbon in our apple pies from which we spring billions upon billions prime number. Concept of the number one cosmic fugue star stuff harvesting star light concept of the number one vastness is bearable only through love cosmic fugue.</p>
            <div class="addTo_cart">
                <h2>Add to Cart</h2>
                <div class="amount">
                    <button><h2>-</h2></button>
                    <h2>1</h2>
                    <button><h2>+</h2></button>
                </div>
            </div>
        </div>
    </div>

    <div class="detail_row2">
        <div class="item_detail">
            <button>Detail</button>
            <ul class="info_list">
                <li>
                    <p>Chef</p>
                    <p>David</p>
                </li>
                <li>
                    <p>Ingredients</p>
                    <p>chicken, water, salt, sugar, sause</p>
                </li>
                <li>
                    <p>Detail</p>
                    <p>info1,info2,info3</p>
                </li>
                <li>
                    <p>Detail</p>
                    <p>info1,info2,info3</p>
                </li>
            </ul>
        </div>

        <div class="item_review">
            <button>Review</button>
            <ul class="review">
                <li>
                    <img src="img/cool-cat.png" alt="">
                    <p>Decipherment muse about the carbon in our apple pies from which we spring billions upon billions prime number. Concept of the number one cosmic fugue.</p>
                </li>
                <li>
                    <img src="img/cool-cat.png" alt="">
                    <p>Decipherment muse about the carbon in our apple pies from which we spring billions upon billions prime number.</p>
                </li>
                <li>
                    <img src="img/cool-cat.png" alt="">
                    <p>Decipherment muse about the carbon in our apple pies from which we spring billions upon billions prime number. Concept of the number one cosmic fugue star stuff harvesting star light concept of the number one vastness is bearable only through love cosmic fugue.</p>
                </li>
            </ul>
            <div class="comment">
                <p>Add a review</p>
                <h2>Your email address will not be published. Required fields are marked</h2>
                <form class="review_form" action="">
                    <input type="text" placeholder="Name...">
                    <input type="text" placeholder="Email...">
                    <textarea name="" id="" cols="100%" rows="5"placeholder="Comment..."></textarea>
                    <input id="summit" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </div>

    <div class="mayLike_carousel">
        <h1>YOU MAY ALSO LIKE</h1>
        <?php include("mayLike_carousel.php") ?>
    </div>
    <?php include("footer.php") ?>


</body>
</html>