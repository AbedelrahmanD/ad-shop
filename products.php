<?php include("front_end/shared/header.php"); ?>


<section class="productsSection">
    <div class="coverImage">
        <div class="searchContainer">
            <input id="searchName" type="text" placeholder="Search..." />
            <button id="searchBtn">
                <span class="material-icons">
                    search
                </span>
            </button>
        </div>
        <div class="advancedSearch">
            <div id="advancedSearchToggle" class="sliderBtns">
                <a class="dropDownTitle btn2" href="#"> Advanced Search</a>
            </div>

        </div>
        <div class="advancedBlock">
            <div class="searchOptions">
                <div class="flexH">
                    <div> Type</div>
                    <select id="types" class="colorPicker">

                    </select>
                </div>
                <div class="flexH">
                    <div>Color</div>
                    <select id="colors" class="colorPicker">

                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="targetList"></div>
    <div class="pagination"></div>

</section>






























<?php include("front_end/shared/footer.php"); ?>