<?php
require_once 'header.php';

$page_title = 'About Us';
$show_page_header = true;
$page_header_title = 'About Us';
?>

<!-- Our Story Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="story-content">
                    <h2 class="display-5 fw-bold mb-4">Our Story</h2>
                    <p class="lead mb-4">
                        Founded in 2015, <?php echo SITE_NAME; ?> began with a simple mission: to help businesses navigate the complex world of digital marketing with strategy-first, ROI-driven solutions.
                    </p>
                    <p class="mb-4">
                        What started as a small team of passionate marketers has grown into a full-service digital agency serving clients across various industries. Our journey has been marked by continuous learning, adaptation to new technologies, and an unwavering commitment to delivering exceptional results.
                    </p>
                    <p class="mb-4">
                        Today, we pride ourselves on being more than just a service provider—we're strategic partners dedicated to helping our clients achieve their business goals through innovative digital marketing strategies.
                    </p>
                    <div class="mission-values">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-bullseye text-primary fa-2x me-3"></i>
                                    <div>
                                        <h5 class="fw-bold">Our Mission</h5>
                                        <p class="mb-0">To empower businesses with data-driven digital marketing strategies that deliver measurable growth and sustainable success.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-eye text-primary fa-2x me-3"></i>
                                    <div>
                                        <h5 class="fw-bold">Our Vision</h5>
                                        <p class="mb-0">To be the leading digital marketing agency known for innovation, integrity, and exceptional client results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="story-image">
                    <div class="bg-primary rounded-3 p-5 text-center text-white">
                        <i class="fas fa-rocket fa-10x mb-4 opacity-75"></i>
                        <h3 class="fw-bold">8+ Years of Digital Excellence</h3>
                        <p class="lead">Serving 500+ Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Why Choose Us</h2>
                <p class="lead text-muted">What sets us apart from the competition</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="usp-card text-center">
                    <div class="usp-icon mb-3">
                        <i class="fas fa-chess text-primary fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Strategy-First Approach</h4>
                    <p class="text-muted">We believe that successful marketing starts with a solid strategy. Every campaign we create is backed by thorough research and strategic planning.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="usp-card text-center">
                    <div class="usp-icon mb-3">
                        <i class="fas fa-chart-line text-primary fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">ROI-Driven Results</h4>
                    <p class="text-muted">We focus on metrics that matter. Our data-driven approach ensures that every marketing dollar you spend delivers measurable returns on investment.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="usp-card text-center">
                    <div class="usp-icon mb-3">
                        <i class="fas fa-lightbulb text-primary fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Creative Edge</h4>
                    <p class="text-muted">Our creative team combines artistic vision with strategic thinking to create compelling campaigns that capture attention and drive action.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="usp-card text-center">
                    <div class="usp-icon mb-3">
                        <i class="fas fa-users text-primary fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Expert Team</h4>
                    <p class="text-muted">Our team consists of certified professionals with years of experience in digital marketing, design, and technology.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="usp-card text-center">
                    <div class="usp-icon mb-3">
                        <i class="fas fa-clock text-primary fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">24/7 Support</h4>
                    <p class="text-muted">We're always here when you need us. Our dedicated support team ensures that your campaigns run smoothly around the clock.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="usp-card text-center">
                    <div class="usp-icon mb-3">
                        <i class="fas fa-trophy text-primary fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Proven Track Record</h4>
                    <p class="text-muted">With hundreds of successful campaigns and satisfied clients, we have a proven track record of delivering exceptional results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Meet Our Team</h2>
                <p class="lead text-muted">The passionate people behind your success</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($team_members as $member): ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="team-member fade-in">
                        <img src="assets/images/<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>" class="img-fluid">
                        <h5 class="fw-bold mt-3"><?php echo $member['name']; ?></h5>
                        <p class="text-primary fw-bold"><?php echo $member['position']; ?></p>
                        <p class="text-muted small"><?php echo $member['bio']; ?></p>
                        <div class="expertise-tags">
                            <?php foreach ($member['expertise'] as $skill): ?>
                                <span class="expertise-tag"><?php echo $skill; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="social-links mt-3">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Company Stats Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-item">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h3 class="fw-bold">500+</h3>
                    <p class="lead">Happy Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-item">
                    <i class="fas fa-project-diagram fa-3x mb-3"></i>
                    <h3 class="fw-bold">1,200+</h3>
                    <p class="lead">Projects Completed</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-item">
                    <i class="fas fa-award fa-3x mb-3"></i>
                    <h3 class="fw-bold">25+</h3>
                    <p class="lead">Industry Awards</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-item">
                    <i class="fas fa-globe fa-3x mb-3"></i>
                    <h3 class="fw-bold">15+</h3>
                    <p class="lead">Countries Served</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-4">Ready to Transform Your Digital Presence?</h2>
                <p class="lead mb-4">Let's discuss how our expertise can help you achieve your business goals and drive meaningful growth.</p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="contact.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-phone me-2"></i>Get Started Today
                    </a>
                    <a href="services.php" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-list me-2"></i>View Our Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
