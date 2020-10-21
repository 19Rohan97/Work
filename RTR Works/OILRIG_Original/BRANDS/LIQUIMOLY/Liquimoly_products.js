/*********************************** 
 SHOPPING CART AND IMAGES TO BE ADDED DYNAMICALLY ******************************************/

const menu = [
  {
    id: 1,
    title: "10W-30",
    category: "Liquimoly/Street",
    price: 917,
    img: "../../images/Liquimoly_Images/Street/10W30.jpg",
    desc: `Developed for air and water-cooled 4-stroke engines exposed to normal to extreme operating conditions. For sporting applications. Suitable for engines with or without a wet clutch.

     Made and bottled in Germany.
    
     6000 KM oil change interval.
    
     Synthetic technology engine oil.
    
     Smoother engine operations `,
  },
  {
    id: 2,
    title: "10W-40",
    category: "Liquimoly/Street",
    price: 781,
    img: "../../images/Liquimoly_Images/Street/10W40.jpg",
    desc: `Fully synthetic high-performance motor oil. For maximum performance and outstanding engine protection under all operating conditions. Offers perfect lubrication, outstanding engine cleanliness, excellent friction and minimum wear. Ensures smooth engagement and disengagement as well as gear shifting, which significantly increases driving pleasure. Tested for use with catalytic converters and on racing machines `,
  },
  {
    id: 3,
    title: "15W-50(1L)",
    category: "Liquimoly/Street",
    price: 840,
    img: "../../images/Liquimoly_Images/Street/15W50(1L).jpg",
    desc: `Developed for air and water-cooled 4-stroke engines exposed to normal to extreme operating conditions. For sporting applications. Suitable for engines with or without a wet clutch. Made and bottled in Germany. 6000 KM oil change interval. Synthetic technology engine oil. Smoother engine operations `,
  },
  {
    id: 4,
    title: "15W-50(4L)",
    category: "Liquimoly/Street",
    price: 3394,
    img: "../../images/Liquimoly_Images/Street/15W50(4L).jpg",
    desc: `Developed for air and water-cooled 4-stroke engines exposed to normal to extreme operating conditions. For sporting applications. Suitable for engines with or without a wet clutch. Made and bottled in Germany. 6000 KM oil change interval. Synthetic technology engine oil. Smoother engine operations `,
  },
  {
    id: 5,
    title: "20W-50",
    category: "Liquimoly/Street",
    price: 776,
    img: "../../images/Liquimoly_Images/Street/20W50.jpg",
    desc: `Heavy-duty motor oil based on selected mineral oils. Ensures optimum performance and protection of the engine under all operating conditions. Reliable lubrication, optimum noise damping and low wear are just as much taken for granted as gentle clutch engagement and disengagement and gear shifting. Tested on engines with catalytic converters`,
  },
  {
    id: 6,
    title: "5W-40",
    category: "Liquimoly/Street-Race",
    price: 1468,
    img: "../../images/Liquimoly_Images/Street%20Race/5W40.jpg",
    desc: `Fully Synthetic engine oil. 
    100% Made in Germany . 
    10,000 Km oil change interval . 
    High-Performance motor oil . 
    Moto 2 & Moto3 ( MotoGP) Exclusive Lubricant`,
  },
  {
    id: 7,
    title: "10W-40",
    category: "Liquimoly/Street-Race",
    price: 999,
    img: "../../images/Liquimoly_Images/Street%20Race/10W40.jpeg",
    desc: `Fully synthetic high-performance motor oil. For maximum performance and outstanding engine protection under all operating conditions. Offers perfect lubrication, outstanding engine cleanliness, excellent friction and minimum wear. Ensures smooth engagement and disengagement as well as gear shifting, which significantly increases driving pleasure. Tested for use with catalytic converters and on racing machines `,
  },
  {
    id: 8,
    title: "10W-50",
    category: "Liquimoly/Street-Race",
    price: 1499,
    img: "../../images/Liquimoly_Images/Street%20Race/10W50.jpg",
    desc: `Fully synthetic high-performance motor oil. Ensures maximum performance and protection of the engine under all operating conditions. Optimum lubrication, outstanding engine cleanliness, excellent friction and minimum wear are just as much taken for granted as gentle clutch engagement and disengagement and gear shifting. That makes a big difference to driving enjoyment! Tested on engines with catalytic converters. Tested on racing machines  `,
  },
  {
    id: 9,
    title: "10W-60",
    category: "Liquimoly/Street-Race",
    price: 1599,
    img: "../../images/Liquimoly_Images/Street%20Race/10W60.jpg",
    desc: `Fully synthetic high-performance motor oil. Ensures maximum performance and protection of the engine under all operating conditions. Optimum lubrication, outstanding engine cleanliness, excellent friction and minimum wear are just as much taken for granted as gentle clutch engagement and disengagement and gear shifting. That makes a big difference to driving enjoyment! Tested on engines with catalytic converters. Tested on racing machines`,
  },
  {
    id: 10,
    title: "Fork Oil 15W-Heavy (500ML)",
    category: "Fork-Oil",
    price: 763,
    img: "../../images/Liquimoly_Images/fork-oil-15W-heavy.jpeg",
    desc: `Full synthetic fork oil and shock-absorber oil. Reduces shear losses and provides sure handling performance even after long use. Prevents foam formation and seal hardening. Good corrosion and wear protection provide long service life.`,
  },
  {
    id: 11,
    title: "Fork Oil 10W-Medium (500ML)",
    category: "Liquimoly/Street-Race",
    price: 763,
    img: "../../images/Liquimoly_Images/fork-oil-10W-medium.jpeg",
    desc: `Full synthetic fork oil and shock-absorber oil. Reduces shear losses and provides sure handling performance even after long use. Prevents foam formation and seal hardening. Good corrosion and wear protection provide long service life.`,
  },
  {
    id: 12,
    title: "Fork Oil 5W-Light (500ML)",
    category: "Liquimoly/Street-Race",
    price: 763,
    img: "../../images/Liquimoly_Images/fork-oil-5W-light.jpeg",
    desc: `Full synthetic fork oil and shock-absorber oil. Reduces shear losses and provides sure handling performance even after long use. Prevents foam formation and seal hardening. Good corrosion and wear protection provide long service life.`,
  },

  {
    id: 14,
    title: "Chain Lube (250ML)",
    category: "Others",
    price: 899,
    img: "../../images/Liquimoly_Images/chain-lube.jpg",
    desc: `Fully synthetic chain grease. Extremely adhesive and water resistant. Excellent creeping and lubrication behavior. Especially suitable for high-speed chains. Reduces chain elongation and provides long chain service life. Optimal effectiveness only with unmixed use. We recommend cleaning the chain with Motorbike Chain and Brake.`,
  },
  {
    id: 15,
    title: "Brake Fluid DOT-4 (250mL)",
    category: "Others",
    price: 291,
    img: "../../images/Liquimoly_Images/Brake%20Fluid/Brake-Fluid-Dot-4.jpg",
    desc: `Synthetic brake fluid based on glycol ethers, alkyl poly glycols and glycol ether esters. It contains inhibitors to prevent the corrosion of metallic brake components and to reduce oxidation at increased temperatures. The brake fluid has a high wet and dry boiling point, thus ensuring safe braking even after the absorption of some moisture over an extended period of use.`,
  },
  {
    id: 16,
    title: "Brake Fluid Dot 5.1 (250ML)",
    category: "Others",
    price: 431,
    img: "../../images/Liquimoly_Images/Brake%20Fluid/Brake-Fluid-Dot-5_1.jpg",
    desc: `Synthetic brake fluid based on glycol ethers, alkyl polyglycols and polyglycol esters. It contains inhibitors to prevent the corrosion of metallic brake components and to reduce oxidation at increased temperatures. The brake fluid enjoys excellent wet and dry boiling points, thus guaranteeing safe braking.`,
  },

  {
    id: 17,
    title: "Chain Lube (250ML)",
    category: "Others",
    price: 899,
    img: "../../images/Liquimoly_Images/chain-lube.jpg",
    desc: `Fully synthetic chain grease. Extremely adhesive and water resistant. Excellent creeping and lubrication behavior. Especially suitable for high-speed chains. Reduces chain elongation and provides long chain service life. Optimal effectiveness only with unmixed use. We recommend cleaning the chain with Motorbike Chain and Brake.`,
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
