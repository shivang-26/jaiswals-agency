<?php
require_once 'header.php';

$page_title = 'Contact';
$show_page_header = true;
$page_header_title = 'Contact Us';
?>

<!-- Contact Hero -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-4">Let's Start Your Digital Success Story</h2>
                <p class="lead mb-4">Ready to take your business to the next level? Get in touch with our experts today for a free consultation and customized marketing strategy.</p>
                <div class="contact-info-bar bg-primary text-white rounded-3 p-4">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <i class="fas fa-phone fa-2x mb-2"></i>
                            <h5 class="fw-bold">Call Us</h5>
                            <p class="mb-0"><?php echo SITE_PHONE; ?></p>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <i class="fas fa-envelope fa-2x mb-2"></i>
                            <h5 class="fw-bold">Email Us</h5>
                            <p class="mb-0"><?php echo SITE_EMAIL; ?></p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-clock fa-2x mb-2"></i>
                            <h5 class="fw-bold">Business Hours</h5>
                            <p class="mb-0">Mon-Fri: 9AM-6PM EST</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-4">Send Us a Message</h3>
                        <form id="contactForm" class="contact-form">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="(555) 123-4567">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="company" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="url" class="form-control" id="website" name="website" placeholder="https://yourwebsite.com">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="service" class="form-label">Service Interest</label>
                                <select class="form-select" id="service" name="service">
                                    <option value="">Select a service...</option>
                                    <option value="seo">Search Engine Optimization (SEO)</option>
                                    <option value="ppc">Pay-Per-Click Advertising (PPC)</option>
                                    <option value="social">Social Media Marketing</option>
                                    <option value="content">Content Marketing</option>
                                    <option value="email">Email Marketing</option>
                                    <option value="web">Web Design & Development</option>
                                    <option value="full-service">Full-Service Digital Marketing</option>
                                    <option value="consultation">Free Consultation</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="budget" class="form-label">Monthly Budget Range</label>
                                <select class="form-select" id="budget" name="budget">
                                    <option value="">Select budget range...</option>
                                    <option value="under-1000">Under $1,000</option>
                                    <option value="1000-2500">$1,000 - $2,500</option>
                                    <option value="2500-5000">$2,500 - $5,000</option>
                                    <option value="5000-10000">$5,000 - $10,000</option>
                                    <option value="10000-25000">$10,000 - $25,000</option>
                                    <option value="over-25000">Over $25,000</option>
                                    <option value="custom">Custom/Not Sure</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="timeline" class="form-label">Project Timeline</label>
                                <select class="form-select" id="timeline" name="timeline">
                                    <option value="">Select timeline...</option>
                                    <option value="immediately">Immediately</option>
                                    <option value="1-3-months">1-3 months</option>
                                    <option value="3-6-months">3-6 months</option>
                                    <option value="6-12-months">6-12 months</option>
                                    <option value="not-sure">Not sure yet</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="message" class="form-label">Tell us about your project *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required 
                                          placeholder="Please describe your project goals, challenges, and any specific requirements..."></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                                    <label class="form-check-label" for="newsletter">
                                        I'd like to receive marketing tips and insights via email
                                    </label>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms of Service</a> and <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy Policy</a> *
                                    </label>
                                </div>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Contact Information Sidebar -->
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">Get in Touch</h5>
                        <div class="contact-info">
                            <div class="d-flex mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold">Office Location</h6>
                                    <p class="mb-0 text-muted"><?php echo SITE_ADDRESS; ?></p>
                                </div>
                            </div>
                            
                            <div class="d-flex mb-3">
                                <i class="fas fa-phone text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold">Phone</h6>
                                    <p class="mb-0 text-muted"><?php echo SITE_PHONE; ?></p>
                                </div>
                            </div>
                            
                            <div class="d-flex mb-3">
                                <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold">Email</h6>
                                    <p class="mb-0 text-muted"><?php echo SITE_EMAIL; ?></p>
                                </div>
                            </div>
                            
                            <div class="d-flex mb-3">
                                <i class="fas fa-clock text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold">Business Hours</h6>
                                    <p class="mb-0 text-muted">Monday - Friday: 9:00 AM - 6:00 PM EST<br>
                                    Saturday: 10:00 AM - 2:00 PM EST<br>
                                    Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media Links -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">Follow Us</h5>
                        <div class="social-links">
                            <a href="<?php echo $social_media['facebook']; ?>" class="btn btn-outline-primary btn-sm me-2 mb-2">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                            <a href="<?php echo $social_media['twitter']; ?>" class="btn btn-outline-primary btn-sm me-2 mb-2">
                                <i class="fab fa-twitter"></i> Twitter
                            </a>
                            <a href="<?php echo $social_media['linkedin']; ?>" class="btn btn-outline-primary btn-sm me-2 mb-2">
                                <i class="fab fa-linkedin-in"></i> LinkedIn
                            </a>
                            <a href="<?php echo $social_media['instagram']; ?>" class="btn btn-outline-primary btn-sm me-2 mb-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">Quick Links</h5>
                        <div class="list-group list-group-flush">
                            <a href="services.php" class="list-group-item list-group-item-action">
                                <i class="fas fa-cogs me-2"></i>Our Services
                            </a>
                            <a href="case-studies.php" class="list-group-item list-group-item-action">
                                <i class="fas fa-trophy me-2"></i>Case Studies
                            </a>
                            <a href="pricing.php" class="list-group-item list-group-item-action">
                                <i class="fas fa-dollar-sign me-2"></i>Pricing Plans
                            </a>
                            <a href="blog.php" class="list-group-item list-group-item-action">
                                <i class="fas fa-blog me-2"></i>Blog & Insights
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="fw-bold mb-4 text-center">Visit Our Office</h3>
                <div class="map-container rounded-3 overflow-hidden shadow-sm">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.4213847148!2d-74.0059413!3d40.7127753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzQ2LjAiTiA3NMKwMDAnMjEuNCJX!5e0!3m2!1sen!2sus!4v1234567890!5m2!1sen!2sus"
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3 class="fw-bold text-center mb-4">Frequently Asked Questions</h3>
                
                <div class="accordion" id="contactFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How quickly will I receive a response?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                We typically respond to all inquiries within 24 business hours. For urgent matters, please call us directly at <?php echo SITE_PHONE; ?> during business hours.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Do you offer free consultations?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Yes! We offer a complimentary 30-minute consultation to discuss your business goals and how we can help you achieve them. This includes a basic analysis of your current digital presence.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What information should I include in my message?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                To help us provide the best response, please include your business goals, current marketing challenges, target audience, budget range, and timeline. The more details you provide, the better we can assist you.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Do you work with businesses of all sizes?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Absolutely! We work with businesses of all sizes, from startups to enterprise-level companies. We have flexible packages and can create custom solutions to fit your specific needs and budget.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What happens after I submit the form?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                After you submit the form, one of our marketing specialists will review your information and contact you within 24 hours to schedule a consultation. We'll discuss your goals in detail and provide recommendations for your business.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Terms Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="termsModalLabel">Terms of Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>1. Acceptance of Terms</h6>
                <p>By using our services, you agree to be bound by these Terms of Service.</p>
                
                <h6>2. Services</h6>
                <p>We provide digital marketing services including SEO, PPC, social media marketing, content marketing, and web development.</p>
                
                <h6>3. Payment Terms</h6>
                <p>Payment is due as specified in your service agreement. Late payments may incur additional fees.</p>
                
                <h6>4. Client Responsibilities</h6>
                <p>Clients must provide necessary information and materials in a timely manner and maintain accurate contact information.</p>
                
                <h6>5. Limitation of Liability</h6>
                <p>Our liability is limited to the amount paid for services in the preceding 3 months.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Privacy Modal -->
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="privacyModalLabel">Privacy Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>1. Information Collection</h6>
                <p>We collect information you provide directly to us, such as your name, email, phone number, and business details.</p>
                
                <h6>2. Use of Information</h6>
                <p>We use your information to provide services, communicate with you, and improve our offerings.</p>
                
                <h6>3. Information Sharing</h6>
                <p>We do not sell your personal information. We only share data with trusted partners who assist in providing our services.</p>
                
                <h6>4. Data Security</h6>
                <p>We implement appropriate security measures to protect your personal information against unauthorized access.</p>
                
                <h6>5. Your Rights</h6>
                <p>You have the right to access, update, or delete your personal information at any time.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-3">Ready to Grow Your Business?</h2>
                <p class="lead mb-0">Don't wait to start achieving your digital marketing goals. Contact us today for a free consultation.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#contactForm" class="btn btn-warning btn-lg">
                    <i class="fas fa-phone me-2"></i>Get Started Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
