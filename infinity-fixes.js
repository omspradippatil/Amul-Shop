/**
 * InfinityFree Compatibility Fixes
 * This script adds fixes for issues commonly encountered on InfinityFree hosting
 */

document.addEventListener('DOMContentLoaded', function() {
    // Fix 1: Check and reinitialize Bootstrap if needed
    if (typeof bootstrap === 'undefined' || typeof bootstrap.Carousel === 'undefined') {
        console.warn('Bootstrap not loaded correctly, trying to reload');
        const script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js';
        document.body.appendChild(script);
        
        // Wait for script to load then initialize components
        script.onload = function() {
            initCarousel();
        };
    } else {
        initCarousel();
    }
    
    // Fix 2: Fix broken icons
    fixBootstrapIcons();
    
    // Fix 3: Fix tab navigation in gallery
    fixTabs();
});

function initCarousel() {
    // Initialize all carousels
    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(function(carouselEl) {
        try {
            // Try to initialize with Bootstrap
            const carousel = new bootstrap.Carousel(carouselEl, {
                interval: 7000,
                keyboard: true,
                pause: 'hover'
            });
        } catch (error) {
            console.warn('Error initializing carousel:', error);
            
            // Fallback carousel functionality
            const items = carouselEl.querySelectorAll('.carousel-item');
            const indicators = carouselEl.querySelectorAll('[data-bs-slide-to]');
            const nextButton = carouselEl.querySelector('.carousel-control-next');
            const prevButton = carouselEl.querySelector('.carousel-control-prev');
            
            let activeIndex = 0;
            
            // Set first slide active
            items[0].classList.add('active');
            
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
                
                // Reset progress bar if it exists
                const progressBar = carouselEl.querySelector('.carousel-progress-bar');
                if (progressBar) {
                    progressBar.style.transition = 'none';
                    progressBar.style.width = '0%';
                    setTimeout(() => {
                        progressBar.style.transition = 'width 7000ms linear';
                        progressBar.style.width = '100%';
                    }, 10);
                }
            }
            
            // Auto advance slides
            setInterval(function() {
                goToSlide((activeIndex + 1) % items.length);
            }, 7000);
        }
    });
}

function fixBootstrapIcons() {
    // Find all Bootstrap icons
    const icons = document.querySelectorAll('.bi');
    
    icons.forEach(function(icon) {
        // Check if the icon is visible/rendered
        const computed = window.getComputedStyle(icon);
        if (computed.display === 'none' || computed.width === '0px') {
            // Make the icon visible by forcing inline-block display
            icon.style.display = 'inline-block';
            icon.style.width = '1em';
            icon.style.height = '1em';
            icon.style.verticalAlign = '-0.125em';
            
            // Add a backup class
            icon.classList.add('infinity-fixed-icon');
        }
    });
}

function fixTabs() {
    // Find all tab navigation elements
    const tabButtons = document.querySelectorAll('[data-bs-toggle="pill"], [data-bs-toggle="tab"]');
    
    tabButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Get target pane
            const target = document.querySelector(this.getAttribute('data-bs-target'));
            
            // Remove active class from all tab buttons in the same group
            const parent = this.closest('ul');
            if (parent) {
                parent.querySelectorAll('[data-bs-toggle="pill"], [data-bs-toggle="tab"]').forEach(function(btn) {
                    btn.classList.remove('active');
                    btn.setAttribute('aria-selected', 'false');
                });
            }
            
            // Add active class to clicked button
            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');
            
            // Hide all panes in the target container
            const container = target.closest('.tab-content');
            if (container) {
                container.querySelectorAll('.tab-pane').forEach(function(pane) {
                    pane.classList.remove('show', 'active');
                });
            }
            
            // Show target pane
            if (target) {
                target.classList.add('show', 'active');
            }
        });
    });
}
        });
    });
}

function fixGoogleTranslate() {
    // Fix Google Translate issues that might occur on InfinityFree
    const translateStyle = document.createElement('link');
    translateStyle.rel = 'stylesheet';
    translateStyle.href = 'translate-fixes.css';
    document.head.appendChild(translateStyle);
    
    // Monitor for translation completion to fix layout issues
    const observer = new MutationObserver(function(mutations) {
        if (document.body.classList.contains('translated-ltr') || 
            document.body.classList.contains('translated-rtl')) {
            fixTranslatedLayout();
            observer.disconnect();
        }
    });
    
    // Start observing the body for translation class changes
    observer.observe(document.body, {
        attributes: true,
        attributeFilter: ['class']
    });
}

function fixTranslatedLayout() {
    // Fix any layout issues that occur after translation
    console.log('Fixing translated layout...');
    
    // Fix navbar items that might break layout
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        if (item.offsetHeight > 50) {
            item.style.whiteSpace = 'normal';
        }
    });
    
    // Fix buttons that might overflow
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(button => {
        if (button.offsetWidth > 250) {
            button.style.whiteSpace = 'normal';
            button.style.height = 'auto';
        }
    });
}
function fixLayoutAfterTranslation() {
    // Fix potential layout issues after translation
    
    // 1. Fix potential navbar issues
    const navbar = document.querySelector('.navbar-collapse');
    if (navbar && window.innerWidth > 991) {
        const navItems = navbar.querySelectorAll('.nav-item');
        const navHeight = navbar.offsetHeight;
        
        if (navHeight > 60) {
            // Navbar got too tall, adjust styling
            navItems.forEach(item => {
                item.style.fontSize = '0.9rem';
                item.style.padding = '0.4rem 0.6rem';
            });
        }
    }
    
    // 2. Fix carousel captions that might expand
    const carouselCaptions = document.querySelectorAll('.premium-caption');
    carouselCaptions.forEach(caption => {
        if (caption.offsetHeight > 300) { // If caption becomes too large
            const title = caption.querySelector('.slide-title');
            const description = caption.querySelector('.slide-description');
            
            if (title) title.style.fontSize = '1.8rem';
            if (description) {
                description.style.maxHeight = '60px';
                description.style.overflow = 'hidden';
                description.style.textOverflow = 'ellipsis';
            }
        }
    });
    
    // 3. Make sure buttons don't break layout
    document.querySelectorAll('.btn').forEach(btn => {
        if (btn.offsetWidth > 200) {
            btn.style.whiteSpace = 'normal';
            btn.style.height = 'auto';
        }
    });
}
