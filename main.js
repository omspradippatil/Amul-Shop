/**
 * Main JavaScript for Shree Laxmi Amul Shopiee
 * Contains common functionality used across the website
 * With mobile optimizations
 */

document.addEventListener('DOMContentLoaded', function() {
    // Detect if the device is mobile
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    
    // Add mobile class to body for CSS targeting
    if (isMobile) {
        document.body.classList.add('mobile-device');
    }
    
    // Search overlay functionality
    initializeSearch();
    
    // Back to top button functionality
    initializeBackToTop();
    
    // Newsletter form handling
    initializeNewsletterForm();
    
    // Product filtering if on products page
    initializeProductFilters();
    
    // Animate floating elements (with reduced animations on mobile)
    initializeFloatingElements(isMobile);
    
    // Initialize carousel animations (optimized for mobile)
    initializeCarouselAnimations(isMobile);
    
    // Initialize carousels with fixed indicators
    initializeCarousels();
    
    // Mobile-specific optimizations
    if (isMobile) {
        mobileOptimizations();
    }
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
 * @param {boolean} isMobile - Whether the device is mobile
 */
function initializeFloatingElements(isMobile) {
    const floatingElements = document.querySelectorAll('.floating-img');
    
    // Reduce animations on mobile for better performance
    if (isMobile) {
        // Use fewer animations on mobile
        floatingElements.forEach(element => {
            setInterval(() => {
                element.classList.toggle('float-up');
            }, 3000); // Slower interval for mobile
        });
    } else {
        // Full animations on desktop
        floatingElements.forEach(element => {
            setInterval(() => {
                element.classList.toggle('float-up');
            }, 2000);
        });
    }
}

/**
 * Initialize carousel animations
 * @param {boolean} isMobile - Whether the device is mobile
 */
function initializeCarouselAnimations(isMobile) {
    // Fix carousel progress bar
    const progressBar = document.querySelector('.carousel-progress-bar');
    if(progressBar) {
        function resetProgressBar() {
            // More performant approach for mobile
            if (isMobile) {
                requestAnimationFrame(() => {
                    progressBar.style.transition = 'none';
                    progressBar.style.width = '0%';
                    
                    requestAnimationFrame(() => {
                        progressBar.style.transition = 'width 7000ms linear';
                        progressBar.style.width = '100%';
                    });
                });
            } else {
                progressBar.style.transition = 'none';
                progressBar.style.width = '0%';
                setTimeout(() => {
                    progressBar.style.transition = 'width 7000ms linear';
                    progressBar.style.width = '100%';
                }, 10);
            }
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
 * Initialize all carousels and fix indicator functionality
 */
function initializeCarousels() {
    // Initialize all Bootstrap carousels
    document.querySelectorAll('.carousel').forEach(function(carousel) {
        // Fix indicators
        const indicators = carousel.querySelectorAll('.carousel-indicators button, .testimonial-indicators button');
        const carouselId = carousel.id;
        
        indicators.forEach(function(indicator) {
            indicator.addEventListener('click', function(e) {
                e.preventDefault();
                const slideIndex = this.getAttribute('data-bs-slide-to');
                const carouselInstance = bootstrap.Carousel.getInstance(carousel);
                
                if (carouselInstance) {
                    carouselInstance.to(parseInt(slideIndex));
                } else {
                    // Manual fallback if Bootstrap instance not available
                    const slides = carousel.querySelectorAll('.carousel-item');
                    
                    // Remove active class from all slides and indicators
                    slides.forEach(slide => slide.classList.remove('active'));
                    indicators.forEach(ind => {
                        ind.classList.remove('active');
                        ind.removeAttribute('aria-current');
                    });
                    
                    // Add active class to selected slide and indicator
                    if (slides[slideIndex]) {
                        slides[slideIndex].classList.add('active');
                    }
                    this.classList.add('active');
                    this.setAttribute('aria-current', 'true');
                }
            });
        });
    });
    
    // Additional fix for testimonial carousel indicators
    const testimonialCarousel = document.getElementById('testimonialCarousel');
    if (testimonialCarousel) {
        const testimonialIndicators = testimonialCarousel.querySelectorAll('.testimonial-indicators button');
        
        testimonialIndicators.forEach(function(indicator, index) {
            indicator.addEventListener('click', function() {
                // Remove active class from all indicators
                testimonialIndicators.forEach(ind => ind.classList.remove('active'));
                
                // Add active class to clicked indicator
                this.classList.add('active');
                
                // Find the carousel instance and go to slide
                const carouselInstance = bootstrap.Carousel.getInstance(testimonialCarousel);
                if (carouselInstance) {
                    carouselInstance.to(index);
                }
            });
        });
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

/**
 * Mobile-specific optimizations
 */
function mobileOptimizations() {
    // Defer non-critical images
    deferNonCriticalImages();
    
    // Add better touch feedback
    addTouchFeedback();
    
    // Fix viewport issues on iOS
    fixIOSViewport();
    
    // Improve form usability on mobile
    improveFormUsability();
}

/**
 * Defer loading of non-critical images for better mobile performance
 */
function deferNonCriticalImages() {
    // Find all images with data-src attribute
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => {
            imageObserver.observe(img);
        });
    } else {
        // Fallback for browsers without IntersectionObserver
        // Load images after a short delay
        setTimeout(() => {
            lazyImages.forEach(img => {
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
            });
        }, 1000);
    }
}

/**
 * Add better touch feedback for mobile users
 */
function addTouchFeedback() {
    const touchElements = document.querySelectorAll('a, button, .card, .nav-link');
    
    touchElements.forEach(element => {
        element.addEventListener('touchstart', function() {
            this.classList.add('touch-active');
        }, {passive: true});
        
        element.addEventListener('touchend', function() {
            this.classList.remove('touch-active');
        }, {passive: true});
    });
}

/**
 * Fix viewport issues specific to iOS devices
 */
function fixIOSViewport() {
    // Check if device is iOS
    const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    
    if (isIOS) {
        // Add iOS-specific class to body
        document.body.classList.add('ios-device');
        
        // Fix for 100vh issue on iOS
        const vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
        
        // Update on resize/orientation change
        window.addEventListener('resize', () => {
            const vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        });
    }
}

/**
 * Improve form usability on mobile devices
 */
function improveFormUsability() {
    // Fix for input zooming on iOS
    const inputs = document.querySelectorAll('input, select, textarea');
    
    inputs.forEach(input => {
        // Set font-size to 16px to prevent zoom on focus
        input.style.fontSize = '16px';
        
        // Add better touch targets
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('input-focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('input-focused');
        });
    });
    
    // Improve scrolling to form errors
    const forms = document.querySelectorAll('form.needs-validation');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                
                // Find the first invalid input and scroll to it with offset
                const firstInvalid = form.querySelector(':invalid');
                if (firstInvalid) {
                    const yOffset = -100; // Offset for fixed header
                    const y = firstInvalid.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    
                    window.scrollTo({
                        top: y,
                        behavior: 'smooth'
                    });
                    
                    // Focus the invalid input after scrolling
                    setTimeout(() => {
                        firstInvalid.focus();
                    }, 500);
                }
            }
            
            form.classList.add('was-validated');
        });
    });
}
