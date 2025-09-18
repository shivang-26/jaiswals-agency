<?php
require_once 'header.php';

$page_title = 'Pricing';
$show_page_header = true;
$page_header_title = 'Pricing';
?>

<!-- Pricing Hero -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-4">Transparent Pricing for Every Business</h2>
                <p class="lead mb-4">Choose the perfect package for your business needs. All plans include our core services with scalable options.</p>
                <div class="pricing-note bg-light rounded-3 p-4">
                    <p class="mb-0"><i class="fas fa-info-circle text-primary me-2"></i>
                    <strong>Flexible Plans:</strong> All packages can be customized to fit your specific requirements. Need something different? <a href="contact.php">Contact us for a custom quote.</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Packages -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($pricing_packages as $package): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-card <?php echo $package['featured'] ? 'featured' : ''; ?>">
                        <div class="package-header">
                            <h3 class="fw-bold"><?php echo $package['name']; ?></h3>
                            <div class="price">
                                <?php echo $package['price']; ?>
                                <span class="price-period"><?php echo $package['period']; ?></span>
                            </div>
                            <p class="text-muted"><?php echo $package['description']; ?></p>
                        </div>
                        
                        <ul class="pricing-features">
                            <?php foreach ($package['features'] as $feature): ?>
                                <li>
                                    <i class="fas fa-check text-success me-2"></i>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        
                        <div class="package-footer">
                            <?php if ($package['featured']): ?>
                                <a href="contact.php" class="btn btn-warning btn-lg w-100">Get Started</a>
                            <?php else: ?>
                                <a href="contact.php" class="btn btn-outline-primary btn-lg w-100">Choose Plan</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Custom Quote Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="custom-quote-section bg-primary text-white rounded-3 p-5">
                    <div class="text-center mb-4">
                        <i class="fas fa-cogs fa-4x mb-3 opacity-75"></i>
                        <h3 class="fw-bold">Need a Custom Solution?</h3>
                        <p class="lead">Every business is unique. Let us create a tailored marketing strategy that fits your specific goals and budget.</p>
                    </div>
                    
                    <div class="row text-center">
                        <div class="col-md-4 mb-3">
                            <div class="custom-feature">
                                <i class="fas fa-bullseye fa-2x mb-2"></i>
                                <h6 class="fw-bold">Strategy First</h6>
                                <p class="small">Custom-built strategies based on your business objectives</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="custom-feature">
                                <i class="fas fa-dollar-sign fa-2x mb-2"></i>
                                <h6 class="fw-bold">Flexible Pricing</h6>
                                <p class="small">Pay only for what you need with scalable options</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="custom-feature">
                                <i class="fas fa-users fa-2x mb-2"></i>
                                <h6 class="fw-bold">Dedicated Team</h6>
                                <p class="small">Personal attention from our expert team</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="contact.php" class="btn btn-warning btn-lg">
                            <i class="fas fa-calculator me-2"></i>Request Custom Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing FAQ -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3 class="fw-bold text-center mb-4">Frequently Asked Questions</h3>
                
                <div class="accordion" id="pricingFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What's included in the monthly reports?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body">
                                Our monthly reports include comprehensive analytics, campaign performance metrics, ROI analysis, competitor insights, and actionable recommendations for improvement. You'll receive detailed reports on traffic, conversions, engagement, and budget utilization.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Can I change my plan later?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body">
                                Yes, absolutely! We understand that business needs change. You can upgrade or downgrade your plan at any time with 30 days notice. We'll work with you to ensure a smooth transition without disrupting your marketing efforts.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                How long are the contracts?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body">
                                We offer flexible contract terms. While we recommend a minimum 3-month commitment to see meaningful results, we also offer month-to-month options for businesses that prefer more flexibility. Custom solutions may have different contract terms based on scope.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What's the setup fee?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body">
                                We charge a one-time setup fee that covers initial strategy development, account setup, technical implementation, and onboarding. The setup fee varies based on the package and complexity of your requirements. This fee is discussed and agreed upon before starting any work.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Do you work with businesses of all sizes?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body">
                                Yes! We work with businesses of all sizes, from startups to enterprise-level companies. Our packages are designed to scale with your business, and we can create custom solutions for businesses with unique requirements or larger budgets.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Table -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="fw-bold text-center mb-4">Package Comparison</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Features</th>
                                <?php foreach ($pricing_packages as $package): ?>
                                    <th class="text-center <?php echo $package['featured'] ? 'table-warning' : ''; ?>">
                                        <?php echo $package['name']; ?>
                                        <?php if ($package['featured']): ?>
                                            <br><small class="text-muted">Most Popular</small>
                                        <?php endif; ?>
                                    </th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Price</td>
                                <?php foreach ($pricing_packages as $package): ?>
                                    <td class="text-center fw-bold"><?php echo $package['price'] . $package['period']; ?></td>
                                <?php endforeach; ?>
                            </tr>
                            <tr>
                                <td>SEO Services</td>
                                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Social Media Management</td>
                                <td class="text-center">2 Platforms</td>
                                <td class="text-center">4 Platforms</td>
                                <td class="text-center">Unlimited</td>
                            </tr>
                            <tr>
                                <td>PPC Campaign Management</td>
                                <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Email Marketing</td>
                                <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Content Creation</td>
                                <td class="text-center">5 Posts/Month</td>
                                <td class="text-center">10 Posts/Month</td>
                                <td class="text-center">Unlimited</td>
                            </tr>
                            <tr>
                                <td>Analytics & Reporting</td>
                                <td class="text-center">Monthly</td>
                                <td class="text-center">Weekly</td>
                                <td class="text-center">Daily</td>
                            </tr>
                            <tr>
                                <td>Support Level</td>
                                <td class="text-center">Email</td>
                                <td class="text-center">Priority</td>
                                <td class="text-center">24/7 Dedicated</td>
                            </tr>
                            <tr>
                                <td>Strategy Calls</td>
                                <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                <td class="text-center">Monthly</td>
                                <td class="text-center">Weekly</td>
                            </tr>
                            <tr>
                                <td>Dedicated Account Manager</td>
                                <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            </tr>
                        </tbody>
                    </table>
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
                <h2 class="display-5 fw-bold mb-3">Ready to Get Started?</h2>
                <p class="lead mb-0">Choose a plan that fits your needs or contact us for a custom solution tailored to your business.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="btn btn-warning btn-lg">
                    <i class="fas fa-rocket me-2"></i>Start Growing Today
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
