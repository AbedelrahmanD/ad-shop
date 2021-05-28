$(document).ready(function () {
  AOS.init();
  //fetch data for each category (men,women,kids,discounts)
  var obj = {
    categoryId: 1,
    limit: 7,
  };
  getData(obj, "menTarget");
  obj.categoryId = 2;
  getData(obj, "womenTarget");
  obj.categoryId = 3;
  getData(obj, "kidsTarget");
  var discountObj = {
    discount: true,
    limit: 7,
  };
  getData(discountObj, "discountTarget");
});
