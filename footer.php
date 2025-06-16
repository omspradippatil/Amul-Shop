<footer class="py-4 text-white">
    <div class="container">
        <div class="row">
            <!-- Store Info -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="mb-3 fw-bold">Shree Laxmi Amul Shopiee</h5>
                <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i> 210, pachmarg, road, opp. police station, Delwadi, Kudan, Maharashtra 401502</p>
                <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i> +91 9890377098</p>
                <p class="mb-1"><i class="bi bi-clock-fill me-2"></i> 7:00 AM to 12:00 AM (Daily)</p>
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
            </div>

            <!-- Connect With Us -->
            <div class="col-md-4">
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
        <a href="https://wa.me/919890377098" target="_blank" class="btn btn-success btn-lg rounded-circle">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- InfinityFree Compatibility Script -->
<script src="infinity-fixes.js"></script>

<script>
// Simple error handler for Bootstrap failures
window.addEventListener('error', function(e) {
    if (e.message.includes('bootstrap')) {
        console.warn('Bootstrap error detected, applying fallback');
        // Load compatibility script again if needed
        const script = document.createElement('script');
        script.src = 'infinity-fixes.js';
        document.body.appendChild(script);
    }
});
</script>