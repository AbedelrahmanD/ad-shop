//get  products saved in local storage
function getCartProducts() {
  var temp = localStorage.getItem("products");
  var products = [];
  if (temp != "" && temp != null) {
    products = JSON.parse(temp);
  }
  return products;
}
//save product in local storage
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
//update number of products near the cart icon in nav
function updateCartNumber() {
  var products = [];
  products = getCartProducts();
  var total = 0;
  for (var i = 0; i < products.length; i++) {
    total += parseFloat(products[i].quantity);
  }
  $("#cartNumber").text(total);
}
//remove product from local storage
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
//if local storage is not empty, draw cart else draw elert
function drawCart() {
  var products = [];
  var total = 0;
  var singleProductTotal;
  var productPrice;
  products = getCartProducts();
  var image;
  if (products.length > 0) {
    //cart header
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
      if (products[i].product_price_discount > 0) {
        productPrice = products[i].product_price_discount;
      } else {
        productPrice = products[i].product_price;
      }
      //cart body
      total += parseFloat(products[i].quantity) * parseFloat(productPrice);
      singleProductTotal =
        parseFloat(products[i].quantity) * parseFloat(productPrice);
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
      html += productPrice;
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
        ")' class='material-icons'><svg class='material-icons' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' focusable='false' width='1em' height='1em' style='-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);'  preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'> <path d='M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41z' /></svg></span>";
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
    //alert no products in cart
    html =
      "<div class='noProducts'><h1>Your cart is empty</h1><a href='products.php'>Check avilable products&nbsp;<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' focusable='false'  height='1.5em' style='-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);' preserveAspectRatio='xMidYMid meet' viewBox='0 0 512 512'><path fill='#626262' d='M273.919 472h-159.7a24 24 0 0 1-12.349-3.421L16 417.059V272.891L263.244 49.574a24 24 0 0 1 34.149 2.007A90.409 90.409 0 0 1 286.6 181.088L264 199.582V224h180a52 52 0 0 1 0 104H332.162l-35.119 126.423A24.071 24.071 0 0 1 273.919 472zm-157.487-32h151.406l40-144H444a20 20 0 0 0 0-40H232v-71.582l34.34-28.1a58.437 58.437 0 0 0 11.91-77.18L48 287.109v111.832zM284.693 73.321l-.023.02l.023-.02z' class='material-icons' /></svg></a></div>";
  }
  $("#cartInfo").html(html);
}
updateCartNumber();
drawCart();
