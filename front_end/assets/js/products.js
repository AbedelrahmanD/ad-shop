var perPage = 6;
var startPage = 0;
var obj;
$(function () {
  var searchParams = new URLSearchParams(window.location.search);
  var categoryId = searchParams.get("category");
  var discount = searchParams.get("discount");
  var search = searchParams.get("search");
  var color = searchParams.get("color");
  var type = searchParams.get("type");
  var pageNumber = searchParams.get("pageNumber");
  obj = {};
  if (categoryId != null) obj.categoryId = categoryId;
  if (discount != null) obj.discount = true;
  if (search != null) obj.search = search;
  if (color != null) obj.productColor = color;
  if (type != null) obj.productType = type;
  if (pageNumber != null) obj.limitPerPage = pageNumber + "," + perPage;
  else obj.limitPerPage = 0 + "," + perPage;
  fillSearch(obj);
  obj.pagination = true;
  getData(obj, "targetList");

  $("#searchBtn").click(function () {
    //get data

    //replace href

    var search = $("#searchName").val();
    var selectedType = $("#types").val();
    var selectedColor = $("#colors").val();
    var category = "";
    if (categoryId != null) category = "category=" + categoryId;
    else category = "discount=true";

    window.location.href =
      "products.php?search=" +
      search +
      "&" +
      category +
      "&color=" +
      selectedColor +
      "&type=" +
      selectedType +
      "&pageNumber=0";
  });

  $("#advancedSearchToggle").click(function () {
    $(".advancedBlock").slideToggle();
  });
  getTypes();
  getColors();
});
function getTypes() {
  var selected = "";
  var types = "<option value='0'>All</option>";
  $.get(hostUrl + "back_end/types/get_types.php", function (data, status) {
    var result = JSON.parse(data);
    for (var i = 0; i < result.length; i++) {
      var id = result[i]["product_type_id"];
      var name = result[i]["product_type_type"];
      if (obj.productType == id) {
        selected = "selected";
        $(".advancedBlock").show();
      } else selected = "";
      types +=
        "<option " + selected + " value='" + id + "'>" + name + "</option>";
    }

    $("#types").html(types);
  });
}
function getColors() {
  var selected = "";
  var colors = "<option value='0'>All</option>";
  $.get(hostUrl + "back_end/colors/get_colors.php", function (data, status) {
    var result = JSON.parse(data);
    for (var i = 0; i < result.length; i++) {
      var id = result[i]["productColorsId"];
      var name = result[i]["productColorsName"];
      if (obj.productColor == id) {
        selected = "selected";
        $(".advancedBlock").show();
      } else selected = "";
      colors +=
        "<option " + selected + " value='" + id + "'>" + name + "</option>";
    }

    $("#colors").html(colors);
  });
}

function fillSearch(obj) {
  $("#searchName").val(obj.search);
}
