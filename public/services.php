<?php
require_once 'header.php';

$page_title = 'Our Services';
$show_page_header = true;
$page_header_title = 'Our Services';
?>

<!-- Services Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Comprehensive Digital Marketing Solutions</h2>
                <p class="lead text-muted">Strategy-first, ROI-driven services to accelerate your business growth</p>
            </div>
        </div>
        
        <!-- Service Filters -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="text-center">
                    <button class="btn btn-outline-primary service-filter active" data-filter="all">All Services</button>
                    <button class="btn btn-outline-primary service-filter" data-filter="seo">SEO</button>
                    <button class="btn btn-outline-primary service-filter" data-filter="social">Social Media</button>
                    <button class="btn btn-outline-primary service-filter" data-filter="ppc">PPC</button>
                    <button class="btn btn-outline-primary service-filter" data-filter="content">Content</button>
                    <button class="btn btn-outline-primary service-filter" data-filter="branding">Branding</button>
                </div>
            </div>
        </div>
        
        <!-- Services Grid -->
        <div class="row">
            <?php 
            $service_categories = [
                'seo' => ['SEO & Content Marketing'],
                'social' => ['Social Media Management'],
                'ppc' => ['PPC / Paid Advertising'],
                'content' => ['Email Marketing Automation'],
                'branding' => ['Branding & Creative'],
                'analytics' => ['Analytics & Conversion Optimization']
            ];
            
            foreach ($services as $index => $service):
                $category = 'all';
                foreach ($service_categories as $cat => $titles) {
                    if (in_array($service['title'], $titles)) {
                        $category = $cat;
                        break;
                    }
                }
            ?>
                <div class="col-lg-4 col-md-6 mb-4 service-item" data-category="<?php echo $category; ?>">
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
                            <a href="#<?php echo strtolower(str_replace(' ', '-', $service['title'])); ?>" class="btn btn-primary mt-3">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Detailed Service Sections -->
<section class="py-5 bg-light">
    <div class="container">
        <?php foreach ($services as $service): ?>
            <div id="<?php echo strtolower(str_replace(' ', '-', $service['title'])); ?>" class="service-detail mb-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="service-content">
                            <h3 class="fw-bold mb-4"><?php echo $service['title']; ?></h3>
                            <p class="lead mb-4"><?php echo $service['description']; ?></p>
                            
                            <h5 class="fw-bold mb-3">What's Included:</h5>
                            <ul class="list-unstyled mb-4">
                                <?php foreach ($service['features'] as $feature): ?>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <?php echo $feature; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            
                            <h5 class="fw-bold mb-3">Our Process:</h5>
                            <div class="service-process">
                                <div class="process-step">
                                    <h6 class="fw-bold">1. Discovery & Strategy</h6>
                                    <p class="text-muted">We analyze your business, competitors, and target audience to develop a customized strategy.</p>
                                </div>
                                <div class="process-step">
                                    <h6 class="fw-bold">2. Implementation</h6>
                                    <p class="text-muted">Our expert team executes the strategy with attention to detail and best practices.</p>
                                </div>
                                <div class="process-step">
                                    <h6 class="fw-bold">3. Optimization</h6>
                                    <p class="text-muted">We continuously monitor and optimize campaigns for maximum performance.</p>
                                </div>
                                <div class="process-step">
                                    <h6 class="fw-bold">4. Reporting & Analysis</h6>
                                    <p class="text-muted">Regular reports and insights to track progress and ROI.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-visual">
                            <div class="bg-primary rounded-3 p-5 text-center text-white">
                                <i class="fas <?php echo $service['icon']; ?> fa-8x mb-4 opacity-75"></i>
                                <h4 class="fw-bold"><?php echo $service['title']; ?></h4>
                                <p class="lead">Drive Results with Expert Strategy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Service Benefits Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Why Choose Our Services</h2>
                <p class="lead text-muted">The benefits of working with our expert team</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-line text-success fa-3x"></i>
                    </div>
                    <h5 class="fw-bold">Measurable Results</h5>
                    <p class="text-muted">Track your ROI with detailed analytics and regular performance reports.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-users text-primary fa-3x"></i>
                    </div>
                    <h5 class="fw-bold">Expert Team</h5>
                    <p class="text-muted">Work with certified professionals with years of industry experience.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-cogs text-warning fa-3x"></i>
                    </div>
                    <h5 class="fw-bold">Custom Solutions</h5>
                    <p class="text-muted">Tailored strategies designed specifically for your business goals.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-headset text-info fa-3x"></i>
                    </div>
                    <h5 class="fw-bold">24/7 Support</h5>
                    <p class="text-muted">Round-the-clock support to ensure your campaigns run smoothly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-3">Ready to Grow Your Business?</h2>
                <p class="lead mb-0">Let's create a customized digital marketing strategy that delivers real results for your business.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="btn btn-warning btn-lg">
                    <i class="fas fa-rocket me-2"></i>Get Started Today
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
