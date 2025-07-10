document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("searchInput");
  const sizeItems = document.querySelectorAll("#sizeList li");
  const categoryItems = document.querySelectorAll("#categoryList li");
  const productCards = document.querySelectorAll(".product-card");
  const resetBtn = document.getElementById("resetFilters");

  let selectedSize = null;
  let selectedCategory = null;

  function filterProducts() {
    const searchTerm = searchInput.value.toLowerCase();
    productCards.forEach(card => {
      const name = card.dataset.name.toLowerCase();
      const size = card.dataset.size;
      const category = card.dataset.category;

      const matchSearch = name.includes(searchTerm);
      const matchSize = selectedSize ? size === selectedSize : true;
      const matchCategory = selectedCategory ? category === selectedCategory : true;

      card.style.display = matchSearch && matchSize && matchCategory ? "block" : "none";
    });
  }

  sizeItems.forEach(item => {
    item.addEventListener("click", function () {
      sizeItems.forEach(i => i.classList.remove("active"));
      item.classList.add("active");
      selectedSize = item.dataset.size;
      filterProducts();
    });
  });

  categoryItems.forEach(item => {
    item.addEventListener("click", function () {
      categoryItems.forEach(i => i.classList.remove("active"));
      item.classList.add("active");
      selectedCategory = item.dataset.category;
      filterProducts();
    });
  });

  searchInput.addEventListener("input", filterProducts);

  resetBtn.addEventListener("click", function () {
    searchInput.value = "";
    selectedSize = null;
    selectedCategory = null;
    sizeItems.forEach(i => i.classList.remove("active"));
    categoryItems.forEach(i => i.classList.remove("active"));
    filterProducts();
  });
});
