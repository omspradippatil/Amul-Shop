<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amul - Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Contact Us Hero Section -->
            <div class="content-card mb-5 animate__animated animate__fadeInDown">
                <div class="text-center mb-4">
                    <h1><i class="bi bi-telephone"></i> Contact Us</h1>
                    <p class="lead">We'd love to hear from you! Whether you have a question about our products, want to place an order, or just want to say hello — feel free to reach out.</p>
                </div>
            </div>
            
            <!-- Contact Information Section -->
            <div class="row g-4">
                <!-- Address Card -->
                <div class="col-md-6">
                    <div class="content-card h-100 animate__animated animate__fadeInLeft animate__delay-1s">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge rounded-pill bg-primary p-2 me-2"><i class="bi bi-geo-alt-fill fs-5"></i></span>
                            <h3 class="mb-0">Store Address</h3>
                        </div>
                        <p class="mb-0">Shree Laxmi Amul Shopiee</p>
                        <p class="mb-2">210, pachmarg, road, opp. police station, Delwadi, Kudan, Maharashtra 401502</p>
                        <a href="https://maps.app.goo.gl/pG3D8cZ4Udd39mgs9" target="_blank" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-map"></i> View on Google Maps
                        </a>
                    </div>
                </div>
                
                <!-- Phone Card -->
                <div class="col-md-6">
                    <div class="content-card h-100 animate__animated animate__fadeInRight animate__delay-1s">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge rounded-pill bg-success p-2 me-2"><i class="bi bi-telephone-fill fs-5"></i></span>
                            <h3 class="mb-0">Phone / WhatsApp</h3>
                        </div>
                        <p class="mb-2">
                            <a href="tel:+919890377098" class="text-decoration-none">
                                <strong>+91-9890377098</strong>
                            </a>
                        </p>
                        <p class="text-muted">(Available from 7 AM to 12 PM)</p>
                    </div>
                </div>
                
                <!-- Email Card -->
                <div class="col-md-6">
                    <div class="content-card h-100 animate__animated animate__fadeInLeft animate__delay-2s">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge rounded-pill bg-danger p-2 me-2"><i class="bi bi-envelope-fill fs-5"></i></span>
                            <h3 class="mb-0">Email</h3>
                        </div>
                        <p class="mb-2">
                            <a href="mailto:ompradippatil@gmail.com" class="text-decoration-none">
                                <strong>ompradippatil@gmail.com</strong>
                            </a>
                        </p>
                        <p class="text-muted">(For inquiries, feedback, or wholesale orders)</p>
                    </div>
                </div>
                
                <!-- Timing Card -->
                <div class="col-md-6">
                    <div class="content-card h-100 animate__animated animate__fadeInRight animate__delay-2s">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge rounded-pill bg-warning p-2 me-2"><i class="bi bi-clock-fill fs-5"></i></span>
                            <h3 class="mb-0">Store Timing</h3>
                        </div>
                        <p class="mb-2"><strong>Open All Days</strong></p>
                        <p>Morning: 7:00 AM – Night: 11:00 PM</p>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            
    
    <!-- Add some extra animation to the submit button -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const submitBtn = document.querySelector('button[type="submit"]');
            
            submitBtn.addEventListener('mouseover', function() {
                this.classList.add('animate__animated', 'animate__pulse');
            });
            
            submitBtn.addEventListener('mouseout', function() {
                this.classList.remove('animate__animated', 'animate__pulse');
            });
        });
    </script>
</main>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Animate.css JS (Optional, for animations) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.js"></script>
</body>
</html>
