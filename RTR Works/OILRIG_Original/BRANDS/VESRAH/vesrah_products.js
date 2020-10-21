/*********************************** 
 SHOPPING CART AND IMAGES TO BE ADDED DYNAMICALLY ******************************************/

const menu = [
  {
    id: 1,
    title: "Bajaj NS200 Front Breakpad",
    category: "Brake-Pads",
    price: 6500,
    img: "../../images/Vesrah_Images/Bajaj_NS200_Front_Breakpad.jpg",
    desc: ``,
  },
  {
    id: 2,
    title: "Bajaj NS200 Rear Breakpad",
    category: "Brake-Pads",
    price: 4900,
    img: "../../images/Vesrah_Images/Bajaj_NS200_Rear_Breakpad.jpg",
    desc: ``,
  },
  {
    id: 3,
    title: "KTM 200 Front Breakpad",
    category: "Brake-Pads",
    price: 4700,
    img: "../../images/Vesrah_Images/KTM_200_Front_Breakpad.jpg",
    desc: ``,
  },
  {
    id: 4,
    title: "KTM 200 Rear Breakpad",
    category: "Brake-Pads",
    price: 520,
    img: "../../images/Vesrah_Images/KTM_200_Rear_Breakpad.jpg",
    desc: ``,
  },
  {
    id: 5,
    title: "KTM 390 Front Breakpad",
    category: "Brake-Pads",
    price: 1770,
    img: "../../images/Vesrah_Images/KTM_390_Front_Breakpad.jpg",
    desc: ``,
  },
  {
    id: 6,
    title: "KTM 390 Rear Breakpad",
    category: "Brake-Pads",
    price: 450,
    img: "../../images/Vesrah_Images/KTM_390_Rear_Breakpad.jpg",
    desc: ``,
  },
  {
    id: 7,
    title: "R15 Front Breakpad",
    category: "Brake-Pads",
    price: 1580,
    img: "../../images/Vesrah_Images/R15_Front_Breakpad.jpg",
    desc: ``,
  },
  {
    id: 8,
    title: "R15 Rear Breakpad",
    category: "Brake-Pads",
    price: 1490,
    img: "../../images/Vesrah_Images/R15_Rear_Breakpad.jpg",
    desc: ``,
  },
  {
    id: 9,
    title: "Royal Enfield Himalayan Front BreakPad",
    category: "Brake-Pads",
    price: 1770,
    img:
      "../../images/Vesrah_Images/Royal_Enfield_Himalayan_Front_BreakPad.jpg",
    desc: ``,
  },
  {
    id: 10,
    title: "Royal Enfield Himalayan Rear BreakPad",
    category: "Brake-Pads",
    price: 1450,
    img: "../../images/Vesrah_Images/Royal_Enfield_Himalayan_Rear_BreakPad.jpg",
    desc: ``,
  },
  {
    id: 11,
    title: "Royal Enfield Interceptor Front BreakPad",
    category: "Brake-Pads",
    price: 399,
    img:
      "../../images/Vesrah_Images/Royal_Enfield_Interceptor_Front_Breakpad.jpg",
    desc: ``,
  },
  {
    id: 12,
    title: "Royal Enfield Interceptor Rear BreakPad",
    category: "Brake-Pads",
    price: 399,
    img:
      "../../images/Vesrah_Images/Royal_Enfield_Interceptor_Front_Breakpad.jpg",
    desc: ``,
  },
];

const sectionCenter = document.querySelector(".section-center");
const container = document.querySelector(".btn-container");

//======================== For the Cart Property ========================//

// Variables

const cartBtn = document.querySelector(".cart-btn");
const closeCartBtn = document.querySelector(".close-cart");
const clearCartBtn = document.querySelector(".clear-cart");
const cartDOM = document.querySelector(".cart");
const cartOverlay = document.querySelector(".cart-overlay");
const cartItems = document.querySelector(".cart-items");
const cartTotal = document.querySelector(".cart-total");
const cartContent = document.querySelector(".cart-content");
const productsDOM = document.querySelector(".products-center");

// Cart
let cart = [];

//======================== End of Cart Property ========================//

//======================== For the Menu Loading ========================//
// Load items
window.addEventListener("DOMContentLoaded", function () {
  displayMenuItems(menu);

  const categories = menu.reduce(
    function (values, item) {
      if (!values.includes(item.category)) {
        values.push(item.category);
      }
      return values;
    },
    ["all"]
  );
  const categoryBtns = categories
    .map(function (category) {
      return `<button id=${category} class="filter-btn" type="button" data-id=${category}>${category}</button>`;
    })
    .join("");
  container.innerHTML = categoryBtns;
  const filterBtns = document.querySelectorAll(".filter-btn");

  // Filter Items
  filterBtns.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      const category = e.currentTarget.dataset.id;
      const menuCategory = menu.filter(function (menuItem) {
        if (menuItem.category === category) {
          return menuItem;
        }
      });
      if (category === "all") {
        displayMenuItems(menu);
      } else {
        displayMenuItems(menuCategory);
      }
    });
  });
});

function displayMenuItems(menuItems) {
  let displayMenu = menuItems.map(function (item) {
    let result = `
      
        <article class="menu-item">
          <img src=${item.img} alt=${item.title} class="photo" />
          <div class="item-info">
            <header>
              <h4 class="text-white font-weight-bolder item-title">${item.title}</h4>
              <h4 class="price text-success">₹${item.price}</h4>
            </header>
            <p class="item-text text-muted">${item.desc}</p>
            <p></p>
          </div>
          <button class="bag-btn" data-id=${item.id} data-amount=${item.price}>
              <i class="fas fa-shopping-cart"></i>Buy Now
          </button>
        </article>
      
    `;
    return result;
  });
  displayMenu = displayMenu.join("");
  sectionCenter.innerHTML = displayMenu;
}
//======================== End of Menu Loading ========================//
