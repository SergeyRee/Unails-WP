<?php get_header(); ?>
    <!--HOME-->
    <section class="section-home">
        <div id="a1" class="home">
            <div style="background-image:url(<?php the_field('wallpaper', 2); ?>); background-size: cover; background-repeat: no-repeat; position: absolute; z-index: -5; width: 100%; height:740px">
            <div class="container text-center">
                <div class="home__inner">
                    <div class="home__title">
                        <h2><?php the_field('title', 2); ?></h2>
                    </div>
                    <div class="home__subtitle">
                        <p><?php the_field('subtitle', 2); ?></p>
                    </div>
                </div>
            </div>
            </div>
            <!-- <div class="row">
                <div class="social__items-home col-1 offset-11">
                    <a href="https://www.instagram.com/__usimarit__/?hl=en"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/instagram.svg" alt=""
                            class="social__icon-home row"></a>
                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/whatsapp.svg" alt="" class="social__icon-home row"></a>
                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/telegram.svg" alt="" class="social__icon-home row"></a>
                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="" class="social__icon-home row"></a>
                </div>
            </div> -->
        </div>
    </section>
    <!--SALE-->
    <div id="a2" class="sale">
        <div class="container">
            <h3><?php the_field('sale_title', 2); ?></h3>
            <p><?php the_field('sale_subtitle', 2); ?></p>
        </div>
    </div>
    <!--SERVICE-->
    <section class="section-service" style="background-image:url(<?php the_field('sale_wallpaper', 2); ?>); background-size: cover; background-repeat: no-repeat; width: 100%">
        <div class="service">
            <div class="container">
                <h3 class="chapter__title"><?php the_field('sale_title', 2); ?></h3>
                <div class="service__inner row text-center">

                <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'service-items',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                ?>
                <div class="card" style="width: 30%;"> <img src="<?php the_field('card_image'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <h4 class="card-price"><?php the_field('price'); ?></h4>
                        <p class="card-text"><?php the_field('card_description'); ?></p>
                    </div>
                </div>
            <?php
            }
        wp_reset_postdata();
        ?>
                </div>
                <!-- Superiority -->
                <div class="superiority">
                    <div class="row text-center">

                    <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'superiority',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                ?>
                <div class="superiority__item col-6"> 
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="superiority__icon">
                    <p class="superiority__title"><?php the_field('superiority_text'); ?></p>
                    <p class="superiority__text"><?php the_field('superiority_subtext'); ?></p>
                </div>
            <?php
            }
        wp_reset_postdata();
        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--GALLERY-->
    <section class="section-gallery">
        <div id="a3" class="gallery" style="background-image:url(<?php the_field('sale_wallpaper', 2); ?>); background-size: cover; background-repeat: no-repeat; width: 100%">

            <div class="container">
                <h3 class="chapter__title">Мои Работы</h3>
                <!-- Full-width images with number text -->
                <div class="mySlides">
                    <div class="numbertext">1 / 6</div> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/slide1.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">2 / 6</div> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/slide2.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">3 / 6</div> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/slide1.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">4 / 6</div> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/slide2.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">5 / 6</div> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/slide1.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">6 / 6</div> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/slide2.jpg" style="width:100%">
                </div>
                <!-- Next and previous buttons --><a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next"
                    onclick="plusSlides(1)">&#10095;</a>
                <!-- Image text -->
                <div class="caption-container">
                    <p id="caption"></p>
                </div>
                <!-- Thumbnail images -->
                <div class="row">
                    <div class="column"> <img class="demo cursor" src="<?php echo bloginfo('template_url'); ?>/assets/img/slide1.jpg" style="width:100%"
                            onclick="currentSlide(1)" alt="some description"> </div>
                    <div class="column"> <img class="demo cursor" src="<?php echo bloginfo('template_url'); ?>/assets/img/slide2.jpg" style="width:100%"
                            onclick="currentSlide(2)" alt="some description"> </div>
                    <div class="column"> <img class="demo cursor" src="<?php echo bloginfo('template_url'); ?>/assets/img/slide1.jpg" style="width:100%"
                            onclick="currentSlide(3)" alt="some description"> </div>
                    <div class="column"> <img class="demo cursor" src="<?php echo bloginfo('template_url'); ?>/assets/img/slide2.jpg" style="width:100%"
                            onclick="currentSlide(4)" alt="some description"> </div>
                    <div class="column"> <img class="demo cursor" src="<?php echo bloginfo('template_url'); ?>/assets/img/slide1.jpg" style="width:100%"
                            onclick="currentSlide(5)" alt="some description"> </div>
                    <div class="column"> <img class="demo cursor" src="<?php echo bloginfo('template_url'); ?>/assets/img/slide2.jpg" style="width:100%"
                            onclick="currentSlide(6)" alt="some description"> </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT - MAP-->
    <section class="section-contacts">
        <div class="map">
            <div class="container">
                <h3 class="chapter__title">Мои Контакты</h3>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2491.6247282082463!2d16.37094590461666!3d48.208278457576064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d079f2959e943%3A0xa136325952cf712e!2sStephansplatz!5e0!3m2!1sen!2sat!4v1595683353645!5m2!1sen!2sat"
                width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
        <!--CONTACT-->
        <div class="contact">
            <div id="a4" class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="contact__title">Коротко о нас</div>
                        <div class="contact__text"><?php the_field('contact_info', 2); ?></div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact__title">Контакты</div>
                        <div class="contact__text"> <img src="img/phone.svg" alt="" class="contact__icon"> <a
                                href="tel:<?php the_field('phone', 2); ?>"><?php the_field('phone', 2); ?></a> </div>
                        <div class="contact__text"> <img src="img/gps.svg" alt="" class="contact__icon"> <a
                                href="#"><?php the_field('address', 2); ?></a> </div>
                        <div class="contact__text"> <img src="img/mail.svg" alt="" class="contact__icon"> <a
                                href="#"><?php the_field('email', 2); ?></a> </div>
                        <div class="social__items">
                            <a href="https://www.instagram.com/__usimarit__/?hl=en"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/instagram.svg" alt=""
                                    class="social__icon"></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/whatsapp.svg" alt="" class="social__icon"></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/telegram.svg" alt="" class="social__icon"></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="" class="social__icon"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12"></div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>