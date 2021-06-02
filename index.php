<?php include("front_end/shared/header.php"); ?>


<section id="slider">

    <!-- <div class="overLay"></div> -->
    <div class="sliderContents">

        <div class="textSlider" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="2000">
            <h1>
                Lorem ipsum, dolor sit amet consectetur adipisicing.
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis hic ea officiis vero esse! Ipsum!
            </p>
        </div>

        <div class="sliderBtns" data-aos="fade-up" data-aos-delay="1500" data-aos-duration="2000">
            <a class="btn2" href="products.php">Discover</a>
        </div>

    </div>
    <div class="shopImage" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="2000">
        <img src="front_end/assets/images/shop.svg" alt="">
    </div>

</section>

<div class="homeContainer">
    <!--- top sales section begins -->
    <div class="titleWraper" data-aos="zoom-in" data-aos-duration="1500" data-aos="zoom-in" data-aos-duration="1000">
        <h1>Top Sales
            <span class="material-icons">
                favorite
            </span>

        </h1>
    </div>

    <a href="product_info.php?product=13" class="productReview" data-aos="fade-right" data-aos-duration="1500">
        <div class="productReviewImageContainer">
            <img src="back_end/upload/products/13/51-25r7hJrL._AC_UY679_.jpg" alt="">
        </div>
        <div class="productReviewDetails">
            <h3>product name</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod.</p>
            <h3>70$</h3>
        </div>
        <span class="material-icons">
            male
        </span>
    </a>

    <a href="product_info.php?product=1" class="productReview flexReverse" data-aos="fade-left" data-aos-duration="1500">
        <div class="productReviewDetails">
            <h3>product name</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod.</p>
            <h3>70$</h3>
        </div>
        <div class="productReviewImageContainer">
            <img src="back_end/upload/products/1/81czVXzloVL._AC_SY500._SX._UX._SY._UY_.jpg" alt="">
        </div>
        <span class="material-icons">
            female
        </span>
    </a>

    <a href="product_info.php?product=10" class="productReview" data-aos="fade-right" data-aos-duration="1500">
        <div class="productReviewImageContainer">
            <img src="back_end/upload/products/10/1XfYQn9j+L._AC_UX679_.jpg" alt="">
        </div>
        <div class="productReviewDetails">
            <h3>product name</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod.</p>
            <h3>70$</h3>
            <span class="material-icons">
                mood
            </span>
        </div>
    </a>
    <!-- top section ends-->

    <!-------------------------- sign up section begins ------------------>
    <section class="signUpSetion">
        <div class="join">
            <h3>Join us and submit your awesome products</h3>
            <div class="sliderBtns">
                <a class="btn2" href="#furnitureTitle">Sign Up</a>
            </div>
        </div>
    </section>


    <!-------------------------- sign up section ends ------------------>
    <div class="categoryBigSection">



        <!-------------------------- discount section begins ------------------>
        <section id="discountSection" class="viewSection" data-aos="zoom-in" data-aos-duration="1500">
            <div class="titleWraper">
                <h1>Discounts
                    <span class="material-icons">
                        whatshot
                    </span>

                </h1>
            </div>

            <section class="carouselSection">
                <button class="carouselArrow carouselNextArrow" onclick="moveNextDiscount()">
                    <span class="material-icons">
                        arrow_forward_ios
                    </span>
                </button>
                <button class="carouselArrow carouselPrevArrow" onclick="movePrevDiscount()">
                    <span class="material-icons">
                        arrow_back_ios
                    </span>
                </button>

                <div id="scrollbarDiscount" class="product_slider_carousel discountTarget">
                </div>
                <div class="sliderBtnFullContainer">
                    <div class="sliderBtns">
                        <a class="btn1" href="products.php?discount=true">More</a>
                    </div>
                </div>
            </section>
        </section>
        <!-------------------------- discount section ends ------------------>

        <!-------------------------- men section begins ------------------>
        <section id="menSection" class="viewSection" data-aos="zoom-in" data-aos-duration="1500">
            <div class="titleWraper">
                <h1>Men
                    <span class="material-icons">
                        male
                    </span>

                </h1>
            </div>
            <section class="carouselSection">
                <button class="carouselArrow carouselNextArrow" onclick="moveNextMen()">
                    <span class="material-icons">
                        arrow_forward_ios
                    </span>
                </button>
                <button class="carouselArrow carouselPrevArrow" onclick="movePrevMen()">
                    <span class="material-icons">
                        arrow_back_ios
                    </span>
                </button>

                <div id="scrollbarMen" class="product_slider_carousel menTarget">
                </div>
                <div class="sliderBtnFullContainer">
                    <div class="sliderBtns">
                        <a class="btn1" href="products.php?category=1">More</a>
                    </div>
                </div>
            </section>
        </section>
        <!-------------------------- men section ends ------------------>


        <!-------------------------- women section begins ------------------>
        <section id="womenSection" class="viewSection" data-aos="zoom-in" data-aos-duration="1500">
            <div class="titleWraper">
                <h1>Women
                    <span class="material-icons">
                        female
                    </span>

                </h1>
            </div>
            <section class="carouselSection">
                <button class="carouselArrow carouselNextArrow" onclick="moveNextWomen()">
                    <span class="material-icons">
                        arrow_forward_ios
                    </span>
                </button>
                <button class="carouselArrow carouselPrevArrow" onclick="movePrevWomen()">

                    <span class="material-icons">
                        arrow_back_ios
                    </span>
                </button>

                <div id="scrollbarWomen" class="product_slider_carousel womenTarget">
                </div>
                <div class="sliderBtnFullContainer">
                    <div class="sliderBtns">
                        <a class="btn1" href="products.php?category=2">More</a>
                    </div>
                </div>
            </section>
        </section>
        <!-------------------------- women section ends ------------------>

        <!-------------------------- kids section begins ------------------>
        <section id="kidsSection" class="viewSection" data-aos="zoom-in" data-aos-duration="1500">
            <div class="titleWraper">
                <h1>Kids
                    <span class="material-icons">
                        mood
                    </span>

                </h1>
            </div>
            <section class="carouselSection">
                <button class="carouselArrow carouselNextArrow" onclick="moveNextKids()">
                    <span class="material-icons">
                        arrow_forward_ios
                    </span>
                </button>
                <button class="carouselArrow carouselPrevArrow" onclick="movePrevKids()">

                    <span class="material-icons">
                        arrow_back_ios
                    </span>
                </button>

                <div id="scrollbarKids" class="product_slider_carousel kidsTarget">
                </div>
                <div class="sliderBtnFullContainer">
                    <div class="sliderBtns">
                        <a class="btn1" href="products.php?category=3">More</a>
                    </div>
                </div>
            </section>
        </section>
        <!-------------------------- kids section ends ------------------>
    </div>
    <div>

        <?php include("front_end/shared/footer.php"); ?>