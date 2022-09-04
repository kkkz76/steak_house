<!DOCTYPE html>
<html lang="en">

<head>
<!-- jQuery library -->
    <?php include("cdn.php") ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_folder/blog.css">   
    <title>Document</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="blog_parallax">
       <h1 data-aos="fade" data-aos-duration="1000" data-aos-once="true">Blog</h1>
    </div>
    
    <div class="blog_pin_post_container">
    <div class="blog_pin_post" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
        <img src="img/gallery1.png" alt="">
        <div class="blog_pin_post_content">
            <div class="pin_post_date">
                <p>December 20,2020</p>
                <p>by Chef John Doe</p>
            </div>
            <h1>How We cook everyday?</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptatem quisquam ipsum sint neque expedita dolores repellat animi suscipit itaque aliquam eveniet, provident deserunt.Placeat doloribus itaque dolore et rerum!dolores repellat animi suscipit itaque aliquam eveniet, provident deserunt.</p>
            <button onclick="window.location.href = 'blog_detail.php';">Read More</button>
        </div>

    </div>
    </div>

    <div class="article_container">
    <div class="blog_article">
        <div class="article_heading">
            <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">Latest Article</h1>
            <form action="" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
            <label for="blog_filter">Filter :</label>
            <select id="blog_filter" >
                <option value="Alphabets">Alphabets</option>
                <option value="Latest_Upload">Latest Upload</option>
                <option value="Earliest_Upload">Earliest Upload</option>
                
            </select>
            <input type="submit">
            </form>

        </div>

        <div class="article_main" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <p class="article_number">1.</p>
            <img src="img/gallery1.png" alt="">
            
            <div class="article_content" >
                <h1>How We cook everyday?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptatem quisquam ipsum sint neque expeditaore et eniet, provident deserunt.
                    
                </p>
                
                <div class="article_date">
                    <p>by Chef John Doe</p>
                    <p>December 20,2020</p>
                </div>
            </div>
            

        </div>

        <div class="article_main" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <p class="article_number">2.</p>
            <img src="img/gallery1.png" alt="">
            <div class="article_content">
                <h1>How We cook everyday?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptatem quisquam ipsum sint neque expeditaore et eniet, provident deserunt.</p>
                
                <div class="article_date">
                    <p>by Chef John Doe</p>
                    <p>December 20,2020</p>
                </div>
            </div>

        </div>

        <div class="article_main" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <p class="article_number">3.</p>
            <img src="img/gallery1.png" alt="">
            <div class="article_content">
                <h1>How We cook everyday?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptatem quisquam ipsum sint neque expeditaore et eniet, provident deserunt.</p>
                
                <div class="article_date" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                    <p>by Chef John Doe</p>
                    <p>December 20,2020</p>
                </div>
            </div>

        </div>

        <div class="article_main" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <p class="article_number">4.</p>
            <img src="img/gallery1.png" alt="">
            <div class="article_content">
                <h1>How We cook everyday?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptatem quisquam ipsum sint neque expeditaore et eniet, provident deserunt.</p>
                
                <div class="article_date">
                    <p>by Chef John Doe</p>
                    <p>December 20,2020</p>
                </div>
            </div>

        </div>

        <div class="blog_pagination_main" data-aos="zm-in" data-aos-duration="1000" data-aos-once="true">
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
    </div>



    <!-- ................................................................filler_content.............................. -->



<video width="100%" height="auto" loop autoplay muted >
  <source src="img/blog.mp4" type="video/mp4">
</video>

<div class="filler_container">
<div class="filler_main">
      <div class="filler1">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente aperiam perferendis fuga
          minus rem
        </p>
        <div class="item_content_info">
          <p>by Chef John Doe</p>
          <p>December 20,2020</p>
        </div>
      </div>
      <div class="filler2">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente aperiam perferendis fuga
          minus rem Lorem ipsum dolor sit amet consectetur Cum quas accusant consectetur Cum quas accusantium
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente
        </p>
      </div>
</div>
</div>


<?php include("footer.php") ?>

    
    
</body>
</html>