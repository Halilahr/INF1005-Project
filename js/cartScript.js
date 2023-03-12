// Update the total price for a row in the cart table
function updateTotalPrice(quantity, price, rowIndex) {
  var total = quantity * price;
  document.getElementById("total-" + rowIndex).innerHTML = "$" + total.toFixed(2);
  updateCartTotal();
}

// Remove an item from the cart table
function removeItem(rowIndex) {
  var row = document.getElementById("cart").getElementsByTagName("tbody")[0].getElementsByTagName("tr")[rowIndex - 1];
  row.parentNode.removeChild(row);
  updateCartTotal();
}

// Clear the cart table
function clearCart() {
  var cart = document.getElementById("cart").getElementsByTagName("tbody")[0];
  while (cart.firstChild) {
    cart.removeChild(cart.firstChild);
  }
  updateCartTotal();
  document.getElementById("recommendations").style.display = "block";
}

// Update the total price of the cart
function updateCartTotal() {
  var cart = document.getElementById("cart").getElementsByTagName("tbody")[0];
  var total = 0;
  for (var i = 0; i < cart.rows.length; i++) {
    var row = cart.rows[i];
    var price = parseFloat(row.cells[1].innerHTML.substring(1));
    var quantity = parseInt(row.cells[2].getElementsByTagName("input")[0].value);
    var subtotal = price * quantity;
    total += subtotal;
    row.cells[3].innerHTML = "$" + subtotal.toFixed(2);
  }
  document.getElementById("total").innerHTML = "$" + total.toFixed(2);
  if (cart.rows.length == 0) {
    document.getElementById("recommendations").style.display = "block";
  } else {
    document.getElementById("recommendations").style.display = "none";
  }
}

// Checkout function
function checkout() {
  // Implement your own checkout logic here
  alert("Thank you for your purchase!");
}

// Check if the cart is empty and show or hide the recommendations
if (document.getElementById("cart").getElementsByTagName("tbody")[0].rows.length == 0) {
  document.getElementById("recommendations").style.display = "block";
} else {
  document.getElementById("recommendations").style.display = "none";
}
