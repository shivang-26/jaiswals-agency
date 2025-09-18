// Document Ready Function
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initBackToTop();
    initSmoothScroll();
    initFormValidation();
    initAnimations();
    initNavbarScroll();
    initContactForm();
    initNewsletterForm();
    initTestimonialCarousel();
    initServiceFilters();
    initCaseStudyFilters();
    initBlogFilters();
    initPricingCalculator();
    initTooltips();
    initModals();
    initScrollProgress();
    // Dark mode toggle removed
    initSearchFunctionality();
    initImageGallery();
    initCountUpAnimations();
    initStickyElements();
    initKeyboardNavigation();
    
    // Track page view for analytics
    trackPageView();
    
    // Initialize AOS (Animate On Scroll) if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    }
});

// Back to Top Button
function initBackToTop() {
    const backToTopButton = document.getElementById('backToTop');
    
    if (backToTopButton) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'flex';
            } else {
                backToTopButton.style.display = 'none';
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

// Smooth Scrolling for Anchor Links
function initSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 80;
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Form Validation
function initFormValidation() {
    const forms = document.querySelectorAll('.needs-validation');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        });
    });
}

// Scroll Animations
function initAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    // Observe elements with animation classes
    const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
    animatedElements.forEach(element => {
        observer.observe(element);
    });
}

// Navbar Scroll Effect
function initNavbarScroll() {
    const navbar = document.querySelector('.navbar');
    
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    }
}

// Contact Form Handler
function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(contactForm);
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            
            // Show loading state
            submitButton.innerHTML = '<span class="loading"></span> Sending...';
            submitButton.disabled = true;
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(() => {
                // Show success message
                showNotification('Thank you for your message! We\'ll get back to you soon.', 'success');
                
                // Reset form
                contactForm.reset();
                contactForm.classList.remove('was-validated');
                
                // Reset button
                submitButton.innerHTML = originalButtonText;
                submitButton.disabled = false;
            }, 2000);
        });
    }
}

// Newsletter Form Handler
function initNewsletterForm() {
    const newsletterForms = document.querySelectorAll('.newsletter-form');
    
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = form.querySelector('input[type="email"]');
            const submitButton = form.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            
            if (emailInput && emailInput.value) {
                // Show loading state
                submitButton.innerHTML = '<span class="loading"></span> Subscribing...';
                submitButton.disabled = true;
                
                // Simulate subscription (replace with actual AJAX call)
                setTimeout(() => {
                    // Show success message
                    showNotification('Thank you for subscribing to our newsletter!', 'success');
                    
                    // Reset form
                    form.reset();
                    
                    // Reset button
                    submitButton.innerHTML = originalButtonText;
                    submitButton.disabled = false;
                }, 1500);
            }
        });
    });
}

// Testimonial Carousel
function initTestimonialCarousel() {
    const testimonials = [
        {
            quote: "Working with Digital Marketing Agency transformed our business. Their strategic approach and attention to detail helped us achieve a 300% increase in online sales within just 6 months.",
            author: "Sarah Johnson",
            position: "CEO, TechStore Inc.",
            rating: 5
        },
        {
            quote: "The team's expertise in social media marketing is unparalleled. They helped us build a strong online presence and engage with our target audience effectively.",
            author: "Mike Chen",
            position: "Marketing Director, StartupXYZ",
            rating: 5
        },
        {
            quote: "Outstanding results and exceptional service. Their data-driven approach to PPC advertising helped us reduce costs while increasing conversions significantly.",
            author: "Emily Davis",
            position: "Founder, B2B Solutions",
            rating: 5
        }
    ];
    
    const testimonialContainer = document.querySelector('.testimonial-carousel');
    
    if (testimonialContainer) {
        let currentIndex = 0;
        
        function showTestimonial(index) {
            const testimonial = testimonials[index];
            
            testimonialContainer.innerHTML = `
                <div class="testimonial-item text-center">
                    <div class="mb-4">
                        <i class="fas fa-quote-left fa-3x text-primary opacity-25"></i>
                    </div>
                    <p class="lead mb-4">"${testimonial.quote}"</p>
                    <div class="client-info">
                        <h6 class="fw-bold mb-1">${testimonial.author}</h6>
                        <p class="text-muted mb-0">${testimonial.position}</p>
                        <div class="rating">
                            ${generateStars(testimonial.rating)}
                        </div>
                    </div>
                </div>
            `;
        }
        
        function generateStars(rating) {
            let stars = '';
            for (let i = 1; i <= 5; i++) {
                if (i <= rating) {
                    stars += '<i class="fas fa-star text-warning"></i>';
                } else {
                    stars += '<i class="far fa-star text-warning"></i>';
                }
            }
            return stars;
        }
        
        // Show first testimonial
        showTestimonial(currentIndex);
        
        // Auto-rotate testimonials
        setInterval(() => {
            currentIndex = (currentIndex + 1) % testimonials.length;
            showTestimonial(currentIndex);
        }, 5000);
    }
}

// Service Filters
function initServiceFilters() {
    const filterButtons = document.querySelectorAll('.service-filter');
    const serviceItems = document.querySelectorAll('.service-item');
    
    if (filterButtons.length > 0 && serviceItems.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Filter services
                serviceItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }
}

// Case Study Filters
function initCaseStudyFilters() {
    const filterButtons = document.querySelectorAll('.case-study-filter');
    const caseStudyItems = document.querySelectorAll('.case-study-item');
    
    if (filterButtons.length > 0 && caseStudyItems.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Filter case studies
                caseStudyItems.forEach(item => {
                    if (filter === 'all' || 
                        item.getAttribute('data-industry') === filter || 
                        item.getAttribute('data-service') === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }
}

// Notification System
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-${getNotificationIcon(type)} me-2"></i>
            <span>${message}</span>
            <button type="button" class="btn-close ms-3" aria-label="Close"></button>
        </div>
    `;
    
    // Add notification styles if not already added
    if (!document.querySelector('#notification-styles')) {
        const styles = document.createElement('style');
        styles.id = 'notification-styles';
        styles.textContent = `
            .notification {
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 9999;
                min-width: 300px;
                max-width: 400px;
                padding: 15px 20px;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                animation: slideInRight 0.3s ease;
            }
            
            .notification-success {
                background: #10b981;
                color: white;
            }
            
            .notification-error {
                background: #ef4444;
                color: white;
            }
            
            .notification-info {
                background: #3b82f6;
                color: white;
            }
            
            .notification-warning {
                background: #f59e0b;
                color: white;
            }
            
            .notification-content {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            
            .btn-close {
                filter: brightness(0) invert(1);
            }
            
            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            
            @keyframes slideOutRight {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(100%);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(styles);
    }
    
    document.body.appendChild(notification);
    
    // Auto-remove notification after 5 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 300);
    }, 5000);
    
    // Close button functionality
    const closeBtn = notification.querySelector('.btn-close');
    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            notification.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        });
    }
}

function getNotificationIcon(type) {
    switch (type) {
        case 'success':
            return 'check-circle';
        case 'error':
            return 'exclamation-circle';
        case 'warning':
            return 'exclamation-triangle';
        default:
            return 'info-circle';
    }
}

// Phone Number Formatting
function formatPhoneNumber(input) {
    let value = input.value.replace(/\D/g, '');
    let formattedValue = '';
    
    if (value.length > 0) {
        if (value.length <= 3) {
            formattedValue = value;
        } else if (value.length <= 6) {
            formattedValue = `(${value.slice(0, 3)}) ${value.slice(3)}`;
        } else if (value.length <= 10) {
            formattedValue = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6)}`;
        } else {
            formattedValue = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6, 10)}`;
        }
    }
    
    input.value = formattedValue;
}

// Add phone formatting to phone inputs
document.addEventListener('DOMContentLoaded', function() {
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    
    phoneInputs.forEach(input => {
        input.addEventListener('input', function() {
            formatPhoneNumber(this);
        });
    });
});

// Lazy Loading for Images
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading when DOM is ready
document.addEventListener('DOMContentLoaded', initLazyLoading);

// Blog Filters
function initBlogFilters() {
    const filterButtons = document.querySelectorAll('.blog-filter');
    const blogPosts = document.querySelectorAll('.blog-post-item');
    
    if (filterButtons.length > 0 && blogPosts.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Filter posts
                blogPosts.forEach(post => {
                    const postCategory = post.getAttribute('data-category');
                    if (category === 'all' || postCategory === category) {
                        post.style.display = 'block';
                        setTimeout(() => {
                            post.style.opacity = '1';
                            post.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        post.style.opacity = '0';
                        post.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            post.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }
}

// Pricing Calculator
function initPricingCalculator() {
    const calculatorForm = document.querySelector('#roiCalculatorModal form');
    const projectedRevenue = document.querySelector('#roiCalculatorModal .text-success');
    const projectedROI = document.querySelector('#roiCalculatorModal .text-primary');
    
    if (calculatorForm && projectedRevenue && projectedROI) {
        const inputs = calculatorForm.querySelectorAll('input, select');
        
        const calculateROI = debounce(() => {
            const budget = parseFloat(document.getElementById('monthlyBudget').value) || 0;
            const conversionRate = parseFloat(document.getElementById('conversionRate').value) || 0;
            const averageOrder = parseFloat(document.getElementById('averageOrder').value) || 0;
            const timeframe = parseInt(document.getElementById('timeframe').value) || 1;
            
            if (budget > 0 && conversionRate > 0 && averageOrder > 0) {
                const monthlyConversions = (budget * conversionRate) / 100;
                const monthlyRevenue = monthlyConversions * averageOrder;
                const totalRevenue = monthlyRevenue * timeframe;
                const totalCost = budget * timeframe;
                const roi = ((totalRevenue - totalCost) / totalCost) * 100;
                
                projectedRevenue.textContent = `$${totalRevenue.toLocaleString('en-US', {maximumFractionDigits: 0})}`;
                projectedROI.textContent = `${roi.toFixed(1)}%`;
            } else {
                projectedRevenue.textContent = '$0';
                projectedROI.textContent = '0%';
            }
        }, 300);
        
        inputs.forEach(input => {
            input.addEventListener('input', calculateROI);
            input.addEventListener('change', calculateROI);
        });
    }
}

// Tooltips
function initTooltips() {
    const tooltipTriggers = document.querySelectorAll('[data-tooltip]');
    
    tooltipTriggers.forEach(trigger => {
        trigger.addEventListener('mouseenter', function(e) {
            const tooltipText = this.getAttribute('data-tooltip');
            const tooltip = document.createElement('div');
            tooltip.className = 'custom-tooltip';
            tooltip.textContent = tooltipText;
            tooltip.style.position = 'absolute';
            tooltip.style.backgroundColor = '#333';
            tooltip.style.color = 'white';
            tooltip.style.padding = '8px 12px';
            tooltip.style.borderRadius = '4px';
            tooltip.style.fontSize = '14px';
            tooltip.style.zIndex = '1000';
            tooltip.style.whiteSpace = 'nowrap';
            tooltip.style.pointerEvents = 'none';
            
            document.body.appendChild(tooltip);
            
            const rect = this.getBoundingClientRect();
            tooltip.style.left = rect.left + (rect.width / 2) - (tooltip.offsetWidth / 2) + 'px';
            tooltip.style.top = rect.top - tooltip.offsetHeight - 10 + 'px';
            
            this.tooltipElement = tooltip;
        });
        
        trigger.addEventListener('mouseleave', function() {
            if (this.tooltipElement) {
                this.tooltipElement.remove();
                this.tooltipElement = null;
            }
        });
    });
}

// Modals
function initModals() {
    const modals = document.querySelectorAll('.modal');
    
    modals.forEach(modal => {
        modal.addEventListener('show.bs.modal', function() {
            document.body.style.overflow = 'hidden';
        });
        
        modal.addEventListener('hidden.bs.modal', function() {
            document.body.style.overflow = '';
            // Reset forms within modal
            const forms = this.querySelectorAll('form');
            forms.forEach(form => form.reset());
        });
    });
}

// Scroll Progress
function initScrollProgress() {
    const progressBar = document.createElement('div');
    progressBar.className = 'scroll-progress';
    progressBar.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, #007bff, #0056b3);
        z-index: 9999;
        transition: width 0.3s ease;
    `;
    document.body.appendChild(progressBar);
    
    window.addEventListener('scroll', throttle(() => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrollProgress = (scrollTop / scrollHeight) * 100;
        progressBar.style.width = scrollProgress + '%';
    }, 16));
}


// Search Functionality
function initSearchFunctionality() {
    const searchForms = document.querySelectorAll('.search-form');
    
    searchForms.forEach(form => {
        const input = form.querySelector('input');
        const button = form.querySelector('button');
        
        if (input && button) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const searchTerm = input.value.trim();
                if (searchTerm) {
                    performSearch(searchTerm);
                }
            });
            
            // Real-time search suggestions
            input.addEventListener('input', debounce(() => {
                const searchTerm = input.value.trim();
                if (searchTerm.length > 2) {
                    showSearchSuggestions(searchTerm);
                } else {
                    hideSearchSuggestions();
                }
            }, 300));
        }
    });
}

function performSearch(searchTerm) {
    showNotification(`Searching for "${searchTerm}"...`, 'info');
    // Implement actual search functionality here
    setTimeout(() => {
        showNotification('Search results would appear here', 'success');
    }, 1000);
}

function showSearchSuggestions(searchTerm) {
    // Remove existing suggestions
    hideSearchSuggestions();
    
    const suggestions = [
        'SEO strategies',
        'Social media marketing',
        'Content marketing tips',
        'PPC advertising',
        'Email marketing'
    ].filter(item => item.toLowerCase().includes(searchTerm.toLowerCase()));
    
    if (suggestions.length > 0) {
        const suggestionsBox = document.createElement('div');
        suggestionsBox.className = 'search-suggestions';
        suggestionsBox.style.cssText = `
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 4px 4px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
            max-height: 200px;
            overflow-y: auto;
        `;
        
        suggestions.forEach(suggestion => {
            const item = document.createElement('div');
            item.className = 'suggestion-item';
            item.textContent = suggestion;
            item.style.cssText = `
                padding: 10px 15px;
                cursor: pointer;
                border-bottom: 1px solid #eee;
            `;
            item.addEventListener('click', () => {
                document.querySelector('.search-form input').value = suggestion;
                hideSearchSuggestions();
                performSearch(suggestion);
            });
            item.addEventListener('mouseenter', () => {
                item.style.backgroundColor = '#f8f9fa';
            });
            item.addEventListener('mouseleave', () => {
                item.style.backgroundColor = '';
            });
            suggestionsBox.appendChild(item);
        });
        
        const searchForm = document.querySelector('.search-form');
        searchForm.style.position = 'relative';
        searchForm.appendChild(suggestionsBox);
    }
}

function hideSearchSuggestions() {
    const suggestions = document.querySelector('.search-suggestions');
    if (suggestions) {
        suggestions.remove();
    }
}

// Image Gallery
function initImageGallery() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const imgSrc = this.querySelector('img').src;
            openImageModal(imgSrc);
        });
    });
}

function openImageModal(imgSrc) {
    const modal = document.createElement('div');
    modal.className = 'image-modal';
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
        cursor: pointer;
    `;
    
    const img = document.createElement('img');
    img.src = imgSrc;
    img.style.cssText = `
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
    `;
    
    modal.appendChild(img);
    document.body.appendChild(modal);
    
    modal.addEventListener('click', () => {
        modal.remove();
    });
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            modal.remove();
        }
    });
}

// Count Up Animations
function initCountUpAnimations() {
    const counters = document.querySelectorAll('.counter');
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target.toLocaleString();
            }
        };
        
        updateCounter();
    };
    
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
}

// Sticky Elements
function initStickyElements() {
    const stickyElements = document.querySelectorAll('.sticky-element');
    
    stickyElements.forEach(element => {
        const observer = new IntersectionObserver(
            ([e]) => {
                e.target.classList.toggle('stuck', e.intersectionRatio < 1);
            },
            { threshold: [1] }
        );
        
        observer.observe(element);
    });
}

// Keyboard Navigation
function initKeyboardNavigation() {
    document.addEventListener('keydown', function(e) {
        // Escape key to close modals
        if (e.key === 'Escape') {
            const openModals = document.querySelectorAll('.modal.show');
            openModals.forEach(modal => {
                const bootstrapModal = bootstrap.Modal.getInstance(modal);
                if (bootstrapModal) {
                    bootstrapModal.hide();
                }
            });
        }
        
        // Ctrl/Cmd + K for search
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            const searchInput = document.querySelector('.search-form input');
            if (searchInput) {
                searchInput.focus();
            }
        }
        
        // Ctrl/Cmd + / for help
        if ((e.ctrlKey || e.metaKey) && e.key === '/') {
            e.preventDefault();
            showKeyboardShortcuts();
        }
    });
}

function showKeyboardShortcuts() {
    const shortcuts = [
        { key: 'Esc', description: 'Close modals' },
        { key: 'Ctrl/Cmd + K', description: 'Focus search' },
        { key: 'Ctrl/Cmd + /', description: 'Show shortcuts' },
        { key: '↑/↓', description: 'Navigate lists' },
        { key: 'Enter', description: 'Select/Submit' }
    ];
    
    let shortcutHTML = '<div class="keyboard-shortcuts">';
    shortcutHTML += '<h4>Keyboard Shortcuts</h4>';
    shortcutHTML += '<ul>';
    shortcuts.forEach(shortcut => {
        shortcutHTML += `<li><kbd>${shortcut.key}</kbd> - ${shortcut.description}</li>`;
    });
    shortcutHTML += '</ul></div>';
    
    showNotification(shortcutHTML, 'info', 5000);
}

// Analytics
function trackPageView() {
    // Simple page view tracking
    const currentPage = window.location.pathname;
    console.log('Page view:', currentPage);
    
    // Send to analytics service (implement as needed)
    // gtag('config', 'GA_TRACKING_ID', { 'page_path': currentPage });
}

// Utility Functions
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

function formatCurrency(amount) {
    return new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD'
    }).format(amount);
}

function formatDate(dateString) {
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return new Date(dateString).toLocaleDateString('en-US', options);
}

function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        showNotification('Copied to clipboard!', 'success');
    }).catch(() => {
        showNotification('Failed to copy', 'error');
    });
}

// Export functions for global use
window.showNotification = showNotification;
window.debounce = debounce;
window.throttle = throttle;
window.formatCurrency = formatCurrency;
window.formatDate = formatDate;
window.copyToClipboard = copyToClipboard;
window.performSearch = performSearch;
