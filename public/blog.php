<?php
require_once 'header.php';

$page_title = 'Blog';
$show_page_header = true;
$page_header_title = 'Blog & Insights';
?>

<!-- Blog Hero -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-4">Digital Marketing Insights</h2>
                <p class="lead mb-4">Stay updated with the latest trends, tips, and strategies in digital marketing. Our experts share valuable insights to help you grow your business.</p>
                <div class="blog-subscribe bg-primary text-white rounded-3 p-4">
                    <h5 class="fw-bold mb-2">Subscribe to Our Newsletter</h5>
                    <p class="mb-3">Get weekly insights delivered to your inbox</p>
                    <form class="newsletter-form d-flex gap-2" method="POST" action="newsletter.php">
                        <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
                        <button class="btn btn-warning" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category Filters -->
<section class="py-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-filters text-center">
                    <button class="btn btn-outline-primary blog-filter active" data-category="all">All Posts</button>
                    <button class="btn btn-outline-primary blog-filter" data-category="SEO">SEO</button>
                    <button class="btn btn-outline-primary blog-filter" data-category="Paid Ads">Paid Ads</button>
                    <button class="btn btn-outline-primary blog-filter" data-category="Social Media">Social Media</button>
                    <button class="btn btn-outline-primary blog-filter" data-category="Trends">Trends</button>
                    <button class="btn btn-outline-primary blog-filter" data-category="Tips">Tips</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Post -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="fw-bold mb-4">Featured Article</h3>
                <div class="card featured-post shadow-sm">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="blog-image h-100">
                                <i class="fas fa-chart-line fa-8x text-primary opacity-25"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <span class="category-badge bg-warning text-dark">Featured</span>
                                    <small class="text-muted"><?php echo date('F j, Y', strtotime('2024-01-20')); ?></small>
                                </div>
                                <h4 class="card-title fw-bold mb-3">The Complete Guide to Digital Marketing in 2024</h4>
                                <p class="card-text mb-3">Everything you need to know about digital marketing strategies, trends, and best practices for the coming year. This comprehensive guide covers SEO, PPC, social media, content marketing, and more.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <small class="text-muted">By <strong>John Smith</strong></small>
                                        <span class="mx-2">•</span>
                                        <small class="text-muted">15 min read</small>
                                    </div>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="fw-bold mb-4">Latest Articles</h3>
                <div class="row">
                    <?php 
                    // Extended blog posts data
                    $extended_blog_posts = [
                        [
                            'title' => '10 SEO Trends to Watch in 2024',
                            'excerpt' => 'Stay ahead of the curve with these essential SEO trends that will shape digital marketing in the coming year.',
                            'category' => 'SEO',
                            'date' => '2024-01-15',
                            'author' => 'Mike Chen',
                            'image' => 'blog-seo-trends.jpg',
                            'read_time' => '8 min read',
                            'content' => 'Search engine optimization is constantly evolving, and staying ahead of the curve is crucial for digital marketing success. In this comprehensive guide, we explore the top SEO trends that will dominate 2024...'
                        ],
                        [
                            'title' => 'The Ultimate Guide to Facebook Advertising',
                            'excerpt' => 'Learn how to create effective Facebook ad campaigns that drive real results for your business.',
                            'category' => 'Paid Ads',
                            'date' => '2024-01-10',
                            'author' => 'Emily Davis',
                            'image' => 'blog-facebook-ads.jpg',
                            'read_time' => '12 min read',
                            'content' => 'Facebook advertising remains one of the most powerful tools for businesses to reach their target audience. This ultimate guide covers everything from campaign setup to advanced optimization techniques...'
                        ],
                        [
                            'title' => 'Building Brand Awareness on Social Media',
                            'excerpt' => 'Discover proven strategies to increase your brand visibility and engagement across social platforms.',
                            'category' => 'Social Media',
                            'date' => '2024-01-05',
                            'author' => 'Sarah Johnson',
                            'image' => 'blog-social-media.jpg',
                            'read_time' => '10 min read',
                            'content' => 'Social media has become an essential channel for brand building and customer engagement. Learn how to create a consistent brand presence and build meaningful connections with your audience...'
                        ],
                        [
                            'title' => 'Email Marketing Automation Best Practices',
                            'excerpt' => 'Maximize your email marketing ROI with these automation strategies and best practices.',
                            'category' => 'Tips',
                            'date' => '2023-12-28',
                            'author' => 'John Smith',
                            'image' => 'blog-email-automation.jpg',
                            'read_time' => '7 min read',
                            'content' => 'Email marketing automation can transform your marketing efforts and significantly improve your ROI. Discover the best practices for setting up effective automated email campaigns...'
                        ],
                        [
                            'title' => 'Google Ads vs. Facebook Ads: Which is Right for You?',
                            'excerpt' => 'A comprehensive comparison of the two leading advertising platforms to help you make the right choice.',
                            'category' => 'Paid Ads',
                            'date' => '2023-12-20',
                            'author' => 'Mike Chen',
                            'image' => 'blog-ads-comparison.jpg',
                            'read_time' => '9 min read',
                            'content' => 'Choosing between Google Ads and Facebook Ads can be challenging. This detailed comparison breaks down the strengths, weaknesses, and ideal use cases for each platform...'
                        ],
                        [
                            'title' => 'The Rise of Video Marketing in 2024',
                            'excerpt' => 'Why video content is dominating digital marketing and how to leverage it for your business.',
                            'category' => 'Trends',
                            'date' => '2023-12-15',
                            'author' => 'Emily Davis',
                            'image' => 'blog-video-marketing.jpg',
                            'read_time' => '6 min read',
                            'content' => 'Video marketing has become an essential component of successful digital marketing strategies. Learn about the latest trends and how to incorporate video into your marketing mix...'
                        ]
                    ];
                    
                    foreach ($extended_blog_posts as $post):
                    ?>
                        <div class="col-md-6 mb-4 blog-post-item" data-category="<?php echo strtolower(str_replace(' ', '', $post['category'])); ?>">
                            <div class="card blog-card h-100">
                                <div class="blog-image">
                                    <i class="fas fa-newspaper fa-4x text-primary opacity-25"></i>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="mb-3">
                                        <span class="category-badge"><?php echo $post['category']; ?></span>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3"><?php echo $post['title']; ?></h5>
                                    <p class="card-text flex-grow-1"><?php echo $post['excerpt']; ?></p>
                                    <div class="blog-meta">
                                        <span class="text-muted"><?php echo date('M j, Y', strtotime($post['date'])); ?></span>
                                        <span class="text-muted">•</span>
                                        <span class="text-muted"><?php echo $post['read_time']; ?></span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">By <?php echo $post['author']; ?></small>
                                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Pagination -->
                <nav aria-label="Blog pagination" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Widget -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">Search</h5>
                        <form class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search articles...">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Categories Widget -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">Categories</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none d-flex justify-content-between">
                                    <span>SEO</span>
                                    <span class="badge bg-primary">12</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none d-flex justify-content-between">
                                    <span>Paid Ads</span>
                                    <span class="badge bg-primary">8</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none d-flex justify-content-between">
                                    <span>Social Media</span>
                                    <span class="badge bg-primary">15</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none d-flex justify-content-between">
                                    <span>Trends</span>
                                    <span class="badge bg-primary">6</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none d-flex justify-content-between">
                                    <span>Tips</span>
                                    <span class="badge bg-primary">10</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Popular Posts Widget -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">Popular Posts</h5>
                        <div class="popular-post">
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-file-alt fa-2x text-primary opacity-25"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">How to Optimize Your Website for SEO</h6>
                                    <small class="text-muted">Jan 10, 2024</small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-file-alt fa-2x text-primary opacity-25"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Social Media Marketing Strategies</h6>
                                    <small class="text-muted">Jan 5, 2024</small>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-file-alt fa-2x text-primary opacity-25"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Email Marketing Best Practices</h6>
                                    <small class="text-muted">Dec 28, 2023</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Newsletter Widget -->
                <div class="card">
                    <div class="card-body bg-primary text-white">
                        <h5 class="card-title fw-bold mb-3">Stay Updated</h5>
                        <p class="mb-3">Get the latest marketing tips and insights delivered to your inbox.</p>
                        <form class="newsletter-form">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Your email">
                                <button class="btn btn-warning" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
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
                <h2 class="display-5 fw-bold mb-3">Want More Expert Insights?</h2>
                <p class="lead mb-0">Subscribe to our newsletter for weekly marketing tips, industry trends, and exclusive content.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <button class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#newsletterModal">
                    <i class="fas fa-envelope me-2"></i>Subscribe Now
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Modal -->
<div class="modal fade" id="newsletterModal" tabindex="-1" aria-labelledby="newsletterModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="newsletterModalLabel">Subscribe to Our Newsletter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Join our community of marketing professionals and get weekly insights delivered to your inbox.</p>
                <form>
                    <div class="mb-3">
                        <label for="newsletterName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="newsletterName" required>
                    </div>
                    <div class="mb-3">
                        <label for="newsletterEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="newsletterEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="newsletterInterests" class="form-label">Interests</label>
                        <select class="form-select" id="newsletterInterests">
                            <option value="all">All Topics</option>
                            <option value="seo">SEO</option>
                            <option value="ppc">PPC</option>
                            <option value="social">Social Media</option>
                            <option value="content">Content Marketing</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="newsletterTerms" required>
                        <label class="form-check-label" for="newsletterTerms">
                            I agree to receive marketing emails and accept the privacy policy
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
