<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="front_end/assets/images/logo.png">
    <link href="front_end/assets/css/jquery_ui.css" rel="stylesheet" />
    <link href="front_end/assets/css/font.css" rel="stylesheet" />
    <link href="front_end/assets/css/aos.css" rel="stylesheet">
    <link href="front_end/assets/css/myStyle.css?v=1" rel="stylesheet" />
    <link href="front_end/assets/css/product_info.css?v=1" rel="stylesheet" />
    <link href="front_end/assets/css/products.css?v=1" rel="stylesheet" />
    <link href="front_end/assets/css/homeStyle.css?v=1" rel="stylesheet" />
    <link href="front_end/assets/css/service.css?v=1" rel="stylesheet" />
    <link href="front_end/assets/css/cart.css?v=1" rel="stylesheet" />
    <title>AD-Shop</title>
</head>

<body>
    <div class="bodyMain">

        <nav>

            <a href="index.php" id="brandDiv">

                <svg class="logoImage material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="0.89em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 452 512">
                    <path d="M321.759 65.091l27.784 27.607l41.318 3.08c1.868.157 4.128 1.584 4.482 4.165l56.036 379.051l-151.457 32.766L321.76 65.09zM285.758 512L0 458.459l38.992-300.79c1.885-13.53 2.339-13.983 16.697-18.486l46.332-14.37C111.94 82.755 143.566 0 209.766 0c8.647 0 18.66 4.643 26.741 15.331c30.296-1.411 46.972 24.128 56.126 50.465l15.168-4.682L285.758 512zm-58.14-475.626c-16.145 6.928-34.61 25.29-44.461 63.31l51.16-15.843c.187-22.342-2.63-37.265-6.7-47.467zm-105.18 82.113l40.439-12.524c9.604-50.212 32.345-75.358 53.561-85.341c-2.754-1.897-5.633-2.866-8.49-2.866c-47.55 0-74.262 62.431-85.51 100.73zm116.47 64.938s-13.22-7.666-39.983-7.666c-69.453 0-103.86 46.39-103.86 94.327c0 56.955 56.827 58.5 56.827 93.164c0 8.379-5.926 19.846-20.49 19.846c-22.292 0-48.708-22.68-48.708-22.68L69.24 404.874s25.698 31.277 75.952 31.277c41.879 0 72.938-31.533 72.938-80.5c0-62.241-69.268-72.422-69.268-98.995c0-4.87 1.55-24.197 32.345-24.197c21.006 0 38.143 9.146 38.143 9.146l19.558-58.18zm12.774-104.958l24.77-7.665c-6.275-19.175-16.028-35.834-30.67-37.673c4.5 12.968 6.096 28.395 5.9 45.338z" />
                </svg>


            </a>

            <svg class="menuToggle menuOpen material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path d="M2 17c0 .55.45 1 1 1h18c.55 0 1-.45 1-1s-.45-1-1-1H3c-.55 0-1 .45-1 1zm0-5c0 .55.45 1 1 1h18c.55 0 1-.45 1-1s-.45-1-1-1H3c-.55 0-1 .45-1 1zm0-5c0 .55.45 1 1 1h18c.55 0 1-.45 1-1s-.45-1-1-1H3c-.55 0-1 .45-1 1z" />
            </svg>

            <svg class="menuToggle menuClose material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41z" />
            </svg>


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
                                    <svg class=" material-icons" xmlns=" http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <path d="M18 4c-3.666 0-6.446.862-8.313 2.625C7.822 8.388 7 10.958 7 14v.906C6.428 15.45 6 16.15 6 17c0 1.26.89 2.154 2 2.594c.37 1.167.773 2.393 1.22 3.437c.485 1.142.924 2.048 1.53 2.69a7.192 7.192 0 0 0 10.5 0c.606-.642 1.013-1.548 1.5-2.69c.446-1.044.88-2.27 1.25-3.436c1.11-.44 2-1.334 2-2.594c0-.846-.43-1.547-1-2.094V14c0-2.824-.643-4.834-1.78-6.156c-.966-1.12-2.255-1.58-3.532-1.72l-.782-1.56l-.28-.564H18zm-.594 2.063l.688 1.375c.333.666.463 1.14.468 1.343c.006.204.013.12-.03.158c-.087.073-.93.29-1.97.343c-1.04.054-2.264.028-3.406.47c-1.14.442-2.143 1.627-2.156 3.25h2c.008-.986.237-1.128.875-1.375c.638-.247 1.738-.32 2.813-.375c1.074-.055 2.183.01 3.125-.78c.47-.397.77-1.08.75-1.75c-.005-.148-.04-.29-.063-.44a3.23 3.23 0 0 1 1.188.876C22.413 10 23 11.482 23 14v1.844l.5.28c.304.177.5.496.5.876a.98.98 0 0 1-.906 1l-.688.03l-.187.657a37.548 37.548 0 0 1-1.282 3.532c-.45 1.056-.967 1.956-1.125 2.124c-2.13 2.25-5.497 2.25-7.625 0c-.16-.168-.675-1.068-1.126-2.125a37.86 37.86 0 0 1-1.28-3.532l-.188-.657l-.688-.03A.98.98 0 0 1 8 17c0-.374.193-.698.5-.875l.5-.28V14c0-2.697.684-4.636 2.063-5.938c1.28-1.21 3.37-1.9 6.343-2zM13 16a1 1 0 1 0 0 2a1 1 0 0 0 0-2zm6 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2z" />
                                    </svg>

                                    Men
                                    </span>
                                </a>
                                <a href="products.php?category=2">
                                    <span>
                                        <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                            <path d="M18.125 4c-3.304 0-6.984.562-9.72 3.594C5.673 10.626 4 15.88 4 25v1h8.656c.99.625 2.103 1 3.344 1c1.24 0 2.355-.383 3.344-1H29v-1c0-8.125-1.57-12.844-3.625-15.594c-1.81-2.42-3.892-3.094-5.438-3.25L19 4.5l-.28-.5h-.595zm-.563 2.063l.813 1.437l.28.5h.595c1.01 0 2.848.34 4.53 2.594C25.386 12.74 26.8 16.83 26.938 24h-5.375c.11-.14.21-.292.313-.438C23.233 21.625 24 19.207 24 17h-2c0 1.722-.644 3.827-1.75 5.406C19.144 23.986 17.665 25 16 25c-1.663 0-3.143-1.01-4.25-2.594C10.643 20.824 10 18.71 10 17c0-.444.085-.667.22-.844c.132-.177.364-.33.717-.468c.707-.28 1.9-.395 3.157-.5c1.258-.106 2.57-.206 3.75-.75C19.024 13.893 20 12.66 20 11h-2c0 1.044-.274 1.304-.97 1.625c-.694.32-1.882.458-3.124.563c-1.242.104-2.55.163-3.72.624c-.583.23-1.148.578-1.56 1.126C8.21 15.485 8 16.218 8 17c0 2.198.768 4.59 2.125 6.53c.11.16.225.318.344.47H6.06c.135-8.163 1.71-12.696 3.844-15.063c2.088-2.314 4.783-2.815 7.656-2.874zM13 17a1 1 0 1 0 0 2a1 1 0 0 0 0-2zm6 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2z" />
                                        </svg>
                                        Women
                                    </span>
                                </a>
                                <a href="products.php?category=3">
                                    <span>
                                        <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8s-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8S14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8S7 8.67 7 9.5S7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
                                        </svg>
                                        Kids
                                    </span>
                                </a>


                            </div>

                        </div>
                    </a>


                </li>
                <li>
                    <a href="cart.php">

                        <svg id="cartIcon" class="material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2s-.9-2-2-2zM1 2v2h2l3.6 7.59l-1.35 2.45c-.16.28-.25.61-.25.96c0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12l.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49A1.003 1.003 0 0 0 20 4H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2z" />
                        </svg>


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
            <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                <path d="M868 545.5L536.1 163a31.96 31.96 0 0 0-48.3 0L156 545.5a7.97 7.97 0 0 0 6 13.2h81c4.6 0 9-2 12.1-5.5L474 300.9V864c0 4.4 3.6 8 8 8h60c4.4 0 8-3.6 8-8V300.9l218.9 252.3c3 3.5 7.4 5.5 12.1 5.5h81c6.8 0 10.5-8 6-13.2z" />
            </svg>
        </div>