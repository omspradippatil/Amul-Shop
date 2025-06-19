</main> <!-- Close main content -->

<footer class="py-4 text-white">
    <div class="container">
        <div class="row">
            <!-- Quick Links (Enhanced with colorful styling) -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="mb-3 fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="index.php" class="text-white"><i class="bi bi-house-door me-2 text-warning"></i>Home</a></li>
                    <li class="mb-2"><a href="about.php" class="text-white"><i class="bi bi-info-circle me-2 text-info"></i>About Us</a></li>
                    <li class="mb-2"><a href="products.php" class="text-white"><i class="bi bi-grid me-2 text-success"></i>Products</a></li>
                    <li class="mb-2"><a href="gallery.php" class="text-white"><i class="bi bi-images me-2 text-danger"></i>Gallery</a></li>
                    <li class="mb-2"><a href="contact.php" class="text-white"><i class="bi bi-person-lines-fill me-2 text-primary"></i>Contact Us</a></li>
                    <li><a href="enquiry.php" class="text-white"><i class="bi bi-question-circle me-2 text-warning"></i>Enquiry</a></li>
                </ul>
            </div>

            <!-- Helpful Links (Middle column) -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="mb-3 fw-bold">Helpful Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="faq.php" class="text-white"><i class="bi bi-question-circle me-2 text-info"></i>FAQs</a></li>
                    <li class="mb-2"><a href="nutritional-info.php" class="text-white"><i class="bi bi-info-circle me-2 text-success"></i>Nutritional Info</a></li>
                    <li class="mb-2"><a href="terms.php" class="text-white"><i class="bi bi-file-text me-2 text-warning"></i>Terms of Use</a></li>
                    <li><a href="privacy-policy.php" class="text-white"><i class="bi bi-shield-lock me-2 text-danger"></i>Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Store Info (Enhanced with colorful elements) -->
            <div class="col-md-4">
                <h5 class="mb-3 fw-bold">Shree Laxmi Amul</h5>
                <p class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-danger"></i> 210, pachmarg, road, opp. police station, Delwadi, Kudan, Maharashtra 401502</p>
                <p class="mb-2"><i class="bi bi-telephone-fill me-2 text-success"></i> <a href="tel:+919890377098" class="text-white">+91 9890377098</a></p>
                <p class="mb-2"><i class="bi bi-clock-fill me-2 text-info"></i> 7:00 AM to 11:00 PM (Daily)</p>
                
                <div class="mt-3 mb-3 d-inline-block bg-white bg-opacity-10 rounded px-3 py-2">
                    <span class="badge bg-warning text-dark me-2">FSSAI Certified</span>
                    <span class="badge bg-info me-2">Official Outlet</span>
                </div>
            </div>
        </div>

        <!-- Footer Bottom with Social Links -->
        <div class="footer-bottom mt-4 pt-3 border-top border-white border-opacity-10">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <div class="social-links">
                        <a href="https://www.facebook.com/share/16Y5YfVZGN/?mibextid=qi2Omg" target="_blank" class="social-icon" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://wa.me/919890377098" target="_blank" class="social-icon" aria-label="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="https://maps.app.goo.gl/pG3D8cZ4Udd39mgs9" target="_blank" class="social-icon" aria-label="Google Maps">
                            <i class="bi bi-geo"></i>
                        </a>
                        <a href="tel:+919890377098" class="social-icon" aria-label="Call Us">
                            <i class="bi bi-telephone"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> Shree Laxmi Amul Shopiee. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp Button (Enhanced) -->
    <div class="whatsapp-float">
        <a href="https://wa.me/919890377098" target="_blank" class="btn btn-success btn-lg rounded-circle" aria-label="Chat on WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
    
    <!-- Back to Top Button with enhanced styling -->
    <button id="back-to-top" class="btn" aria-label="Back to top">
        <i class="bi bi-arrow-up"></i>
    </button>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS with Performance Optimizations -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Back to top functionality
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
    
    // Lazy load images
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const image = entry.target;
                    image.classList.add('loaded');
                    observer.unobserve(image);
                }
            });
        });
        
        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for browsers that don't support Intersection Observer
        lazyImages.forEach(img => {
            img.classList.add('loaded');
        });
    }
    
    // Add a nice touch effect for touch devices
    if ('ontouchstart' in window) {
        const buttons = document.querySelectorAll('.btn, .nav-link, a.card');
        buttons.forEach(btn => {
            btn.addEventListener('touchstart', function() {
                this.style.transform = 'scale(0.97)';
            });
            btn.addEventListener('touchend', function() {
                this.style.transform = '';
            });
        });
    }
});
</script>

<!-- Deferred loading of non-critical CSS -->
<script>
// Load non-critical CSS after page load
window.addEventListener('load', function() {
    const fontAwesome = document.createElement('link');
    fontAwesome.rel = 'stylesheet';
    fontAwesome.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css';
    document.head.appendChild(fontAwesome);
});
</script>
</body>
</html>