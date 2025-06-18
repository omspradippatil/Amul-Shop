<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amul - About Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Mobile optimization CSS -->
    <link rel="stylesheet" href="mobile-fixes.css">
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


<main class="container py-5" id="main-content">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="content-card animate__animated animate__fadeIn">
                <h1 class="text-center mb-4 animate__animated animate__fadeInDown">About Us</h1>
                
                <!-- About Us Section -->
                <section class="mb-5 animate__animated animate__fadeIn animate__delay-1s">
                    <div class="row align-items-center">
                        <div class="col-md-5 mb-4 mb-md-0">
                            <img src="images/store-front.jpg" alt="Shree Laxmi Amul Shopiee Store Front" class="img-fluid rounded shadow" onerror="this.src='Amul.jpg';">
                        </div>
                        <div class="col-md-7">
                            <h2 class="border-start border-4 border-primary ps-3 mb-4">Our Story</h2>
                            <p>Welcome to Shree Laxmi Amul Shopiee, your trusted neighborhood store for all things Amul. Established in 2014, we have been serving our community with fresh, high-quality Amul products that bring joy and nutrition to families across Pachmarg and surrounding areas.</p>
                            <p>As an authorized Amul outlet, we take pride in delivering the authentic taste of India's most beloved dairy brand directly to our customers. Our journey began with a simple mission: to ensure that every household has easy access to fresh Amul products at fair prices.</p>
                            <div class="mt-3 pt-2 border-top">
                                <h5 class="text-primary"><i class="bi bi-people"></i> Our Team</h5>
                                <p><strong>Owner:</strong> Pradip Laxuman Patil<br>
                                <strong>Co-Owner:</strong> Om Pradip Patil</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Features Section -->
                <section class="mb-5 animate__animated animate__fadeIn animate__delay-2s">
                    <h2 class="text-center mb-4">Features</h2>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3 mx-auto">
                                        <i class="bi bi-shop"></i>
                                    </div>
                                    <h5 class="card-title">Official Amul Outlet</h5>
                                    <p class="card-text">Authorized by GCMMF to sell genuine Amul products with quality assurance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div class="feature-icon bg-danger bg-gradient text-white rounded-circle mb-3 mx-auto">
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <h5 class="card-title">Premium Quality</h5>
                                    <p class="card-text">Fresh products maintained in proper storage conditions to preserve quality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div class="feature-icon bg-success bg-gradient text-white rounded-circle mb-3 mx-auto">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                    <h5 class="card-title">Extended Hours</h5>
                                    <p class="card-text">Open daily from 7:00 AM to 11:00 PM for your convenience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Services Section -->
                <section class="mb-5 animate__animated animate__fadeIn animate__delay-2s">
                    <h2 class="text-center mb-4">Services</h2>
                    <div class="row align-items-center">
                        <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                            <img src="images/service.jpg" alt="Our Services" class="img-fluid rounded shadow" onerror="this.src='Amul.jpg';">
                        </div>
                        <div class="col-md-6 order-md-1">
                            <div class="accordion" id="servicesAccordion">
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                            <i class="bi bi-basket me-2"></i> Retail Sales
                                        </button>
                                    </h3>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#servicesAccordion">
                                        <div class="accordion-body">
                                            We offer a complete range of Amul products for individual customers with competitive pricing.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            <i class="bi bi-boxes me-2"></i> Wholesale Supply
                                        </button>
                                    </h3>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                        <div class="accordion-body">
                                            Special pricing and delivery arrangements for bulk orders to small businesses and event organizers.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            <i class="bi bi-calendar-event me-2"></i> Special Orders
                                        </button>
                                    </h3>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                        <div class="accordion-body">
                                            We take special orders for ice cream cakes and bulk products for events with advance notice.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            <i class="bi bi-clock-history me-2"></i> Extended Hours
                                        </button>
                                    </h3>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                        <div class="accordion-body">
                                            Open daily from 7:00 AM to 11:00 PM for your convenience.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Who We Are Section -->
                <section class="mb-5 animate__animated animate__fadeIn animate__delay-3s">
                    <div class="bg-light p-4 rounded">
                        <h2 class="text-center mb-4">Who We Are</h2>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <p class="lead text-center">We are a dedicated team of professionals committed to bringing the best of Amul to our community.</p>
                                
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-circle bg-primary p-3"><i class="bi bi-people-fill fs-5"></i></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>Family-Owned Business</h5>
                                        <p class="text-muted mb-0">Run by a family that values quality, service and customer satisfaction above all.</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-circle bg-primary p-3"><i class="bi bi-heart-fill fs-5"></i></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>Community-Focused</h5>
                                        <p class="text-muted mb-0">We believe in building relationships with our customers and being an integral part of the community.</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-circle bg-primary p-3"><i class="bi bi-award-fill fs-5"></i></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>Quality Champions</h5>
                                        <p class="text-muted mb-0">We are passionate about maintaining Amul's high standards in every product we sell.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- What We Do Section -->
                <section class="mb-5 animate__animated animate__fadeIn animate__delay-3s">
                    <h2 class="text-center mb-5">What We Do</h2>
                    
                    <div class="row timeline position-relative">
                        <div class="col-md-6 offset-md-6 timeline-item">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-search text-primary"></i> Source the Best Products</h4>
                                    <p>We maintain direct supply chains with Amul to ensure freshness and authenticity of every product.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 timeline-item">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-shield-check text-primary"></i> Quality Assurance</h4>
                                    <p>We maintain strict temperature control and storage protocols to preserve the quality and taste of dairy products.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 offset-md-6 timeline-item">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-hand-thumbs-up text-primary"></i> Customer Satisfaction</h4>
                                    <p>We provide personalized service and product recommendations based on customer preferences.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 timeline-item">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-globe text-primary"></i> Community Engagement</h4>
                                    <p>We actively participate in local events and support community initiatives to give back to society.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Call to Action -->
                <section class="text-center py-4 animate__animated animate__fadeIn animate__delay-4s">
                    <h3 class="mb-4">Visit Us Today!</h3>
                    <p class="lead mb-4">Experience the taste of Amul at Shree Laxmi Amul Shopiee</p>
                    <a href="contact.php" class="btn btn-primary btn-lg">
                        <i class="bi bi-geo-alt"></i> Find Us
                    </a>
                </section>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
                </section>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
