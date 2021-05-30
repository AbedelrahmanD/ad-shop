<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="front_end/assets/images/shop.png">
    <link href="front_end/assets/css/font.css" rel="stylesheet" />
    <link href="front_end/assets/css/aos.css" rel="stylesheet">
    <link href="front_end/assets/css/icons.css" rel="stylesheet" />
    <link href="front_end/assets/css/myStyle.css" rel="stylesheet" />
    <link href="front_end/assets/css/product_info.css" rel="stylesheet" />
    <link href="front_end/assets/css/products.css" rel="stylesheet" />
    <link href="front_end/assets/css/homeStyle.css" rel="stylesheet" />
    <link href="front_end/assets/css/service.css" rel="stylesheet" />
    <link href="front_end/assets/css/cart.css" rel="stylesheet" />
    <title>Shopy</title>
</head>

<body>
    <div class="bodyMain">

        <nav>

            <a href="index.php" id="brandDiv">
                <span> Shopy</span>

                <span class="material-icons logoImage">
                    shopping_basket
                </span>
            </a>


            <span id="menuOpen" class="menuToggle material-icons">
                dehaze
            </span>
            <span id="menuClose" class="menuToggle material-icons" style="display:none">
                close
            </span>
            <ul>
                <li>
                    <div class="sliderBtns">
                        <a id="login" class="btn1" href="#">
                            Login
                        </a>
                    </div>

                </li>
                <li>
                    <a href="service.php">
                        Service
                    </a>
                </li>

                <li>
                    <a id=" discountMenuTitle" href="products.php?discount=discount">
                        Discounts
                    </a>

                </li>
                <li>

                    <a href="#">
                        <div class="dropDown">
                            <div class="dropDownTitle">
                                Categories
                            </div>
                            <div class="dropDownOption">
                                <a href="products.php?category=1"">
                                <span>
                                    <span class=" material-icons">
                                    male
                                    </span>
                                    Men
                                    </span>
                                </a>
                                <a href="products.php?category=2">
                                    <span>
                                        <span class=" material-icons">
                                            female
                                        </span>
                                        Women
                                    </span>
                                </a>
                                <a href="products.php?category=3">
                                    <span>
                                        <span class=" material-icons">
                                            mood
                                        </span>
                                        Kids
                                    </span>
                                </a>


                            </div>

                        </div>
                    </a>


                </li>
                <li>
                    <a href="cart.php">
                        <span id="cartIcon" class="material-icons">
                            shopping_cart
                        </span>
                        <span id="cartNumber">

                        </span>
                    </a>
                </li>
            </ul>
        </nav>


        <div id="loadingScreen">
            <img src=" front_end/assets/images/loading.gif" />
        </div>
        <div id="goTop" class="goTop">
            <span class="material-icons">
                keyboard_arrow_up
            </span>
        </div>