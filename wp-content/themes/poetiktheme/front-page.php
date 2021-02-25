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
        <div class="header__logo-wrapper">
        <img class="header__logo" src="<?php echo get_stylesheet_directory_uri(); ?>./src/images/POETIK.png" alt="logo">
        </div>
        <!-- <h1 class="logo">poetik</h1> -->

        <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook-f social-icons__icon"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter social-icons__icon"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram social-icons__icon"></i></a></li>
            <li><a href="#"><i class="fab fa-soundcloud social-icons__icon"></i></a></li>
        </ul>

        <div class="head-slider">
            <div class="head-slider__wrapper">
                <img class="head-slider__img" src="<?php echo get_stylesheet_directory_uri(); ?>./src/images/main4.jpeg" alt="poetik on the bridge">
            </div>
        </div>
        
        <img class="scroll-down-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>./src/images/scroll-down-arrow.png" alt="arrow">
        
    </header>

    <section class="about">
        <h2 class="about__title">know poetik</h2>
        <span class="about__span"></span>
            <div class="about__desktop">
                <p>Poetik started his music career back in 2005, with a group called Freestyle Family - a union of various elements fom different groups in the UK. They all had the same objectives: expand the Portuguese HipHop culture in the UK. Along with the 3FS (Freestyle Family) Poetik lunch 5 mixtapes: Senoro total; The F-files; Taking Over vol 1, Taking Over vol 2 and Family Bizness. </p>
                <p>In 2011, Poetik decide to lunch his first solo project titled "Contra ventos & tempestades", followed by the second mixtape "Versos de Elite, in 2012. In the beginning of 2014, "Versos de Elite 2" is lunched and in the end of November of 2017 Poetik lunches the squel "Versos de elite 3".</p>
                <p>Poetik is still working, spreading the true essence of the hiphop culture, where he's been used as a reference and influence for many aspiring and made artists.</p>
            </div>
            <div class="about__small-screen">
                <p>Poetik started his music career back in 2005, with a group called Freestyle Family - a union of various elements fom different groups in the UK. They all had the same objectives: expand the Portuguese HipHop culture in the UK. Along with the 3FS (Freestyle Family) Poetik lunch 5 mixtapes: Senoro total; The F-files; Taking Over vol 1, Taking Over vol 2 and Family Bizness. </p>
                <span class="about__read-more">read more</span>
            </div>
    </section>

    <section class="modal">
        <div class="modal__close-btn">x</div>

        <h2 class="modal__title">know poetik</h2>

        <div class="modal__text">
            <p>Poetik started his music career back in 2005, with a group called Freestyle Family - a union of various elements fom different groups in the UK. They all had the same objectives: expand the Portuguese HipHop culture in the UK. Along with the 3FS (Freestyle Family) Poetik lunch 5 mixtapes: Senoro total; The F-files; Taking Over vol 1, Taking Over vol 2 and Family Bizness. </p>

            <p>In 2011, Poetik decide to lunch his first solo project titled "Contra ventos & tempestades", followed by the second mixtape "Versos de Elite, in 2012. In the beginning of 2014, "Versos de Elite 2" is lunched and in the end of November of 2017 Poetik lunches the squel "Versos de elite 3".</p>

            <p>Poetik is still working, spreading the true essence of the hiphop culture, where he's been used as a reference and influence for many aspiring and made artists.</p>
        </div>

        <img class="modal__arrow" src="<?php echo get_stylesheet_directory_uri(); ?>./src/images/scroll top.png" alt="scroll-up-arrow">
    </section>

    <section class="videos">
        <h2 class="videos__title">videos</h2>

        <div class="videos__slider">
        </div>
    </section>

    <section class="music">
        <h2 class="music__title">music</h2>

        <div class="music__slider">
        </div>

        <button class="btn btn__listen">listen</button>
        <button class="btn btn__download">download</button>
    </section>

    <section class="tour">
        <h2 class="tour__title">tour</h2>

        <div class="tour__cards tour__cards_mobile">
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
        </div>

        <div class="tour__cards tour__cards_tablet">
        <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
        </div>

        <div class="tour__cards tour__cards_desktop">
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
            <div class="tour__card">
                <p class="tour__date">jun 2</p>
                <h3 class="tour__city">cardiff, cf, uk</h3>
                <p class="tour__venue">principality arena</p>
                <p class="tour__info">rescheduled date**</p>
                <a href="#" class="tour__tickets">tickets</a>
            </div>
        </div>

        <div class="tour__more-dates">
            <a href="#">more dates</a>
        </div>
    </section>

    <section class="modal2">
        <div class="modal2__close-btn">
            <span>x</span>
        </div>

        <h2 class="modal2_title">tour</h2>

        <div class="modal2__cards modal__cards_mobile">
            <div class="modal2__card">
                <p class="modal2__date">jun 2</p>
                <h3 class="modal2__city">cardiff, cf, uk</h3>
                <p class="modal2__venue">principality arena</p>
                <p class="modal2__info">rescheduled date**</p>
                <p class="modal2__tickets">tickets</p>
            </div>
            <div class="modal2__card">
                <p class="modal2__date">jun 2</p>
                <h3 class="modal2__city">cardiff, cf, uk</h3>
                <p class="modal2__venue">principality arena</p>
                <p class="modal__info">rescheduled date**</p>
                <p class="modal__tickets">tickets</p>
            </div>
            <div class="modal__card">
                <p class="modal__date">jun 2</p>
                <h3 class="modal__city">cardiff, cf, uk</h3>
                <p class="modal__venue">principality arena</p>
                <p class="modal__info">rescheduled date**</p>
                <p class="modal__tickets">tickets</p>
            </div>

            <div class="modal__card">
                <p class="modal__date">jun 2</p>
                <h3 class="modal__city">cardiff, cf, uk</h3>
                <p class="modal__venue">principality arena</p>
                <p class="modal__info">rescheduled date**</p>
                <p class="modal__tickets">tickets</p>
            </div>
            <div class="modal__card">
                <p class="modal__date">jun 2</p>
                <h3 class="modal__city">cardiff, cf, uk</h3>
                <p class="modal__venue">principality arena</p>
                <p class="modal__info">rescheduled date**</p>
                <p class="modal__tickets">tickets</p>
            </div>
            <div class="modal__card">
                <p class="modal__date">jun 2</p>
                <h3 class="modal__city">cardiff, cf, uk</h3>
                <p class="modal__venue">principality arena</p>
                <p class="modal__info">rescheduled date**</p>
                <p class="modal__tickets">tickets</p>
            </div>
        </div>

        <div class="modal__cards modal__cards_mobile">
            <div class="modal__card">
                <p class="modal__date">jun 2</p>
                <h3 class="modal__city">cardiff, cf, uk</h3>
                <p class="modal__venue">principality arena</p>
                <p class="modal__info">rescheduled date**</p>
                <p class="modal__tickets">tickets</p>
            </div>
            <div class="modal__card">
                <p class="modal__date">jun 2</p>
                <h3 class="modal__city">cardiff, cf, uk</h3>
                <p class="modal__venue">principality arena</p>
                <p class="modal__info">rescheduled date**</p>
                <p class="modal__tickets">tickets</p>
            </div>
            <div class="modal__card">
                <p class="modal__date">jun 2</p>
                <h3 class="modal__city">cardiff, cf, uk</h3>
                <p class="modal__venue">principality arena</p>
                <p class="modal__info">rescheduled date**</p>
                <p class="modal__tickets">tickets</p>
            </div>
        </div>

        <div class="scrolltop-arrow">
            <i class="scrolltop-arrow__icon scrolltop-arrow__icon_mobile"></i>
        </div>
</section>

    <section class="photos">
        <h2 class="photos__title">photos</h2>

        <div class="photos__slider">
        </div>

        <div class="photos__grid">
            <div class="photos__photo">
                <img src="" alt="">
            </div>
            <div class="photos__photo">
                <img src="" alt="">
            </div>
            <div class="photos__photo">
                <img src="" alt="">
            </div>
            <div class="photos__photo">
                <img src="" alt="">
            </div>
            <div class="photos__photo">
                <img src="" alt="">
            </div>
            <div class="photos__photo">
                <img src="" alt="">
            </div>
            <div class="photos__photo">
                <img src="" alt="">
            </div>
            <div class="photos__photo">
                <img src="" alt="">
            </div>
        </div>
    </section>

    <section class="shop ">
        <h2 class="shop__title">photos</h2>

        <div class="shop__slider">
        </div>

        <div class="shop__item-price">
            <p><span>price: </span>21.89</p>
        </div>

        <button class="btn btn__buy">BUY</button>

        <div class="shop__grid">
            <div class="shop__card-wrapper">
                <div class="shop__card">
                    <div class="shop__item">
                        <img src="" alt="">
                    </div>

                    <div class="shop__item-message">
                        <p>sold out</p>
                    </div>

                    <div class="shop__item-price">
                        <p><span>price: </span>21.89</p>
                    </div>

                    <button class="btn btn__buy">BUY</button>
                </div>
                <div class="shop__card">
                    <div class="shop__item">
                        <img src="" alt="">
                    </div>

                    <div class="shop__item-message">
                        <p>sold out</p>
                    </div>

                    <div class="shop__item-price">
                        <p><span>price: </span>21.89</p>
                    </div>

                    <button class="btn btn__buy">BUY</button>
                </div>
                <div class="shop__card">
                    <div class="shop__item">
                        <img src="" alt="">
                    </div>

                    <div class="shop__item-message">
                        <p>sold out</p>
                    </div>

                    <div class="shop__item-price">
                        <p><span>price: </span>21.89</p>
                    </div>

                    <button class="btn btn__buy">BUY</button>
                </div>
                <div class="shop__card">
                    <div class="shop__item">
                        <img src="" alt="">
                    </div>

                    <div class="shop__item-message">
                        <p>sold out</p>
                    </div>

                    <div class="shop__item-price">
                        <p><span>price: </span>21.89</p>
                    </div>

                    <button class="btn btn__buy">BUY</button>
                </div>
                <div class="shop__card">
                    <div class="shop__item">
                        <img src="" alt="">
                    </div>

                    <div class="shop__item-message">
                        <p>sold out</p>
                    </div>

                    <div class="shop__item-price">
                        <p><span>price: </span>21.89</p>
                    </div>

                    <button class="btn btn__buy">BUY</button>
                </div>
                <div class="shop__card">
                    <div class="shop__item">
                        <img src="" alt="">
                    </div>

                    <div class="shop__item-message">
                        <p>sold out</p>
                    </div>

                    <div class="shop__item-price">
                        <p><span>price: </span>21.89</p>
                    </div>

                    <button class="btn btn__buy">BUY</button>
                </div>
                <div class="shop__card">
                    <div class="shop__item">
                        <img src="" alt="">
                    </div>

                    <div class="shop__item-message">
                        <p>sold out</p>
                    </div>

                    <div class="shop__item-price">
                        <p><span>price: </span>21.89</p>
                    </div>

                    <button class="btn btn__buy">BUY</button>
                </div>
                <div class="shop__card">
                    <div class="shop__item">
                        <img src="" alt="">
                    </div>

                    <div class="shop__item-message">
                        <p>sold out</p>
                    </div>

                    <div class="shop__item-price">
                        <p><span>price: </span>21.89</p>
                    </div>

                    <button class="btn btn__buy">BUY</button>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <h2 class="newsletter__title ">stay up to date</h2>
        <h2 class="newsletter__title newsletter__title_mobile">newsletter</h2>

        <form class="newsletter__form">
            <div class="newsletter__form-controllers">
                <input class="newsletter__email" type="text" placeholder="email address">
                <button class="btn btn__join">join</button>
            </div>
            <div class="newsletter__terms-link">
                <p>terms</p>
            </div>
        </form>

        <div class="newsletter__read-more">
            <a href="#">read more</a>
        </div>
    </section>

    <footer class="footer">
        <h3 class="footer-__title">follow poetik</h3>
        
        <ul class="social-icons social-icons_footer">
            <li><a href="#">facebook</a></li>
            <li><a href="#">twitter</a></li>
            <li><a href="#">instagram</a></li>
            <li><a href="#">soundcloud</a></li>
        </ul>

        <div class="scrolltop-arrow">
            <i class="scrolltop-arrow__icon"></i>
        </div>

        <div class="footer__author">
            <p>&copy; 2021 devduo</p>
        </div>
        <div class="footer__links-wrapper">
            <ul class="footer__links footer__links_left">
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">cookies settings</a></li>
            </ul>

            <ul class="footer__links footer__links_right">
                <li><a href="#">terms of use</a></li>
                <li><a href="#">ad choice</a></li>
                <li><a href="#">cookies policy</a></li>
            </ul>
        </div> 
    </footer>
    <?php wp_footer() ?>
</body>
</html>