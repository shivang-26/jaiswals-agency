<!-- Footer -->
<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="mb-3"><?php echo SITE_NAME; ?></h5>
                <p class="mb-3">We are a full-service digital marketing agency dedicated to helping businesses grow through strategic, data-driven marketing solutions.</p>
                <div class="social-links">
                    <?php foreach (SOCIAL_LINKS as $platform => $url): ?>
                        <a href="<?php echo $url; ?>" class="text-white me-3" target="_blank">
                            <i class="fab fa-<?php echo $platform; ?> fa-lg"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <?php foreach ($nav_menu as $title => $link): ?>
                        <?php if ($title !== 'Home'): ?>
                            <li class="mb-2">
                                <a href="<?php echo $link; ?>" class="text-white-50 text-decoration-none">
                                    <?php echo $title; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <!-- Services -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3">Services</h5>
                <ul class="list-unstyled">
                    <?php foreach (array_slice($services, 0, 4) as $service): ?>
                        <li class="mb-2">
                            <a href="services.php#<?php echo strtolower(str_replace(' ', '-', $service['title'])); ?>" class="text-white-50 text-decoration-none">
                                <?php echo $service['title']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3">Newsletter</h5>
                <p class="mb-3">Subscribe to get the latest marketing tips and insights.</p>
                <form class="newsletter-form" method="POST" action="newsletter.php">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your email" name="email" required>
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <hr class="my-4 bg-secondary">
        
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0 text-white-50">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="privacy-policy.php" class="text-white-50 text-decoration-none me-3">Privacy Policy</a>
                <a href="terms-of-service.php" class="text-white-50 text-decoration-none">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="../assets/js/script.js"></script>

<!-- Back to Top Button -->
<button id="backToTop" class="btn btn-primary btn-lg position-fixed bottom-0 end-0 m-3" style="display: none;">
    <i class="fas fa-arrow-up"></i>
</button>

</body>
</html>
