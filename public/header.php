<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - Digital Marketing Agency</title>
    <meta name="description" content="Professional digital marketing agency offering SEO, PPC, social media, and branding services to help your business grow.">
    <meta name="keywords" content="digital marketing, SEO, PPC, social media, branding, marketing agency">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <?php
    // Page-specific meta tags and styles can be added here
    if (isset($page_title)) {
        echo "<title>" . htmlspecialchars($page_title) . " - " . SITE_NAME . "</title>";
    }
    ?>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-rocket me-2"></i>
                <?php echo SITE_NAME; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($nav_menu as $title => $link): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo is_active_page($link) ? 'active' : ''; ?>" href="<?php echo $link; ?>">
                                <?php echo $title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="ms-3">
                    <a href="contact.php" class="btn btn-light btn-sm">Get a Free Consultation</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header (for inner pages) -->
    <?php if (isset($show_page_header) && $show_page_header): ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?php echo isset($page_header_title) ? htmlspecialchars($page_header_title) : 'Page Title'; ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo isset($page_header_title) ? htmlspecialchars($page_header_title) : 'Current Page'; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
