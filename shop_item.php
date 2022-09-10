<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php") ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_folder/shop_item.css?version=2">
    <title>Shop Detail</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="detail_row1">
        
        <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="item_img">
            <img src="img/chef_recommend.png" alt="">
        </div>
        <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="item_info">
            <h1>Medium Rare Steak</h1>
            <h2>by chef David</h2>
            <h3>$ 150.00</h3>
            <p>Decipherment muse about the carbon in our apple pies from which we spring billions upon billions prime number. Concept of the number one cosmic fugue star stuff harvesting star light concept of the number one vastness is bearable only through love cosmic fugue.</p>
            <div class="addTo_cart">
                <h2>Add to Cart</h2>
                <div class="amount">
                    <button onclick="minus()"><h2>-</h2></button>
                    <!-- <h2 class="amount_num">1</h2> -->
                    <input class="amount_num" type="number" value="0">
                    <button onclick="plus()"><h2>+</h2></button>
                </div>
            </div>
        </div>
    </div>

    <div class="detail_row2">
        <div class="item_detail">
            <button onclick="more_detail()">Detail<i class='bx bx-chevron-up'></i></button>
            <ul class="info_list display_toggle">
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
            <button onclick="more_review()">Review<i class='bx bx-chevron-up'></i></button>
            <ul class="review display_toggle">
                <li>
                    <img src="img/profile1.jpg" alt="">
                    <p>Decipherment muse about the carbon in our apple pies from which we spring billions upon billions prime number. Concept of the number one cosmic fugue.</p>
                </li>
                <li>
                    <img src="img/profile2.jpg" alt="">
                    <p>Decipherment muse about the carbon in our apple pies from which we spring billions upon billions prime number.</p>
                </li>
                <li>
                    <img src="img/profile3.jpg" alt="">
                    <p>Decipherment muse about the carbon in our apple pies from which we spring billions upon billions prime number. Concept of the number one cosmic fugue star stuff harvesting star light concept of the number one vastness is bearable only through love cosmic fugue.</p>
                </li>
            </ul>
            <div class="comment display_toggle">
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
<script src="javascript/shop_item.js"></script>
</html>