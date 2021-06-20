<?php include("front_end/shared/header.php"); ?>

<section id="productView">
    <div class="sliderBtns backBtn">
        <a class="btn1 goBack btnIcon">
            <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path d="M13.83 19a1 1 0 0 1-.78-.37l-4.83-6a1 1 0 0 1 0-1.27l5-6a1 1 0 0 1 1.54 1.28L10.29 12l4.32 5.36a1 1 0 0 1-.78 1.64z" />
            </svg>
            Back
        </a>
    </div>
    <div class="product">
        <div class="productImages">
            <div class="productImageContainr">
                <img id="productImage" src="" />
            </div>

            <section class="carouselSection">
                <button class="carouselArrow carouselNextArrow">
                    <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path d="M10 19a1 1 0 0 1-.64-.23a1 1 0 0 1-.13-1.41L13.71 12L9.39 6.63a1 1 0 0 1 .15-1.41a1 1 0 0 1 1.46.15l4.83 6a1 1 0 0 1 0 1.27l-5 6A1 1 0 0 1 10 19z" />
                    </svg>
                </button>
                <button class="carouselArrow carouselPrevArrow">
                    <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path d="M13.83 19a1 1 0 0 1-.78-.37l-4.83-6a1 1 0 0 1 0-1.27l5-6a1 1 0 0 1 1.54 1.28L10.29 12l4.32 5.36a1 1 0 0 1-.78 1.64z" />
                    </svg>
                </button>

                <div id="scrollbarProductInfo" class="productSliderCarousel ProductInfoTarget">
                </div>

            </section>
        </div>

        <div class=productDetails"">
            <h2 id="productName">
                Product Name
            </h2>

            <p id="productDescription">
                description here
            </p>
            <div class="flexDiv">
                <h4 id="productPrice">50$</h4>
            </div>
            <div class="flexV">
                <div class="customInputNumber">
                    <div class=" numberAction plusNumber">+</div>
                    &nbsp;
                    <span id="quantity" class="quantityNumber">1</span>
                    &nbsp;
                    <div class=" numberAction minusNumber">-</div>
                </div>

                <select id="colorsOptions" class="colorPicker"></select>
                <div class="sliderBtns">
                    <a id="addToCart" class="btn1 btnIcon">
                        Add To Cart
                        <svg class=" material-icons " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path d="M12 9c.55 0 1-.45 1-1V6h2c.55 0 1-.45 1-1s-.45-1-1-1h-2V2c0-.55-.45-1-1-1s-1 .45-1 1v2H9c-.55 0-1 .45-1 1s.45 1 1 1h2v2c0 .55.45 1 1 1zm-5 9c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2s-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2zm-8.9-5h7.45c.75 0 1.41-.41 1.75-1.03l3.24-6.14a.998.998 0 0 0-.4-1.34a.996.996 0 0 0-1.36.41L15.55 11H8.53L4.27 2H2c-.55 0-1 .45-1 1s.45 1 1 1h1l3.6 7.59l-1.35 2.44C4.52 15.37 5.48 17 7 17h11c.55 0 1-.45 1-1s-.45-1-1-1H7l1.1-2z" />
                        </svg>
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
    <div id="similar" class="productSliderCarousel target"></div>
</section>
<div class="modalContainerBlock">
    <div class="modalView">
        <div class="modalViewImageContainer">
            <img id="modalViewImage" src="#" />

            <svg class="material-icons modalViewClose" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41z" />
            </svg>

        </div>
    </div>
</div>

<div class="toastContainer">
    <div class="Toast">
        Added To Cart
    </div>
</div>
<?php include("front_end/shared/footer.php"); ?>