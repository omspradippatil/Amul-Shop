/**
 * Main JavaScript for Shree Laxmi Amul Shopiee
 * Contains common functionality used across the website
 */

document.addEventListener('DOMContentLoaded', function() {
    // Search overlay functionality
    initializeSearch();
    
    // Back to top button functionality
    initializeBackToTop();
    
    // Newsletter form handling
    initializeNewsletterForm();
    
    // Product filtering if on products page
    initializeProductFilters();
    
    // Animate floating elements
    initializeFloatingElements();
    
    // Initialize carousel animations
    initializeCarouselAnimations();
});

/**
 * Initialize search overlay functionality
 */
function initializeSearch() {
    const searchToggle = document.querySelector('.search-toggle');
    const searchOverlay = document.querySelector('.search-overlay');
    const closeSearch = document.querySelector('.close-search');
    
    if (searchToggle && searchOverlay && closeSearch) {
        // Open search overlay
        searchToggle.addEventListener('click', function() {
            searchOverlay.classList.add('active');
            document.body.classList.add('no-scroll');
            setTimeout(() => {
                document.querySelector('.search-form input').focus();
            }, 100);
        });
        
        // Close search overlay
        closeSearch.addEventListener('click', function() {
            searchOverlay.classList.remove('active');
            document.body.classList.remove('no-scroll');
        });
        
        // Close search on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
                searchOverlay.classList.remove('active');
                document.body.classList.remove('no-scroll');
            }
        });
        
        // Handle search form submission
        const searchForm = document.querySelector('.search-form');
        if (searchForm) {
            searchForm.addEventListener('submit', function(e) {
                const searchInput = this.querySelector('input[name="query"]');
                if (searchInput.value.trim() === '') {
                    e.preventDefault();
                    searchInput.focus();
                    // Add shake animation to indicate error
                    searchInput.classList.add('animate__animated', 'animate__shakeX');
                    setTimeout(() => {
                        searchInput.classList.remove('animate__animated', 'animate__shakeX');
                    }, 1000);
                }
            });
        }
    }
}

/**
 * Initialize back to top button functionality
 */
function initializeBackToTop() {
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
}

/**
 * Initialize newsletter form handling
 */
function initializeNewsletterForm() {
    const newsletterForm = document.getElementById('newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            // Show success message with animation
            this.innerHTML = '<div class="alert alert-success animate__animated animate__fadeIn">Thanks for subscribing!</div>';
            
            // You'd normally send this to your server
            console.log('Newsletter subscription:', email);
        });
    }
}

/**
 * Initialize product filtering on products page
 */
function initializeProductFilters() {
    // Ice cream category filter buttons
    const filterButtons = document.querySelectorAll('.ice-cream-filter');
    const items = document.querySelectorAll('.ice-cream-item');
    
    if(filterButtons.length > 0 && items.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                items.forEach(item => {
                    if (filterValue === 'all' || item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                        // Add animation
                        item.classList.add('animate__animated', 'animate__fadeIn');
                        setTimeout(() => {
                            item.classList.remove('animate__animated', 'animate__fadeIn');
                        }, 500);
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }
    
    // Search results filter buttons
    const searchFilterButtons = document.querySelectorAll('.filter-btn');
    const searchItems = document.querySelectorAll('.search-result-item');
    
    if(searchFilterButtons.length > 0 && searchItems.length > 0) {
        searchFilterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                searchFilterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                searchItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        // Add animation
                        item.classList.add('animate__animated', 'animate__fadeIn');
                        setTimeout(() => {
                            item.classList.remove('animate__animated', 'animate__fadeIn');
                        }, 500);
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }
}

/**
 * Initialize floating animation for elements
 */
function initializeFloatingElements() {
    const floatingElements = document.querySelectorAll('.floating-img');
    floatingElements.forEach(element => {
        setInterval(() => {
            element.classList.toggle('float-up');
        }, 2000);
    });
}

/**
 * Initialize carousel animations
 */
function initializeCarouselAnimations() {
    // Fix carousel progress bar
    const progressBar = document.querySelector('.carousel-progress-bar');
    if(progressBar) {
        function resetProgressBar() {
            progressBar.style.transition = 'none';
            progressBar.style.width = '0%';
            setTimeout(() => {
                progressBar.style.transition = 'width 7000ms linear';
                progressBar.style.width = '100%';
            }, 10);
        }
        
        // Reset on slide change
        const carousel = document.getElementById('amulCarousel');
        if (carousel) {
            carousel.addEventListener('slide.bs.carousel', resetProgressBar);
            // Initialize on page load
            resetProgressBar();
        }
    }
}

/**
 * Update search overlay appearance
 */
function styleSearchOverlay() {
    const searchOverlay = document.querySelector('.search-overlay');
    if (searchOverlay) {
        // Add active class to show the overlay with animation
        searchOverlay.classList.add('active');
        
        // Style the overlay (can be moved to CSS)
        searchOverlay.style.position = 'fixed';
        searchOverlay.style.top = '0';
        searchOverlay.style.left = '0';
        searchOverlay.style.width = '100%';
        searchOverlay.style.height = '100%';
        searchOverlay.style.backgroundColor = 'rgba(10, 77, 163, 0.95)';
        searchOverlay.style.zIndex = '9999';
        searchOverlay.style.padding = '2rem';
        searchOverlay.style.overflowY = 'auto';
        searchOverlay.style.transition = 'all 0.3s ease';
    }
}
