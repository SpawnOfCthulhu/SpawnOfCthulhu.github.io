var products = [  {    name: "Product 1",    imageSrc: "product1.jpg",    price: "$19.99"  },  {    name: "Product 2",    imageSrc: "product2.jpg",    price: "$29.99"  }];  // add more products as needed

var productContainer = document.getElementById("product-container");

for (var i = 0; i < products.length; i++) {
  var product = products[i];
  var productHtml = `
    <div class="product">
      <img src="${product.imageSrc}" alt="${product.name}">
      <h3>${product.name}</h3>
      <p>${product.price}</p>
    </div>
  `;
  productContainer.innerHTML += productHtml;
}
