<?php /* Template Name : Home */ ?>


<?php get_header(); ?>


<?php

    //   Header

    $title = get_field("first_text");
    $first_img2 = get_field("first_img2");
    $img2_link = get_field("img2_link");
    $img2_link2 = get_field("img2_link2");
    $first_img3 = get_field("first_img3");
    $img3_link = get_field("img3_link");
    $img3_link2 = get_field("img3_link2");

    // Slider
    
    $slide_title = get_field("slide_title");
    $slide1 = get_field("slide1");

    $slide1_link = get_field("slide1_link");
    $slide1_text = get_field("slide1_text");

    $slide2 = get_field("slide2");
    $slide2_text = get_field("slide2_text");

    $slide3 = get_field("slide3");
    $slide3_text = get_field("slide3_text");

    $slide4 = get_field("slide4");
    $slide4_link = get_field("slide4_link");
    $slide4_text = get_field("slide4_text");

    $slide5 = get_field("slide5");
    $slide5_link = get_field("slide5_link");
    $slide5_text = get_field("slide5_text");

    $slide6 = get_field("slide6");
    $slide6_link = get_field("slide6_link");
    $slide6_text = get_field("slide6_text");

    $slide7 = get_field("slide7");
    $slide7_text = get_field("slide7_text");

    $slide8 = get_field("slide8");
    $slide8_text = get_field("slide8_text");

    $slide9 = get_field("slide9");
    $slide9_link = get_field("slide9_link");
    $slide9_text = get_field("slide9_text");

    // Middle-News

    $img1 = get_field("img1");
    $img2 = get_field("img2");
    $img1_text = get_field("img1_text");
    $img2_text = get_field("img2_text");

    $trend_title = get_field("trend_title");
    $trend_text1 = get_field("trend_text1");
    $trend_text2 = get_field("trend_text2");
    $trend_text3 = get_field("trend_text3");
    $trend_text4 = get_field("trend_text4");
    $trend_text5 = get_field("trend_text5");

    
?>


<main>
    <article class="top-news">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8 articles">
                            <div class="img">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                Egypt
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $title; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 small">
                            <div class="card col-sm-6 col-md-12" style="padding : 0">
                                <img src="<?php echo $first_img2['url']; ?>">
                                <div class="overlay">
                                    <div class="gradient">
                                        <a class="card-text">
                                            <?php echo $img2_link?>
                                        </a>
                                        <h4>
                                            <a href="#" class="text-white"><?php echo $img2_link2?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 small">
                            <div class="card col-sm-6 col-md-12" style="padding : 0">
                                <img src="<?php echo $first_img3['url']; ?>">
                                <div class="overlay">
                                    <div class="gradient">
                                        <a class="card-text">
                                            <?php echo $img3_link?>
                                        </a>
                                        <h4>
                                            <a href="#" class="text-white"><?php echo $img3_link2?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advs col-md-4 col-12">
                    <h2 class="text-center">advertisment</h2>
                    <div></div>
                </div>
            </div>
        </div>
    </article>
    <div class="container">
        <div class="row">
            <div class="col-12 h">
                <hr class="hr">
            </div>
        </div>
    </div>
    <article class="top-news2">
        <div class="container">
            <div class="row">
                <div class="col-12 no-padding">
                    <h3 class="title">
                        <a href="#" target="_blank"><?php echo $slide_title ?></a>
                    </h3>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="item-info">
                            <div class="img9" style = "background-image: url(<?php echo $slide9["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide9_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide9_text ?></a></h3>
                                    </div>
                                </section>
                            </div> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img2" style = "background-image: url(<?php echo $slide1["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide1_text ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img3" style = "background-image: url(<?php echo $slide2["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide2_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img4" style = "background-image: url(<?php echo $slide3["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide3_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img5" style = "background-image: url(<?php echo $slide4["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide4_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide4_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img6" style = "background-image: url(<?php echo $slide5["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide5_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide5_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img7" style = "background-image: url(<?php echo $slide6["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide6_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide6_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img8" style = "background-image: url(<?php echo $slide7["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide5_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide7_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img" style = "background-image: url(<?php echo $slide8["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide8_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img" style = "background-image: url(<?php echo $slide8["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide8_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img" style = "background-image: url(<?php echo $slide8["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide8_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img" style = "background-image: url(<?php echo $slide8["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide8_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12 h">
                <hr class="hr">
            </div>
            <div class="col-md-4 d-none d-md-block">
                <hr class="hr">
            </div>
        </div>
    </div>
    <article class="middle-news">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="row">
                        <div class="col-12 no-padding">
                            <h3 class="title-mid">
                                <a href="#" target="_blank"><?php echo $slide9_link ?></a>
                            </h3>
                        </div>
                        <div class="col-md-6 col-12 left">
                            <div class="img" style = "background-image: url(<?php echo $img1["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide9_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $img1_text ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 left">
                            <div class="img-left" style = "background-image: url(<?php echo $img2["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide9_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $img2_text ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 right">
                    <div class="row">
                        <div class="col-12 title-right">
                            <h3>
                                <a href="#" target="_blank"> <?php echo $trend_title; ?> </a>
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 list">
                            <ul class="list-group">
                                <a href="#"><li class="list-group-item d-flex">
                                    <span class="badge badge-danger">1</span>
                                    <p class="ellipsis"><?php echo $trend_text1; ?></p>
                                </li></a>
                                <a href="#"><li class="list-group-item d-flex">
                                    <span class="badge badge-danger">2</span>
                                    <p class="ellipsis"><?php echo $trend_text2; ?></p>
                                </li></a>
                                <a href="#"><li class="list-group-item d-flex">
                                    <span class="badge badge-danger">3</span>
                                    <p class="ellipsis"><?php echo $trend_text3; ?></p>
                                </li></a>
                                <a href="#"><li class="list-group-item d-flex">
                                    <span class="badge badge-danger">4</span>
                                    <p class="ellipsis"><?php echo $trend_text4; ?></p>
                                </li></a>
                                <a href="#"><li class="list-group-item d-flex">
                                    <span class="badge badge-danger">5</span>
                                    <p class="ellipsis"><?php echo $trend_text5; ?></p>
                                </li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="advs">
                                <h2 class="text-center">advertisment</h2>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <div class="container">
        <div class="row">
            <div class="col-12 h">
                <hr class="hr">
            </div>
        </div>
    </div>
    <article class="top-news2">
        <div class="container">
            <div class="row">
                <div class="col-12 no-padding">
                    <h3 class="title">
                        <a href="#" target="_blank">middle East</a>
                    </h3>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="item-info">
                            <div class="img9" style = "background-image: url(<?php echo $slide9["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide9_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide9_text ?></a></h3>
                                    </div>
                                </section>
                            </div> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img2" style = "background-image: url(<?php echo $slide1["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide1_text ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img3" style = "background-image: url(<?php echo $slide2["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide2_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img4" style = "background-image: url(<?php echo $slide3["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide3_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img5" style = "background-image: url(<?php echo $slide4["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide4_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide4_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img6" style = "background-image: url(<?php echo $slide5["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide5_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide5_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img7" style = "background-image: url(<?php echo $slide6["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide6_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide6_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img8" style = "background-image: url(<?php echo $slide7["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide5_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide7_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img" style = "background-image: url(<?php echo $slide8["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide8_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img" style = "background-image: url(<?php echo $slide8["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide8_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img" style = "background-image: url(<?php echo $slide8["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide8_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <div class="img" style = "background-image: url(<?php echo $slide8["url"]?>);">
                                <section>
                                    <div class="gradient">
                                        <div>
                                            <a class="category">
                                                <?php echo $slide1_link ?>
                                            </a>
                                        </div>
                                        <h3><a class="text-white"><?php echo $slide8_text; ?></a></h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>