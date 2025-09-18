<?php
require_once 'header.php';

$page_title = 'Resources';
$show_page_header = true;
$page_header_title = 'Resources & Free Tools';
?>

<!-- Resources Hero -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-4">Free Marketing Resources & Tools</h2>
                <p class="lead mb-4">Access our comprehensive collection of free tools, guides, and resources to help you succeed in your digital marketing efforts.</p>
                <div class="stats-bar bg-primary text-white rounded-3 p-4">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="fw-bold">25+</h3>
                            <p class="mb-0">Free Tools</p>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold">50+</h3>
                            <p class="mb-0">Guides</p>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold">10K+</h3>
                            <p class="mb-0">Downloads</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Free Tools Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h3 class="fw-bold mb-3">Free Marketing Tools</h3>
                <p class="lead text-muted">Powerful tools to help you analyze, optimize, and grow your marketing efforts</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h5 class="fw-bold mb-3">SEO Audit Tool</h5>
                    <p class="text-muted mb-3">Get a comprehensive SEO analysis of your website. Check your site's health, identify issues, and get actionable recommendations.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Technical SEO Analysis</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>On-Page SEO Check</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Backlink Analysis</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Competitor Analysis</li>
                    </ul>
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#seoAuditModal">
                        <i class="fas fa-play me-2"></i>Start Free Audit
                    </button>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h5 class="fw-bold mb-3">ROI Calculator</h5>
                    <p class="text-muted mb-3">Calculate the potential return on investment for your marketing campaigns. Make data-driven decisions with our comprehensive calculator.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Multi-Channel ROI</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Break-Even Analysis</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Scenario Planning</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Detailed Reports</li>
                    </ul>
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#roiCalculatorModal">
                        <i class="fas fa-calculator me-2"></i>Calculate ROI
                    </button>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-hashtag"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Keyword Research Tool</h5>
                    <p class="text-muted mb-3">Discover high-value keywords for your SEO and PPC campaigns. Get search volume, competition data, and keyword suggestions.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Search Volume Data</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Competition Analysis</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Keyword Suggestions</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Trend Analysis</li>
                    </ul>
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#keywordToolModal">
                        <i class="fas fa-search me-2"></i>Research Keywords
                    </button>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Competitor Analysis</h5>
                    <p class="text-muted mb-3">Analyze your competitors' digital marketing strategies. Uncover their strengths, weaknesses, and opportunities.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>SEO Strategy Analysis</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Social Media Presence</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Content Strategy</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Backlink Profile</li>
                    </ul>
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#competitorModal">
                        <i class="fas fa-users me-2"></i>Analyze Competitors
                    </button>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Email Subject Line Tester</h5>
                    <p class="text-muted mb-3">Test and optimize your email subject lines for higher open rates. Get instant feedback and suggestions.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Open Rate Prediction</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Spam Score Check</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Emotional Analysis</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>A/B Testing Ideas</li>
                    </ul>
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#emailTesterModal">
                        <i class="fas fa-paper-plane me-2"></i>Test Subject Line
                    </button>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Social Media Image Sizer</h5>
                    <p class="text-muted mb-3">Create perfectly sized images for all social media platforms. Never worry about image dimensions again.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All Platform Sizes</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Batch Processing</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Templates</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Quality Optimization</li>
                    </ul>
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#imageSizerModal">
                        <i class="fas fa-images me-2"></i>Resize Images
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Downloadable Guides Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h3 class="fw-bold mb-3">Free Guides & Whitepapers</h3>
                <p class="lead text-muted">Comprehensive guides to help you master digital marketing</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card guide-card h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="guide-image bg-primary text-white d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-book fa-3x"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">The Complete SEO Guide 2024</h5>
                                <p class="card-text">Master SEO with this comprehensive guide covering technical SEO, on-page optimization, content strategy, and link building.</p>
                                <div class="guide-meta mb-3">
                                    <small class="text-muted"><i class="fas fa-file-pdf me-1"></i>PDF • 45 pages</small>
                                    <span class="mx-2">•</span>
                                    <small class="text-muted"><i class="fas fa-download me-1"></i>2,341 downloads</small>
                                </div>
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-download me-2"></i>Download Free
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card guide-card h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="guide-image bg-success text-white d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-bullhorn fa-3x"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Facebook Advertising Mastery</h5>
                                <p class="card-text">Learn how to create profitable Facebook ad campaigns with advanced targeting, optimization, and scaling strategies.</p>
                                <div class="guide-meta mb-3">
                                    <small class="text-muted"><i class="fas fa-file-pdf me-1"></i>PDF • 38 pages</small>
                                    <span class="mx-2">•</span>
                                    <small class="text-muted"><i class="fas fa-download me-1"></i>1,892 downloads</small>
                                </div>
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-download me-2"></i>Download Free
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card guide-card h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="guide-image bg-warning text-white d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-share-alt fa-3x"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Social Media Marketing Blueprint</h5>
                                <p class="card-text">Build a powerful social media presence with our step-by-step blueprint for content creation, engagement, and growth.</p>
                                <div class="guide-meta mb-3">
                                    <small class="text-muted"><i class="fas fa-file-pdf me-1"></i>PDF • 52 pages</small>
                                    <span class="mx-2">•</span>
                                    <small class="text-muted"><i class="fas fa-download me-1"></i>3,127 downloads</small>
                                </div>
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-download me-2"></i>Download Free
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card guide-card h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="guide-image bg-info text-white d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-envelope fa-3x"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Email Marketing Automation</h5>
                                <p class="card-text">Discover how to set up automated email campaigns that nurture leads and drive conversions on autopilot.</p>
                                <div class="guide-meta mb-3">
                                    <small class="text-muted"><i class="fas fa-file-pdf me-1"></i>PDF • 41 pages</small>
                                    <span class="mx-2">•</span>
                                    <small class="text-muted"><i class="fas fa-download me-1"></i>1,567 downloads</small>
                                </div>
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-download me-2"></i>Download Free
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Webinars & Workshops Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h3 class="fw-bold mb-3">Upcoming Webinars & Workshops</h3>
                <p class="lead text-muted">Join our free live sessions to learn from industry experts</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card webinar-card">
                    <div class="card-body">
                        <div class="webinar-date bg-primary text-white rounded-3 p-3 text-center mb-3">
                            <h5 class="mb-0">JAN 25</h5>
                            <small>2:00 PM EST</small>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Advanced SEO Strategies for 2024</h5>
                        <p class="card-text mb-3">Learn cutting-edge SEO techniques that will dominate search results in the coming year.</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <small class="text-muted"><i class="fas fa-users me-1"></i>247 registered</small>
                            <small class="text-muted"><i class="fas fa-clock me-1"></i>60 mins</small>
                        </div>
                        <button class="btn btn-primary w-100">Register Free</button>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card webinar-card">
                    <div class="card-body">
                        <div class="webinar-date bg-success text-white rounded-3 p-3 text-center mb-3">
                            <h5 class="mb-0">FEB 1</h5>
                            <small>3:00 PM EST</small>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Facebook Ads Masterclass</h5>
                        <p class="card-text mb-3">Master Facebook advertising with proven strategies for maximum ROI and scaling.</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <small class="text-muted"><i class="fas fa-users me-1"></i>189 registered</small>
                            <small class="text-muted"><i class="fas fa-clock me-1"></i>90 mins</small>
                        </div>
                        <button class="btn btn-primary w-100">Register Free</button>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card webinar-card">
                    <div class="card-body">
                        <div class="webinar-date bg-warning text-white rounded-3 p-3 text-center mb-3">
                            <h5 class="mb-0">FEB 8</h5>
                            <small>1:00 PM EST</small>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Content Marketing That Converts</h5>
                        <p class="card-text mb-3">Create content that drives traffic, engages audiences, and generates leads.</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <small class="text-muted"><i class="fas fa-users me-1"></i>156 registered</small>
                            <small class="text-muted"><i class="fas fa-clock me-1"></i>75 mins</small>
                        </div>
                        <button class="btn btn-primary w-100">Register Free</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tool Modals -->
<!-- SEO Audit Modal -->
<div class="modal fade" id="seoAuditModal" tabindex="-1" aria-labelledby="seoAuditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="seoAuditModalLabel">Free SEO Audit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Enter your website URL to get a comprehensive SEO analysis.</p>
                <form>
                    <div class="mb-3">
                        <label for="websiteUrl" class="form-label">Website URL</label>
                        <input type="url" class="form-control" id="websiteUrl" placeholder="https://yourwebsite.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="targetKeyword" class="form-label">Target Keyword (Optional)</label>
                        <input type="text" class="form-control" id="targetKeyword" placeholder="Your main target keyword">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="your@email.com" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="auditTerms" required>
                        <label class="form-check-label" for="auditTerms">
                            I agree to receive the audit report and marketing emails
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Start Audit</button>
            </div>
        </div>
    </div>
</div>

<!-- ROI Calculator Modal -->
<div class="modal fade" id="roiCalculatorModal" tabindex="-1" aria-labelledby="roiCalculatorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="roiCalculatorModalLabel">ROI Calculator</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Calculate your potential marketing ROI with our interactive calculator.</p>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="monthlyBudget" class="form-label">Monthly Marketing Budget</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="monthlyBudget" placeholder="1000">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="conversionRate" class="form-label">Expected Conversion Rate (%)</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="conversionRate" placeholder="2.5">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="averageOrder" class="form-label">Average Order Value</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="averageOrder" placeholder="100">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="timeframe" class="form-label">Timeframe</label>
                            <select class="form-select" id="timeframe">
                                <option value="1">1 Month</option>
                                <option value="3">3 Months</option>
                                <option value="6">6 Months</option>
                                <option value="12">12 Months</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="mt-4 p-3 bg-light rounded">
                    <h6>Projected Results:</h6>
                    <div class="row">
                        <div class="col-6">
                            <small class="text-muted">Expected Revenue:</small>
                            <h5 class="text-success">$0</h5>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">ROI:</small>
                            <h5 class="text-primary">0%</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Calculate ROI</button>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-3">Need More Advanced Tools?</h2>
                <p class="lead mb-0">Our premium tools and expert guidance can help you take your marketing to the next level.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="btn btn-warning btn-lg">
                    <i class="fas fa-rocket me-2"></i>Get Expert Help
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
