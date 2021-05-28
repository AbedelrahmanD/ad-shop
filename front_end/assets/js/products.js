$(function () {
  var searchParams = new URLSearchParams(window.location.search);
  var categoryId = searchParams.get("category");
  var discount = searchParams.get("discount");
  var obj;
  if (categoryId != null) {
    obj = {
      categoryId: categoryId,
    };
  } else if (discount != null) {
    obj = {
      discount: true,
    };
  } else {
    obj = {};
  }

  getData(obj, "targetList");

  $("#searchBtn").click(function () {
    var search = $("#searchName").val();
    var obj = {
      categoryId: categoryId,
      search: search,
    };
    var selectedType = $("#types").val();
    var selectedColor = $("#colors").val();
    if (selectedType != 0) obj.productType = selectedType;
    if (selectedColor != 0) obj.productColor = selectedColor;
    getData(obj, "targetList");
  });

  $("#advancedSearchToggle").click(function () {
    $(".advancedBlock").slideToggle();
  });
  getTypes();
  getColors();
});
function getTypes() {
  var types = "<option value='0'>All</option>";

  $.get(hostUrl + "back_end/types/get_types.php", function (data, status) {
    var result = JSON.parse(data);
    for (var i = 0; i < result.length; i++) {
      var id = result[i]["product_type_id"];
      var name = result[i]["product_type_type"];
      types += "<option value='" + id + "'>" + name + "</option>";
    }

    $("#types").html(types);
  });
}
function getColors() {
  var colors = "<option value='0'>All</option>";

  $.get(hostUrl + "back_end/colors/get_colors.php", function (data, status) {
    var result = JSON.parse(data);
    for (var i = 0; i < result.length; i++) {
      var id = result[i]["productColorsId"];
      var name = result[i]["productColorsName"];
      colors += "<option value='" + id + "'>" + name + "</option>";
    }

    $("#colors").html(colors);
  });
}
