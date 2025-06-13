<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Amul - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Preload key carousel images for better mobile performance -->
    <link rel="preload" href="images/Ice Cream Collection.jpg" as="image">
    <link rel="preload" href="images/Dairy Products.jpg" as="image">
    <link rel="preload" href="images/Refreshing Beverages.jpg" as="image">
</head>
<body>

<?php include 'header.php'; ?>

<div class="floating-background">
    <div class="ice-cream cone"></div>
    <div class="ice-cream cup"></div>
    <div class="ice-cream candy"></div>
    <div class="ice-cream cone reversed"></div>
    <div class="ice-cream cup reversed"></div>
    <div class="ice-cream candy reversed"></div>
    <div class="ice-cream cone"></div>
    <div class="ice-cream cup"></div>
    <div class="ice-cream candy"></div>
    <div class="ice-cream cone reversed"></div>
</div>

<!-- Ultra-Modern Premium Carousel Slider -->
<div class="premium-slider-container mt-3 mb-4">
  <div id="amulCarousel" class="carousel slide premium-carousel" data-bs-ride="carousel">
    <!-- Carousel Progress Bar -->
    <div class="carousel-progress">
      <div class="carousel-progress-bar"></div>
    </div>

    <!-- 3D Carousel Inner -->
    <div class="carousel-inner premium-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active" data-slide-id="1">
        <div class="premium-slide-wrapper">
          <div class="carousel-image-container">
            <img src="images/Ice Cream Collection.jpg" alt="Ice Cream Collection" onerror="this.src='Amul.jpg';">
            <div class="slide-particles" id="particles-1"></div>
            <div class="image-reflections"></div>
          </div>
          <div class="carousel-caption premium-caption">
            <div class="caption-badge">Featured</div>
            <h2 class="slide-title">Delicious<br><span class="highlight">Ice Creams</span></h2>
            <div class="caption-divider"><span></span></div>
            <p class="slide-description">Explore our premium collection of rich, creamy Amul ice creams in various flavors.</p>
            <a href="products.php" class="btn btn-slider"></a>
              <span class="btn-text">Discover Now</span>
              <span class="btn-icon"><i class="bi bi-arrow-right"></i></span>
            </a>
            <div class="slide-number">01</div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" data-slide-id="2">
        <div class="premium-slide-wrapper">
          <div class="carousel-image-container">
            <img src="images/Dairy Products.jpg" alt="Dairy Products" onerror="this.src='Amul.jpg';">
            <div class="slide-particles" id="particles-2"></div>
            <div class="image-reflections"></div>
          </div>
          <div class="carousel-caption premium-caption">
            <div class="caption-badge">Popular</div>
            <h2 class="slide-title">Fresh<br><span class="highlight">Dairy Products</span></h2>
            <div class="caption-divider"><span></span></div>
            <p class="slide-description">Premium quality butter, cheese and milk products for your daily needs.</p>
            <a href="products.php" class="btn btn-slider">
              <span class="btn-text">Explore Range</span>
              <span class="btn-icon"><i class="bi bi-arrow-right"></i></span>
            </a>
            <div class="slide-number">02</div>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" data-slide-id="3">
        <div class="premium-slide-wrapper">
          <div class="carousel-image-container">
            <img src="images/Refreshing Beverages.jpg" alt="Refreshing Beverages" onerror="this.src='Amul.jpg';">
            <div class="slide-particles" id="particles-3"></div>
            <div class="image-reflections"></div>
          </div>
          <div class="carousel-caption premium-caption">
            <div class="caption-badge">New</div>
            <h2 class="slide-title">Refreshing<br><span class="highlight">Beverages</span></h2>
            <div class="caption-divider"><span></span></div>
            <p class="slide-description">Cool down with Amul's refreshing drink collection for hot summer days.</p>
            <a href="products.php" class="btn btn-slider">
              <span class="btn-text">Try Now</span>
              <span class="btn-icon"><i class="bi bi-arrow-right"></i></span>
            </a>
            <div class="slide-number">03</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Premium Controls -->
    <div class="premium-controls">
      <button class="carousel-control-prev premium-control" type="button" data-bs-target="#amulCarousel" data-bs-slide="prev">
        <span class="control-icon">
          <i class="bi bi-chevron-left"></i>
        </span>
      </button>
      <div class="slide-indicators">
        <button type="button" data-bs-target="#amulCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#amulCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#amulCarousel" data-bs-slide-to="2"></button>
      </div>
      <button class="carousel-control-next premium-control" type="button" data-bs-target="#amulCarousel" data-bs-slide="next">
        <span class="control-icon">
          <i class="bi bi-chevron-right"></i>
        </span>
      </button>
    </div>
  </div>
</div>

<main class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Hero Section -->
            <div class="content-card mb-5 animate__animated animate__fadeInDown">
                <div class="text-center mb-4">
                    <h1><i class="bi bi-cart3"></i> Shree Laxmi Amul Shopiee</h1>
                    <p class="badge bg-danger fs-6">Official Amul Outlet</p>
                </div>
                
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="text-primary"><i class="bi bi-cheese"></i> Welcome to Shree Laxmi Amul Shopiee</h2>
                        <p class="lead">Your One-Stop Destination for Fresh & Authentic Amul Products!</p>
                        <p>We are proud to be an official Amul outlet, bringing you the freshest dairy delights, tasty treats, and daily essentials—straight from the house of Amul.</p>
                        <p>Whether you're picking up your favorite butter, sipping on refreshing Amul Kool, or enjoying a scoop of rich Amul ice cream, we've got everything you love—under one roof.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="images/iceindex.webp" alt="Amul Products" class="img-fluid rounded shadow-sm" style="max-height: 300px;">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- What We Offer Section -->
            <div class="content-card mb-5 animate__animated animate__fadeIn animate__delay-1s">
                <h2 class="text-center mb-4"><i class="bi bi-cup-hot"></i> What We Offer</h2>
                
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInLeft animate__delay-2s">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-droplet-fill text-primary"></i> Amul Milk & Dairy Products</h5>
                                <p class="card-text">Fresh milk, curd, and other dairy essentials for your daily needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInRight animate__delay-2s">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-snow2 text-primary"></i> Ice Creams & Desserts</h5>
                                <p class="card-text">Delicious ice creams and frozen desserts in various flavors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInLeft animate__delay-3s">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-cup-straw text-primary"></i> Chocolates & Beverages</h5>
                                <p class="card-text">Tasty chocolates and refreshing beverages for all ages.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInRight animate__delay-3s">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-egg-fried text-primary"></i> Paneer, Cheese, Butter & More</h5>
                                <p class="card-text">Wide range of dairy products for your cooking needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4 animate__animated animate__fadeIn animate__delay-4s">
                    <div class="alert alert-info" role="alert">
                        <i class="bi bi-info-circle-fill"></i> Wholesale & Retail Options Available
                    </div>
                </div>
            </div>
            
            <!-- Visit Us Section -->
            <div class="content-card mb-5 animate__animated animate__fadeIn animate__delay-2s">
                <h2 class="text-center mb-4"><i class="bi bi-geo-alt"></i> Visit Us Today!</h2>
                
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card border-0 bg-light">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent">
                                        <i class="bi bi-geo-alt-fill text-danger"></i> <strong>Location:</strong> Shree Laxumi Amul Shopiee, [Pachmarg]
                                    </li>
                                    <li class="list-group-item bg-transparent">
                                        <i class="bi bi-clock-fill text-danger"></i> <strong>Timing:</strong> Open Daily – 7:00 AM to 10:00 PM
                                    </li>
                                    <li class="list-group-item bg-transparent">
                                        <i class="bi bi-telephone-fill text-danger"></i> <strong>Contact:</strong> +91 9890377098
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Why Choose Us Section -->
            <div class="content-card mb-5 animate__animated animate__fadeIn animate__delay-3s">
                <h2 class="text-center mb-4"><i class="bi bi-bell"></i> Why Choose Us?</h2>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <span class="badge rounded-pill bg-success p-2"><i class="bi bi-check-lg"></i></span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>100% Genuine Amul Products</h5>
                                <p class="text-muted mb-0">Authorized Amul outlet with authentic products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <span class="badge rounded-pill bg-success p-2"><i class="bi bi-check-lg"></i></span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>Best Prices Guaranteed</h5>
                                <p class="text-muted mb-0">Competitive pricing for all our products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <span class="badge rounded-pill bg-success p-2"><i class="bi bi-check-lg"></i></span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>Friendly & Quick Service</h5>
                                <p class="text-muted mb-0">Courteous staff ready to assist you</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <span class="badge rounded-pill bg-success p-2"><i class="bi bi-check-lg"></i></span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>Clean, Hygienic Store Environment</h5>
                                <p class="text-muted mb-0">Maintaining highest standards of cleanliness</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Thank You Section -->
            <div class="content-card text-center animate__animated animate__fadeInUp animate__delay-4s">
                <h2 class="text-danger"><i class="bi bi-heart"></i> Thank You for Trusting Shree Laxmi Amul Shopiee!</h2>
                <p class="fst-italic">"Amul – The Taste of India, Now at Your Neighborhood Store."</p>
                <div class="mt-4">
                    <a href="products.html" class="btn btn-primary btn-lg">
                        <i class="bi bi-arrow-right-circle"></i> Explore Our Products
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Animation Scroll Script -->
<script>
    // Function to handle animations on scroll
    function handleScrollAnimations() {
        const elements = document.querySelectorAll('.animate-on-scroll');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementPosition < windowHeight - 50) {
                element.classList.add('visible');
            }
        });
    }
    
    // Add scroll event listener
    window.addEventListener('scroll', handleScrollAnimations);
    
    // Initial check for elements in view
    document.addEventListener('DOMContentLoaded', function() {
        handleScrollAnimations();
    });
</script>
<!-- Enhanced slider animations and interactivity -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize the carousel
  var carousel = new bootstrap.Carousel(document.getElementById('amulCarousel'), {
    interval: 7000,
    pause: 'hover'
  });
  
  // Progress bar animation
  const progressBar = document.querySelector('.carousel-progress-bar');
  let slideInterval = 7000; // match bootstrap carousel interval
  
  function resetProgressBar() {
    progressBar.style.transition = 'none';
    progressBar.style.width = '0%';
    setTimeout(() => {
      progressBar.style.transition = `width ${slideInterval}ms linear`;
      progressBar.style.width = '100%';
    }, 10);
  }
  
  // Reset progress bar on slide change
  document.getElementById('amulCarousel').addEventListener('slide.bs.carousel', function() {
    resetProgressBar();
  });
  
  // Initialize progress bar
  resetProgressBar();
  
  // Create particles effect for each slide - reduced count on mobile for better performance
  function createParticles(containerId, count, color) {
    const container = document.getElementById(containerId);
    if (!container) return;
    
    // Reduce particle count on mobile
    const isMobile = window.innerWidth < 768;
    const particleCount = isMobile ? Math.floor(count / 2) : count;
    
    for (let i = 0; i < particleCount; i++) {
      const particle = document.createElement('div');
      particle.classList.add('particle');
      
      // Random positioning and size
      particle.style.left = `${Math.random() * 100}%`;
      particle.style.top = `${Math.random() * 100}%`;
      particle.style.width = `${Math.random() * 5 + 2}px`;
      particle.style.height = particle.style.width;
      particle.style.backgroundColor = color;
      
      // Random animation duration and delay
      particle.style.animationDuration = `${Math.random() * 3 + 2}s`;
      particle.style.animationDelay = `${Math.random() * 2}s`;
      
      container.appendChild(particle);
    }
  }
  
  // Create particles for each slide with different colors
  createParticles('particles-1', 30, '#ffde59');
  createParticles('particles-2', 30, '#ffffff');
  createParticles('particles-3', 30, '#92d2f5');
  
  // 3D rotation effect on hover (disable on mobile)
  const slides = document.querySelectorAll('.premium-slide-wrapper');
  
  // Only add 3D effects for non-touch devices
  if (window.matchMedia("(hover: hover)").matches) {
    slides.forEach(slide => {
      slide.addEventListener('mousemove', function(e) {
        const slideRect = slide.getBoundingClientRect();
        const slideWidth = slideRect.width;
        const slideHeight = slideRect.height;
        
        // Calculate mouse position relative to slide center
        const mouseX = e.clientX - slideRect.left - slideWidth / 2;
        const mouseY = e.clientY - slideRect.top - slideHeight / 2;
        
        // Apply subtle rotation based on mouse position
        const rotateY = mouseX * 0.01; // Horizontal rotation
        const rotateX = -mouseY * 0.01; // Vertical rotation
        
        slide.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
      });
      
      // Reset transform when mouse leaves
      slide.addEventListener('mouseleave', function() {
        slide.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
      });
    });
  }
  
  // Add touch swipe support for mobile
  let touchStartX = 0;
  let touchEndX = 0;
  
  const carouselElement = document.getElementById('amulCarousel');
  
  carouselElement.addEventListener('touchstart', function(e) {
    touchStartX = e.changedTouches[0].screenX;
  }, false);
  
  carouselElement.addEventListener('touchend', function(e) {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  }, false);
  
  function handleSwipe() {
    if (touchEndX < touchStartX - 50) {
      // Swiped left, go to next slide
      carousel.next();
    }
    if (touchEndX > touchStartX + 50) {
      // Swiped right, go to previous slide
      carousel.prev();
    }
  }
});
</script>
</body>
</html>