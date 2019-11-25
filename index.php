<?php

include_once 'header.php'

?>
<!--header area end-->
<!--header bottom satrt-->
<div class="header_bottom">
    <div class="row align-items-center">
        <div class="column1 col-lg-3 col-md-6">
            <div class="categories_menu">
                <div class="categories_title">
                    <h2 class="categori_toggle">ALL CATEGORIES</h2>
                </div>
                <div class="categories_menu_toggle">
                    <ul>

                        <?php

                        $query = "SELECT DISTINCT name  FROM `parent_cat`";
                        $result = mysqli_query($con,$query);

                        while( $row = mysqli_fetch_array($result)){

                            $parent_cat = $row['name'];

                            ?>
                            <li class="menu_item_children"><a href="#"> <?php echo $row['name'] ?> <i class="fa fa-angle-right"></i></a>
                                <ul class="categories_mega_menu column_3">
                                    <?php

                                    $query1 = "SELECT DISTINCT main_cat FROM `category` WHERE parent_cat = '$parent_cat'";
                                    $result1 = mysqli_query($con,$query1);

                                    while( $row1 = mysqli_fetch_array($result1)){


                                        ?>
                                        <li class="menu_item_children"><a href="#"><?php echo $row1['main_cat'] ?></a>
                                            <ul class="categorie_sub_menu">
                                                <?php
                                                $parent_cat1 = $row1['main_cat'];
                                                $query2 = "SELECT DISTINCT category FROM `category` WHERE main_cat = '$parent_cat1'";
                                                $result2 = mysqli_query($con,$query2);

                                                while( $row2 = mysqli_fetch_array($result2)){



                                                    ?>
                                                    <li><a href="#"><?php echo $row2['category'] ?></a></li>
                                                <?php }  ?>
                                            </ul>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </li>

                        <?php } ?>

                        <li id="cat_toggle" class="has-sub"><a href="#"> More Categories</a>
                            <ul class="categorie_sub">
                                <li><a href="#">Hide Categories</a></li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="column2 col-lg-6 ">
            <div class="search_container">
                <form action="#">

                    <div class="search_box">
                        <input placeholder="Search product..." type="text">
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
<!--header bottom end-->
<!--slider area start-->
<section class="slider_section slider_s_two mb-60 mt-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3 col-md-12">
                <div class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal">
                    <div class="slider_area swiper-wrapper">
                        <?php
                        $query = "SELECT * FROM `slides`  ORDER BY id DESC LIMIT 1";
                        $result = mysqli_query($con,$query);
                        while($row = mysqli_fetch_array($result)){

                            ?>

                            <div class="single_slider swiper-slide d-flex align-items-center swiper-slide-active" data-bgimg="assets/img/slider/<?php echo $row['image'] ?>" style="width: 930px; background-image: url(&quot;assets/img/slider/slider5.jpg&quot;); margin-right: 4px;">

                            </div>
                        <?php } ?>
                        <?php
                        $query = "SELECT * FROM `slides`  ORDER BY id DESC LIMIT 1,4";
                        $result = mysqli_query($con,$query);
                        while($row = mysqli_fetch_array($result)){

                            ?>

                            <div class="single_slider swiper-slide d-flex align-items-center swiper-slide-next" data-bgimg="assets/img/slider/<?php echo $row['image'] ?>" style="width: 930px; background-image: url(&quot;assets/img/slider/slider6.jpg&quot;); margin-right: 4px;">

                            </div>

                        <?php } ?>

                    </div>
                    <!-- Add Arrows -->

                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" style="width: 229.25px; margin-right: 4px;">
                            New Collection Sport Clothes For Men’s
                        </div>
                        <div class="swiper-slide swiper-slide-visible swiper-slide-next" style="width: 229.25px; margin-right: 4px;">
                            <a href="#"></a>
                            Clear &amp; Modern Minimalist Chair 2019
                        </div>
                        <div class="swiper-slide swiper-slide-visible" style="width: 229.25px; margin-right: 4px;">
                            Eodem modo vel mattis ante facilisis nec
                        </div>
                        <div class="swiper-slide swiper-slide-visible" style="width: 229.25px; margin-right: 4px;">
                            Wooden Minimalist Chair 2019
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

            </div>
        </div>
    </div>
</section>
<!--shipping area start-->
<div class="shipping_area mb-60">
    <div class="container">
        <div class="shipping_inner">
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="assets/img/about/shipping1.png" alt="">
                </div>
                <div class="shipping_content">
                    <h4>Free Delivery</h4>
                    <p>For all oders over $120</p>
                </div>
            </div>
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="assets/img/about/shipping2.png" alt="">
                </div>
                <div class="shipping_content">
                    <h4>Free Delivery</h4>
                    <p>For all oders over $120</p>
                </div>
            </div>
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="assets/img/about/shipping3.png" alt="">
                </div>
                <div class="shipping_content">
                    <h4>Free Delivery</h4>
                    <p>For all oders over $120</p>
                </div>
            </div>
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="assets/img/about/shipping4.png" alt="">
                </div>
                <div class="shipping_content">
                    <h4>Free Delivery</h4>
                    <p>For all oders over $120</p>
                </div>
            </div>
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="assets/img/about/shipping5.png" alt="">
                </div>
                <div class="shipping_content">
                    <h4>Free Delivery</h4>
                    <p>For all oders over $120</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shipping area end-->

<!--home section bg area start-->
<div class="home_section_bg">




    <!--product area start-->
    <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                            <h2>New arrival</h2>

                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Computer" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <?php
                        $query = "SELECT * FROM `product`";
                        $result = mysqli_query($con,$query);
                        while($row = mysqli_fetch_array($result))
                        { ?>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href=""><img src="assets/img/product//<?php echo $row['image'] ?>" alt="" style="width: 200px; height: 200px"></a>
                                            <div class="label_product">
                                                <span class="label_sale">New</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="#"><?php echo $row['name'] ?></a></h4>
                                                <div class="price_box">

                                                    <span class="current_price">Rs: <?php echo $row['price'] ?></span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="#" title="Add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </figure>
                                </article>

                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>

        </div>
    </div>


</div>
<!--home section bg area end-->

<?php



include_once 'footer.php'

?>

<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

</html>