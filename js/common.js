/**
 * Common JavaScript for Shree Laxmi Amul Shopiee
 * Contains shared functionality across the website
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap components
    initBootstrapComponents();
    
    // Initialize Back to Top button
    initBackToTop();
    
    // Handle form validation
    initFormValidation();
    
    // Handle lazy loading
    initLazyLoading();
    
    // Set up mobile specific features
    if (isMobileDevice()) {
        initMobileFeatures();
    }
    
    // Set up WhatsApp button
    initWhatsAppButton();
    
    // Performance optimizations
    optimizePerformance();
});

/**
 * Check if current device is mobile
 * @returns {boolean} True if on mobile device
 */
function isMobileDevice() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

/**
 * Initialize Bootstrap components that need JavaScript
 */
function initBootstrapComponents() {
    // Initialize all tooltips
    const tooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    if (tooltips.length > 0 && typeof bootstrap !== 'undefined') {
        tooltips.forEach(function(tooltip) {
            new bootstrap.Tooltip(tooltip);
        });
    }
    
    // Initialize all popovers
    const popovers = document.querySelectorAll('[data-bs-toggle="popover"]');
    if (popovers.length > 0 && typeof bootstrap !== 'undefined') {
        popovers.forEach(function(popover) {
            new bootstrap.Popover(popover);
        });
    }
    
    // Initialize all dropdowns
    const dropdowns = document.querySelectorAll('.dropdown-toggle');
    if (dropdowns.length > 0 && typeof bootstrap !== 'undefined') {
        dropdowns.forEach(function(dropdown) {
            new bootstrap.Dropdown(dropdown);
        });
    }
}

/**
 * Initialize back to top button functionality
 */
function initBackToTop() {
    const backToTopButton = document.getElementById('back-to-top');
    if (backToTopButton) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
        
        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
}

/**
 * Initialize form validation for all forms
 */
function initFormValidation() {
    // Get all forms with needs-validation class
    const forms = document.querySelectorAll('.needs-validation');
    
    // Loop over them and prevent submission if invalid
    Array.from(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                
                // Find the first invalid field and focus it
                const invalidField = form.querySelector(':invalid');
                if (invalidField) {
                    invalidField.focus();
                    
                    // Scroll to the invalid field (with offset for fixed header)
                    const yOffset = -100;
                    const y = invalidField.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    window.scrollTo({
                        top: y,
                        behavior: 'smooth'
                    });
                }
            }
            
            form.classList.add('was-validated');
        }, false);
    });
}

/**
 * Initialize lazy loading for images and iframes
 */
function initLazyLoading() {
    // Check if IntersectionObserver is supported
    if ('IntersectionObserver' in window) {
        // Lazy load images
        const lazyImages = document.querySelectorAll('[loading="lazy"]');
        
        const imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    
                    // If using data-src attribute
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    
                    // If using data-srcset attribute
                    if (img.dataset.srcset) {
                        img.srcset = img.dataset.srcset;
                        img.removeAttribute('data-srcset');
                    }
                    
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(function(img) {
            imageObserver.observe(img);
        });
    } else {
        // Fallback for browsers without IntersectionObserver
        const lazyImages = document.querySelectorAll('[data-src]');
        lazyImages.forEach(function(img) {
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
        });
    }
}

/**
 * Initialize mobile specific features
 */
function initMobileFeatures() {
    // Add mobile class to body
    document.body.classList.add('mobile-device');
    
    // iOS specific fixes
    if (/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream) {
        document.body.classList.add('ios-device');
        
        // Fix for iOS 100vh issue
        const setVhVariable = function() {
            const vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        };
        
        setVhVariable();
        window.addEventListener('resize', setVhVariable);
    }
    
    // Add touch event listeners to improve responsiveness
    const touchTargets = document.querySelectorAll('a, button, .nav-link, .card');
    touchTargets.forEach(function(target) {
        target.addEventListener('touchstart', function() {
            this.classList.add('touch-active');
        });
        
        target.addEventListener('touchend', function() {
            this.classList.remove('touch-active');
        });
    });
}

/**
 * Initialize WhatsApp contact button
 */
function initWhatsAppButton() {
    // Create WhatsApp floating button if it doesn't exist
    if (!document.querySelector('.whatsapp-float')) {
        const whatsappButton = document.createElement('a');
        whatsappButton.href = 'https://wa.me/919890377098';
        whatsappButton.className = 'whatsapp-float';
        whatsappButton.target = '_blank';
        whatsappButton.innerHTML = '<i class="bi bi-whatsapp"></i>';
        whatsappButton.setAttribute('aria-label', 'Contact on WhatsApp');
        whatsappButton.setAttribute('title', 'Chat with us on WhatsApp');
        
        // Apply styles directly to ensure visibility
        whatsappButton.style.position = 'fixed';
        whatsappButton.style.width = '60px';
        whatsappButton.style.height = '60px';
        whatsappButton.style.bottom = '80px';
        whatsappButton.style.right = '20px';
        whatsappButton.style.backgroundColor = '#25D366';
        whatsappButton.style.color = 'white';
        whatsappButton.style.borderRadius = '50px';
        whatsappButton.style.textAlign = 'center';
        whatsappButton.style.fontSize = '30px';
        whatsappButton.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.3)';
        whatsappButton.style.zIndex = '1000';
        whatsappButton.style.display = 'flex';
        whatsappButton.style.alignItems = 'center';
        whatsappButton.style.justifyContent = 'center';
        whatsappButton.style.transition = 'all 0.3s ease';
        whatsappButton.style.animation = 'pulse-whatsapp 2s infinite';
        
        // Add hover effect
        whatsappButton.addEventListener('mouseover', function() {
            this.style.backgroundColor = '#20ba5a';
            this.style.transform = 'translateY(-5px) scale(1.05)';
            this.style.boxShadow = '0 6px 15px rgba(0, 0, 0, 0.3)';
        });
        
        whatsappButton.addEventListener('mouseout', function() {
            this.style.backgroundColor = '#25D366';
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.3)';
        });
        
        document.body.appendChild(whatsappButton);
        
        // Add keyframe animation if it doesn't exist
        if (!document.querySelector('style#whatsapp-animation')) {
            const style = document.createElement('style');
            style.id = 'whatsapp-animation';
            style.innerHTML = `
                @keyframes pulse-whatsapp {
                    0% {
                        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
                    }
                    70% {
                        box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
                    }
                    100% {
                        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
                    }
                }
            `;
            document.head.appendChild(style);
        }
    }
}

/**
 * Performance optimization techniques
 */
function optimizePerformance() {
    // Preload critical links on hover
    document.querySelectorAll('a').forEach(function(link) {
        link.addEventListener('mouseenter', function() {
            // Don't preload external links or anchors
            if (link.href && 
                link.hostname === window.location.hostname && 
                !link.href.startsWith('#') &&
                !link.href.includes('tel:') &&
                !link.href.includes('mailto:')) {
                
                const preloadLink = document.createElement('link');
                preloadLink.rel = 'preload';
                preloadLink.as = 'document';
                preloadLink.href = link.href;
                document.head.appendChild(preloadLink);
            }
        });
    });
    
    // Add passive event listeners for touch and wheel events
    let supportsPassive = false;
    try {
        window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
            get: function () { supportsPassive = true; }
        }));
    } catch(e) {}
    
    const wheelOpt = supportsPassive ? { passive: true } : false;
    document.addEventListener('touchstart', function(){}, wheelOpt);
    document.addEventListener('touchmove', function(){}, wheelOpt);
    document.addEventListener('wheel', function(){}, wheelOpt);
}
