</main> <!-- Close main content -->

<!-- Footer -->
<footer class="mt-5 py-5 footer">
    <!-- Footer decorative elements -->
    <div class="footer-decoration footer-circle-1"></div>
    <div class="footer-decoration footer-circle-2"></div>
    <div class="footer-decoration footer-dots"></div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="footer-brand">
                    <img src="Amul.jpg" alt="Amul Logo" class="footer-logo">
                    <h5 class="text-white mb-0" style="font-size:1.25rem;">Shree Laxmi Amul Shopiee</h5>
                </div>
                <p class="text-white-50 mb-4">Your one-stop destination for all authentic Amul products. Serving the freshest dairy products since 2014.</p>
                
                <!-- Social icons with enhanced styling -->
                <div class="social-icons">
                    <a href="#" class="social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon" title="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-icon" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                </div>
                
                <!-- Awards section -->
                <div class="footer-awards mt-4">
                    <div class="award-item">
                        <div class="award-icon"><i class="bi bi-award"></i></div>
                        <div class="award-text">FSSAI Certified</div>
                    </div>
                    <div class="award-item">
                        <div class="award-icon"><i class="bi bi-shield-check"></i></div>
                        <div class="award-text">Authentic Products</div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 mb-4">
                <h5 class="text-white">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            
            <div class="col-md-3 col-sm-6 mb-4">
                <h5 class="text-white">Information</h5>
                <ul class="list-unstyled">
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="nutritional-info.php">Nutritional Info</a></li>
                    <li><a href="terms.php">Terms of Service</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="enquiry.php">Product Enquiry</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 mb-4">
                <h5 class="text-white">Contact Us</h5>
                <address class="text-white-50">
                    <p><i class="bi bi-geo-alt-fill"></i> 210, pachmarg, road,<br>opp. police station, Delwadi, Kudan,<br>Maharashtra 401502</p>
                    <p><i class="bi bi-telephone-fill"></i> <a href="tel:+919890377098">+91 9890377098</a></p>
                    <p><i class="bi bi-envelope-fill"></i> <a href="mailto:ompradippatil@gmail.com">ompradippatil@gmail.com</a></p>
                </address>
                <a href="contact.php" class="btn btn-outline-light btn-sm">
                    <i class="bi bi-chat-dots me-1"></i> Send Message
                </a>
            </div>
        </div>
        
        <hr class="bg-light opacity-25">
        
        <div class="row footer-bottom">
            <div class="col-md-6">
                <p class="text-white-50 small mb-0">&copy; <?php echo date('Y'); ?> Shree Laxmi Amul Shopiee. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="enquiry.php" class="text-white-50 small me-3">Business Enquiry</a>
            </div>
        </div>
    </div>
</footer>

<!-- WhatsApp Float Button -->
<a href="https://wa.me/919890377098" class="whatsapp-float" target="_blank">
    <i class="bi bi-whatsapp"></i>
</a>

<!-- Back to Top Button - Only one instance -->
<button id="back-to-top" title="Go to top">
    <i class="bi bi-arrow-up"></i>
</button>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- InfinityFree compatibility fixes -->
<script src="js/infinity-fixes.js"></script>
<!-- Animation fixes script -->
<script src="js/animations.js"></script>
<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- Main site JavaScript -->
<script src="js/main.js"></script>

<!-- Custom JS with Performance Optimizations -->
<script>
    // Initialize back to top button
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Initialize back to top button via main.js
        if (typeof initBackToTop === 'function') {
            initBackToTop();
        } else {
            // Fallback if main.js function isn't loaded
            const backToTop = document.getElementById('back-to-top');
            if (backToTop) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 200) {
                        backToTop.classList.add('show');
                    } else {
                        backToTop.classList.remove('show');
                    }
                });
                
                backToTop.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.scrollTo({top: 0, behavior: 'smooth'});
                });
                
                // Force check on load
                if (window.scrollY > 200) {
                    backToTop.classList.add('show');
                }
            }
        }
    });
</script>
</body>
</html>