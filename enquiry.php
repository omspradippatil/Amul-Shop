<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amul - Product Enquiry</title>    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Site-specific styling -->
    <link rel="stylesheet" href="style.css">
    <!-- Mobile optimization CSS -->
    <link rel="stylesheet" href="mobile-fixes.css">
    <!-- InfinityFree compatibility fixes -->
    <link rel="stylesheet" href="infinity-compatibility.css">
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
            <!-- Enquiry Form Hero Section -->
            <div class="content-card mb-5 animate__animated animate__fadeInDown">
                <div class="text-center mb-4">
                    <h1><i class="bi bi-question-circle text-primary"></i> Product Enquiry</h1>
                    <p class="lead">Need information about a specific product? Fill out this form and we'll get back to you quickly!</p>
                </div>
            </div>
            
            <!-- Enquiry Form Section -->
            <div class="content-card enquiry-form-card" data-aos="fade-up" data-aos-duration="800">
                <div class="row">
                    <!-- Left side with form -->
                    <div class="col-lg-8">
                        <h3 class="mb-4 form-title"><i class="bi bi-clipboard-check"></i> Enquiry Form</h3>
                        <form id="enquiryForm" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <!-- Personal Information -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Your Name *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                                        <div class="invalid-feedback">
                                            Please provide your name.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required pattern="[0-9]{10}">
                                        <div class="invalid-feedback">
                                            Please provide a valid 10-digit phone number.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email (optional)">
                                        <div class="invalid-feedback">
                                            Please provide a valid email address.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="preferredContact" class="form-label">Preferred Contact Method *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-chat"></i></span>
                                        <select class="form-select" id="preferredContact" required>
                                            <option value="" selected disabled>Choose preferred contact...</option>
                                            <option value="phone">Phone Call</option>
                                            <option value="whatsapp">WhatsApp</option>
                                            <option value="email">Email</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select your preferred contact method.
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Enquiry Details -->
                                <div class="col-12">
                                    <hr>
                                    <h5 class="text-primary"><i class="bi bi-info-circle"></i> Enquiry Details</h5>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="productCategory" class="form-label">Product Category *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-tag"></i></span>
                                        <select class="form-select" id="productCategory" required>
                                            <option value="" selected disabled>Select product category...</option>
                                            <option value="ice-cream">Ice Creams</option>
                                            <option value="butter-cheese">Butter & Cheese</option>
                                            <option value="milk">Milk Products</option>
                                            <option value="beverages">Beverages</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a product category.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="productName" class="form-label">Product Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-box"></i></span>
                                        <input type="text" class="form-control" id="productName" placeholder="Product name (if known)">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="enquiryType" class="form-label">Enquiry Type *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-question-circle"></i></span>
                                        <select class="form-select" id="enquiryType" required>
                                            <option value="" selected disabled>Select type of enquiry...</option>
                                            <option value="price">Price Inquiry</option>
                                            <option value="availability">Product Availability</option>
                                            <option value="details">Product Details</option>
                                            <option value="bulk">Bulk/Wholesale Order</option>
                                            <option value="delivery">Delivery Options</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select an enquiry type.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="urgency" class="form-label">Urgency</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-alarm"></i></span>
                                        <select class="form-select" id="urgency">
                                            <option value="normal" selected>Normal</option>
                                            <option value="urgent">Urgent (need response today)</option>
                                            <option value="planning">Just Planning (no rush)</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <label for="message" class="form-label">Your Query/Message *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                                        <textarea class="form-control" id="message" rows="4" placeholder="Please describe your enquiry in detail..." required></textarea>
                                        <div class="invalid-feedback">
                                            Please provide details about your enquiry.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
                                        <label class="form-check-label" for="termsCheck">
                                            I agree to be contacted regarding this enquiry *
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg pulse-submit">
                                        <i class="bi bi-send"></i> Send Enquiry
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Right side with info -->
                    <div class="col-lg-4">
                        <div class="enquiry-info-sidebar">
                            <div class="enquiry-note" data-aos="fade-left" data-aos-delay="200">
                                <div class="note-icon">
                                    <i class="bi bi-lightbulb"></i>
                                </div>
                                <h4>Why Submit an Enquiry?</h4>
                                <ul class="info-list">
                                    <li><i class="bi bi-check-circle"></i> Get specific product information</li>
                                    <li><i class="bi bi-check-circle"></i> Check current stock availability</li>
                                    <li><i class="bi bi-check-circle"></i> Enquire about bulk orders & discounts</li>
                                    <li><i class="bi bi-check-circle"></i> Reserve products for pickup</li>
                                </ul>
                            </div>
                            
                            <div class="response-time" data-aos="fade-left" data-aos-delay="300">
                                <i class="bi bi-clock-history"></i>
                                <p><strong>Response Time:</strong> We typically respond within 2-3 hours during business hours (7AM-12AM)</p>
                            </div>
                            
                            <div class="enquiry-contact" data-aos="fade-left" data-aos-delay="400">
                                <h5><i class="bi bi-telephone"></i> Quick Contact</h5>
                                <p>For urgent queries, call us directly:</p>
                                <div class="quick-contact-btn">
                                    <a href="tel:+919890377098" class="btn btn-outline-primary">
                                        <i class="bi bi-telephone-outbound"></i> +91-9890377098
                                    </a>
                                </div>
                                <div class="quick-contact-btn mt-2">
                                    <a href="https://wa.me/919890377098" class="btn btn-outline-success">
                                        <i class="bi bi-whatsapp"></i> WhatsApp Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Submission Status Message - Initially hidden -->
                <div class="mt-4 submission-status d-none">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading"><i class="bi bi-check-circle"></i> Enquiry Submitted!</h4>
                        <p>Thank you for your enquiry. We've received your message and will contact you soon via your preferred contact method.</p>
                    </div>
                </div>
            </div>
            
            <!-- Related Links -->
            <div class="content-card mt-4 animate__animated animate__fadeInUp animate__delay-3s">
                <h3 class="mb-3 text-center">You might also be interested in:</h3>
                <div class="row g-4">
                    <div class="col-md-4">
                        <a href="products.php" class="card h-100 related-link-card">
                            <div class="card-body text-center">
                                <i class="bi bi-grid-3x3-gap fs-2 text-primary"></i>
                                <h5 class="mt-2">Browse Products</h5>
                                <p class="text-muted">View our complete product catalog</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="contact.php" class="card h-100 related-link-card">
                            <div class="card-body text-center">
                                <i class="bi bi-geo-alt fs-2 text-danger"></i>
                                <h5 class="mt-2">Store Location</h5>
                                <p class="text-muted">Find our store and visit us</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="about.php" class="card h-100 related-link-card">
                            <div class="card-body text-center">
                                <i class="bi bi-info-circle fs-2 text-success"></i>
                                <h5 class="mt-2">About Us</h5>
                                <p class="text-muted">Learn more about our store</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- InfinityFree compatibility fixes -->
<script src="infinity-fixes.js"></script>
<!-- Form validation and submission script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
        });

        // Form validation
        const form = document.getElementById('enquiryForm');
        
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                event.preventDefault(); // Prevent default form submission
                
                // Simulate form submission (in a real implementation, this would send data to the server)
                const submitButton = form.querySelector('button[type="submit"]');
                const originalText = submitButton.innerHTML;
                
                // Change button to loading state
                submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
                submitButton.disabled = true;
                
                // Simulate server processing time
                setTimeout(function() {
                    // Hide the form
                    form.classList.add('fade-out');
                    
                    setTimeout(function() {
                        form.style.display = 'none';
                        document.querySelector('.enquiry-info-sidebar').style.display = 'none';
                        
                        // Show success message
                        const statusMessage = document.querySelector('.submission-status');
                        statusMessage.classList.remove('d-none');
                        statusMessage.classList.add('fade-in');
                        
                        // Scroll to status message
                        statusMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }, 500);
                    
                }, 1500);
            }
            
            form.classList.add('was-validated');
        });
        
        // Additional form interactivity
        const productCategory = document.getElementById('productCategory');
        const enquiryType = document.getElementById('enquiryType');
        
        // Change icon based on selected product category
        productCategory.addEventListener('change', function() {
            const iconSpan = this.previousElementSibling;
            const category = this.value;
            
            switch(category) {
                case 'ice-cream':
                    iconSpan.innerHTML = '<i class="bi bi-snow2"></i>';
                    break;
                case 'butter-cheese':
                    iconSpan.innerHTML = '<i class="bi bi-egg-fried"></i>';
                    break;
                case 'milk':
                    iconSpan.innerHTML = '<i class="bi bi-droplet"></i>';
                    break;
                case 'beverages':
                    iconSpan.innerHTML = '<i class="bi bi-cup-straw"></i>';
                    break;
                default:
                    iconSpan.innerHTML = '<i class="bi bi-tag"></i>';
            }
        });
    });
</script>
</body>
</html>
