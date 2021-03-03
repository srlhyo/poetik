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
        <div class="header__top">
            <div class="header__logo-wrapper">
            <img class="header__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/POETIK.png" alt="logo">
            </div>

            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-f social-icons__icon"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter social-icons__icon"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram social-icons__icon"></i></a></li>
                <li><a href="#"><i class="fab fa-soundcloud social-icons__icon"></i></a></li>
            </ul>
        </div>

        <div id="image-slider" class="splide header__slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/bridge.jpeg">' ?>
                    </li>
                    <li class="splide__slide">
                        <?php echo '<img src="' . get_template_directory_uri() . '/src/images/tag-team.jpg">' ?>
                    </li>
                    <li class="splide__slide">
                        <?php echo '<img src="' . get_template_directory_uri() . '/src/images/new.jpg">' ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="scrolldown-arrow">
            <i class="fas fa-chevron-down"></i>
        </div>
    </header>

    <section class="about">
    <div class="wrapper">
        <h2 class="title title_about">know poetik</h2>
        <span class="about__span"></span>
            <div class="about__desktop">
                <p>Poetik started his music career back in 2005, with a group called Freestyle Family - a union of various elements fom different groups in the UK. They all had the same objectives: expand the Portuguese HipHop culture in the UK. Along with the 3FS (Freestyle Family) Poetik lunch 5 mixtapes: Senoro total; The F-files; Taking Over vol 1, Taking Over vol 2 and Family Bizness. </p>
                <p>In 2011, Poetik decide to lunch his first solo project titled "Contra ventos & tempestades", followed by the second mixtape "Versos de Elite, in 2012. In the beginning of 2014, "Versos de Elite 2" is lunched and in the end of November of 2017 Poetik lunches the squel "Versos de elite 3".</p>
                <p>Poetik is still working, spreading the true essence of the hiphop culture, where he's been used as a reference and influence for many aspiring and made artists.</p>
            </div>
            <div class="about__small-screen">
                <p>Poetik started his music career back in 2005, with a group called Freestyle Family - a union of various elements fom different groups in the UK. They all had the same objectives: expand the Portuguese HipHop culture in the UK. Along with the 3FS (Freestyle Family) Poetik lunch 5 mixtapes: Senoro total; The F-files; Taking Over vol 1, Taking Over vol 2 and Family Bizness. </p>
                <span class="link link_about">read more</span>
            </div>
        </div>
    </section>

    <section class="modal modal_about">
        <div class="modal__close-btn">x</div>

        <h2 class="modal__title">know poetik</h2>

        <div class="modal__text">
            <p>Poetik started his music career back in 2005, with a group called Freestyle Family - a union of various elements fom different groups in the UK. They all had the same objectives: expand the Portuguese HipHop culture in the UK. Along with the 3FS (Freestyle Family) Poetik lunch 5 mixtapes: Senoro total; The F-files; Taking Over vol 1, Taking Over vol 2 and Family Bizness. </p>

            <p>In 2011, Poetik decide to lunch his first solo project titled "Contra ventos & tempestades", followed by the second mixtape "Versos de Elite, in 2012. In the beginning of 2014, "Versos de Elite 2" is lunched and in the end of November of 2017 Poetik lunches the squel "Versos de elite 3".</p>

            <p>Poetik is still working, spreading the true essence of the hiphop culture, where he's been used as a reference and influence for many aspiring and made artists.</p>
        </div>

        <img class="modal__arrow modal__arrow_about" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/scroll top.png" alt="scroll-up-arrow">
    </section>

    <section class="videos">
        <h2 class="title">videos</h2>

        <div class="videos__slider">
        </div>

        <div id="videosplide" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=wYWz93lP2L8">
                        <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/video1.PNG">' ?>
                    </li>
                    <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=VVu2f4BY5uU">
                        <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/video2.PNG">' ?>
                    </li>
                    <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=VanlYtToshA">
                        <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/video3.PNG">' ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="music">
        <h2 class="title">music</h2>

        <div class="music__slider">
        </div>

        <div id="music-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/barulho.jpg">' ?>
                    </li>
                    <li class="splide__slide">
                        <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/elite3.jpg">' ?>
                    </li>
                    <li class="splide__slide">
                        <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/elite2.jpg">' ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="btn-wrapper">
            <button class="btn btn_listen"><a href="https://linktr.ee/Rhymepoetik" target="_blank" style="text-decoration:none;color:inherit">listen</a></button>
            <button class="btn btn_download">download</button>
        </div>
    </section>

    <section class="tour">
    <div class="wrapper">
        <h2 class="title">tour</h2>

        <div class="tour__cards tour__cards_mobile">
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
        <span class="link link_tour">more dates</span>
        </div>
    </section>

    <section class="modal modal_tour">
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

        <img class="modal__arrow modal__arrow_tour" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/scroll top.png" alt="scroll-up-arrow">
</section>

    <section class="photos">
        <div class="wrapper">
            <h2 class="title">photos</h2>

            <div class="photos__slider">
            </div>

            <div id="photos-slider" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/live.jpeg">' ?>
                        </li>
                        <li class="splide__slide">
                            <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/smiling.jpeg">' ?>
                        </li>
                        <li class="splide__slide">
                            <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/live.jpeg">' ?>
                        </li>
                        <li class="splide__slide">
                            <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/staring.jpeg">' ?>
                        </li>
                        <li class="splide__slide">
                            <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/flying.jpeg">' ?>
                        </li>
                        <li class="splide__slide">
                            <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/smiling.jpeg">' ?>
                        </li>
                        <li class="splide__slide">
                            <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/bridge.jpeg">' ?>
                        </li>
                        <li class="splide__slide">
                            <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/live.jpeg">' ?>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="photos__grid">
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/live.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/staring.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/flying.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/smiling.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/serious.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/bridge.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/live.jpeg')">
                </div>
                <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/staring.jpeg')">
                </div>
            </div>
        </div>
    </section>

    <section class="shop">
        <div class="wrapper">
            <h2 class="title">shop</h2>
            <div class="shop__small-screen">
                <div class="shop__slider">
                </div>

                <div id="shop-slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/t-main.jpg">' ?>
                                <div class="overlay">
                                    <p>sold out</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/t3.jpg">' ?>
                                <div class="overlay">
                                    <p>sold out</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/cd3.jpg">' ?>
                                <div class="overlay">
                                    <p>sold out</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/cap1.jpg">' ?>
                                <div class="overlay">
                                    <p>sold out</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/t1.png">' ?>
                                <div class="overlay">
                                    <p>sold out</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/cd2.jpg">' ?>
                                <div class="overlay">
                                    <p>sold out</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/t2.jpg">' ?>
                                <div class="overlay">
                                    <p>sold out</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <?php echo '<img src="' .  get_template_directory_uri() . '/src/images/cd1.jpg">' ?>
                                <div class="overlay">
                                    <p>sold out</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shop__item-price">
                    <p>price: 21.89</p>
                </div>

                <button class="btn btn__buy">buy</button>
            </div>
            <div class="shop__grid">
                <div class="photo photo_shop">
                    <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/t-main.jpg')">
                        <div class="overlay">
                            <p>sold out</p>
                        </div>
                    </div>

                    <div class="shop__item-price">
                        <p>price: 21.89</p>
                    </div>

                    <button class="btn btn__buy">buy</button>
                </div>
                <div class="photo photo_shop">
                    <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/t3.jpg')">
                        <div class="overlay">
                            <p>sold out</p>
                        </div>
                    </div>

                    <div class="shop__item-price">
                        <p>price: 21.89</p>
                    </div>

                    <button class="btn btn__buy">buy</button>
                </div>
                <div class="photo photo_shop">
                    <div class="photo"style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/cd3.jpg')">
                        <div class="overlay">
                            <p>sold out</p>
                        </div>
                    </div>

                    <div class="shop__item-price">
                        <p>price: 21.89</p>
                    </div>

                    <button class="btn btn__buy">buy</button>
                </div>
                <div class="photo photo_shop">
                    <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/cap1.jpg')">
                        <div class="overlay">
                            <p>sold out</p>
                        </div>
                    </div>

                    <div class="shop__item-price">
                        <p>price: 21.89</p>
                    </div>

                    <button class="btn btn__buy">buy</button>
                </div>
                <div class="photo photo_shop">
                    <div class="photo"style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/t1.png')">
                        <div class="overlay">
                            <p>sold out</p>
                        </div>
                    </div>

                    <div class="shop__item-price">
                        <p>price: 21.89</p>
                    </div>

                    <button class="btn btn__buy">buy</button>
                </div>
                <div class="photo photo_shop">
                    <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/cd2.jpg')">
                        <div class="overlay">
                            <p>sold out</p>
                        </div>
                    </div>

                    <div class="shop__item-price">
                        <p>price: 21.89</p>
                    </div>

                    <button class="btn btn__buy">buy</button>
                </div>
                <div class="photo photo_shop">
                    <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/t2.jpg')">
                        <div class="overlay">
                            <p>sold out</p>
                        </div>
                    </div>

                    <div class="shop__item-price">
                        <p>price: 21.89</p>
                    </div>

                    <button class="btn btn__buy">buy</button>
                </div>
                <div class="photo photo_shop">
                    <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/cd1.jpg')">
                        <div class="overlay">
                            <p>sold out</p>
                        </div>
                    </div>
                        
                    <div class="shop__item-price">
                        <p>price: 21.89</p>
                    </div>

                    <button class="btn btn__buy">buy</button>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="wrapper_newsletter">
            <h2 class="title newsletter__large-screen-title">stay up to date</h2>
            <h2 class="title newsletter__small-screen-title">newsletter</h2>

            <form class="newsletter__form">
                <div class="newsletter__form-controllers">
                    <input class="newsletter__email" type="text" placeholder="email address">
                    <button class="btn btn__join">join</button>
                </div>
                <div class="link">
                    <p>terms</p>
                </div>
            </form>
        </div>
    </section>

    <footer class="footer">
        <h3 class="title title_footer">follow poetik</h3>

        <ul class="social-icons social-icons_footer">
                <li><a href="#"><i class="fab fa-facebook-f social-icons__icon"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter social-icons__icon"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram social-icons__icon"></i></a></li>
                <li><a href="#"><i class="fab fa-soundcloud social-icons__icon"></i></a></li>
            </ul>

        <div class="scrolltop-arrow">
            <i class="scrolltop-arrow__icon"></i>
        </div>
        <div class="wrapper">
            <div class="footer__author">
                <p>&copy; 2021 devduo</p>
            </div>
            <div class="footer__links-wrapper">
                <ul class="footer__links footer__links_left">
                    <li class="footer__author-link">&copy; 2021 devduo</li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">cookies settings</a></li>
                </ul>

                <ul class="footer__links footer__links_right">
                    <li><a href="#">terms of use</a></li>
                    <li><a href="#">ad choice</a></li>
                    <li><a href="#">cookies policy</a></li>
                </ul>

                <img class="main-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/main-arrow.png" alt="scroll-up-arrow">
            </div> 
        </div>
    </footer>
    <?php wp_footer() ?>
</body>
</html>