//get cart products
function getCartProducts() {
  var temp = localStorage.getItem("products");
  var products = [];
  if (temp != "" && temp != null) {
    products = JSON.parse(temp);
  }
  return products;
}

function saveProduct(product) {
  var products = [];
  products = getCartProducts();
  var exists = 0;
  for (var i = 0; i < products.length; i++) {
    if (
      products[i].product_id == product.product_id &&
      products[i].colorName == product.colorName
    ) {
      products[i] = product;
      exists = 1;
      break;
    }
  }

  if (exists == 0) {
    products.push(product);
  }
  localStorage.setItem("products", JSON.stringify(products));
  updateCartNumber();
  $(".toastContainer").css({ transform: "translateY(0px)" });
}

function updateCartNumber() {
  var products = [];
  products = getCartProducts();
  var total = 0;
  for (var i = 0; i < products.length; i++) {
    total += parseFloat(products[i].quantity);
  }
  $("#cartNumber").text(total);
}
function removeProduct(index) {
  var temp = [];
  temp = getCartProducts();

  var products = [];
  for (var i = 0; i < temp.length; i++) {
    if (i != index) {
      products.push(temp[i]);
    }
  }
  localStorage.setItem("products", JSON.stringify(products));
  drawCart();
  updateCartNumber();
}
updateCartNumber();
function drawCart() {
  var products = [];
  var total = 0;
  var singleProductTotal;
  products = getCartProducts();
  var image;
  if (products.length > 0) {
    var html = "<div >";
    html += "<div class='singleProductView cartHeader'>";
    html += "<div  class='productImg'>";
    html += "Product";
    html += "</div>";
    html += "<div class='productInfo'>";
    html += "Price";
    html += "</div>";
    html += "<div class='productInfo'>";
    html += "Color";
    html += "</div>";
    html += "<div class='productInfo'>";
    html += "Quantity";
    html += "</div>";
    html += "<div class='productInfo'>";
    html += "Total";
    html += "</div>";
    html += "<div class='productInfo'>";
    html += "";
    html += "</div>";
    html += "</div>";
    for (var i = products.length - 1; i >= 0; i--) {
      total +=
        parseFloat(products[i].quantity) *
        parseFloat(products[i].product_price);
      singleProductTotal =
        parseFloat(products[i].quantity) *
        parseFloat(products[i].product_price);
      image = products[i].images[0];
      html += "<div class='singleProductView cartBody'>";
      html +=
        "<a href='product_info.php?product=" +
        products[i].product_id +
        "'   class='productImg' style='height:200px'>";
      html +=
        "<img loading='lazy' src='" +
        image +
        "'/><br>" +
        products[i].product_name;
      html += "</a>";
      html += "<div class='productInfo'>";
      html += products[i].product_price;
      html += "</div>";
      html += "<div class='productInfo'>";
      html += products[i].colorName;
      html += "</div>";
      html += "<div class='productInfo'>";
      html += products[i].quantity;
      html += "</div>";
      html += "<div class='productInfo'>";
      html += singleProductTotal;
      html += "</div>";
      html += "<div class='productInfo'>";
      html +=
        "<span onclick='removeProduct(" +
        i +
        ")' class='material-icons'>close</span>";
      html += "</div>";
      html += "</div>";
    }

    html += "</div >";
    html +=
      '<div class="flexHE"><div class="totalCartPrice"><h1>Total</h1><p>' +
      total +
      "$</p>" +
      '<div class="sliderBtns" >' +
      '<a class="btn1" >Order</a>' +
      "</div></div></div>";
  } else {
    html =
      "<div class='noProducts'><h1>Your cart is empty</h1><a href='products.php'>Check avilable products&nbsp;<span class='material-icons'>navigation</span></a></div>";
  }
  $("#cartInfo").html(html);
}

drawCart();
