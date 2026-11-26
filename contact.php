<?php
include 'db/db.php';

$pageTitle = 'Contact, Address & Hours | Shree Laxmi Amul Shopiee';
$pageDescription = 'Visit Shree Laxmi Amul Shopiee at 210 Pachmarg Road, opp. Police Station, Delwadi, Kudan, Maharashtra 401502. Open daily 7 AM to 11 PM.';
$pageKeywords = 'Shree Laxmi Amul Shopiee contact, Amul shop Pachmarg address, Amul store Kudan phone number, Palghar';

include 'header.php';
?>

<!-- Hero Section with Map Background -->
<section class="contact-hero position-relative overflow-hidden">
    <div class="contact-hero-bg"></div>
    <div class="container">
        <div class="row min-vh-50 align-items-center py-5">
            <div class="col-lg-8 mx-auto text-center">
                <div class="contact-hero-content p-4 rounded-3 animate__animated animate__fadeIn">
                    <span class="badge bg-accent text-dark mb-2 animate__animated animate__fadeInDown animate__delay-1s">GET IN TOUCH</span>
                    <h1 class="display-4 fw-bold text-white mb-3 animate__animated animate__fadeInUp animate__delay-1s">Contact Us</h1>
                    <p class="lead text-white mb-4 animate__animated animate__fadeInUp animate__delay-2s">We're here to help! Reach out to us with any questions about our products or services.</p>
                    <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-3s">
                        <a href="#contact-details" class="btn btn-lg btn-outline-light px-4 py-2 rounded-pill">Our Details</a>
                        <a href="#contact-form" class="btn btn-lg btn-accent px-4 py-2 rounded-pill">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wave-divider">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
            <path fill="#ffffff" fill-opacity="1" d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z"></path>
        </svg>
    </div>
</section>

<!-- Main Content -->
<div class="container py-5">
    <!-- Contact Information Cards -->
    <section id="contact-details" class="mb-5">
        <div class="row g-4 justify-content-center">
            <!-- Card 1: Address -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-card h-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-card-icon bg-primary text-white mx-auto">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h2 class="contact-card-title h3">Our Location</h2>
                    <address class="contact-card-address">
                        Shree Laxmi Amul Shopiee<br>
                        210, Pachmarg, road,<br>opp. police station,<br>
                        Delwadi, Kudan, Maharashtra 401502
                    </address>
                    <a href="https://maps.app.goo.gl/pG3D8cZ4Udd39mgs9" target="_blank" class="btn btn-outline-primary rounded-pill">
                        <i class="bi bi-map me-1"></i> Get Directions
                    </a>
                </div>
            </div>
            
            <!-- Card 2: Phone -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-card h-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card-icon bg-success text-white mx-auto">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h2 class="contact-card-title h3">Phone</h2>
                    <p class="contact-card-text">Call us directly at:</p>
                    <p class="contact-card-large-text">
                        <a href="tel:+919890377098" class="contact-link">+91 9890377098</a>
                    </p>
                    <p class="contact-card-note">(7:00 AM - 11:00 PM)</p>
                    <a href="tel:+919890377098" class="btn btn-outline-success rounded-pill">
                        <i class="bi bi-telephone-outbound me-1"></i> Call Now
                    </a>
                </div>
            </div>
            
            <!-- Card 3: WhatsApp -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-card h-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card-icon bg-success text-white mx-auto">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <h2 class="contact-card-title h3">WhatsApp</h2>
                    <p class="contact-card-text">Message us on WhatsApp:</p>
                    <p class="contact-card-large-text">
                        <a href="https://wa.me/919890377098" class="contact-link">+91 9890377098</a>
                    </p>
                    <p class="contact-card-note">Quick replies during business hours</p>
                    <a href="https://wa.me/919890377098" target="_blank" class="btn btn-outline-success rounded-pill">
                        <i class="bi bi-whatsapp me-1"></i> Send Message
                    </a>
                </div>
            </div>
            
            <!-- Card 4: Email -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-card h-100" data-aos="fade-up" data-aos-delay="400">
                    <div class="contact-card-icon bg-danger text-white mx-auto">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h2 class="contact-card-title h3">Email</h2>
                    <p class="contact-card-text">Write to us at:</p>
                    <p class="contact-card-text">
                        <a href="mailto:ompradippatil@gmail.com" class="contact-link">ompradippatil@gmail.com</a>
                    </p>
                    <p class="contact-card-note">For inquiries and feedback</p>
                    <a href="mailto:ompradippatil@gmail.com" class="btn btn-outline-danger rounded-pill">
                        <i class="bi bi-envelope me-1"></i> Email Us
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Store Hours and Info Card -->
        <div class="row mt-4">
            <div class="col-lg-10 mx-auto">
                <div class="store-info-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-6">
                            <div class="store-info-image">
                                <img src="images/shop (1).jpg" alt="Shree Laxmi Amul Shopiee Store Front" class="img-fluid rounded-start" loading="lazy" onerror="this.src='Amul.jpg';">
                                <div class="store-badge">
                                    <span><i class="bi bi-shop"></i> Official Amul Store</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="store-info-content p-4 p-md-5">
                                <h2 class="h3">Store Hours</h2>
                                <div class="store-hours">
                                    <div class="day-row">
                                        <span class="day">Monday - Sunday</span>
                                        <span class="hours">7:00 AM - 11:00 PM</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="mt-3">
                                    <h3 class="h5"><i class="bi bi-info-circle text-primary"></i> Additional Information</h3>
                                    <ul class="store-info-list">
                                        <li><i class="bi bi-check-circle"></i> <a href="gallery.php#certification" class="text-decoration-none">FSSAI Certified Store</a></li>
                                        <li><i class="bi bi-check-circle"></i> Wholesale & Bulk Orders Available</li>
                                        <li><i class="bi bi-check-circle"></i> Street Parking Available</li>
                                    </ul>
                                </div>
                                <div class="mt-4">
                                    <a href="enquiry.php" class="btn btn-primary rounded-pill">
                                        <i class="bi bi-question-circle me-1"></i> Product Enquiry
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Map Section -->
    <section class="map-section mb-5" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="map-container shadow">
                    <div class="map-header p-4">
                        <div class="d-flex align-items-center">
                            <div class="map-icon me-3">
                                <i class="bi bi-geo-alt-fill text-danger fs-1"></i>
                            </div>
                            <div>
                                <h2 class="mb-0 h3">Find Our Store</h2>
                                <p class="text-muted mb-0">Located opposite to Police Station in Pachmarg</p>
                            </div>
                        </div>
                    </div>
                    <div class="ratio ratio-21x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.227876302633!2d72.85!3d19.55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDMwJzAwLjAiTiA3MsKwNTAnMjQuMCJF!5e0!3m2!1sen!2sin!4v1620112345678!5m2!1sen!2sin" allowfullscreen="" loading="lazy" title="Shree Laxmi Amul Shopiee Location Map"></iframe>
                    </div>
                    <div class="map-footer p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <i class="bi bi-signpost-split text-primary fs-3"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5">Getting Here</h3>
                                        <p class="text-muted mb-0">Look for the Amul signboard opposite to Police Station</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <i class="bi bi-info-circle text-primary fs-3"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5">Nearby Landmarks</h3>
                                        <p class="text-muted mb-0">Police Station, Pachmarg Main Road</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Form Section -->
    <section id="contact-form" class="mb-5" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="contact-form-container">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div class="contact-form-sidebar p-4 p-md-5">
                                <h2 class="h3">Get In Touch</h2>
                                <p class="text-white-50 mb-4">We'd love to hear from you. Fill out the form and we'll get back to you as soon as possible.</p>
                                
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="bi bi-telephone"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h3 class="h5">Call Us On</h3>
                                        <p>+91 9890377098</p>
                                    </div>
                                </div>
                                
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h3 class="h5">Email Us At</h3>
                                        <p>ompradippatil@gmail.com</p>
                                    </div>
                                </div>
                                
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="bi bi-shop"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h3 class="h5">Visit Our Shop</h3>
                                        <p>210, Pachmarg, road, opp. police station, Delwadi</p>
                                    </div>
                                </div>
                                
                                <div class="contact-form-pattern"></div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="contact-form-content p-4 p-md-5">
                                <h2 class="mb-4 h3">Send us a Message</h2>
                                <form id="contactForm" action="submit_contact.php" method="POST" class="needs-validation" novalidate>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                                <label for="name"><i class="bi bi-person me-2"></i>Your Name</label>
                                                <div class="invalid-feedback">
                                                    Please enter your name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required maxlength="10" pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                                                <label for="phone"><i class="bi bi-telephone me-2"></i>Phone Number</label>
                                                <div class="invalid-feedback">
                                                    Please enter a valid 10-digit phone number.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                                <label for="email"><i class="bi bi-envelope me-2"></i>Email Address (Optional)</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="subject" name="subject" required>
                                                    <option value="" selected disabled>Select Subject</option>
                                                    <option value="Product Inquiry">Product Inquiry</option>
                                                    <option value="Bulk Order">Bulk Order</option>
                                                    <option value="Feedback">Feedback</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <label for="subject"><i class="bi bi-tag me-2"></i>Subject</label>
                                                <div class="invalid-feedback">
                                                    Please select a subject.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="message" name="message" placeholder="Your Message" style="height: 120px" required></textarea>
                                                <label for="message"><i class="bi bi-chat-dots me-2"></i>Your Message</label>
                                                <div class="invalid-feedback">
                                                    Please enter your message.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="consent" name="consent" required>
                                                <label class="form-check-label" for="consent">
                                                    I agree to be contacted regarding this inquiry
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                                <i class="bi bi-send me-2"></i> Send Message
                                                <div class="btn-animation-wrapper">
                                                    <span class="btn-animation-circle"></span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                
                                <!-- Success message (initially hidden) -->
                                <div class="form-success-message d-none text-center p-5">
                                    <div class="success-icon mb-4">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                    <h3 class="h4">Thank You!</h3>
                                    <p>Your message has been sent successfully. We'll get back to you shortly.</p>
                                    <button type="button" class="btn btn-outline-primary mt-3" id="sendAnotherBtn">
                                        <i class="bi bi-arrow-repeat me-2"></i> Send Another Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action Banner -->
    <section class="cta-section" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="cta-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="text-white mb-2 h3">Looking for product information?</h2>
                            <p class="text-white-50 mb-md-0">Check our product page or submit a detailed product enquiry.</p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="enquiry.php" class="btn btn-accent-2 rounded-pill">
                                <i class="bi bi-question-circle me-2"></i> Product Enquiry
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Floating Ice Cream Elements for Background Animation -->
<div class="floating-background">
    <!-- Ice cream elements will be generated by JavaScript -->
</div>

<?php
$extraFooterScripts = <<<'HTML'
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        const formSuccessMessage = document.querySelector('.form-success-message');
        const sendAnotherBtn = document.getElementById('sendAnotherBtn');

        if (contactForm) {
            contactForm.addEventListener('submit', function(event) {
                const phoneInput = document.getElementById('phone');
                if (phoneInput.value.length !== 10) {
                    phoneInput.setCustomValidity('Phone number must be exactly 10 digits');
                } else {
                    phoneInput.setCustomValidity('');
                }

                if (!contactForm.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    event.preventDefault();

                    const submitBtn = contactForm.querySelector('button[type="submit"]');
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Sending...';

                    const formData = new FormData(contactForm);

                    fetch('submit_contact.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(async response => {
                        const data = await response.json().catch(() => ({ success: response.ok }));
                        if (!response.ok || data.success === false) {
                            throw new Error(data.message || 'Submission failed');
                        }
                        return data;
                    })
                    .then(() => {
                        contactForm.classList.add('fade-out');

                        setTimeout(function() {
                            contactForm.style.display = 'none';
                            formSuccessMessage.classList.remove('d-none');
                            formSuccessMessage.classList.add('fade-in');
                        }, 300);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('There was an error submitting the form. Please try again later.');

                        submitBtn.disabled = false;
                        submitBtn.innerHTML = '<i class="bi bi-send me-2"></i> Send Message <div class="btn-animation-wrapper"><span class="btn-animation-circle"></span></div>';
                    });
                }

                contactForm.classList.add('was-validated');
            });
        }

        if (sendAnotherBtn) {
            sendAnotherBtn.addEventListener('click', function() {
                formSuccessMessage.classList.add('fade-out');

                setTimeout(function() {
                    formSuccessMessage.classList.add('d-none');
                    formSuccessMessage.classList.remove('fade-in', 'fade-out');

                    contactForm.reset();
                    contactForm.classList.remove('was-validated');
                    contactForm.style.display = 'block';
                    contactForm.classList.remove('fade-out');
                    contactForm.classList.add('fade-in');

                    const submitBtn = contactForm.querySelector('button[type="submit"]');
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<i class="bi bi-send me-2"></i> Send Message <div class="btn-animation-wrapper"><span class="btn-animation-circle"></span></div>';
                }, 300);
            });
        }

        const contactHeroBg = document.querySelector('.contact-hero-bg');
        if (contactHeroBg) {
            window.addEventListener('scroll', function() {
                const scrollPosition = window.pageYOffset;
                contactHeroBg.style.transform = `translateY(${scrollPosition * 0.4}px)`;
            }, { passive: true });
        }

        const animatedButtons = document.querySelectorAll('.btn-primary, .btn-accent, .btn-accent-2, .btn-outline-primary, .btn-outline-success, .btn-outline-danger');
        animatedButtons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.classList.add('animate__animated', 'animate__pulse');
            });

            button.addEventListener('mouseleave', function() {
                this.classList.remove('animate__animated', 'animate__pulse');
            });
        });
    });
</script>
HTML;

include 'footer.php';
?>
