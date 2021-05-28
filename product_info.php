<?php include("front_end/shared/header.php"); ?>

<section id="productView">
    <div class="sliderBtns backBtn">

        <a class="btn1 goBack" href="#">
            <span class="material-icons">
                arrow_back_ios
            </span>
            Back

        </a>

    </div>
    <div class="product">
        <div class="productImages">
            <div class="productImageContainr">
                <img id="productImage" src="" />
            </div>

            <section class="carouselSection">
                <button class="carouselArrow carouselNextArrow" onclick="moveNextProductInfo()">
                    <span class="material-icons">
                        arrow_forward_ios
                    </span>
                </button>
                <button class="carouselArrow carouselPrevArrow" onclick="movePrevProductInfo()">
                    <span class="material-icons">
                        arrow_back_ios
                    </span>
                </button>

                <div id="scrollbarProductInfo" class="product_slider_carousel ProductInfoTarget">
                </div>

            </section>
        </div>

        <div class=productDetails"">
            <h2 id="productName">
                Product Name
            </h2>
            <!-- <h3>
                Description:
            </h3> -->
            <p id="productDescription">

                description here
            </p>
            <div class="flexDiv">
                <!-- <h3>Price: </h3> -->
                <h4 id="productPrice">50$</h4>
            </div>
            <div class="flexDivH">
                <div class="customInputNumber">
                    <div class=" numberAction plusNumber">+</div>
                    &nbsp;
                    <span id="quantity" class="quantityNumber">1</span>
                    &nbsp;
                    <div class=" numberAction minusNumber">-</div>
                </div>

                <select id="colorsOptions" class="colorPicker"></select>
                <div class="sliderBtns">
                    <a id="addToCart" class="btn1">Add To Cart <span class=" material-icons">
                            shopping_cart
                        </span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="similarProducts">
        <h2>
            Similar Products
        </h2>
    </div>
    <div id="similar" class="product_slider_carousel target"></div>
</section>
<div class="modalContainerBlock">
    <div class="modalView">
        <div class="modalViewImageContainer">
            <img id="modalViewImage" src="#" />
            <span class="material-icons modalViewClose">
                close
            </span>
        </div>
    </div>
</div>

<div class="toastContainer">
    <div class="Toast">
        Added To Cart
    </div>
</div>
<?php include("front_end/shared/footer.php"); ?>