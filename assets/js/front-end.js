
  // 🔹 Cart object to track items and quantity
  let cart = {};

  // 🔹 Products list (can be extended or fetched via API)
  const products = {
    1: {
      id: 1,
      name: "Dhan Yog Bracelet",
      price: 599,
      image: "/assets/images/braclet1.webp"
    },
    2: {
      id: 2,
      name: "Crystal Healing Band",
      price: 749,
      image: "/assets/images/braclet2.webp"
    },
    3: {
      id: 3,
      name: "Energy Stone Kada",
      price: 899,
      image: "/assets/images/braclet3.webp"
    },
    4: {
      id: 4,
      name: "Prosperity Bracelet",
      price: 999,
      image: "/assets/images/braclet4.webp"
    },
    5: {
      id: 5,
      name: "Rudraksha Power Band",
      price: 649,
      image: "/assets/images/braclete-1.webp"
    },
    6: {
      id: 6,
      name: "Chakra Balancing Kada",
      price: 799,
      image: "/assets/images/braclete-2.webp"
    },
    7: {
      id: 7,
      name: "Divine Stone Kada",
      price: 1199,
      image: "/assets/images/braclete-5.webp"
    },
    8: {
      id: 8,
      name: "AstroTalk Special",
      price: 1499,
      image: "https://astrotalk.store/cdn/shop/files/pocniilwg0vmczec4bgl_400x400_crop_center.webp?v=1750940044"
    }
  };

  const cartContainer = document.getElementById("cartItemsContainer");
  const itemCount = document.getElementById("itemCount");
  const cartSubtotal = document.getElementById("cartSubtotal");

  // 🔘 Add to Box button click logic
  document.querySelectorAll(".add-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      const id = Number(btn.getAttribute("data-id"));
      const product = products[id];
      if (!product) {
        alert("Product not found for id: " + id);
        return;
      }
      if (cart[id]) {
        cart[id].qty += 1;
      } else {
        cart[id] = { ...product, qty: 1 };
      }
      renderCart();
    });
  });

  // 🔄 Render cart items and subtotal
  function renderCart() {
    cartContainer.innerHTML = "";
    let totalQty = 0;
    let subtotal = 0;

    // Loop through all items in cart
    for (let id in cart) {
      const p = cart[id];
      totalQty += p.qty;
      subtotal += p.qty * p.price;

      // Create cart item element
      const item = document.createElement("div");
      item.className = "d-flex border p-2 rounded mb-2";
      item.innerHTML = `
        <img src="${p.image}" class="img-thumbnail me-2" style="width: 80px; height: 80px;">
        <div class="flex-grow-1">
          <div class="fw-semibold">${p.name}</div>
          <div class="text-muted small">Quantity: ${p.qty}</div>
          <div class="fw-bold text-dark">Rs. ${p.price * p.qty}</div>
          <a href="#" class="text-danger small remove-link" data-id="${p.id}">Remove</a>
        </div>
      `;
      cartContainer.appendChild(item);
    }

    // Update cart item count
    itemCount.textContent = totalQty;

    // Update subtotal display
    cartSubtotal.querySelector("span:last-child").textContent = `₹${subtotal}`;

    // 🔻 Remove item from cart on click
    document.querySelectorAll(".remove-link").forEach(link => {
      link.addEventListener("click", e => {
        e.preventDefault();
        const id = link.getAttribute("data-id");
        delete cart[id];
        renderCart();
      });
    });
  }

  // 🔁 Optional: Functions to open/close the popup
  function closeCartPopup() {
    document.getElementById("cartPopup").style.transform = "translateX(100%)";
  }

  function openCartPopup() {
    document.getElementById("cartPopup").style.transform = "translateX(0)";
  }

  const rotatingTexts = [
    "Worldwide Fast & Safe Delivery",
    "Oldest ISO 9001:2015 Certified Rudraksha Organization in the World",
    "Your Trusted Brand Since 1997"
  ];

  const textElement = document.querySelector(".rotating-text");
  let currentIndex = 0;

  function rotateText() {
    textElement.style.opacity = 0;
    setTimeout(() => {
      textElement.textContent = rotatingTexts[currentIndex];
      textElement.style.opacity = 1;
      currentIndex = (currentIndex + 1) % rotatingTexts.length;
    }, 100); // fade out speed
  }

  rotateText(); // show first text immediately
  setInterval(rotateText, 3000);
  function openCartPopup() {
  document.getElementById('cartPopup').style.transform = 'translateX(0%)';
}

function closeCartPopup() {
  document.getElementById('cartPopup').style.transform = 'translateX(100%)';
}

// responsive toggle js 
 const navToggleBtn = document.getElementById("navToggleBtn");
  const toggleIcon = document.getElementById("toggleIcon");
  const mainNav = document.getElementById("mainNav");

  navToggleBtn.addEventListener("click", () => {
    const isOpen = mainNav.classList.contains("show");

    if (isOpen) {
      mainNav.classList.remove("show");
      toggleIcon.classList.replace("fa-xmark", "fa-bars");
      document.body.classList.remove("offcanvas-open");
    } else {
      mainNav.classList.add("show");
      toggleIcon.classList.replace("fa-bars", "fa-xmark");
      document.body.classList.add("offcanvas-open");
    }
  });
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    },
  });
  function openLoginPopup() {
  document.getElementById("loginPopup").style.display = "flex";
  showLoginForm(); // default to login form
}

function closeLoginPopup() {
  document.getElementById("loginPopup").style.display = "none";
}

function showSignupForm() {
  document.getElementById("loginFormBox").style.display = "none";
  document.getElementById("signupFormBox").style.display = "block";
}

function showLoginForm() {
  document.getElementById("signupFormBox").style.display = "none";
  document.getElementById("loginFormBox").style.display = "block";
}

// Login form validation
function validateLoginForm() {
  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();
  const error = document.getElementById("loginError");

  if (username === "" || password === "") {
    error.textContent = "Please fill in all fields.";
    return false;
  }

  error.textContent = "";
  alert("Login successful (simulation)");
  closeLoginPopup();
  return false;
}

// Signup form validation
function validateSignupForm() {
  const firstName = document.getElementById("firstName").value.trim();
  const lastName = document.getElementById("lastName").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const password = document.getElementById("newPassword").value;
  const confirmPassword = document.getElementById("confirmPassword").value;
  const error = document.getElementById("signupError");

  if (!firstName || !lastName || !email || !phone || !password || !confirmPassword) {
    error.textContent = "Please fill in all fields.";
    return false;
  }

  if (password !== confirmPassword) {
    error.textContent = "Passwords do not match.";
    return false;
  }

  if (!/^\d{10}$/.test(phone)) {
    error.textContent = "Enter a valid 10-digit phone number.";
    return false;
  }

  error.textContent = "";
  alert("Signup successful (simulation)");
  closeLoginPopup();
  return false;
}

// Close on outside click
window.onclick = function (event) {
  const popup = document.getElementById("loginPopup");
  if (event.target === popup) {
    popup.style.display = "none";
  }
};

// On page load, add all products to cart by default
window.addEventListener('DOMContentLoaded', function () {
  for (let id in products) {
    cart[id] = {
      ...products[id],
      qty: 1
    };
  }
  renderCart();
});
