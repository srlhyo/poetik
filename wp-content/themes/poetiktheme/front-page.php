<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poetik Website</title>

    <?php wp_head() ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__top">
                <div class="header__logo-wrapper">
                    <img class="header__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/POETIK.png" alt="logo">
                </div>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/Rhymepoetik/" target="_blank"><i class="fab fa-facebook-f social-icons__icon"></i></a></li>
                    <li><a href="https://twitter.com/Rhymepoetik?s=09" target="_blank"><i class="fab fa-twitter social-icons__icon"></i></a></li>
                    <li><a href="https://www.instagram.com/rhyme_poetik/?hl=en" target="_blank"><i class="fab fa-instagram social-icons__icon"></i></a></li>
                    <li><a href="https://open.spotify.com/artist/7axOuj8wyBAsilUWPG3Gfr" target="_blank"><i class="fab fa-spotify social-icons__icon"></i></a></li>
                </ul>
            </div>
            <div class="hero spacing" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/flying.jpeg'),
                                    radial-gradient(#c3461d, #ff9600);">
                                    <!-- radial-gradient(#f90, #fcb900);"> -->
                <h2 class="title">Interview for The Spotlight</h2>
                <p>Get your popocorns, sit back and enjoy it!</p>
                <button id="trailer" class="btn btn_news">watch the interview</button>
            </div>
            <div class="popup popup_header">
                <span class="popup__close-btn">X</span>
                <iframe id="popupVideo" class="popup__video" width="560" height="315" src="https://www.youtube.com/embed/Va5uWtsU6J8"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
                
            </div>
        </div> 
    </header>

    <section class="about">
        <div class="container">
            <img class="about__image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/bridge-dark-1.png" alt="">
            <h2 class="title title_about">know poetik</h2>
            <div class="about__desktop">
                <p>Poetik started his music career back in 2005, with a group called Freestyle Family - a union of various elements fom different groups in the UK. They all had the same objectives: expand the Portuguese HipHop culture in the UK. Along with the 3FS (Freestyle Family) Poetik launched 5 mixtapes: Senoro total; The F-files; Taking Over vol 1, Taking Over vol 2 and Family Bizness. </p>
                <p>In 2011, Poetik decided to launch his first solo project titled "Contra ventos & tempestades", followed by the second mixtape "Versos de Elite, in 2012. In the beginning of 2014, "Versos de Elite 2" is launched and in the end of November of 2017 Poetik launched the squel "Versos de elite 3".</p>
                <p>Poetik is still working, spreading the true essence of the hiphop culture, where he's been used as a reference and influence for many aspiring and made artists.</p>
            </div>
            <div class="about__small-screen">
                <p>Poetik started his music career back in 2005, with a group called Freestyle Family - a union of various elements fom different groups in the UK. They all had the same objectives: expand the Portuguese HipHop culture in the UK. Along with the 3FS (Freestyle Family) Poetik launched 5 mixtapes: Senoro total; The F-files; Taking Over vol 1, Taking Over vol 2 and Family Bizness. </p>
                <span class="link link_about">read more</span>
            </div>
        </div>
    </section>

    <section class="modal modal_about">
        <div class="container">
            <div class="modal__close-btn">x</div>
            <h2 class="modal__title">know poetik</h2>
            <div class="modal__text">
                <p>Poetik started his music career back in 2005, with a group called Freestyle Family - a union of various elements fom different groups in the UK. They all had the same objectives: expand the Portuguese HipHop culture in the UK. Along with the 3FS (Freestyle Family) Poetik launched 5 mixtapes: Senoro total; The F-files; Taking Over vol 1, Taking Over vol 2 and Family Bizness. </p>
                <p>In 2011, Poetik decide to launched his first solo project titled "Contra ventos & tempestades", followed by the second mixtape "Versos de Elite, in 2012. In the beginning of 2014, "Versos de Elite 2" is launched and in the end of November of 2017 Poetik launched the squel "Versos de elite 3".</p>
                <p>Poetik is still working, spreading the true essence of the hiphop culture, where he's been used as a reference and influence for many aspiring and made artists.</p>
            </div>
            <img class="modal__arrow modal__arrow_about" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/scroll-top.png" alt="scroll-up-arrow">
        </div>
    </section>

    <section class="videos">
        <div class="container">
            <h2 class="title">videos</h2>
            <div class="videos__grid">
                <div class="videos__row">
                    <div class="videos__item">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VanlYtToshA"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="videos__row">
                    <div class="videos__item">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pBlLJwjbzyU"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                        </iframe>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

    <section class="music">
        <div class="container">
            <h2 class="title">music</h2>
            <div class="music__grid">
                <div class="music__row">
                    <img class="music__image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/elite3.jpg" alt="">
                    <div class="videos__item">
                        <iframe src="https://open.spotify.com/embed/album/6MYNMcgg4l52iZJWFVj2k1" width="300" height="380"
                            frameborder="0"
                            allowtransparency="true"
                            allow="encrypted-media">
                        </iframe>
                    </div>
                </div>
                <div class="music__row">
                    <img class="music__image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/elite2.jpg" alt="">
                    <div class="videos__item">
                        <iframe src="https://open.spotify.com/embed/album/1QmxwzyFD3k6fw9W5arfnY" width="300" height="380"
                        frameborder="0"
                        allowtransparency="true"
                        allow="encrypted-media">
                        </iframe>
                    </div>
                </div>
            
            
            </div>
            <div class="btn-wrapper">
                <p class="more-content">**do you want to check out more content?**</p>
                <button class="btn btn_listen"><a href="https://linktr.ee/Rhymepoetik" target="_blank" style="text-decoration:none;color:inherit">go to the linktree</a></button>
                <!-- <button class="btn btn_download">download</button> -->
            </div>
        </div>
    </section>

    <section class="tour">
        <div class="container">
            <h2 class="title">tour dates</h2>
            <p class="no-dates">There are currently no forthcoming gigs confirmed. Sign up to recieve updates.</p>
            <!-- <div class="tour__cards tour__cards_mobile">
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
            </div>
            <div class="tour__cards tour__cards_tablet">
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
            </div>
            <div class="tour__cards tour__cards_desktop">
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
                <div class="card">
                    <p class="tour__date">jun 2</p>
                    <h3 class="tour__city">cardiff, cf, uk</h3>
                    <p class="tour__venue">principality arena</p>
                    <p class="tour__info">rescheduled date**</p>
                    <a href="#" class="tour__tickets">tickets</a>
                </div>
            </div>
            
            <span class="link link_tour">more dates</span> -->
        </div>
    </section>

    <section class="modal modal_tour">
        <div class="container">
            <div class="modal__close-btn modal__tour-close-btn">
                <span>x</span>
            </div>
            <h2 class="modal__title">tour</h2>
            <div class="modal__cards modal__cards_mobile">
                <div class="card">
                    <p class="modal__date">jun 2</p>
                    <h3 class="modal__city">cardiff, cf, uk</h3>
                    <p class="modal__venue">principality arena</p>
                    <p class="modal__info">rescheduled date**</p>
                    <p class="modal__tickets">tickets</p>
                </div>
                <div class="card">
                    <p class="modal__date">jun 2</p>
                    <h3 class="modal__city">cardiff, cf, uk</h3>
                    <p class="modal__venue">principality arena</p>
                    <p class="modal__info">rescheduled date**</p>
                    <p class="modal__tickets">tickets</p>
                </div>
                <div class="card">
                    <p class="modal__date">jun 2</p>
                    <h3 class="modal__city">cardiff, cf, uk</h3>
                    <p class="modal__venue">principality arena</p>
                    <p class="modal__info">rescheduled date**</p>
                    <p class="modal__tickets">tickets</p>
                </div>
                <div class="card">
                    <p class="modal__date">jun 2</p>
                    <h3 class="modal__city">cardiff, cf, uk</h3>
                    <p class="modal__venue">principality arena</p>
                    <p class="modal__info">rescheduled date**</p>
                    <p class="modal__tickets">tickets</p>
                </div>
                <div class="card">
                    <p class="modal__date">jun 2</p>
                    <h3 class="modal__city">cardiff, cf, uk</h3>
                    <p class="modal__venue">principality arena</p>
                    <p class="modal__info">rescheduled date**</p>
                    <p class="modal__tickets">tickets</p>
                </div>
                <div class="card">
                    <p class="modal__date">jun 2</p>
                    <h3 class="modal__city">cardiff, cf, uk</h3>
                    <p class="modal__venue">principality arena</p>
                    <p class="modal__info">rescheduled date**</p>
                    <p class="modal__tickets">tickets</p>
                </div>
            </div>
            <div class="modal__cards modal__cards_tablet">
                <div class="card">
                    <p class="modal__date">jun 2</p>
                    <h3 class="modal__city">cardiff, cf, uk</h3>
                    <p class="modal__venue">principality arena</p>
                    <p class="modal__info">rescheduled date**</p>
                    <p class="modal__tickets">tickets</p>
                </div>
                <div class="card">
                    <p class="modal__date">jun 2</p>
                    <h3 class="modal__city">cardiff, cf, uk</h3>
                    <p class="modal__venue">principality arena</p>
                    <p class="modal__info">rescheduled date**</p>
                    <p class="modal__tickets">tickets</p>
                </div>
                <div class="card">
                    <p class="modal__date">jun 2</p>
                    <h3 class="modal__city">cardiff, cf, uk</h3>
                    <p class="modal__venue">principality arena</p>
                    <p class="modal__info">rescheduled date**</p>
                    <p class="modal__tickets">tickets</p>
                </div>
            </div>
            <img class="modal__arrow modal__arrow_tour" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/scroll-top.png" alt="scroll-up-arrow">
        </div>
    </section>

    <section class="photos">
        <div class="container">
            <h2 class="title">photos</h2>
            <div class="photos__slider">
            </div>
            <div class="photos__grid">
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/staring.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/live.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/flying.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/bridge.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/smiling.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/serious.jpeg')">
                </div>
            </div>
        </div>
    </section>

    <section class="shop">
        <div class="container">
            <h2 class="title">poetik's merch</h2>
            <div class="shop__grid">
                <article class="shop__item spacing">
                    <div class="shop__item-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/t-1.jpg" alt="" class="shop__image">
                    </div>
                    <h3 class="shop__title">a prototype design</h3>
                    <p class="shop__description">Feel free to contact Poetik if you're interested in the product. He'll get back to you with
                        the info shortly.
                    </p>
                    <button class="btn btn_contact">contact me</button>
                </article>
                <article class="shop__item spacing">
                    <div class="shop__item-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/t-2.jpg" alt="" class="shop__image">
                    </div>
                    <h3 class="shop__title">a prototype design</h3>
                    <p class="shop__description">Feel free to contact Poetik if you're interested in the product. He'll get back to you with
                        the info shortly.
                    </p>
                    <button class="btn btn_contact">contact me</button>
                </article>
                <article class="shop__item spacing">
                    <div class="shop__item-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/t-3.jpg" alt="" class="shop__image">
                    </div>
                    <h3 class="shop__title">a prototype design</h3>
                    <p class="shop__description">Feel free to contact Poetik if you're interested in the product. He'll get back to you with
                        the info shortly.
                    </p>
                    <button class="btn btn_contact">contact me</button>
                </article>
                <article class="shop__item spacing">
                    <div class="shop__item-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/t-4.jpg" alt="" class="shop__image">
                    </div>
                    <h3 class="shop__title">a prototype design</h3>
                    <p class="shop__description">Feel free to contact Poetik if you're interested in the product. He'll get back to you with
                        the info shortly.
                    </p>
                    <button class="btn btn_contact">contact me</button>
                </article>
                <article class="shop__item spacing">
                    <div class="shop__item-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/t-5.jpg" alt="" class="shop__image">
                    </div>
                    <h3 class="shop__title">a prototype design</h3>
                    <p class="shop__description">Feel free to contact Poetik if you're interested in the product. He'll get back to you with
                        the info shortly.
                    </p>
                    <button class="btn btn_contact">contact me</button>
                </article>
                <article class="shop__item spacing">
                    <div class="shop__item-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/t-6.jpeg" alt="" class="shop__image">
                    </div>
                    <h3 class="shop__title">a prototype design</h3>
                    <p class="shop__description">Feel free to contact Poetik if you're interested in the product. He'll get back to you with
                        the info shortly.
                    </p>
                    <button class="btn btn_contact">contact me</button>
                </article>
            </div>
        </div>
            <div class="popup popup_contact">
                <?php echo do_shortcode( '[contact-form-7 id="18" title="Contact form 1"]' ); ?> <!-- id=18 when live -->
                <span class="popup__close-btn popup_contact-closeBtn">X</span>
            </div>
    </section>

    <section class="newsletter" id="subscribeNewsletter">
        <div class="container">
            <h2 class="title newsletter__large-screen-title">stay up to date</h2>
            <h2 class="title newsletter__small-screen-title">newsletter</h2>
            <?php echo do_shortcode('[contact-form-7 id="21" title="my newsletter form"]'); ?> <!-- id=21 when live -->
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <h3 class="title title_footer">follow poetik</h3>
            <ul class="social-icons social-icons_footer">
                    <li><a href="https://www.facebook.com/Rhymepoetik/" target="_blank"><i class="fab fa-facebook-f social-icons__icon"></i></a></li>
                    <li><a href="https://twitter.com/Rhymepoetik?s=09" target="_blank"><i class="fab fa-twitter social-icons__icon"></i></a></li>
                    <li><a href="https://www.instagram.com/rhyme_poetik/?hl=en" target="_blank"><i class="fab fa-instagram social-icons__icon"></i></a></li>
                    <li><a href="https://open.spotify.com/artist/7axOuj8wyBAsilUWPG3Gfr" target="_blank"><i class="fab fa-spotify social-icons__icon"></i></a></li>
                </ul>
            <div class="scrolltop-arrow">
                <i class="scrolltop-arrow__icon"></i>
            </div>
            <div class="wrapper">
                <div class="footer__author">
                    <p>&copy; 2021 devduo</p>
                </div>
                <div class="footer__links-wrapper" id="mylinks">
                    <ul class="footer__links footer__links_left">
                        <li class="footer__author-link">&copy; 2021 devduo</li>
                        <li><a href="#mylinks">privacy policy</a></li>
                        <li><a href="#mylinks">cookies settings</a></li>
                    </ul>
                    <ul class="footer__links footer__links_right">
                        <li><a href="#mylinks">terms of use</a></li>
                        <li><a href="#mylinks">ad choice</a></li>
                        <li><a href="#mylinks">cookies policy</a></li>
                    </ul>
                    <img class="main-arrow move move_desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/main-arrow.png" alt="scroll-up-arrow">
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>
</html>