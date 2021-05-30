function moveNextDiscount() {
  $("#scrollbarDiscount").stop().animate({ scrollLeft: "+=565" }, 565);
}
function movePrevDiscount() {
  $("#scrollbarDiscount").stop().animate({ scrollLeft: "-=565" }, 565);
}

function moveNextMen() {
  $("#scrollbarMen").stop().animate({ scrollLeft: "+=565" }, 565);
}
function movePrevMen() {
  $("#scrollbarMen").stop().animate({ scrollLeft: "-=565" }, 565);
}

function moveNextWomen() {
  $("#scrollbarWomen").stop().animate({ scrollLeft: "+=565" }, 565);
}
function movePrevWomen() {
  $("#scrollbarWomen").stop().animate({ scrollLeft: "-=565" }, 565);
}

function moveNextKids() {
  $("#scrollbarKids").stop().animate({ scrollLeft: "+=565" }, 565);
}
function movePrevKids() {
  $("#scrollbarKids").stop().animate({ scrollLeft: "-=565" }, 565);
}

$(document).ready(function () {
  //fetch data for each category (men,women,kids,discounts)
  var discountObj = {
    discount: true,
    limit: 7,
  };
  var obj = {
    categoryId: 1,
    limit: 7,
  };
  getData(obj, "menTarget");
  obj.categoryId = 2;
  getData(obj, "womenTarget");
  obj.categoryId = 3;
  getData(obj, "kidsTarget");
  getData(discountObj, "discountTarget");
});
