</main> <!-- Close main content -->

<footer class="py-4 text-white">
    <div class="container">
        <div class="row">
            <!-- Quick Links (Moved to left) -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="mb-3 fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="index.php" class="text-white text-decoration-none"><i class="bi bi-house-door me-2"></i>Home</a></li>
                    <li class="mb-2"><a href="about.php" class="text-white text-decoration-none"><i class="bi bi-info-circle me-2"></i>About Us</a></li>
                    <li class="mb-2"><a href="products.php" class="text-white text-decoration-none"><i class="bi bi-grid me-2"></i>Products</a></li>
                    <li class="mb-2"><a href="gallery.php" class="text-white text-decoration-none"><i class="bi bi-images me-2"></i>Gallery</a></li>
                    <li class="mb-2"><a href="contact.php" class="text-white text-decoration-none"><i class="bi bi-person-lines-fill me-2"></i>Contact Us</a></li>
                    <li><a href="enquiry.php" class="text-white text-decoration-none"><i class="bi bi-question-circle me-2"></i>Enquiry</a></li>
                </ul>
            </div>

            <!-- Helpful Links (Middle column) -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="mb-3 fw-bold">Helpful Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="faq.php" class="text-white text-decoration-none"><i class="bi bi-question-circle me-2"></i>FAQs</a></li>
                    <li class="mb-2"><a href="nutritional-info.php" class="text-white text-decoration-none"><i class="bi bi-info-circle me-2"></i>Nutritional Info</a></li>
                    <li class="mb-2"><a href="terms.php" class="text-white text-decoration-none"><i class="bi bi-file-text me-2"></i>Terms of Use</a></li>
                    <li><a href="privacy-policy.php" class="text-white text-decoration-none"><i class="bi bi-shield-lock me-2"></i>Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Store Info (Moved to right) -->
            <div class="col-md-4">
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
        </div>

        <!-- Simplified Social Links -->
        <div class="mt-4 pt-3 border-top">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                        <a href="https://www.facebook.com/share/16Y5YfVZGN/?mibextid=qi2Omg" target="_blank" class="social-icon" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://wa.me/919890377098" target="_blank" class="social-icon" aria-label="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="https://maps.app.goo.gl/pG3D8cZ4Udd39mgs9" target="_blank" class="social-icon" aria-label="Google Maps">
                            <i class="bi bi-geo"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> Shree Laxmi Amul Shopiee. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp Button (Right side) -->
    <div class="whatsapp-float">
        <a href="https://wa.me/919890377098" target="_blank" class="btn btn-success btn-lg rounded-circle" aria-label="Chat on WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
    
    <!-- Back to Top Button -->
    <button id="back-to-top" class="btn btn-primary rounded-circle" aria-label="Back to top">
        <i class="bi bi-arrow-up"></i>
    </button>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ByetHost Compatibility Script -->
<script src="infinity-fixes.js"></script>

<!-- Custom JS -->
<script src="main.js"></script>

<!-- Back to top functionality -->
<script>
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
});
</script>
</body>
</html>