var hostUrl = "";
function calculateFooterHeight() {
  var height = $("#footer").height();
  $("body").css({ "padding-bottom": height + 15 });
}

function getData(obj, targetElementClass) {
  $("#loadingScreen").show();
  $.post(
    hostUrl + "back_end/products/get_products.php",
    obj,
    function (data, status) {
      var result = JSON.parse(data).products;
      var totalRows = JSON.parse(data).totalRows;

      if (result == null) return;
      //draw list of products
      var html = "";
      //create options for datalist

      var availableTags = [];
      for (var i = 0; i < result.length; i++) {
        var name = result[i]["product_name"];
        var price = result[i]["product_price"];
        var discountPrice = result[i]["product_price_discount"];
        var image = result[i]["images"][0];
        var id = result[i]["product_id"];
        availableTags.push(name);

        html +=
          '<a href="product_info.php?product=' +
          id +
          '" class="productContainer">' +
          ' <div  class="productImageContainer">' +
          '  <img loading="lazy" src="' +
          image +
          '" alt="">' +
          '  <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49A.996.996 0 0 0 20.01 4H5.21l-.94-2H1v2h2l3.6 7.59l-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2s-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2z" /></svg>' +
          "  </div>" +
          ' <div class="productTextContainer">';
        //check if it has discount price
        if (discountPrice == 0) {
          html += " <span>" + price + "$</span>";
        } else {
          html +=
            '<div> <span class="stroke">' +
            price +
            "$</span>          <span>" +
            discountPrice +
            "$</span></div>";
        }
        html += "<p> " + name + " </p>" + "  </div>" + "</a>";
      }
      html += "&nbsp;&nbsp;&nbsp;";
      var target = "." + targetElementClass;

      $("" + target + "").html(html);

      //create pagination
      if (obj.pagination == true) {
        $("#searchName").autocomplete({
          source: availableTags,
        });

        var pagesNumbers = totalRows;
        var pages = "";
        for (var i = 0; i < parseInt(pagesNumbers) / perPage; i++) {
          var pageValue = i + 1;
          pages +=
            '<div id="page_' +
            pageValue +
            '" class="pages">' +
            pageValue +
            "</div>";
        }
        $(".pagination").html(pages);
        $(".pages").removeClass("selectedPage");

        var startRow = obj.limitPerPage.toString().split(",")[0];
        startPage = parseInt(startRow) / perPage + 1;
        $("#page_" + startPage).addClass("selectedPage");
        $(".pages").click(function () {
          var search = obj.search == null ? "" : obj.search;
          var selectedType = $("#types").val();
          var selectedColor = $("#colors").val();
          var category = "";
          if (obj.categoryId != null) category = "category=" + obj.categoryId;
          else if (obj.discount != null) category = "discount=true";
          var pageNumber = $(this).text();
          var limitPerPage = (pageNumber - 1) * parseInt(perPage);

          window.location.href =
            "products.php?search=" +
            search +
            "&" +
            category +
            "&color=" +
            selectedColor +
            "&type=" +
            selectedType +
            "&pageNumber=" +
            limitPerPage;
        });
      }

      setTimeout(() => {
        $("#loadingScreen").fadeOut();
      }, 1000);
    }
  );
}

$(function () {
  AOS.init();
  calculateFooterHeight();
  window.onresize = () => {
    calculateFooterHeight();
  };

  window.onscroll = () => {
    if (window.scrollY > 0) {
      $("#goTop").fadeIn();
    } else {
      $("#goTop").fadeOut();
    }
  };

  $(".carouselNextArrow").click(function () {
    var sliderContainer = $(this).parent();
    var slider = sliderContainer.find(".productSliderCarousel");
    slider.stop().animate({ scrollLeft: "+=565" }, 500);
  });

  $(".carouselPrevArrow").click(function () {
    var sliderContainer = $(this).parent();
    var slider = sliderContainer.find(".productSliderCarousel");
    slider.stop().animate({ scrollLeft: "-=565" }, 500);
  });
  $(".toastContainer").click(function () {
    $(this).css({ transform: "translateY(99px)" });
  });

  $("#serviceUrl").keydown(function () {
    return false;
  });

  $("#copy").click(function () {
    /* Get the text field */
    var copyText = document.getElementById("serviceUrl");
    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    document.execCommand("copy");
  });

  $(".plusNumber").click(function () {
    var currentValue = parseFloat($(".quantityNumber").text());
    currentValue = currentValue + 1;
    $(".quantityNumber").text(currentValue);
  });

  $(".minusNumber").click(function () {
    var currentValue = parseFloat($(".quantityNumber").text());
    if (currentValue > 1) currentValue = parseFloat(currentValue) - 1;
    $(".quantityNumber").text(currentValue);
  });

  $(".goTop").click(function () {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  });

  $(".goBack").click(function () {
    window.history.back();
  });
  $(".menuOpen").click(function () {
    $("nav ul").addClass("showMenu");
    $(".menuOpen").hide();
    $(".menuClose").show();
  });
  $(".menuClose").click(function () {
    $("nav ul").removeClass("showMenu");
    $(".menuClose").hide();
    $(".menuOpen").show();
  });

  $(".modalViewClose").click(function () {
    $(".modalContainerBlock").fadeOut();
  });
});
