/**
 * Main JavaScript for Shree Laxmi Amul Shopiee
 * Contains shared functionality across the website
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize carousel with fixed images (no cropping)
    initCarouselWithFixedImages();
    
    // Initialize WhatsApp floating button
    initWhatsAppFloat();
    
    // Initialize back to top button
    initBackToTop();
    
    // Initialize AOS animations
    initAOS();
    
    // Add ice cream background elements
    initIceCreamBackground();
    
    // Initialize hover effects
    initHoverEffects();
    
    // Initialize form validations
    initFormValidations();
});

/**
 * Function to initialize carousel with fixed image display (no cropping)
 */
function initCarouselWithFixedImages() {
    const carousels = document.querySelectorAll('.carousel');
    
    carousels.forEach(carousel => {
        // Fix for carousel progress bar
        const progressBar = carousel.querySelector('.carousel-progress-bar');
        if (progressBar) {
            resetProgressBar(progressBar);
            
            carousel.addEventListener('slide.bs.carousel', function() {
                resetProgressBar(progressBar);
            });
        }
        
        // Ensure images fit properly without cropping
        const imageContainers = carousel.querySelectorAll('.carousel-image-container');
        imageContainers.forEach(container => {
            // Remove any fixed height that might cause cropping
            container.style.height = 'auto';
            
            // Add a maximum height to ensure consistency
            container.style.maxHeight = '600px';
        });
        
        // Fix images to prevent cropping
        const images = carousel.querySelectorAll('.carousel-image-container img');
        images.forEach(img => {
            // Change from cover to contain to prevent cropping
            img.style.objectFit = 'contain';
            img.style.height = 'auto';
            img.style.maxHeight = '600px';
            img.style.width = '100%';
            
            // Add error handler for images
            img.onerror = function() {
                this.src = 'Amul.jpg';
                console.warn('Image failed to load, using fallback');
            };
            
            // Force image to reload with new dimensions
            const currentSrc = img.src;
            img.src = '';
            setTimeout(() => {
                img.src = currentSrc;
            }, 10);
        });
        
        // Fix caption to ensure visibility
        const captions = carousel.querySelectorAll('.premium-caption');
        captions.forEach(caption => {
            // Add semi-transparent gradient background for better text visibility
            caption.style.background = 'linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.6) 50%, rgba(0, 0, 0, 0) 100%)';
            caption.style.zIndex = '2'; // Ensure caption is above image
            
            // Ensure text is white and visible
            const titles = caption.querySelectorAll('.slide-title');
            titles.forEach(title => {
                title.style.color = 'white';
                title.style.textShadow = '0 2px 4px rgba(0, 0, 0, 0.5)';
                
                // Make the highlight span color yellow
                const highlights = title.querySelectorAll('.highlight');
                highlights.forEach(highlight => {
                    highlight.style.color = '#ffde59';
                });
            });
            
            const descriptions = caption.querySelectorAll('.slide-description');
            descriptions.forEach(desc => {
                desc.style.color = 'rgba(255, 255, 255, 0.9)';
                desc.style.textShadow = '0 1px 2px rgba(0, 0, 0, 0.5)';
            });
        });
        
        // Initialize Bootstrap carousel
        if (typeof bootstrap !== 'undefined') {
            new bootstrap.Carousel(carousel, {
                interval: 7000,
                pause: 'hover'
            });
        } else {
            console.error('Bootstrap not loaded');
            // Fallback initialization
            fallbackCarouselInit(carousel);
        }
    });
}

/**
 * Resets the progress bar animation
 */
function resetProgressBar(progressBar) {
    progressBar.style.transition = 'none';
    progressBar.style.width = '0%';
    
    setTimeout(function() {
        progressBar.style.transition = 'width 7s linear';
        progressBar.style.width = '100%';
    }, 10);
}

/**
 * Fallback carousel initialization when Bootstrap is not available
 */
function fallbackCarouselInit(carousel) {
    const items = carousel.querySelectorAll('.carousel-item');
    const indicators = carousel.querySelectorAll('.slide-indicators button');
    const nextButton = carousel.querySelector('.carousel-control-next');
    const prevButton = carousel.querySelector('.carousel-control-prev');
    
    let activeIndex = 0;
    
    // Set first slide active
    items[0].classList.add('active');
    if (indicators[0]) indicators[0].classList.add('active');
    
    // Next button functionality
    if (nextButton) {
        nextButton.addEventListener('click', function() {
            goToSlide((activeIndex + 1) % items.length);
        });
    }
    
    // Previous button functionality
    if (prevButton) {
        prevButton.addEventListener('click', function() {
            goToSlide((activeIndex - 1 + items.length) % items.length);
        });
    }
    
    // Indicator functionality
    indicators.forEach(function(indicator, index) {
        indicator.addEventListener('click', function() {
            goToSlide(index);
        });
    });
    
    function goToSlide(index) {
        // Hide current slide
        items[activeIndex].classList.remove('active');
        if (indicators[activeIndex]) {
            indicators[activeIndex].classList.remove('active');
            indicators[activeIndex].removeAttribute('aria-current');
        }
        
        // Show new slide
        activeIndex = index;
        items[activeIndex].classList.add('active');
        if (indicators[activeIndex]) {
            indicators[activeIndex].classList.add('active');
            indicators[activeIndex].setAttribute('aria-current', 'true');
        }
        
        // Reset progress bar
        const progressBar = carousel.querySelector('.carousel-progress-bar');
        if (progressBar) {
            resetProgressBar(progressBar);
        }
    }
    
    // Auto advance slides
    setInterval(function() {
        goToSlide((activeIndex + 1) % items.length);
    }, 7000);
}

/**
 * Initialize WhatsApp floating button
 */
function initWhatsAppFloat() {
    // Check if button already exists
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
        whatsappButton.style.borderRadius = '50%';
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
        
        // Add keyframe animation
        const style = document.createElement('style');
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

/**
 * Initialize back to top button
 */
function initBackToTop() {
    let backToTop = document.getElementById('back-to-top');
    
    // Create the button if it doesn't exist
    if (!backToTop) {
        backToTop = document.createElement('button');
        backToTop.id = 'back-to-top';
        backToTop.innerHTML = '<i class="bi bi-arrow-up"></i>';
        backToTop.setAttribute('title', 'Go to top');
        backToTop.setAttribute('aria-label', 'Go to top of page');
        
        // Make sure it has higher specificity for styles
        backToTop.style.position = 'fixed';
        backToTop.style.width = '60px';
        backToTop.style.height = '60px';
        backToTop.style.bottom = '20px';
        backToTop.style.right = '20px';
        backToTop.style.zIndex = '100';
        backToTop.style.fontSize = '30px';
        backToTop.style.cursor = 'pointer';
        
        document.body.appendChild(backToTop);
    }
    
    // Show/hide the button based on scroll position - modified to show sooner
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 200) { // Changed from 300 to 200 to show sooner
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });
    
    // Scroll to top when clicked
    backToTop.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Force check scroll position on page load
    if (window.pageYOffset > 200) {
        backToTop.classList.add('show');
    }
}

/**
 * Initialize AOS animations
 */
function initAOS() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    }
}

/**
 * Initialize ice cream background elements
 */
function initIceCreamBackground() {
    const bgElement = document.querySelector('.floating-background');
    
    if (bgElement && typeof window.createIceCreamElement === 'undefined') {
        // Create 10 ice cream elements for mobile, 20 for desktop
        const count = window.innerWidth < 768 ? 10 : 20;
        
        for (let i = 0; i < count; i++) {
            createSimpleIceCreamElement(bgElement);
        }
    }
}

/**
 * Create a simple ice cream element for the background
 */
function createSimpleIceCreamElement(parent) {
    const types = ['cone', 'cup', 'candy'];
    const type = types[Math.floor(Math.random() * types.length)];
    
    const element = document.createElement('div');
    element.className = `ice-cream ${type}`;
    
    // Random position
    element.style.left = `${Math.random() * 100}%`;
    element.style.top = `${Math.random() * 100}%`;
    
    // Random scale
    const scale = 0.3 + Math.random() * 0.7;
    element.style.transform = `scale(${scale})`;
    
    // Random opacity
    element.style.opacity = 0.1 + Math.random() * 0.1;
    
    // Animation duration and delay
    const duration = 15 + Math.random() * 20;
    const delay = Math.random() * -40;
    element.style.animationDuration = `${duration}s`;
    element.style.animationDelay = `${delay}s`;
    
    // Add reversed animation for some elements
    if (Math.random() > 0.5) {
        element.classList.add('reversed');
    }
    
    parent.appendChild(element);
}

/**
 * Initialize hover effects for cards and buttons
 */
function initHoverEffects() {
    // Hover effects for product cards
    const productCards = document.querySelectorAll('.product-thumbnail');
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.15)';
            
            const img = this.querySelector('.product-img');
            if (img) {
                img.style.transform = 'scale(1.1)';
            }
            
            const overlay = this.querySelector('.product-overlay');
            if (overlay) {
                overlay.style.opacity = '1';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
            
            const img = this.querySelector('.product-img');
            if (img) {
                img.style.transform = '';
            }
            
            const overlay = this.querySelector('.product-overlay');
            if (overlay) {
                overlay.style.opacity = '';
            }
        });
    });
    
    // Hover effects for buttons with animation
    const animatedButtons = document.querySelectorAll('.animated-button, .btn-slider');
    animatedButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.classList.add('animate__animated', 'animate__pulse');
            
            const animation = this.querySelector('.button-animation');
            if (animation) {
                animation.style.transform = 'translateX(100%)';
            }
        });
        
        button.addEventListener('mouseleave', function() {
            this.classList.remove('animate__animated', 'animate__pulse');
            
            const animation = this.querySelector('.button-animation');
            if (animation) {
                animation.style.transform = 'translateX(-100%)';
            }
        });
    });
}

/**
 * Initialize form validations
 */
function initFormValidations() {
    const forms = document.querySelectorAll('.needs-validation');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                
                // Find the first invalid field
                const invalidField = form.querySelector(':invalid');
                if (invalidField) {
                    invalidField.focus();
                }
            }
            
            form.classList.add('was-validated');
        });
    });
}
                // Find the first invalid field
                const invalidField = form.querySelector(':invalid');
                if (invalidField) {
                    invalidField.focus();
                }
            }
            
            form.classList.add('was-validated');
        });
    });
}
