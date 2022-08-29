<header>
    <div class="top_menu">
        <nav>
        <img class="logo_img" src="img/logo.png" alt="">
        <div class ="logo">
            <a href="index.php"><p>STEAK</p>
            <p>House</p></a>
        </div>
        <ul class="left_nav">
            <li><a href="menu.php">Cusine</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="contact_us.php">Contact</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="shop.php">Shop</a></li>
        </ul>
    </nav>
    <ul class="right_nav">
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
        <li><a href=""><i class="fab fa-twitter"></i></a></li>
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-youtube"></i></a></li>
    </ul>
    <button id="menu_icon"><i class='bx bx-menu'  onclick="sidebar_active()" ></i></button>
   <button id="menu_close_icon"><i class='bx bx-x' onclick="sidebar_inactive()"></i></button>
    
    </div>

    
    <div class="responsive_menu">
        <div class="responsive_menu_container" >
        <ul class="responsive_menu_element">
            <li><a href="menu.php">MENU<i class='bx bx-food-menu side_nav_icon' ></i></a></li>
            <li><a href="reservation.php">RESERVATION<i class='bx bx-calendar side_nav_icon' ></i></a></li>
            <li><a href="contact_us.php">CONTACT<i class='bx bxs-phone-call side_nav_icon' ></i></a></li>
            <li><a href="blog.php">BLOG<i class='bx bxl-blogger side_nav_icon' ></i></a></li>
            <li><a href="about.php">ABOUT<i class='bx bxs-group side_nav_icon' ></i></a></li>
            <li><a href="shop.php">SHOP<i class='bx bx-cart side_nav_icon' ></i></a></li>
        </ul>
        </div>
    </div>
    
</header>
<script>
    
    function sidebar_active(){
       
        $('.responsive_menu').css("display","block");
        $('#menu_icon').css("display","none");
        $('#menu_close_icon').css("display","block");
        $('header').css("background-color","#100E0E");
       
      
        

    }
    function sidebar_inactive(){
        $('.responsive_menu').css("display","none")
        $('#menu_icon').css("display","block");
        $('#menu_close_icon').css("display","none");
        $('header').css("background-color","transparent");
        
    }
    function sidebar_inactive_responsive(){
        $('.responsive_menu').css("display","none")
        $('#menu_icon').css("display","none");
        $('#menu_close_icon').css("display","none");
        $('header').css("background-color","transparent");
    }

function myFunction(x) {
  if (x.matches) { // If media query matches
    sidebar_inactive_responsive();

  }else{
    sidebar_inactive();
  } 
}

var x = window.matchMedia("(min-width: 769px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
</script>