</main> <!-- Close main content -->

<footer class="py-4 text-white">
    <div class="container">
        <div class="row">
            <!-- Store Info -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="mb-3 fw-bold">Shree Laxmi Amul Shopiee</h5>
                <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i> 210, pachmarg, road, opp. police station, Delwadi, Kudan, Maharashtra 401502</p>
                <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i> <a href="tel:+919890377098" class="text-white">+91 9890377098</a></p>
                <p class="mb-1"><i class="bi bi-clock-fill me-2"></i> 7:00 AM to 11:00 PM (Daily)</p>
                
                <!-- Social Media Links -->
                <div class="mt-3 social-links">
                    <a href="https://www.facebook.com/share/16Y5YfVZGN/?mibextid=qi2Omg" target="_blank" class="social-icon me-2" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://wa.me/919890377098" target="_blank" class="social-icon me-2" aria-label="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="https://maps.app.goo.gl/pG3D8cZ4Udd39mgs9" target="_blank" class="social-icon" aria-label="Google Maps">
                        <i class="bi bi-geo"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="mb-3 fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="index.php" class="text-white text-decoration-none"><i class="bi bi-house-door me-2"></i>Home</a></li>
                    <li class="mb-2"><a href="products.php" class="text-white text-decoration-none"><i class="bi bi-grid me-2"></i>Products</a></li>
                    <li class="mb-2"><a href="enquiry.php" class="text-white text-decoration-none"><i class="bi bi-question-circle me-2"></i>Enquiry</a></li>
                    <li class="mb-2"><a href="gallery.php" class="text-white text-decoration-none"><i class="bi bi-images me-2"></i>Gallery</a></li>
                    <li><a href="contact.php" class="text-white text-decoration-none"><i class="bi bi-person-lines-fill me-2"></i>Contact Us</a></li>
                </ul>
                
                <!-- Helpful Links -->
                <h6 class="mt-4 mb-2 fw-bold">Helpful Links</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="faq.php" class="text-white text-decoration-none"><i class="bi bi-question-circle me-2"></i>FAQs</a></li>
                    <li><a href="nutritional-info.php" class="text-white text-decoration-none"><i class="bi bi-info-circle me-2"></i>Nutritional Info</a></li>
                </ul>
            </div>

            <!-- Newsletter & Connect With Us -->
            <div class="col-md-4">
                <h5 class="mb-3 fw-bold">Newsletter</h5>
                <p class="small mb-3">Subscribe to get updates on new products and special offers.</p>
                
                <form id="newsletter-form" action="subscribe.php" method="post" class="mb-4">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your email" aria-label="Email for newsletter" required>
                        <button class="btn btn-light" type="submit">Subscribe</button>
                    </div>
                </form>
                
                <h5 class="mb-3 fw-bold">Connect With Us</h5>
                <div class="d-flex flex-column">
                    <!-- Facebook Link -->
                    <a href="https://www.facebook.com/share/16Y5YfVZGN/?mibextid=qi2Omg" target="_blank" class="btn btn-primary mb-3">
                        <i class="bi bi-facebook me-2"></i> Follow Us on Facebook
                    </a>
                    
                    <!-- WhatsApp Link -->
                    <a href="https://wa.me/919890377098" target="_blank" class="btn btn-success mb-3">
                        <i class="bi bi-whatsapp me-2"></i> Chat on WhatsApp
                    </a>
                    
                    <!-- Google Maps -->
                    <a href="https://maps.app.goo.gl/pG3D8cZ4Udd39mgs9" target="_blank" class="btn btn-danger">
                        <i class="bi bi-geo-alt me-2"></i> Find Us on Google Maps
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="mt-4 pt-3 border-top">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> Shree Laxmi Amul Shopiee. All Rights Reserved.</p>
                    <p class="small mb-0 mt-1">
                        <a href="privacy-policy.php" class="text-white-50 text-decoration-none">Privacy Policy</a> | 
                        <a href="terms.php" class="text-white-50 text-decoration-none">Terms of Use</a>
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <img src="Amul.jpg" alt="Amul Logo" style="height: 40px; width: auto;" class="me-2">
                    <span class="small">Official Amul Products Outlet</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/919890377098" target="_blank" class="btn btn-success btn-lg rounded-circle" aria-label="Chat on WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
    
    <!-- Back to Top Button -->
    <button id="back-to-top" class="btn btn-primary btn-sm rounded-circle" aria-label="Back to top">
        <i class="bi bi-arrow-up"></i>
    </button>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ByetHost Compatibility Script -->
<script src="infinity-fixes.js"></script>

<!-- Custom JS -->
<script src="main.js"></script>

<!-- Analytics Script -->
<script>
// Replace with your analytics code
if (typeof gtag !== 'function') {
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX'); // Replace with your Google Analytics ID
}
</script>

<script>
// Back to top functionality
document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('back-to-top');
    if (backToTopButton) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
        
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Newsletter form submission
    const newsletterForm = document.getElementById('newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            // Show success message
            this.innerHTML = '<div class="alert alert-success">Thanks for subscribing!</div>';
            
            // You'd normally send this to your server
            console.log('Newsletter subscription:', email);
        });
    }
});
</script>
</body>
</html>