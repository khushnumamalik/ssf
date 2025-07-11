<?php
include ('include/header.php');

?>


<style>
  @media (max-width:768px) {
.hero-content{
margin-top: -50px !important;
}
    .hero-content h1 {
                font-size: 30px !important;
                margin-bottom: 12px;
            } 
}
        /* Hero Section */
        .hero {
            background: url('assets/images/banner') center/cover no-repeat;
            color: #fff;
            padding: 0;
            position: relative;
            overflow: hidden;
            min-height: 400px;
            width: 100%;
            height: 95vh;
        }
        .hero-overlay-structure {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            z-index: 2;
            padding: 0 5vw;
            box-sizing: border-box;
        }
        .hero-content {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            text-align: left;
            padding: 0 40px 0 0;
        }
        .hero-slider {
            flex: 0 0 420px;
            max-width: 420px;
            min-width: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            height: 420px;
            opacity: 0;
            transform: translateX(100vw);
            transition: none;
        }
        @media (max-width:768px) {
              .hero-slider {
            margin-top: -50px !important;
        }
        }
        .hero-slider.animate-in {
            animation: heroSliderIn 1.1s cubic-bezier(0.6,0.1,0.3,1) 0.2s forwards;
        }
        @keyframes heroSliderIn {
            from {
                opacity: 0;
                transform: translateX(100vw);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        .hero-slider img {
            width: 400px;
            height: 400px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 24px rgba(0,0,0,0.18);
            transition: opacity 0.5s;
            background: #fff;
            border: 8px solid #fff;
            display: block;
            animation: rotateCircle 80s linear infinite;
        }
        @keyframes rotateCircle {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .hero-content h1 {
            color: #fff;
            font-size: 2.5rem;
            margin-bottom: 18px;
            font-weight: bold;
            text-shadow: 0 2px 8px rgba(0,0,0,0.18);
        }
        .hero-content p {
            color: #fff;
            font-size: 1.2rem;
            margin-bottom: 28px;
            text-shadow: 0 2px 8px rgba(0,0,0,0.12);
        }
        .cta-btn {
            background: #fdc134;
            color: #222;
            padding: 18px 44px;
            border: none;
            border-radius: 40px;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(.4,2,.3,1);
            position: relative;
            z-index: 1;
            box-shadow: 0 6px 24px rgba(253, 193, 52, 0.18);
        }
        .cta-btn:hover {
            background: #222;
            color: #fff;
            box-shadow: 0 8px 32px rgba(34, 34, 34, 0.18);
            transform: translateY(-2px) scale(1.04);
        }
        @media (max-width: 900px) {
            .hero-overlay-structure {
                flex-direction: column-reverse;
                align-items: center;
                justify-content: center;
                padding: 0 2vw;
                height: 100%;
            }
            .hero-slider {
                height: 250px;
                max-width: 100vw;
                margin-top: 8px;
            }
            .hero-slider img {
                width: 220px;
                height: 220px;
            }
            .hero-content {
                align-items: center;
                text-align: center;
                padding: 0;
                margin-bottom: 10px;
            }
            .hero-content h1 {
                font-size: 1.3rem;
                margin-bottom: 12px;
            }
            .hero-content p {
                font-size: 1rem;
                margin-bottom: 18px;
            }
            .cta-btn {
                font-size: 1rem;
                padding: 12px 28px;
            }
        }
          /* About Us Section */
        .about-section {
            max-width: 1200px;
            margin: 60px auto 0 auto;
            padding: 40px 20px;
            background: #fff;
          
        }
        .about-row {
            display: flex;
            align-items: center;
            gap: 48px;
            flex-wrap: wrap;
        }
        .about-col {
            flex: 1 1 0;
        }
        .about-img-col {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .about-rotating-circle {
            width: 320px;
            height: 320px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: rotateCircle 18s linear infinite;
            box-shadow: 0 4px 24px rgba(24,99,171,0.10);
            margin: 0 auto;
        }
        .about-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: none;
            border-radius: 50%;
            background: #fff;
            box-shadow: none;
        }
        .about-content-col {
            padding: 0 10px;
        }
        .about-heading {
            font-size: 2.2rem;
            color: #1863ab;
            margin-bottom: 18px;
            font-weight: bold;
        }
        .about-text {
            font-size: 1.18rem;
            color: #333;
            line-height: 1.7;
        }
        .about-bg-rotating-circle {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: url('https://secondsightfoundation.com/assets/img/banner-imag/p2.webp') center/cover no-repeat #fff;
            z-index: 1;
            opacity: 0.25;
            animation: rotateCircle 18s linear infinite;
            box-shadow: 0 4px 24px rgba(24,99,171,0.10);
        }
        .about-img-static {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width:400px;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(253, 193, 52, 0.13);
            border: 6px solid #fdc134;
            background: #fff;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }
        @media (max-width: 900px) {
            .about-row {
                flex-direction: column;
                gap: 28px;
            }
            .about-img {
                max-width: 90vw;
            }
            .about-rotating-circle {
                width: 140px;
                height: 140px;
            }
            .about-bg-rotating-circle {
                width: 140px;
                height: 140px;
            }
            .about-img-static {
                max-width: 90vw;
            }
            .about-heading {
                font-size: 1.5rem;
            }
            .about-text {
                font-size: 1rem;
            }
        }
        .about-readmore-btn {
            display: inline-block;
            margin-top: 24px;
            padding: 13px 38px;
            background: #fdc134;
            color: #222;
            font-size: 1.08rem;
            font-weight: bold;
            border-radius: 25px;
            text-decoration: none;
            box-shadow: 0 4px 18px rgba(253, 193, 52, 0.13);
            border: none;
            transition: all 0.25s cubic-bezier(.4,2,.3,1);
        }
        .about-readmore-btn:hover {
            background: #1863ab;
            color: #fff;
            box-shadow: 0 6px 24px rgba(24,99,171,0.13);
        }
        @media (max-width: 900px) {
            .about-readmore-btn {
                display: block;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
        }
        .about-bullets {
            margin: 22px 0 0 0;
            padding-left: 22px;
        }
        .about-bullets li {
            font-size: 1.08rem;
            color: #333;
            margin-bottom: 10px;
            position: relative;
            line-height: 1.6;
        }
        .about-bullets li::marker {
            color: #fdc134;
            font-size: 1.2em;
        }
       
</style>
<!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay-structure">
            <div class="hero-content">
                <h1>Transform Your Life, Heal Your Soul and Find True Liberation</h1>
                <p>At our foundation, we scientifically explore occult concepts like the third eye, blindfold training, and manifestation, revealing how thoughts and emotions shape our reality.</p>
                <button class="cta-btn">Shop Now</button>
            </div>
            <div class="hero-slider">
                <img id="heroSliderImg" src="assets/images/braclet2.webp" alt="Slider Image">
            </div>
        </div>
    </section>
<!-- hero section end-->

 <!-- About Us Section -->
    <section class="container-fluid about-section">
        <div class="container">
            <div class="about-row">
                <div class="about-col about-img-col" style="position:relative;">
                    <div class="about-bg-rotating-circle"></div>
                    <img src="https://secondsightfoundation.com/assets/img/banner-imag/p3.webp" alt="About Us" class="about-img about-img-static">
                </div>
                <div class="about-col about-content-col">
                    <h2 class="about-heading">About Us</h2>
                    <p class="about-text">
                        We are dedicated to bringing you the best in modern, meaningful products that transform your lifestyle. Our mission is to blend science and spirituality, offering unique items that inspire, heal, and empower. With a focus on quality and authenticity, we strive to make your shopping experience truly exceptional.
                    </p>
                    <ul class="about-bullets">
                        <li>Premium Quality products</li>
                        <li>Natural & Authentic materials</li>
                        <li>Positive Energy & Transformation</li>
                        <li>Fast & Reliable Delivery</li>
                    </ul>
                    <a href="#" class="about-readmore-btn">Read More</a>
                </div>
            </div>
        </div>
    </section>

    


<!-- Our Products -->
<div class="container py-5">
   <div class="title title-4">
                <h2 style="text-align: center !important;">Our Products</h2>
            </div>
  <div class="row g-4">

    <!-- Product Card Example -->
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(214, 242, 253);">Attracts Success</span>
        <img src="assets/images/braclet1.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Dhan Yog Bracelet</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹599 <span
              class="text-muted text-decoration-line-through fs-6">₹1,099</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">

        <button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="1">
              Add to Box
            </button>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(248, 187, 187);">Attracts Success</span>
        <img src="assets/images/braclet2.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Crystal Healing Band</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹749 <span
              class="text-muted text-decoration-line-through fs-6">₹1,199</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">

            <button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="2">
              Add to Box
            </button>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(250, 209, 209);">Attracts Success</span>
        <img src="assets/images/braclet3.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Energy Stone Kada</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹899 <span
              class="text-muted text-decoration-line-through fs-6">₹1,299</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="3">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(240, 240, 157);">Attracts Success</span>
        <img src="assets/images/braclet4.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Prosperity Bracelet</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹999 <span
              class="text-muted text-decoration-line-through fs-6">₹1,399</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="4">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(253, 216, 253);">Attracts Success</span>
        <img src="assets/images/braclete-1.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Rudraksha Power Band</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹649 <span
              class="text-muted text-decoration-line-through fs-6">₹1,099</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="5">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(247, 204, 189);">Attracts Success</span>
        <img src="assets/images/braclete-2.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Chakra Balancing Kada</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹799 <span
              class="text-muted text-decoration-line-through fs-6">₹1,199</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="6">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(181, 243, 181);">Attracts Success</span>
        <img src="assets/images/braclete-5.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Divine Stone Kada</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹1199 <span
              class="text-muted text-decoration-line-through fs-6">₹1,599</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="7">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(243, 211, 216);">Attracts Success</span>
        <img src="https://astrotalk.store/cdn/shop/files/pocniilwg0vmczec4bgl_400x400_crop_center.webp?v=1750940044"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">AstroTalk Special</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹1499 <span
              class="text-muted text-decoration-line-through fs-6">₹1,999</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="8">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>

<!-- JavaScript for Quantity Buttons -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const allCards = document.querySelectorAll(".product-card");

    allCards.forEach(card => {
      let count = 1;
      const minusBtn = card.querySelector(".minus-btn");
      const plusBtn = card.querySelector(".plus-btn");
      const countSpan = card.querySelector(".box-count");

      minusBtn.addEventListener("click", () => {
        if (count > 0) {
          count--;
          countSpan.textContent = count;
        }
      });

      plusBtn.addEventListener("click", () => {
        count++;
        countSpan.textContent = count;
      });
    });
  });
</script>



 <!-- Banner Section Start -->
<section class="banner-section-1 py-3 container-fluid" 
         style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                url('https://www.rudraksha-ratna.com/assets/Consultation/consult-with-sakhashree/how-gems-works.jpg');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                height: 500px;
                position: relative;">

  <!-- ✅ Text on Banner -->
  <div class="position-absolute top-50 start-50 translate-middle text-center text-light w-100">
    <h5 class="fw-light mb-2" style="color: #fdc134; font-weight: bold !important;">Biggest Spiritual Sale of the Season!</h5>
    <h4 class="fw-bold mb-0 fs-1 fs-md-2 fs-sm-3 " style="color: #fff;  font-weight: bold;">Up to 50% OFF on Crystals, Healing Kits & More</h4>
  </div>

</section>
<!-- Banner Section End -->
<!-- banner section end -->

   
<!-- our products -->
<div class="container py-5">
    <div class="row g-4">

    <!-- Product Card Example -->
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(214, 242, 253);">Attracts Success</span>
        <img src="assets/images/braclet1.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Dhan Yog Bracelet</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹599 <span
              class="text-muted text-decoration-line-through fs-6">₹1,099</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">

        <button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="1">
              Add to Box
            </button>

          </div>
        </div>
      </div>
    </div>

    
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(248, 187, 187);">Attracts Success</span>
        <img src="assets/images/braclet2.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Crystal Healing Band</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹749 <span
              class="text-muted text-decoration-line-through fs-6">₹1,199</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">

            <button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="2">
              Add to Box
            </button>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(250, 209, 209);">Attracts Success</span>
        <img src="assets/images/braclet3.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Energy Stone Kada</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹899 <span
              class="text-muted text-decoration-line-through fs-6">₹1,299</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="3">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(240, 240, 157);">Attracts Success</span>
        <img src="assets/images/braclet4.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Prosperity Bracelet</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹999 <span
              class="text-muted text-decoration-line-through fs-6">₹1,399</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="4">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(253, 216, 253);">Attracts Success</span>
        <img src="assets/images/braclete-1.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Rudraksha Power Band</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹649 <span
              class="text-muted text-decoration-line-through fs-6">₹1,099</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="5">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(247, 204, 189);">Attracts Success</span>
        <img src="assets/images/braclete-2.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Chakra Balancing Kada</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹799 <span
              class="text-muted text-decoration-line-through fs-6">₹1,199</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="6">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(181, 243, 181);">Attracts Success</span>
        <img src="assets/images/braclete-5.webp"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">Divine Stone Kada</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹1199 <span
              class="text-muted text-decoration-line-through fs-6">₹1,599</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="7">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="product-card position-relative">
        <span class="ribbon " style="background-color: rgb(243, 211, 216);">Attracts Success</span>
        <img src="https://astrotalk.store/cdn/shop/files/pocniilwg0vmczec4bgl_400x400_crop_center.webp?v=1750940044"
          class="img-fluid" alt="Product">
        <div class="p-3">
          <h6 class="mb-1 fw-semibold">AstroTalk Special</h6>
          <div class="text-warning small">★★★★★ <span class="text-muted">1311 reviews</span></div>
          <div class="fw-bold fs-5">₹1499 <span
              class="text-muted text-decoration-line-through fs-6">₹1,999</span></div>

          <!-- Quantity + Add to Box -->
          <div class="d-flex align-items-center gap-2 mt-2">
<button class="btn btn-dark flex-fill add-btn" style="background-color: #161394; border-radius: 25px;" data-id="8">
              Add to Box
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Repeat the above block for more cards... -->
    <!-- You can copy-paste the entire card and change title, image, etc. -->

  </div>
  </div>



   
   


   
   <!-- Banner Section Start -->
<section class="banner-section">
  <div class="container-fluid-lg mt-5">
    <div class="row gy-lg-0 gy-3">
    
      <!-- Card 1 -->
      <div class="col-lg-6">
        <div class="banner-contain-3 hover-effect position-relative" style="height: 300px; overflow: hidden;">
          
          <!-- Image as background -->
          <img src="https://astrotalk.store/cdn/shop/files/c4cjdre8krxm6l2c0sq6.webp?v=1744573481&width=450"
               class="w-100 h-100 position-absolute top-0 start-0" style="object-fit: cover; z-index: 1;" alt="">

          <!-- Overlay Content -->
          <div class="banner-detail banner-detail-2 text-dark p-center-left w-75 banner-p-sm position-relative mend-auto"
               style="z-index: 2;">
            <div class="p-3">
              <h2 class="text-great fw-normal text-danger">Special offer</h2>
              <h3 class="mb-1 fw-bold">Citrine Dome Tree</h3>
              <h4 class="text-content">Rs 799</h4>
              <button class="btn btn-md theme-bg-color text-white mt-sm-3 mt-1 fw-bold mend-auto"
                      onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
            </div>
          </div>

        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-6">
        <div class="banner-contain-3 hover-effect position-relative" style="height: 300px; overflow: hidden;">
          
          <!-- Image -->
          <img src="https://astrotalk.store/cdn/shop/files/c4cjdre8krxm6l2c0sq6.webp?v=1744573481&width=450"
               class="w-100 h-100 position-absolute top-0 start-0" style="object-fit: cover; z-index: 1;" alt="">

          <!-- Overlay Content -->
          <div class="banner-detail banner-detail-2 text-dark p-center-left w-75 banner-p-sm position-relative mend-auto"
               style="z-index: 2;">
            <div class="p-3">
              <h2 class="text-great fw-normal text-danger">Special offer</h2>
              <h3 class="mb-1 fw-bold">Citrine Dome Tree</h3>
              <h4 class="text-content">Rs 799</h4>
              <button class="btn btn-md theme-bg-color text-white mt-sm-3 mt-1 fw-bold mend-auto"
                      onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<!-- Banner Section End -->

<!-- Blog Section Start -->
    <section class="blog-section">
        <div class="container-fluid-lg">
            <div class="title title-4">
                <h3> Rudraksha</h3>
            </div>

            <div class="slider-3-blog arrow-slider slick-height">
                <div>
                    <div class=" blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="https://astrotalk.store/cdn/shop/articles/Your_paragraph_text_8_9e0c01bb-46cb-4891-8620-daf70119377a_720x480.jpg?v=1751031255" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html" style="text-decoration: none;">
                                <h4>Karungali Mala Uses: Benefits, Powers & the Deity It Is Associated With</h4>
                            </a>
                            <h5 class="text-content" style="color: red;">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="https://astrotalk.store/cdn/shop/articles/11_Mukhi_Rudraksha_Benefits_and_Wearing_Rules_for_Maximum_Impact.jpg?v=1750940869&width=450" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Email Marketing</label>
                            <a href="blog-detail.html" style="text-decoration: none !important;">
                                <h4>11 Mukhi Rudraksha Benefits and Wearing Rules for Maximum Impact</h4>
                            </a>
                            <h5 class="text-content" style="color: red;">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="https://astrotalk.store/cdn/shop/articles/Your_paragraph_text_10_bb2375ea-4edc-444d-838e-41dd0cb852b8.jpg?v=1751031662&width=750" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                        
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="https://astrotalk.store/cdn/shop/articles/11_Mukhi_Rudraksha_Benefits_and_Wearing_Rules_for_Maximum_Impact.jpg?v=1750940869&width=750" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="https://astrotalk.store/cdn/shop/articles/Benefits_Of_Keeping_Hanuman_Ji_Murti.png?v=1748607631&width=750" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                        
                    </div>
                </div>


            </div>
        </div>
    </section>
<!-- Blog Section End -->



<!-- Banner Section Start -->
<section class="banner-section-1 py-3 container-fluid" 
         style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                url('https://images.unsplash.com/photo-1603049197613-366c045f11b0?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                height: 700px;
                position: relative; margin-top: 100px !important;">

  <!-- ✅ Text on Banner -->
  <div class="position-absolute top-50 start-50 translate-middle text-center text-light w-100">
    <h5 class="fw-light mb-2" style="color: #fdc134; font-weight: bold !important;">Biggest Spiritual Sale of the Season!</h5>
    <h4 class="text-banner fw-bold mb-0  fs-1 fs-md-2 fs-sm-3 " style="color: #fff; font-weight: bold;">Up to 50% OFF on Crystals,<br> Healing Kits & More</h4>
  </div>

</section>
<!-- Banner Section End -->








<!-- WHY CHOOSE US SECTION -->
<section class="container my-5 p-4 shadow rounded bg-white" style="margin-top: 100px !important;">
  <div class="text-center mb-4">
    <h4 class="fw-bold" style="font-size: 30px; color: black;">Why Choose Us</h4>
  </div>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-3">
    
    <div class="d-flex align-items-start">
      <span class="p-2 rounded me-3" style="background-color:#161394;">
        <i class="bi bi-patch-check-fill" style="color: #fff; font-size: 25px;"></i>
      </span>
      <strong class="pt-1">Credibility Since 1997</strong>
    </div>

    <div class="d-flex align-items-start">
      <span class="p-2 rounded me-3" style="background-color:#161394;">
        <i class="bi bi-truck" style="color: #fff; font-size: 25px;"></i>
      </span>
      <strong class="pt-1">Fastest Delivery</strong>
    </div>

    <div class="d-flex align-items-start">
      <span class="p-2 rounded me-3" style="background-color:#161394;">
        <i class="bi bi-person-lines-fill" style="color: white; font-size: 25px;"></i>
      </span>
      <strong class="pt-1">Expert Advice & Counselling</strong>
    </div>

    <div class="d-flex align-items-start">
      <span class="p-2 rounded me-3" style="background-color:#161394;">
        <i class="bi bi-globe" style="color: white; font-size: 25px;"></i>
      </span>
      <strong class="pt-1">Worldwide Distribution</strong>
    </div>

    <div class="d-flex align-items-start">
      <span class="p-2 rounded me-3" style="background-color:#161394;">
        <i class="bi bi-lightning-fill" style="color: #fff; font-size: 25px;"></i>
      </span>
      <strong class="pt-1">Vedic Pooja Energisation</strong>
    </div>

    <div class="d-flex align-items-start">
      <span class="p-2 rounded me-3" style="background-color:#161394;">
        <i class="bi bi-chat-dots-fill" style="color: #fff; font-size: 25px;"></i>
      </span>
      <strong class="pt-1">Over 100,000+ Testimonials</strong>
    </div>

  </div>
</section>
      
    <script>
    const sliderImages = [
        'assets/images/braclet1.webp',
        'assets/images/braclet2.webp.',
        'assets/images/braclet3.webp'
    ];
    let sliderIndex = 0;
    const sliderImg = document.getElementById('heroSliderImg');
    setInterval(() => {
        sliderIndex = (sliderIndex + 1) % sliderImages.length;
        sliderImg.style.opacity = 0.2;
        setTimeout(() => {
            sliderImg.src = sliderImages[sliderIndex];
            sliderImg.style.opacity = 1;
        }, 300);
    }, 3000);
 
      window.addEventListener('DOMContentLoaded', function() {
        var heroSlider = document.querySelector('.hero-slider');
        if(heroSlider) {
          heroSlider.classList.remove('animate-in');
          void heroSlider.offsetWidth;
          heroSlider.classList.add('animate-in');
        }

      
        const sliderImages = [
          'assets/images/braclet2.webp',
          'assets/images/braclet3.webp',
          'assets/images/braclet4.webp'
        ];
        let currentImg = 0;
        const heroSliderImg = document.getElementById('heroSliderImg');
        setInterval(() => {
          currentImg = (currentImg + 1) % sliderImages.length;
          heroSliderImg.src = sliderImages[currentImg];
        }, 3000);
      });
    </script>
   

<?php
include ('include/footer.php');

?>

<!-- Lead Capture Popup (auto open on page load) -->
<style>
@media (max-width: 700px) {
  #leadPopup { flex-direction: column; max-width: 95vw; min-width: 0; }
  #leadPopup > div:first-child { min-width: 100%; min-height: 160px; }
}
</style>
<div id="leadPopupOverlay" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.45); z-index:99999; align-items:center; justify-content:center;">
  <div id="leadPopup" style="background:#fff; border-radius:16px; max-width:600px; width:95vw; margin:auto; box-shadow:0 8px 32px rgba(0,0,0,0.18); display:flex; overflow:hidden; position:relative;">
    <button onclick="closeLeadPopup()" style="position:absolute; top:14px; right:14px; background:#fdc134; color:#222; border:none; border-radius:50%; width:32px; height:32px; font-size:22px; font-weight:bold; cursor:pointer; z-index:2;">&times;</button>
    <div style="flex:1.1; background:#fff; position:relative; min-width:220px; min-height:320px;">
      <img src="https://secondsightfoundation.com/assets/img/banner-imag/p3.webp" alt="Offer" style="width:100%; height:100%; object-fit:cover; min-width:220px; min-height:320px;">
      <div style="position:absolute; top:40px; left:30px; color:#fff; font-size:28px; font-weight:bold; text-shadow:0 2px 8px #0008;">30% OFF</div>
    </div>
    <div style="flex:1.4; padding:32px 24px 24px 24px; display:flex; flex-direction:column; justify-content:center;">
      <div style="font-size:20px; font-weight:bold; margin-bottom:8px;">Unlock Your Full Potential</div>
      <div style="font-size:14px; color:#444; margin-bottom:18px;">For more information about our courses, get in touch with us</div>
      <form id="leadForm" autocomplete="off">
        <input type="text" placeholder="Enter your Name" required style="width:100%; margin-bottom:10px; padding:10px; border-radius:6px; border:1px solid #ccc;">
        <input type="email" placeholder="Enter your email" required style="width:100%; margin-bottom:10px; padding:10px; border-radius:6px; border:1px solid #ccc;">
        <input type="tel" placeholder="Phone Number" required maxlength="10" style="width:100%; margin-bottom:10px; padding:10px; border-radius:6px; border:1px solid #ccc;">
        <textarea placeholder="Message" style="width:100%; margin-bottom:12px; padding:10px; border-radius:6px; border:1px solid #ccc; resize:none;" rows="2"></textarea>
        <button type="submit" style="width:100%; background:linear-gradient(90deg,#fdc134,#ffd269); color:#222; border:none; border-radius:6px; padding:12px 0; font-weight:bold; font-size:16px; cursor:pointer;">Submit</button>
      </form>
    </div>
  </div>
</div>
<script>
window.addEventListener('DOMContentLoaded', function() {
  if (!sessionStorage.getItem('leadPopupShown')) {
    document.getElementById('leadPopupOverlay').style.display = 'flex';
    sessionStorage.setItem('leadPopupShown', 'yes');
  }
});
function closeLeadPopup() {
  document.getElementById('leadPopupOverlay').style.display = 'none';
}
document.getElementById('leadForm').addEventListener('submit', function(e) {
  e.preventDefault();
  alert('Thank you! We will contact you soon.');
  closeLeadPopup();
});
</script>




