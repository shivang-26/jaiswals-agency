<?php
require_once 'header.php';

$page_title = 'Case Studies';
$show_page_header = true;
$page_header_title = 'Case Studies';
?>

<!-- Case Studies Hero -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-4">Success Stories That Speak for Themselves</h2>
                <p class="lead mb-4">Discover how we've helped businesses like yours achieve remarkable results through strategic digital marketing.</p>
                <div class="stats-bar bg-primary text-white rounded-3 p-4">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="fw-bold">300%</h3>
                            <p class="mb-0">Average ROI</p>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold">500+</h3>
                            <p class="mb-0">Projects Completed</p>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold">98%</h3>
                            <p class="mb-0">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Filters -->
<section class="py-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="case-study-filter text-center">
                    <button class="btn btn-outline-primary case-study-filter-btn active" data-filter="all">All Cases</button>
                    <button class="btn btn-outline-primary case-study-filter-btn" data-filter="ecommerce">E-commerce</button>
                    <button class="btn btn-outline-primary case-study-filter-btn" data-filter="technology">Technology</button>
                    <button class="btn btn-outline-primary case-study-filter-btn" data-filter="b2b">B2B</button>
                    <button class="btn btn-outline-primary case-study-filter-btn" data-filter="seo">SEO</button>
                    <button class="btn btn-outline-primary case-study-filter-btn" data-filter="ppc">PPC</button>
                    <button class="btn btn-outline-primary case-study-filter-btn" data-filter="social">Social Media</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Grid -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php 
            // Extended case studies data for more variety
            $extended_case_studies = [
                [
                    'title' => 'E-commerce Growth Campaign',
                    'client' => 'TechStore Inc.',
                    'industry' => 'E-commerce',
                    'service' => 'SEO & PPC',
                    'description' => 'Increased online sales by 300% through comprehensive SEO strategy and targeted PPC campaigns. We optimized their product pages, improved site speed, and implemented a data-driven PPC strategy.',
                    'results' => ['300% ROI', '150% Traffic Increase', '200% Conversion Rate', '50% Cost Reduction'],
                    'image' => 'case-study-1.jpg',
                    'testimonial' => 'The results exceeded our expectations. Our online revenue has tripled in just 6 months!',
                    'duration' => '6 months',
                    'budget' => '$15,000/month'
                ],
                [
                    'title' => 'Brand Awareness Campaign',
                    'client' => 'StartupXYZ',
                    'industry' => 'Technology',
                    'service' => 'Social Media & Branding',
                    'description' => 'Built brand awareness from scratch, reaching over 1 million people in 6 months. We created a comprehensive social media strategy and developed their brand identity.',
                    'results' => ['1M+ Reach', '50K+ Followers', '85% Engagement Rate', '200% Brand Mentions'],
                    'image' => 'case-study-2.jpg',
                    'testimonial' => 'They transformed our startup into a recognized brand in the industry.',
                    'duration' => '6 months',
                    'budget' => '$8,000/month'
                ],
                [
                    'title' => 'Lead Generation Campaign',
                    'client' => 'B2B Solutions',
                    'industry' => 'B2B Services',
                    'service' => 'Email Marketing & PPC',
                    'description' => 'Generated 500+ qualified leads with a 25% conversion rate through targeted campaigns. We implemented a multi-channel approach focusing on high-intent keywords.',
                    'results' => ['500+ Leads', '25% Conversion Rate', '40% Cost Reduction', '60% Lead Quality Improvement'],
                    'image' => 'case-study-3.jpg',
                    'testimonial' => 'The quality of leads has improved dramatically, and our sales team is closing more deals.',
                    'duration' => '4 months',
                    'budget' => '$12,000/month'
                ],
                [
                    'title' => 'Local SEO Domination',
                    'client' => 'City Dental Clinic',
                    'industry' => 'Healthcare',
                    'service' => 'Local SEO',
                    'description' => 'Achieved #1 rankings for all target keywords in local search results. We optimized their Google My Business profile and built local citations.',
                    'results' => ['#1 Local Rankings', '200% More Calls', '150% Website Traffic', '90% Review Rating'],
                    'image' => 'case-study-4.jpg',
                    'testimonial' => 'We\'re now the top-rated dental clinic in the city, thanks to their SEO expertise.',
                    'duration' => '3 months',
                    'budget' => '$3,000/month'
                ],
                [
                    'title' => 'Content Marketing Success',
                    'client' => 'Finance Blog',
                    'industry' => 'Finance',
                    'service' => 'Content Marketing',
                    'description' => 'Grew organic traffic by 400% through strategic content creation and promotion. We developed a content strategy focused on high-value keywords.',
                    'results' => ['400% Traffic Growth', '50K+ Monthly Visitors', '300% Social Shares', '25% Email List Growth'],
                    'image' => 'case-study-5.jpg',
                    'testimonial' => 'Their content strategy has positioned us as authorities in the finance space.',
                    'duration' => '8 months',
                    'budget' => '$6,000/month'
                ],
                [
                    'title' => 'E-commerce Remarketing',
                    'client' => 'Fashion Retailer',
                    'industry' => 'Fashion',
                    'service' => 'PPC & Email Marketing',
                    'description' => 'Increased conversion rate by 180% through strategic remarketing campaigns. We implemented multi-channel remarketing across email and social platforms.',
                    'results' => ['180% Conversion Rate', '75% Cart Recovery', '40% Revenue Increase', '60% ROI Improvement'],
                    'image' => 'case-study-6.jpg',
                    'testimonial' => 'Their remarketing strategy has significantly improved our bottom line.',
                    'duration' => '5 months',
                    'budget' => '$10,000/month'
                ]
            ];
            
            foreach ($extended_case_studies as $case_study):
                $industry_class = strtolower(str_replace(' ', '', $case_study['industry']));
                $service_class = strtolower(str_replace(' & ', '', str_replace(' ', '', $case_study['service'])));
            ?>
                <div class="col-lg-6 mb-4 case-study-item" data-industry="<?php echo $industry_class; ?>" data-service="<?php echo $service_class; ?>">
                    <div class="card h-100 shadow-sm">
                        <div class="case-study-image">
                            <i class="fas fa-trophy fa-4x"></i>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h5 class="card-title fw-bold"><?php echo $case_study['title']; ?></h5>
                                    <p class="text-muted small mb-0"><?php echo $case_study['client']; ?></p>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-primary"><?php echo $case_study['industry']; ?></span>
                                    <span class="badge bg-secondary"><?php echo $case_study['service']; ?></span>
                                </div>
                            </div>
                            <p class="card-text"><?php echo $case_study['description']; ?></p>
                            
                            <div class="mb-3">
                                <h6 class="fw-bold">Key Results:</h6>
                                <div class="row">
                                    <?php foreach ($case_study['results'] as $result): ?>
                                        <div class="col-6 mb-2">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-star text-warning me-2"></i>
                                                <small><?php echo $result; ?></small>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <small class="text-muted">
                                            <i class="fas fa-clock me-1"></i>
                                            <?php echo $case_study['duration']; ?>
                                        </small>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted">
                                            <i class="fas fa-dollar-sign me-1"></i>
                                            <?php echo $case_study['budget']; ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            
                            <?php if (isset($case_study['testimonial'])): ?>
                                <div class="testimonial-box bg-light p-3 rounded mb-3">
                                    <blockquote class="blockquote mb-0 small">
                                        <p class="mb-0">"<?php echo $case_study['testimonial']; ?>"</p>
                                    </blockquote>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-footer bg-transparent">
                            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#caseStudyModal<?php echo array_search($case_study, $extended_case_studies); ?>">
                                View Full Case Study
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Modals for Case Studies -->
<?php foreach ($extended_case_studies as $index => $case_study): ?>
<div class="modal fade" id="caseStudyModal<?php echo $index; ?>" tabindex="-1" aria-labelledby="caseStudyModalLabel<?php echo $index; ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="caseStudyModalLabel<?php echo $index; ?>"><?php echo $case_study['title']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Client:</h6>
                        <p><?php echo $case_study['client']; ?></p>
                        
                        <h6 class="fw-bold">Industry:</h6>
                        <p><?php echo $case_study['industry']; ?></p>
                        
                        <h6 class="fw-bold">Services:</h6>
                        <p><?php echo $case_study['service']; ?></p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Duration:</h6>
                        <p><?php echo $case_study['duration']; ?></p>
                        
                        <h6 class="fw-bold">Budget:</h6>
                        <p><?php echo $case_study['budget']; ?></p>
                        
                        <h6 class="fw-bold">Key Results:</h6>
                        <ul class="list-unstyled">
                            <?php foreach ($case_study['results'] as $result): ?>
                                <li><i class="fas fa-check text-success me-2"></i><?php echo $result; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="mb-4">
                    <h6 class="fw-bold">Project Overview:</h6>
                    <p><?php echo $case_study['description']; ?></p>
                </div>
                
                <?php if (isset($case_study['testimonial'])): ?>
                    <div class="mb-4">
                        <h6 class="fw-bold">Client Testimonial:</h6>
                        <div class="bg-light p-3 rounded">
                            <blockquote class="blockquote mb-0">
                                <p>"<?php echo $case_study['testimonial']; ?>"</p>
                            </blockquote>
                        </div>
                    </div>
                <?php endif; ?>
                
                <div class="text-center">
                    <img src="assets/images/<?php echo $case_study['image']; ?>" alt="<?php echo $case_study['title']; ?>" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="contact.php" class="btn btn-primary">Get Similar Results</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-3">Ready to Write Your Success Story?</h2>
                <p class="lead mb-0">Let's discuss how we can help you achieve similar results for your business.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="btn btn-warning btn-lg">
                    <i class="fas fa-phone me-2"></i>Start Your Project
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
