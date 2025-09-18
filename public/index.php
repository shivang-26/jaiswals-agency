<?php
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold text-white mb-4">
                    Transform Your Business with <span class="text-warning">Digital Excellence</span>
                </h1>
                <p class="lead text-white mb-4">
                    We are a strategy-first, ROI-driven digital marketing agency that delivers exceptional results through creative solutions and data-driven insights.
                </p>
                <div class="d-flex gap-3">
                    <a href="contact.php" class="btn btn-warning btn-lg">
                        <i class="fas fa-rocket me-2"></i>Get a Free Consultation
                    </a>
                    <a href="services.php" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-chart-line me-2"></i>View Our Services
                    </a>
                </div>
                <div class="mt-5">
                    <div class="row text-white">
                        <div class="col-4">
                            <h3 class="fw-bold">500+</h3>
                            <p class="mb-0">Happy Clients</p>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold">300%</h3>
                            <p class="mb-0">Average ROI</p>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold">50+</h3>
                            <p class="mb-0">Team Members</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-animation">
                    <i class="fas fa-chart-line fa-10x text-white opacity-25"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Our Services</h2>
                <p class="lead text-muted">Comprehensive digital marketing solutions to grow your business</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($services as $index => $service): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm service-card">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">
                                <i class="fas <?php echo $service['icon']; ?> fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title fw-bold"><?php echo $service['title']; ?></h5>
                            <p class="card-text text-muted"><?php echo $service['description']; ?></p>
                            <ul class="list-unstyled text-start">
                                <?php foreach ($service['features'] as $feature): ?>
                                    <li class="mb-1">
                                        <i class="fas fa-check text-success me-2"></i>
                                        <?php echo $feature; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="services.php#<?php echo strtolower(str_replace(' ', '-', $service['title'])); ?>" class="btn btn-outline-primary mt-3">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Featured Case Studies -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Success Stories</h2>
                <p class="lead text-muted">Real results from real clients</p>
            </div>
        </div>
        <div class="row">
            <?php foreach (array_slice($case_studies, 0, 3) as $case_study): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-top bg-primary text-white text-center py-4">
                            <i class="fas fa-trophy fa-3x"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?php echo $case_study['title']; ?></h5>
                            <p class="text-muted small mb-2"><?php echo $case_study['client']; ?> • <?php echo $case_study['industry']; ?></p>
                            <p class="card-text"><?php echo $case_study['description']; ?></p>
                            <div class="results">
                                <h6 class="fw-bold">Key Results:</h6>
                                <ul class="list-unstyled">
                                    <?php foreach ($case_study['results'] as $result): ?>
                                        <li class="mb-1">
                                            <i class="fas fa-star text-warning me-2"></i>
                                            <?php echo $result; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="case-studies.php" class="btn btn-primary w-100">View Full Case Study</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="case-studies.php" class="btn btn-outline-primary btn-lg">
                View All Case Studies <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Client Testimonials -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">What Our Clients Say</h2>
                <p class="lead text-muted">Trusted by businesses worldwide</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="testimonial-carousel">
                    <div class="testimonial-item text-center">
                        <div class="mb-4">
                            <i class="fas fa-quote-left fa-3x text-primary opacity-25"></i>
                        </div>
                        <p class="lead mb-4">"Working with <?php echo SITE_NAME; ?> transformed our business. Their strategic approach and attention to detail helped us achieve a 300% increase in online sales within just 6 months."</p>
                        <div class="client-info">
                            <h6 class="fw-bold mb-1">Sarah Johnson</h6>
                            <p class="text-muted mb-0">CEO, TechStore Inc.</p>
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-3">Ready to Grow Your Business?</h2>
                <p class="lead mb-0">Let's discuss how our digital marketing expertise can help you achieve your business goals.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="btn btn-warning btn-lg">
                    <i class="fas fa-phone me-2"></i>Get Started Today
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
