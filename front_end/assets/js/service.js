$(function () {
  $("#searchType").click(function () {
    var type = $("#searchTypeValue").val();
    var limit = $("#limitValue").val();
    $("#jsonData").text("Loading...");
    $.get(
      hostUrl + "back_end/service/service.php?type=" + type + "&limit=" + limit,
      function (data, status) {
        var jsonObj = JSON.parse(data);
        var jsonPretty = JSON.stringify(jsonObj, null, "\t");
        $("#jsonData").text(jsonPretty);
      }
    );
  });
});
