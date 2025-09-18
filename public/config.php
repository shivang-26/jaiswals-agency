<?php
// Site Configuration
define('SITE_NAME', "Jaiswal's Agency");
define('SITE_URL', 'http://localhost/digital-marketing/public');
define('SITE_EMAIL', 'info@digitalmarketing.com');
define('SITE_PHONE', '+1 (555) 123-4567');
define('SITE_ADDRESS', '123 Marketing Street, Digital City, DC 12345');

// Database Configuration (for future use)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'digital_marketing');

// Social Media Links
define('SOCIAL_LINKS', [
    'facebook' => 'https://facebook.com/digitalmarketing',
    'twitter' => 'https://twitter.com/digitalmarketing',
    'linkedin' => 'https://linkedin.com/company/digitalmarketing',
    'instagram' => 'https://instagram.com/digitalmarketing'
]);

// Navigation Menu
$nav_menu = [
    'Home' => 'index.php',
    'About Us' => 'about.php',
    'Services' => 'services.php',
    'Case Studies' => 'case-studies.php',
    'Pricing' => 'pricing.php',
    'Blog' => 'blog.php',
    'Resources' => 'resources.php',
    'Contact' => 'contact.php'
];

// Services Data
$services = [
    [
        'title' => 'SEO & Content Marketing',
        'description' => 'Boost your online visibility with our comprehensive SEO strategies and high-quality content creation.',
        'icon' => 'fa-search',
        'features' => ['Keyword Research', 'On-Page SEO', 'Content Strategy', 'Link Building']
    ],
    [
        'title' => 'Social Media Management',
        'description' => 'Engage your audience and build brand awareness across all major social platforms.',
        'icon' => 'fa-share-alt',
        'features' => ['Content Creation', 'Community Management', 'Paid Social', 'Analytics']
    ],
    [
        'title' => 'PPC / Paid Advertising',
        'description' => 'Drive immediate results with targeted paid advertising campaigns across multiple platforms.',
        'icon' => 'fa-bullhorn',
        'features' => ['Google Ads', 'Facebook Ads', 'LinkedIn Ads', 'Remarketing']
    ],
    [
        'title' => 'Email Marketing Automation',
        'description' => 'Nurture leads and build customer relationships with automated email campaigns.',
        'icon' => 'fa-envelope',
        'features' => ['Campaign Setup', 'Automation', 'A/B Testing', 'Analytics']
    ],
    [
        'title' => 'Branding & Creative',
        'description' => 'Create a memorable brand identity that resonates with your target audience.',
        'icon' => 'fa-palette',
        'features' => ['Logo Design', 'Brand Strategy', 'Visual Identity', 'Creative Assets']
    ],
    [
        'title' => 'Analytics & Conversion Optimization',
        'description' => 'Make data-driven decisions and optimize your website for maximum conversions.',
        'icon' => 'fa-chart-line',
        'features' => ['Web Analytics', 'Conversion Tracking', 'A/B Testing', 'ROI Analysis']
    ]
];

// Case Studies Data
$case_studies = [
    [
        'title' => 'E-commerce Growth Campaign',
        'client' => 'TechStore Inc.',
        'industry' => 'E-commerce',
        'service' => 'SEO & PPC',
        'description' => 'Increased online sales by 300% through comprehensive SEO strategy and targeted PPC campaigns.',
        'results' => ['300% ROI', '150% Traffic Increase', '200% Conversion Rate'],
        'image' => 'case-study-1.jpg'
    ],
    [
        'title' => 'Brand Awareness Campaign',
        'client' => 'StartupXYZ',
        'industry' => 'Technology',
        'service' => 'Social Media & Branding',
        'description' => 'Built brand awareness from scratch, reaching over 1 million people in 6 months.',
        'results' => ['1M+ Reach', '50K+ Followers', '85% Engagement Rate'],
        'image' => 'case-study-2.jpg'
    ],
    [
        'title' => 'Lead Generation Campaign',
        'client' => 'B2B Solutions',
        'industry' => 'B2B Services',
        'service' => 'Email Marketing & PPC',
        'description' => 'Generated 500+ qualified leads with a 25% conversion rate through targeted campaigns.',
        'results' => ['500+ Leads', '25% Conversion Rate', '40% Cost Reduction'],
        'image' => 'case-study-3.jpg'
    ]
];

// Team Members Data
$team_members = [
    [
        'name' => 'John Smith',
        'position' => 'CEO & Founder',
        'bio' => '15+ years of digital marketing experience. Passionate about helping businesses grow through strategic marketing.',
        'expertise' => ['Strategy', 'Business Development', 'Marketing Automation'],
        'image' => 'team-john.jpg'
    ],
    [
        'name' => 'Sarah Johnson',
        'position' => 'Creative Director',
        'bio' => 'Award-winning creative professional with expertise in brand development and visual storytelling.',
        'expertise' => ['Branding', 'Design', 'Content Strategy'],
        'image' => 'team-sarah.jpg'
    ],
    [
        'name' => 'Mike Chen',
        'position' => 'Technical SEO Specialist',
        'bio' => 'SEO expert with deep technical knowledge and a track record of improving search rankings.',
        'expertise' => ['Technical SEO', 'Analytics', 'PPC'],
        'image' => 'team-mike.jpg'
    ],
    [
        'name' => 'Emily Davis',
        'position' => 'Social Media Manager',
        'bio' => 'Social media strategist who builds engaged communities and drives brand awareness.',
        'expertise' => ['Social Media', 'Content Creation', 'Community Management'],
        'image' => 'team-emily.jpg'
    ]
];

// Pricing Packages
$pricing_packages = [
    [
        'name' => 'Starter',
        'price' => '$999',
        'period' => '/month',
        'description' => 'Perfect for small businesses looking to establish their online presence.',
        'features' => [
            'Basic SEO Setup',
            'Social Media Management (2 platforms)',
            'Monthly Analytics Report',
            'Email Support',
            '5 Blog Posts/Month'
        ],
        'featured' => false
    ],
    [
        'name' => 'Growth',
        'price' => '$2,499',
        'period' => '/month',
        'description' => 'Ideal for growing businesses that want to scale their marketing efforts.',
        'features' => [
            'Advanced SEO Strategy',
            'Social Media Management (4 platforms)',
            'PPC Campaign Management',
            'Weekly Analytics Report',
            'Priority Support',
            '10 Blog Posts/Month',
            'Monthly Strategy Call'
        ],
        'featured' => true
    ],
    [
        'name' => 'Enterprise',
        'price' => '$4,999',
        'period' => '/month',
        'description' => 'Comprehensive solution for established businesses seeking maximum growth.',
        'features' => [
            'Enterprise SEO Strategy',
            'Full Social Media Management',
            'Advanced PPC Campaigns',
            'Email Marketing Automation',
            'Daily Analytics Dashboard',
            '24/7 Priority Support',
            'Unlimited Blog Posts',
            'Weekly Strategy Calls',
            'Dedicated Account Manager'
        ],
        'featured' => false
    ]
];

// Blog Posts Data
$blog_posts = [
    [
        'title' => '10 SEO Trends to Watch in 2024',
        'excerpt' => 'Stay ahead of the curve with these essential SEO trends that will shape digital marketing in the coming year.',
        'category' => 'SEO',
        'date' => '2024-01-15',
        'author' => 'Mike Chen',
        'image' => 'blog-seo-trends.jpg'
    ],
    [
        'title' => 'The Ultimate Guide to Facebook Advertising',
        'excerpt' => 'Learn how to create effective Facebook ad campaigns that drive real results for your business.',
        'category' => 'Paid Ads',
        'date' => '2024-01-10',
        'author' => 'Emily Davis',
        'image' => 'blog-facebook-ads.jpg'
    ],
    [
        'title' => 'Building Brand Awareness on Social Media',
        'excerpt' => 'Discover proven strategies to increase your brand visibility and engagement across social platforms.',
        'category' => 'Social Media',
        'date' => '2024-01-05',
        'author' => 'Sarah Johnson',
        'image' => 'blog-social-media.jpg'
    ]
];

// Utility Functions
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function format_phone($phone) {
    return preg_replace('/[^0-9]/', '', $phone);
}

function get_current_page() {
    $current_page = basename($_SERVER['PHP_SELF']);
    return $current_page;
}

function is_active_page($page) {
    return get_current_page() === $page;
}

// Security Functions
function generate_csrf_token() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verify_csrf_token($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

function sanitize_output($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Email Validation
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// URL Validation
function is_valid_url($url) {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

// Phone Number Validation
function is_valid_phone($phone) {
    return preg_match('/^\+?[0-9\s\-\(\)]{10,20}$/', $phone);
}

// Form Validation Helper
function validate_required_fields($fields, $data) {
    $errors = [];
    foreach ($fields as $field) {
        if (!isset($data[$field]) || empty(trim($data[$field]))) {
            $errors[$field] = ucfirst(str_replace('_', ' ', $field)) . ' is required';
        }
    }
    return $errors;
}

// File Upload Security
function is_allowed_file_type($filename, $allowed_types) {
    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    return in_array($extension, $allowed_types);
}

function get_safe_filename($filename) {
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $name = preg_replace('/[^a-zA-Z0-9-_]/', '', $name);
    return $name . '_' . time() . '.' . $extension;
}

// SEO Helper Functions
function generate_meta_description($text, $length = 160) {
    $text = strip_tags($text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    if (strlen($text) > $length) {
        $text = substr($text, 0, $length - 3) . '...';
    }
    return $text;
}

function generate_slug($text) {
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
    $text = preg_replace('/\s+/', '-', $text);
    $text = preg_replace('/-+/', '-', $text);
    return trim($text, '-');
}

// Date/Time Helpers
function format_date($date, $format = 'F j, Y') {
    return date($format, strtotime($date));
}

function time_ago($datetime) {
    $time = strtotime($datetime);
    $now = time();
    $diff = $now - $time;
    
    if ($diff < 60) {
        return 'just now';
    } elseif ($diff < 3600) {
        return floor($diff / 60) . ' minutes ago';
    } elseif ($diff < 86400) {
        return floor($diff / 3600) . ' hours ago';
    } elseif ($diff < 604800) {
        return floor($diff / 86400) . ' days ago';
    } else {
        return format_date($datetime);
    }
}

// Array Helpers
function array_pluck($array, $key) {
    return array_map(function($item) use ($key) {
        return is_object($item) ? $item->$key : $item[$key];
    }, $array);
}

function array_group_by($array, $key) {
    $result = [];
    foreach ($array as $item) {
        $group_key = is_object($item) ? $item->$key : $item[$key];
        if (!isset($result[$group_key])) {
            $result[$group_key] = [];
        }
        $result[$group_key][] = $item;
    }
    return $result;
}

// Pagination Helper
function get_pagination_data($total_items, $current_page, $items_per_page = 10) {
    $total_pages = ceil($total_items / $items_per_page);
    $current_page = max(1, min($current_page, $total_pages));
    
    $start_item = ($current_page - 1) * $items_per_page + 1;
    $end_item = min($start_item + $items_per_page - 1, $total_items);
    
    return [
        'total_items' => $total_items,
        'total_pages' => $total_pages,
        'current_page' => $current_page,
        'items_per_page' => $items_per_page,
        'start_item' => $start_item,
        'end_item' => $end_item,
        'has_previous' => $current_page > 1,
        'has_next' => $current_page < $total_pages,
        'previous_page' => $current_page - 1,
        'next_page' => $current_page + 1
    ];
}

// Analytics Helper
function track_page_view($page) {
    // Simple page view tracking - can be enhanced with database storage
    if (!isset($_SESSION['page_views'])) {
        $_SESSION['page_views'] = [];
    }
    if (!isset($_SESSION['page_views'][$page])) {
        $_SESSION['page_views'][$page] = 0;
    }
    $_SESSION['page_views'][$page]++;
}

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set default timezone
date_default_timezone_set('America/New_York');

// Error reporting settings (disable in production)
if (defined('ENVIRONMENT') && ENVIRONMENT === 'production') {
    error_reporting(0);
    ini_set('display_errors', 0);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

// Security headers
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
}

// Content Security Policy (can be customized based on needs)
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://code.jquery.com; style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; connect-src 'self';");

?>
