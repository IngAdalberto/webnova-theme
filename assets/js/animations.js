/**
 * WebNova Animations
 * IntersectionObserver logic to trigger CSS animations.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Check if the user prefers reduced motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    
    if (prefersReducedMotion) {
        return; // Don't initialize observer if user prefers no animation
    }

    // Select all elements with an animation class
    const animatedElements = document.querySelectorAll(
        '.is-style-animate-fade-in, .is-style-animate-slide-up, .is-style-animate-slide-right, .is-style-animate-slide-left'
    );

    if (animatedElements.length === 0) {
        return;
    }

    const observerOptions = {
        root: null, // viewport
        rootMargin: '0px 0px -10% 0px', // trigger slightly before it enters the viewport fully
        threshold: 0.1 // trigger when 10% of element is visible
    };

    const animationObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the class that triggers the CSS transition
                entry.target.classList.add('is-animated');
                
                // If it doesn't have the repeat class, stop observing
                if (!entry.target.classList.contains('anim-repeat')) {
                    observer.unobserve(entry.target);
                }
            } else {
                // If it leaves the viewport and has the repeat class, remove the state so it animates again
                if (entry.target.classList.contains('anim-repeat')) {
                    entry.target.classList.remove('is-animated');
                }
            }
        });
    }, observerOptions);

    animatedElements.forEach(el => {
        animationObserver.observe(el);
    });
});
