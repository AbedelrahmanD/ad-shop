<?php include("front_end/shared/header.php"); ?>


<section class="productsSection">
    <div class="coverImage">
        <!--serach begins -->
        <div class="searchContainer">
            <input id="searchName" class="inputForm" type="text" placeholder="Search..." list="searchOptions" />
            <button id="searchBtn">
                <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z" />
                </svg>
            </button>
        </div>


        <div class="advancedSearch">
            <div id="advancedSearchToggle" class="sliderBtns">
                <a class="dropDownTitle btn2" href="#"> Advanced Search</a>
            </div>

        </div>
        <div class="advancedBlock">
            <div class="searchOptions">
                <div class="flexV">
                    <div> Type</div>
                    <select id="types" class="colorPicker">

                    </select>
                </div>
                <div class="flexV">
                    <div>Color</div>
                    <select id="colors" class="colorPicker">

                    </select>
                </div>
            </div>
        </div>
        <!--search ends -->
    </div>
    <div class="targetList"></div>
    <div class="pagination"></div>

</section>






























<?php include("front_end/shared/footer.php"); ?>