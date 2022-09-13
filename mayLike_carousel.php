

<div class="owl-carousel owl-theme">

    <div class="item">
        <div class="shop_card">
            <img src="img/shop_item1.jpg" loading="lazy" alt="">
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>        
    </div>

    <div class="item">
        <div class="shop_card">
            <img src="img/shop_item2.jpg" loading="lazy" alt="">
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>        
    </div>

    <div class="item">
        <div class="shop_card">
            <img src="img/shop_item3.jpg" loading="lazy" alt="">
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>        
    </div>

    <div class="item">
        <div class="shop_card">
            <img src="img/shop_item4.jpg" loading="lazy" alt="">
            <h1>Fried Egg<span>10$</span></h1>
            <hr>
            <p>catagories/chef</p>
        </div>        
    </div>


</div>

<script>
$('.owl-carousel').owlCarousel({
loop:false,
stagePadding:80,
// center:true,
margin:0,
responsiveClass:true,
dots:false,
responsive:{
    0:{
        items:1,
        stagePadding:0
        
    },
    500:{
        items:1,
        stagePadding:0
    },
    600:{
        items:1.7,
        
    },

    900:{
        items:2,
        
    },

    1500:{
        items:3,
    }
}
})

</script>
