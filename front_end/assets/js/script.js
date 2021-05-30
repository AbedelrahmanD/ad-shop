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
      var autoComplete = "";

      for (var i = 0; i < result.length; i++) {
        var name = result[i]["product_name"];
        var price = result[i]["product_price"];
        var discountPrice = result[i]["product_price_discount"];
        var image = result[i]["images"][0];
        var id = result[i]["product_id"];
        autoComplete += "<option>" + name + "</option>'";
        html +=
          '<a href="product_info.php?product=' +
          id +
          '" class="productContainer">' +
          ' <div  class="productImageContainer">' +
          '  <img loading="lazy" src="' +
          image +
          '" alt="">' +
          '  <span class="material-icons">' +
          "   shopping_cart" +
          "  </span>" +
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
        $("#searchOptions").html(autoComplete);
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
  var toggle = 1;
  $(".menuToggle").click(function () {
    if (toggle == 1) {
      $("nav ul").addClass("showMenu");
      $("#menuOpen").hide();
      $("#menuClose").show();
      toggle = 0;
    } else {
      $("nav ul").removeClass("showMenu");
      $("#menuOpen").show();
      $("#menuClose").hide();
      toggle = 1;
    }
  });

  $(".modalViewClose").click(function () {
    $(".modalContainerBlock").fadeOut();
  });
});
