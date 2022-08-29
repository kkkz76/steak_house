<!DOCTYPE html>
<html lang="en">

<head>
<!-- jQuery library -->
    <?php include("cdn.php") ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_folder/blog.css?version=2">   
    <title>Document</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="blog_parallax">
        <h1>Blog</h1>
    </div>
    <div class="blog_pin_post">
        <img src="img/gallery1.png" alt="">
        <div class="blog_pin_post_content">
            <div class="pin_post_date">
                <p>December 20,2020</p>
                <p>by Chef John Doe</p>
            </div>
            <h1>How We cook everyday?</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptatem quisquam ipsum sint neque expedita dolores repellat animi suscipit itaque aliquam eveniet, provident deserunt. Placeat doloribus itaque dolore et rerum!dolores repellat animi suscipit itaque aliquam eveniet, provident deserunt.</p>
            <button>Read More</button>
        </div>

    </div>

    <div class="blog_article">
        <div class="article_heading">
            <h1>Latest Article</h1>
            <form action="">
            <label for="blog_filter">Filter :</label>
            <select id="blog_filter" >
                <option value="Alphabets">Alphabets</option>
                <option value="Latest_Upload">Latest Upload</option>
                <option value="Earliest_Upload">Earliest Upload</option>
                
            </select>
            <input type="submit">
            </form>

        </div>

        <div class="article_main">
            <p class="article_number">1.</p>
            <img src="img/gallery1.png" alt="">
            <div class="article_content">
                <h1>How We cook everyday?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptatem quisquam ipsum sint neque expeditaore et eniet, provident deserunt.</p>
                <hr>
                <div class="article_date">
                    <p>by Chef John Doe</p>
                    <p>December 20,2020</p>
                </div>
            </div>

        </div>

        <div class="article_main">
            <p class="article_number">2.</p>
            <img src="img/gallery1.png" alt="">
            <div class="article_content">
                <h1>How We cook everyday?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptatem quisquam ipsum sint neque expeditaore et eniet, provident deserunt.</p>
                <hr>
                <div class="article_date">
                    <p>by Chef John Doe</p>
                    <p>December 20,2020</p>
                </div>
            </div>

        </div>

        <div class="article_main">
            <p class="article_number">3.</p>
            <img src="img/gallery1.png" alt="">
            <div class="article_content">
                <h1>How We cook everyday?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptatem quisquam ipsum sint neque expeditaore et eniet, provident deserunt.</p>
                <hr>
                <div class="article_date">
                    <p>by Chef John Doe</p>
                    <p>December 20,2020</p>
                </div>
            </div>

        </div>

        <div class="article_main">
            <p class="article_number">4.</p>
            <img src="img/gallery1.png" alt="">
            <div class="article_content">
                <h1>How We cook everyday?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptatem quisquam ipsum sint neque expeditaore et eniet, provident deserunt.</p>
                <hr>
                <div class="article_date">
                    <p>by Chef John Doe</p>
                    <p>December 20,2020</p>
                </div>
            </div>

        </div>

        <div class="blog_pagination_main">
        <div class="blog_pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
        </div>
       




    </div>



    <!-- ................................................................filler_content.............................. -->



<video width="100%" height="auto" loop autoplay muted >
  <source src="img/blog.mp4" type="video/mp4">
</video>

<div class="filler_main">
      <div class="filler1">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente aperiam perferendis fuga
          minus rem
        </p>
        <div class="item_content_info" style="margin-top: 80px">
          <p>by Chef John Doe</p>
          <p>December 20,2020</p>
        </div>
      </div>
      <div class="filler2">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente aperiam perferendis fuga
          minus rem Lorem ipsum dolor sit amet consectetur Cum quas accusantium
          quis ullam adipisci sapiente aperiam perferendis fuga minus rem Lorem
          ipsum dolor sit amet consectetur
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente
        </p>
      </div>
</div>



<?php include("footer.php") ?>

    
    
</body>
</html>