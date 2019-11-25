<?php


include_once 'header.php';


$query = "SELECT * FROM `about` where id='1'";
$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result);


?>
<div class="header_bottom">
    <div class="row align-items-center">
        <div class="column1 col-lg-3 col-md-6">
            <div class="categories_menu categories_three">
                <div class="categories_title">
                    <h2 class="categori_toggle">ALL CATEGORIES</h2>
                </div>
                <div class="categories_menu_toggle">
                    
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
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li>about us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--about bg area start-->
<div class="about_bg_area">
    <div class="container">
        <!--about section area -->
        <section class="about_section mb-60">
            <div class="row align-items-center">
                <div class="col-12">
                    <figure>
                        <div class="about_thumb">
                            <img src="assets/img/about//<?php echo $row['image'] ?>" alt="">
                        </div>
                        <figcaption class="about_content">
                            <h1><?php echo $row['heading'] ?></h1>
                            <p><?php echo $row['content'] ?></p>

                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <!--about section end-->

        <!--chose us area start-->
        <div class="choseus_area" data-bgimg="assets/img/about/about-us-policy-bg.jpg">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="assets/img/about/About_icon1.png" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Creative Design</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="assets/img/about/About_icon2.png" alt="">
                        </div>
                        <div class="chose_content">
                            <h3></h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="assets/img/about/About_icon3.png" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Online Support 24/7</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--chose us area end-->

        <!--services img area-->
        <div class="about_gallery_section mb-55">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="assets/img/about/<?php echo $row['whatwedopic'] ?>" alt="">
                            </div>
                            <figcaption class="about_gallery_content">
                                <?php echo $row['whatwedodesc'] ?>


                                                  </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-4">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="assets/img/about/<?php echo $row['ourmissionpic'] ?>" alt="">
                            </div>
                            <figcaption class="about_gallery_content">

                                <?php echo $row['ourmissiondesc'] ?>

                                 </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-4">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="assets/img/about/<?php echo $row['historyofuspic'] ?>" alt="">
                            </div>
                            <figcaption class="about_gallery_content">

                                <?php echo $row['historydesc'] ?>

                                  </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
        <!--services img end-->

     </div>
</div>
<!--about bg area end-->

<?php

include_once 'footer.php'

?>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>


<!-- Mirrored from demo.hasthemes.com/antomi-preview/antomi/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Nov 2019 06:08:20 GMT -->
</html>