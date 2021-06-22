<?php include("front_end/shared/header.php"); ?>













<section class="service">
    <div class="welcomImage">
        <img src="front_end/assets/images/welcom.svg" alt="">
    </div>




    <div class="ourService">
        <div class="imageContainer">
            <img src="front_end/assets/images/service.svg" alt="">
        </div>
        <div class="textContainer">
            <h2>Our Service</h2>
            <p>
                Welcome to the Shopy API documentation. Our API is a RESTful interface for searching and retrieving free images released under the Shopy License.
                The API returns JSON-encoded objects. Hash keys and values are case-sensitive and character encoding is in UTF-8. Hash keys may be returned in any random order and new keys may be added at any time. We will do our best to notify our users before removing hash keys from results or adding required parameters.
            </p>
        </div>
    </div>



    <div class="urlPath">
        <h1>
            Use the link below
        </h1>
        <div class="clip">
            <input type="text" id="serviceUrl" value="http://localhost/web_project/back_end/service/service.php" />
            <span id="copy" class="material-icons">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                    <path d="M29.5 7h-19A1.5 1.5 0 0 0 9 8.5v24a1.5 1.5 0 0 0 1.5 1.5h19a1.5 1.5 0 0 0 1.5-1.5v-24A1.5 1.5 0 0 0 29.5 7zM29 32H11V9h18z" class="clr-i-outline clr-i-outline-path-1" fill="white" />
                    <path d="M26 3.5A1.5 1.5 0 0 0 24.5 2h-19A1.5 1.5 0 0 0 4 3.5v24A1.5 1.5 0 0 0 5.5 29H6V4h20z" class="clr-i-outline clr-i-outline-path-2" fill="white" />
                </svg>
            </span>
        </div>
    </div>


    <div class="params">
        <h1>
            Available parameters
        </h1>
        <table border>
            <tr>
                <th>
                    Type
                </th>
                <td>
                    Shoes,Watch,Glasses,Belt,Bag,Hat
                </td>
            </tr>
            <tr>
                <th>
                    Limit
                </th>
                <td>
                    The number of returned products
                </td>
            </tr>
        </table>
    </div>



    <div class="demo">
        <h1>
            Demo
        </h1>
        <div class="searchOptionsContainer">

            <input id="searchTypeValue" class="inputForm" type="text" placeholder="Search Type" />


            <input id="limitValue" class="inputForm" type="text" placeholder="limit" />

            <div class="sliderBtns">
                <a id="searchType" class="btn1 btnIcon">
                    <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z" />
                    </svg>
                </a>
            </div>
        </div>

        <br>


        <div class="resulrContainer">
            <pre id="jsonData">
                []
            </pre>
        </div>
    </div>



</section>

















<?php include("front_end/shared/footer.php");
