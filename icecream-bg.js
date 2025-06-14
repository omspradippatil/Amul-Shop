/**
 * Enhanced Creative Ice Cream Themed Animated Background
 * With dynamic particles, floating elements and interactive features
 */

document.addEventListener('DOMContentLoaded', function() {
    const bgElement = document.querySelector('.floating-background');
    if (!bgElement) return;
    
    // Clear existing elements
    bgElement.innerHTML = '';
    
    // Set fancy gradient background that changes subtly
    updateBackgroundGradient(bgElement);
    
    // Create multiple layers of elements for depth
    createBackgroundLayer(bgElement, 'far', 30);
    createBackgroundLayer(bgElement, 'mid', 20);
    createBackgroundLayer(bgElement, 'close', 15);
    
    // Add sprinkles
    createSprinkles(bgElement, 50);
    
    // Add moving bubbles/circles
    createBubbles(bgElement, 20);
    
    // Add light rays
    createLightRays(bgElement, 3);
    
    // Add animated milk splash
    createMilkSplash(bgElement, 2);
    
    // Add subtle background color transition over time
    animateBackgroundColor(bgElement);
    
    // Add parallax effect on mouse move (disable on mobile)
    if (window.matchMedia("(hover: hover)").matches) {
        addParallaxEffect(bgElement);
    }
});

function updateBackgroundGradient(element) {
    element.style.background = 'radial-gradient(ellipse at center, rgba(248, 246, 242, 0.8) 0%, rgba(252, 248, 227, 0.5) 100%)';
    
    // Add subtle canvas pattern overlay
    const patternOverlay = document.createElement('div');
    patternOverlay.className = 'bg-pattern-overlay';
    element.appendChild(patternOverlay);
}

function createBackgroundLayer(parent, layerType, count) {
    const layer = document.createElement('div');
    layer.className = `bg-layer ${layerType}-layer`;
    
    // Different speeds and sizes based on layer depth
    const config = {
        'far': { 
            scale: { min: 0.3, max: 0.5 },
            opacity: { min: 0.05, max: 0.1 },
            speed: { min: 35, max: 50 }
        },
        'mid': { 
            scale: { min: 0.5, max: 0.8 },
            opacity: { min: 0.08, max: 0.15 },
            speed: { min: 25, max: 40 }
        },
        'close': { 
            scale: { min: 0.8, max: 1.2 },
            opacity: { min: 0.12, max: 0.2 },
            speed: { min: 15, max: 30 }
        }
    };
    
    for (let i = 0; i < count; i++) {
        createIceCreamElement(layer, config[layerType]);
    }
    
    parent.appendChild(layer);
}

function createIceCreamElement(parent, config) {
    const types = ['cone', 'cup', 'sundae', 'popsicle', 'candy'];
    const type = types[Math.floor(Math.random() * types.length)];
    
    const element = document.createElement('div');
    element.className = `ice-cream ${type}`;
    
    // Get random configuration based on layer type
    const scale = config.scale.min + Math.random() * (config.scale.max - config.scale.min);
    const opacity = config.opacity.min + Math.random() * (config.opacity.max - config.opacity.min);
    const duration = config.speed.min + Math.random() * (config.speed.max - config.speed.min);
    const delay = Math.random() * -50;
    
    // Random position
    element.style.left = `${Math.random() * 100}%`;
    element.style.top = `${Math.random() * 100}%`;
    
    // Apply styles
    element.style.transform = `scale(${scale})`;
    element.style.opacity = opacity;
    element.style.animationDuration = `${duration}s`;
    element.style.animationDelay = `${delay}s`;
    
    // Apply custom colors based on type
    applyIceCreamColors(element, type);
    
    // Add animation direction
    if (Math.random() > 0.5) {
        element.classList.add('reversed');
    }
    
    // Add hover effect listener
    element.addEventListener('mouseenter', function() {
        this.style.opacity = parseFloat(this.style.opacity) * 2;
    });
    
    element.addEventListener('mouseleave', function() {
        this.style.opacity = opacity;
    });
    
    parent.appendChild(element);
}

function applyIceCreamColors(element, type) {
    const colors = {
        coneColors: ['#e6b27a', '#d9a066', '#c9935f'],
        creamColors: ['#f5a8b8', '#ffde59', '#92d2f5', '#a8f5b0', '#f0f0f0', '#ff9478'],
        cupColors: ['#e14b32', '#1665c1', '#28a745', '#9932CC', '#FF8C00'],
        candyColors: ['#ff7e5f', '#ff5252', '#42a5f5', '#66bb6a', '#ab47bc']
    };
    
    let style = '';
    
    switch (type) {
        case 'cone':
            const coneColor = colors.coneColors[Math.floor(Math.random() * colors.coneColors.length)];
            const creamColor = colors.creamColors[Math.floor(Math.random() * colors.creamColors.length)];
            style = `background: radial-gradient(circle at top, ${creamColor} 50px, transparent 50px), linear-gradient(to bottom right, ${coneColor} 50%, ${darkenColor(coneColor, 20)} 50%);`;
            break;
            
        case 'cup':
            const cupColor = colors.cupColors[Math.floor(Math.random() * colors.cupColors.length)];
            const cupCreamColor = colors.creamColors[Math.floor(Math.random() * colors.creamColors.length)];
            style = `background: radial-gradient(circle at top, ${cupCreamColor} 60px, transparent 60px), linear-gradient(to bottom, ${cupColor} 70%, #ffffff 70%);`;
            break;
            
        case 'sundae':
            const sundaeCreamColor = colors.creamColors[Math.floor(Math.random() * colors.creamColors.length)];
            const toppingColor = colors.candyColors[Math.floor(Math.random() * colors.candyColors.length)];
            style = `background: radial-gradient(circle at top, ${sundaeCreamColor} 50px, transparent 50px), linear-gradient(to bottom, ${sundaeCreamColor} 70%, #f0f0f0 70%);`;
            
            // Add cherry/topping
            const topping = document.createElement('div');
            topping.className = 'topping';
            topping.style = `
                position: absolute;
                top: 10px;
                left: 50%;
                width: 15px;
                height: 15px;
                background-color: ${toppingColor};
                border-radius: 50%;
                transform: translateX(-50%);
                box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            `;
            element.appendChild(topping);
            break;
            
        case 'popsicle':
            const popsicleColor = colors.candyColors[Math.floor(Math.random() * colors.candyColors.length)];
            style = `background: linear-gradient(to bottom, ${popsicleColor} 70%, #ffcb20 70%);`;
            break;
            
        case 'candy':
            const candyColors = [
                colors.candyColors[Math.floor(Math.random() * colors.candyColors.length)],
                colors.candyColors[Math.floor(Math.random() * colors.candyColors.length)],
                colors.candyColors[Math.floor(Math.random() * colors.candyColors.length)]
            ];
            style = `background: linear-gradient(45deg, ${candyColors[0]} 0%, ${candyColors[0]} 33%, ${candyColors[1]} 33%, ${candyColors[1]} 66%, ${candyColors[2]} 66%, ${candyColors[2]} 100%);`;
            break;
    }
    
    element.setAttribute('style', element.getAttribute('style') + style);
}

function createSprinkles(parent, count) {
    const colors = ['#ff7e5f', '#ffde59', '#92d2f5', '#f5a8b8', '#a8f5b0', '#bf5cf8'];
    
    for (let i = 0; i < count; i++) {
        const sprinkle = document.createElement('div');
        sprinkle.className = 'sprinkle';
        
        // Random properties
        const color = colors[Math.floor(Math.random() * colors.length)];
        const width = Math.random() * 6 + 4;
        const height = Math.random() * 2 + 2;
        const left = Math.random() * 100;
        const duration = 10 + Math.random() * 15;
        const delay = Math.random() * -25;
        const rotate = Math.random() * 360;
        
        // Apply styles
        sprinkle.style.backgroundColor = color;
        sprinkle.style.width = `${width}px`;
        sprinkle.style.height = `${height}px`;
        sprinkle.style.left = `${left}%`;
        sprinkle.style.animationDuration = `${duration}s`;
        sprinkle.style.animationDelay = `${delay}s`;
        sprinkle.style.transform = `rotate(${rotate}deg)`;
        
        parent.appendChild(sprinkle);
    }
}

function createBubbles(parent, count) {
    const colors = [
        'rgba(146, 210, 245, 0.3)', // Light blue
        'rgba(245, 168, 184, 0.3)', // Pink
        'rgba(255, 222, 89, 0.3)',  // Yellow
        'rgba(168, 245, 176, 0.3)'  // Light green
    ];
    
    for (let i = 0; i < count; i++) {
        const bubble = document.createElement('div');
        bubble.className = 'bubble';
        
        // Random properties
        const size = 20 + Math.random() * 60;
        const color = colors[Math.floor(Math.random() * colors.length)];
        const left = Math.random() * 100;
        const duration = 15 + Math.random() * 30;
        const delay = Math.random() * -30;
        
        // Apply styles
        bubble.style.width = `${size}px`;
        bubble.style.height = `${size}px`;
        bubble.style.backgroundColor = color;
        bubble.style.left = `${left}%`;
        bubble.style.animation = `bubble ${duration}s ${delay}s infinite ease-in-out`;
        bubble.style.boxShadow = `inset 0 0 20px rgba(255, 255, 255, 0.5)`;
        
        parent.appendChild(bubble);
    }
}

function createLightRays(parent, count) {
    for (let i = 0; i < count; i++) {
        const ray = document.createElement('div');
        ray.className = 'light-ray';
        
        // Random properties
        const left = 10 + Math.random() * 80; // Keep within bounds
        const width = 100 + Math.random() * 200;
        const duration = 20 + Math.random() * 20;
        const delay = Math.random() * -20;
        const opacity = 0.03 + Math.random() * 0.05;
        
        // Apply styles
        ray.style.left = `${left}%`;
        ray.style.width = `${width}px`;
        ray.style.opacity = opacity;
        ray.style.animationDuration = `${duration}s`;
        ray.style.animationDelay = `${delay}s`;
        
        parent.appendChild(ray);
    }
}

function createMilkSplash(parent, count) {
    for (let i = 0; i < count; i++) {
        const splash = document.createElement('div');
        splash.className = 'milk-splash';
        
        // Random position at bottom of screen
        const left = Math.random() * 100;
        const duration = 8 + Math.random() * 5;
        const delay = Math.random() * 10;
        
        // Apply styles
        splash.style.left = `${left}%`;
        splash.style.animationDuration = `${duration}s`;
        splash.style.animationDelay = `${delay}s`;
        
        parent.appendChild(splash);
    }
}

function animateBackgroundColor(element) {
    const colors = [
        'radial-gradient(ellipse at center, rgba(248, 246, 242, 0.8) 0%, rgba(252, 248, 227, 0.5) 100%)',
        'radial-gradient(ellipse at center, rgba(248, 246, 242, 0.8) 0%, rgba(245, 168, 184, 0.1) 100%)',
        'radial-gradient(ellipse at center, rgba(248, 246, 242, 0.8) 0%, rgba(146, 210, 245, 0.1) 100%)',
        'radial-gradient(ellipse at center, rgba(248, 246, 242, 0.8) 0%, rgba(255, 222, 89, 0.1) 100%)'
    ];
    
    let currentIndex = 0;
    
    setInterval(() => {
        currentIndex = (currentIndex + 1) % colors.length;
        element.style.background = colors[currentIndex];
    }, 15000); // Change every 15 seconds
}

function addParallaxEffect(element) {
    document.addEventListener('mousemove', function(e) {
        const mouseX = e.clientX / window.innerWidth;
        const mouseY = e.clientY / window.innerHeight;
        
        // Far layer moves less (parallax effect)
        const farLayer = element.querySelector('.far-layer');
        if (farLayer) {
            farLayer.style.transform = `translateX(${mouseX * -10}px) translateY(${mouseY * -10}px)`;
        }
        
        // Mid layer moves moderately
        const midLayer = element.querySelector('.mid-layer');
        if (midLayer) {
            midLayer.style.transform = `translateX(${mouseX * -20}px) translateY(${mouseY * -20}px)`;
        }
        
        // Close layer moves most
        const closeLayer = element.querySelector('.close-layer');
        if (closeLayer) {
            closeLayer.style.transform = `translateX(${mouseX * -30}px) translateY(${mouseY * -30}px)`;
        }
    });
}

// Utility function to darken a hex color
function darkenColor(hex, percent) {
    // Remove the # if present
    hex = hex.replace('#', '');
    
    // Parse the hex values
    const r = parseInt(hex.substr(0, 2), 16);
    const g = parseInt(hex.substr(2, 2), 16);
    const b = parseInt(hex.substr(4, 2), 16);
    
    // Darken each component
    const darkenedR = Math.floor(r * (1 - percent / 100));
    const darkenedG = Math.floor(g * (1 - percent / 100));
    const darkenedB = Math.floor(b * (1 - percent / 100));
    
    // Convert back to hex
    return `#${darkenedR.toString(16).padStart(2, '0')}${darkenedG.toString(16).padStart(2, '0')}${darkenedB.toString(16).padStart(2, '0')}`;
}
