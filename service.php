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
                content_copy
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

            <div class="searchContainer">
                <input id="searchTypeValue" type="text" placeholder="Search Type" />

            </div>
            <div class="searchContainer">
                <input id="limitValue" type="number" placeholder="limit" />
            </div>
            <div class="sliderBtns">
                <a id="searchType" class="btn1">
                    <span class="material-icons">search</span>
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
