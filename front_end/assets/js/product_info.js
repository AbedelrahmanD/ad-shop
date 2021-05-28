var product;
$(document).ready(function () {
  //get product id from param
  var searchParams = new URLSearchParams(window.location.search);
  var id = searchParams.get("product");
  //fetch product info
  if (id == null) return;

  $.post(
    "back_end/products/get_products.php",
    {
      productId: id,
    },
    function (data, status) {
      var result = JSON.parse(data);
      product = result[0];
      var price;
      if (product["product_price_discount"] > 0) {
        price =
          '<span class="stroke">' +
          product["product_price"] +
          "$</span>&nbsp;&nbsp;<span>" +
          product["product_price_discount"] +
          "$</span>";
      } else {
        price = "<span>" + product["product_price"] + "$</span>";
      }
      $("#productName").text(product["product_name"]);
      $("#productDescription").text(product["product_description"]);
      $("#productPrice").html(price);
      $("#productImage").attr("src", product["images"][0]);
      var carousel = "";
      for (var i = 0; i < product["images"].length; i++) {
        var src = product["images"][i];
        carousel +=
          '<div class="carouselItem productContainer"> <img loading="lazy" src="' +
          src +
          '"/></div>';
      }
      $("#scrollbarProductInfo").html(carousel);
      //similare section
      var obj = {
        categoryId: product["product_category_id"],
        productType: product["product_type_id"],
        limit: 6,
        notId: product["product_id"],
      };
      getData(obj, "target");

      //fill color picker
      var colors = "";
      for (var i = 0; i < product["colors"].length; i++) {
        var colorName = product["colors"][i]["productColorsName"];
        var colorId = product["colors"][i]["productColorsId"];
        colors += "<option value='" + colorId + "'>" + colorName + "</option>";
      }

      $("#colorsOptions").html(colors);
      //set clicked image in main block
      $(".carouselItem img").click(function () {
        var url = $(this).attr("src");
        $("#productImage").attr("src", url);
      });
      //show modal
      $("#productImage").click(function () {
        var url = $(this).attr("src");
        $("#modalViewImage").attr("src", url);
        $(".modalContainerBlock").show();
      });
    }
  );

  $("#addToCart").click(function () {
    var quantity = $("#quantity").text();
    var colorName = $("#colorsOptions").text();
    var colorId = $("#colorsOptions").val();

    product.quantity = quantity;
    product.categoryId = colorId;
    product.colorName = getColorName(colorId);

    saveProduct(product);
  });
});

function getColorName(colorId) {
  for (var i = 0; i < product["colors"].length; i++) {
    if (product["colors"][i]["productColorsId"] == colorId) {
      return product["colors"][i]["productColorsName"];
    }
  }
}
