// Simple curtain opening animation
window.addEventListener('load', () => {
    setTimeout(() => {
        document.body.classList.add('curtain-open');
        // Hide curtain after animation completes
        setTimeout(() => {
            const curtain = document.querySelector('.curtain');
            if (curtain) {
                curtain.style.display = 'none'; // Completely remove from event layer
            }
        }, 2000); // Match animation duration (2s)
    }, 500);
});

// Toggle Drawer Menu
function toggleMenu() {
    const drawer = document.getElementById('drawerMenu');
    if (drawer.style.left === '0px') {
        drawer.style.left = '-250px';
        drawer.setAttribute('aria-hidden', 'true');
    } else {
        drawer.style.left = '0px';
        drawer.setAttribute('aria-hidden', 'false');
    }
}

// Close drawer when clicking outside
document.addEventListener('click', (event) => {
    const drawer = document.getElementById('drawerMenu');
    const hamburger = document.querySelector('.hamburger');
    if (drawer.style.left === '0px' && !drawer.contains(event.target) && !hamburger.contains(event.target)) {
        drawer.style.left = '-250px';
        drawer.setAttribute('aria-hidden', 'true');
    }
});