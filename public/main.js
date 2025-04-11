document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        
        if(targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        
        if(targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 70, // Adjust offset for fixed navbar
            behavior: 'smooth'
          });
        }
      });
    });
    
    // Number animation for stats
    const statElements = document.querySelectorAll('.stat-number');
    
    function animateStats() {
      statElements.forEach(element => {
        const target = parseInt(element.textContent.replace(/,/g, ''));
        const duration = 2000;
        const startTime = Date.now();
        const startValue = 0;
        
        const updateCount = () => {
          const currentTime = Date.now();
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          
          const currentValue = Math.floor(progress * (target - startValue) + startValue);
          element.textContent = currentValue.toLocaleString();
          
          if(progress < 1) {
            requestAnimationFrame(updateCount);
          }
        };
        
        updateCount();
      });
    }
    
    // Intersection Observer for animations
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if(entry.isIntersecting) {
          if(entry.target.id === 'stats') {
            animateStats();
          }
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);
    
    // Observe the stats section
    const statsSection = document.getElementById('stats');
    if(statsSection) {
      observer.observe(statsSection);
    }
  });
  