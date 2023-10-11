const productsContainer = document.querySelector(".product-container");
const btnSort = document.querySelectorAll(".btnSort");

let products = [];
let sortMethod;
const fetchproducts = async () => {
  await fetch("./data/products.json")
    .then((res) => res.json())
    .then((data) => (products = data));
};

const productsDisplay = async (sortMethod) => {
  await fetchproducts();
  productsContainer.innerHTML = products
    .filter((product) =>
      product.title.toLowerCase().includes(inputSearch.value.toLowerCase())
    )
    .sort((a, b) => {
      if (sortMethod === "minToMax") return a.price - b.price;
      else if (sortMethod === "maxToMin") return b.price - a.price;
      else if (sortMethod === "alpha")
        return a.title.toString().localeCompare(b.title.toString());
    })
    .slice(0, inputRange.value)
    .map(
      (product) =>
        `
      <div class="card">
        <img src=${product.img} alt="product ${product.title}">
        <h2>${product.title}</h2>
        <h3>${product.date}</h3>
        <p>${product.price} €</p>
      </div>
    `
    )
    .join("");
};

inputSearch.addEventListener("input", () => productsDisplay(sortMethod));

inputRange.addEventListener("input", () => {
  rangeValue.innerHTML = inputRange.value;
  productsDisplay(sortMethod);
});

btnSort.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    sortMethod = e.target.id;
    productsDisplay(sortMethod);
  });
});
productsDisplay(sortMethod);
