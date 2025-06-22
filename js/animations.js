/**
 * Animations.js
 * Handles animations across the Amul Shop website
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS animations
    initializeAOS();
    
    // Initialize carousel animations
    initializeCarouselAnimations();
    
    // Initialize floating elements
    initializeFloatingElements();
    
    // Add hover animations to elements
    initializeHoverAnimations();
    
    // Initialize scroll animations
    initializeScrollAnimations();
    
    // Initialize special section animations
    initializeSpecialAnimations();
    
    // Check for reduced motion preference
    checkReducedMotion();
});

/**
 * Initialize AOS (Animate On Scroll) with optimized settings
 */
function initializeAOS() {
    if (typeof AOS !== 'undefined') {
        // Check if we're on mobile for performance reasons
        const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        
        AOS.init({
            duration: isMobile ? 600 : 800,
            easing: 'ease-in-out',
            once: isMobile, // Only animate once on mobile for better performance
            mirror: !isMobile, // No mirror effect on mobile
            disable: window.innerWidth < 768 && isMobile, // Optionally disable on very small mobile devices
            startEvent: 'DOMContentLoaded',
            offset: 120
        });
        
        // Refresh AOS when images are loaded to fix positioning issues
        window.addEventListener('load', function() {
            AOS.refresh();
        });
        
        // Refresh AOS on window resize with debounce
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                AOS.refresh();
            }, 250);
        });
    }
}

/**
 * Initialize carousel animations
 */
function initializeCarouselAnimations() {
    // Get all carousels on the page
    const carousels = document.querySelectorAll('.carousel');
    
    carousels.forEach(function(carousel) {
        // Progress bar animation for premium carousel
        if (carousel.id === 'amulCarousel') {
            const progressBar = carousel.querySelector('.carousel-progress-bar');
            if (progressBar) {
                // Reset progress bar on slide change
                carousel.addEventListener('slide.bs.carousel', function() {
                    progressBar.style.width = '0%';
                    
                    setTimeout(function() {
                        progressBar.style.transition = 'width 7s linear';
                        progressBar.style.width = '100%';
                    }, 50);
                });
                
                // Initialize progress bar
                setTimeout(function() {
                    progressBar.style.transition = 'width 7s linear';
                    progressBar.style.width = '100%';
                }, 50);
            }
            
            // Add particle animations to slides
            const particleContainers = carousel.querySelectorAll('.slide-particles');
            particleContainers.forEach(function(container, index) {
                createParticles(container, index);
            });
        }
        
        // Dynamic slide caption animations
        carousel.addEventListener('slide.bs.carousel', function(e) {
            const currentSlide = e.relatedTarget;
            
            // Animate the caption elements
            const caption = currentSlide.querySelector('.premium-caption, .carousel-caption');
            if (caption) {
                // Stagger the animations
                setTimeout(function() {
                    caption.classList.add('animate__animated', 'animate__fadeInUp');
                    
                    // Remove animation classes after animation completes
                    setTimeout(function() {
                        caption.classList.remove('animate__animated', 'animate__fadeInUp');
                    }, 1000);
                }, 200);
            }
        });
    });
}

/**
 * Create particle animations for carousel slides
 * @param {HTMLElement} container - The container element for particles
 * @param {number} slideIndex - The index of the current slide
 */
function createParticles(container, slideIndex) {
    // Different particle configurations for each slide
    const configs = [
        { color: '#ffde59', count: 10 }, // Yellow for slide 1
        { color: '#92d2f5', count: 8 },  // Blue for slide 2
        { color: '#f5a8b8', count: 12 }  // Pink for slide 3
    ];
    
    const config = configs[slideIndex] || configs[0];
    
    // Clear container first
    container.innerHTML = '';
    
    // Create particles
    for (let i = 0; i < config.count; i++) {
        const particle = document.createElement('div');
        particle.className = 'slide-particle';
        
        // Random position and size
        const size = 5 + Math.random() * 10;
        const left = Math.random() * 100;
        const top = Math.random() * 100;
        const delay = Math.random() * 5;
        const duration = 5 + Math.random() * 10;
        
        // Apply styles
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${left}%`;
        particle.style.top = `${top}%`;
        particle.style.backgroundColor = config.color;
        particle.style.opacity = 0.4 + Math.random() * 0.4;
        particle.style.animation = `float ${duration}s ${delay}s infinite ease-in-out alternate`;
        particle.style.position = 'absolute';
        particle.style.borderRadius = '50%';
        
        container.appendChild(particle);
    }
}

/**
 * Initialize floating elements animation
 */
function initializeFloatingElements() {
    const floatingElements = document.querySelectorAll('.floating-img');
    
    floatingElements.forEach(function(element, index) {
        // Add staggered animation delays
        const delay = index * 0.2;
        element.style.animationDelay = `${delay}s`;
    });
    
    // Special animation for ice cream background elements if present
    if (document.querySelector('.floating-background')) {
        // Try to load ice cream background script
        const script = document.createElement('script');
        script.src = 'js/icecream-bg.js';
        script.async = true;
        document.body.appendChild(script);
    }
}

/**
 * Initialize hover animations for interactive elements
 */
function initializeHoverAnimations() {
    // Product thumbnails hover effect
    const productThumbnails = document.querySelectorAll('.product-thumbnail');
    productThumbnails.forEach(function(product) {
        product.addEventListener('mouseenter', function() {
            this.classList.add('animate__animated', 'animate__pulse');
        });
        
        product.addEventListener('mouseleave', function() {
            this.classList.remove('animate__animated', 'animate__pulse');
        });
    });
    
    // Button hover animations
    const buttons = document.querySelectorAll('.btn-primary, .btn-outline-primary, .btn-slider');
    buttons.forEach(function(button) {
        button.addEventListener('mouseenter', function() {
            this.classList.add('animate__animated', 'animate__pulse');
        });
        
        button.addEventListener('mouseleave', function() {
            this.classList.remove('animate__animated', 'animate__pulse');
        });
    });
    
    // Service and benefit card hover effects
    const cards = document.querySelectorAll('.service-card, .benefit-card');
    cards.forEach(function(card) {
        card.addEventListener('mouseenter', function() {
            const icon = this.querySelector('.icon-box, .benefit-icon');
            if (icon) {
                icon.classList.add('animate__animated', 'animate__heartBeat');
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const icon = this.querySelector('.icon-box, .benefit-icon');
            if (icon) {
                icon.classList.remove('animate__animated', 'animate__heartBeat');
            }
        });
    });
}

/**
 * Initialize scroll animations
 */
function initializeScrollAnimations() {
    // Get all elements that should animate on scroll
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    
    // Only initialize if IntersectionObserver is supported
    if ('IntersectionObserver' in window && animateElements.length > 0) {
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            root: null,
            threshold: 0.1,
            rootMargin: '0px 0px -10% 0px'
        });
        
        animateElements.forEach(function(element) {
            observer.observe(element);
        });
    } else {
        // Fallback for browsers without IntersectionObserver
        animateElements.forEach(function(element) {
            element.classList.add('visible');
        });
    }
    
    // Back to top button visibility
    const backToTopButton = document.getElementById('back-to-top');
    if (backToTopButton) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
    }
}

/**
 * Initialize special section-specific animations
 */
function initializeSpecialAnimations() {
    // Testimonial section special animations
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    testimonialCards.forEach(function(card) {
        card.addEventListener('mouseenter', function() {
            const stars = this.querySelectorAll('.bi-star-fill');
            stars.forEach(function(star, index) {
                setTimeout(function() {
                    star.classList.add('animate__animated', 'animate__bounceIn');
                    setTimeout(function() {
                        star.classList.remove('animate__animated', 'animate__bounceIn');
                    }, 1000);
                }, index * 100);
            });
        });
    });
    
    // What we offer section animations
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(function(card) {
        card.addEventListener('mouseenter', function() {
            const animationElement = this.querySelector('.card-animation-element');
            if (animationElement) {
                animationElement.style.transform = 'scale(1.5)';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const animationElement = this.querySelector('.card-animation-element');
            if (animationElement) {
                animationElement.style.transform = 'scale(1)';
            }
        });
    });
}

/**
 * Check for reduced motion preference and adjust animations accordingly
 */
function checkReducedMotion() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        // Disable all animations for users who prefer reduced motion
        document.querySelectorAll('.animate__animated').forEach(function(element) {
            element.classList.remove('animate__animated');
            element.classList.remove(...Array.from(element.classList).filter(cls => cls.startsWith('animate__')));
        });
        
        // Disable AOS animations
        if (typeof AOS !== 'undefined') {
            AOS.init({ disable: true });
        }
        
        // Disable custom animations
        const styleSheet = document.createElement('style');
        styleSheet.textContent = `
            * {
                animation: none !important;
                transition: none !important;
            }
        `;
        document.head.appendChild(styleSheet);
    }
}
