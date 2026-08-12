<?php
declare(strict_types=1);

/**
 * SLEEKPICK — Homepage
 *
 * Phase 2 (Design) prototype. Markup and content are real; product/category
 * data is currently hard-coded here and will move to database-driven PHP
 * once Phase 4 (Backend) wires this up to includes/database.php.
 *
 * Placeholder images: picsum.photos (hero/banners), placehold.co (product grid)
 * per project decision — replace with real product photography before launch.
 */

$pageTitle = 'SLEEKPICK — Wear the Future';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="SLEEKPICK — futuristic fashion for people who dress like it's already tomorrow.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons (exclusive icon system) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<body>

    <!-- ================= PRELOADER ================= -->
    <div id="preloader" aria-hidden="true">
        <div class="preloader-icons"></div>
        <div class="preloader-content">
            <div class="logo-mark">SLEEK<span>PICK</span></div>
            <div class="preloader-bar"></div>
        </div>
    </div>

    <!-- ================= HEADER ================= -->
    <header id="site-header">
        <div class="container header-inner">
            <a href="index.php" class="logo">SLEEK<span>PICK</span></a>

            <nav class="main-nav" aria-label="Primary">
                <a href="index.php" class="active">Home</a>
                <a href="shop.php">Shop</a>
                <a href="shop.php?category=new">New Arrivals</a>
                <a href="shop.php?category=accessories">Accessories</a>
            </nav>

            <div class="header-actions">
                <button type="button" aria-label="Search">
                    <i class="bi bi-search"></i>
                </button>
                <button type="button" aria-label="Account">
                    <i class="bi bi-person"></i>
                </button>
                <button type="button" aria-label="Wishlist">
                    <i class="bi bi-heart"></i>
                </button>
                <button type="button" aria-label="Cart, 3 items">
                    <i class="bi bi-bag"></i>
                    <span class="cart-count">3</span>
                </button>
                <button type="button" class="nav-toggle" aria-label="Open menu" aria-expanded="false">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>
    </header>

    <main>
        <!-- ================= HERO ================= -->
        <section class="hero">
            <div class="container hero-inner">
                <div class="hero-copy">
                    <span class="section-eyebrow">SS26 Collection</span>
                    <h1>Dress for the world <em>arriving next</em>.</h1>
                    <p>Engineered silhouettes, tech-forward fabrics, and a color language built for people who move first. This is SLEEKPICK.</p>
                    <div class="hero-actions">
                        <a href="shop.php" class="btn btn-primary">
                            Shop the Collection <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="shop.php?category=new" class="btn btn-secondary">New Arrivals</a>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="hero-frame corner-brackets">
                        <span></span><span></span><span></span><span></span>
                        <img src="https://picsum.photos/seed/sleekpick-hero/900/1100" alt="Model wearing a SLEEKPICK jacket from the SS26 collection" loading="eager">
                    </div>
                    <div class="hero-badge">
                        <i class="bi bi-lightning-charge-fill"></i>
                        <div>
                            <strong>Free Shipping</strong>
                            <small>On orders over $80</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= CATEGORY SHOWCASE ================= -->
        <section class="categories">
            <div class="container">
                <div class="section-heading">
                    <span class="section-eyebrow">Shop by Category</span>
                    <h2>Find your lane</h2>
                </div>

                <div class="category-grid">
                    <a href="shop.php?category=outerwear" class="category-card">
                        <img src="https://picsum.photos/seed/sleekpick-outerwear/500/650" alt="Outerwear category">
                        <div class="category-label">
                            <span>12 Styles</span>
                            <h3>Outerwear</h3>
                        </div>
                    </a>
                    <a href="shop.php?category=essentials" class="category-card">
                        <img src="https://picsum.photos/seed/sleekpick-essentials/500/650" alt="Essentials category">
                        <div class="category-label">
                            <span>24 Styles</span>
                            <h3>Essentials</h3>
                        </div>
                    </a>
                    <a href="shop.php?category=bottoms" class="category-card">
                        <img src="https://picsum.photos/seed/sleekpick-bottoms/500/650" alt="Bottoms category">
                        <div class="category-label">
                            <span>15 Styles</span>
                            <h3>Bottoms</h3>
                        </div>
                    </a>
                    <a href="shop.php?category=accessories" class="category-card">
                        <img src="https://picsum.photos/seed/sleekpick-accessories/500/650" alt="Accessories category">
                        <div class="category-label">
                            <span>9 Styles</span>
                            <h3>Accessories</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ================= FEATURED PRODUCTS ================= -->
        <section class="products">
            <div class="container">
                <div class="section-heading">
                    <span class="section-eyebrow">Trending Now</span>
                    <h2>Bestsellers this week</h2>
                    <p>The pieces people keep coming back for.</p>
                </div>

                <div class="product-grid">

                    <article class="product-card">
                        <div class="product-media corner-brackets">
                            <span></span><span></span><span></span><span></span>
                            <span class="product-badge">Sale</span>
                            <button type="button" class="wishlist-btn" aria-label="Add Chrome Jacket to wishlist" aria-pressed="false">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="https://placehold.co/500x650/1B1F1F/BEFCFF?text=Chrome+Jacket" alt="Chrome Jacket product photo" loading="lazy">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Outerwear</span>
                            <h3 class="product-name">Chrome Jacket</h3>
                            <div class="product-price">
                                <span class="price-current">$128</span>
                                <span class="price-original">$160</span>
                            </div>
                            <button type="button" class="add-to-cart-btn">
                                <i class="bi bi-bag-plus"></i> Add to Cart
                            </button>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-media corner-brackets">
                            <span></span><span></span><span></span><span></span>
                            <button type="button" class="wishlist-btn" aria-label="Add Nova Cargo Pants to wishlist" aria-pressed="false">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="https://placehold.co/500x650/448084/FFFFFF?text=Nova+Cargo" alt="Nova Cargo Pants product photo" loading="lazy">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Bottoms</span>
                            <h3 class="product-name">Nova Cargo Pants</h3>
                            <div class="product-price">
                                <span class="price-current">$96</span>
                            </div>
                            <button type="button" class="add-to-cart-btn">
                                <i class="bi bi-bag-plus"></i> Add to Cart
                            </button>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-media corner-brackets">
                            <span></span><span></span><span></span><span></span>
                            <span class="product-badge">New</span>
                            <button type="button" class="wishlist-btn" aria-label="Add Voltage Tee to wishlist" aria-pressed="false">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="https://placehold.co/500x650/54BAC1/1B1F1F?text=Voltage+Tee" alt="Voltage Tee product photo" loading="lazy">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Essentials</span>
                            <h3 class="product-name">Voltage Tee</h3>
                            <div class="product-price">
                                <span class="price-current">$42</span>
                            </div>
                            <button type="button" class="add-to-cart-btn">
                                <i class="bi bi-bag-plus"></i> Add to Cart
                            </button>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-media corner-brackets">
                            <span></span><span></span><span></span><span></span>
                            <button type="button" class="wishlist-btn" aria-label="Add Signal Cap to wishlist" aria-pressed="false">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="https://placehold.co/500x650/C81A1A/FFFFFF?text=Signal+Cap" alt="Signal Cap product photo" loading="lazy">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Accessories</span>
                            <h3 class="product-name">Signal Cap</h3>
                            <div class="product-price">
                                <span class="price-current">$34</span>
                            </div>
                            <button type="button" class="add-to-cart-btn">
                                <i class="bi bi-bag-plus"></i> Add to Cart
                            </button>
                        </div>
                    </article>

                </div>

                <div class="section-footer">
                    <a href="shop.php" class="btn btn-secondary">View All Products <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <!-- ================= PROMO BANNER ================= -->
        <section class="container">
            <div class="promo-banner">
                <img src="https://picsum.photos/seed/sleekpick-promo/1400/700" alt="SLEEKPICK seasonal promotion">
                <div class="promo-content">
                    <span class="section-eyebrow">Limited Drop</span>
                    <h2>Up to 30% off outerwear</h2>
                    <p>The Chrome collection won't restock this season. Once it's gone, it's archived.</p>
                    <a href="shop.php?category=outerwear" class="btn btn-primary">Shop Outerwear</a>
                </div>
            </div>
        </section>

        <!-- ================= VALUE STRIP ================= -->
        <section class="value-strip">
            <div class="container value-grid">
                <div class="value-item">
                    <i class="bi bi-truck"></i>
                    <div>
                        <strong>Free Shipping</strong>
                        <span>On orders over $80</span>
                    </div>
                </div>
                <div class="value-item">
                    <i class="bi bi-arrow-repeat"></i>
                    <div>
                        <strong>Easy Returns</strong>
                        <span>30-day return window</span>
                    </div>
                </div>
                <div class="value-item">
                    <i class="bi bi-shield-check"></i>
                    <div>
                        <strong>Secure Checkout</strong>
                        <span>Encrypted payment</span>
                    </div>
                </div>
                <div class="value-item">
                    <i class="bi bi-headset"></i>
                    <div>
                        <strong>Support</strong>
                        <span>Real answers, fast</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= NEWSLETTER ================= -->
        <section class="newsletter">
            <div class="container newsletter-inner">
                <span class="section-eyebrow">Stay in the Loop</span>
                <h2>Get first access to new drops</h2>
                <form id="newsletter-form" class="newsletter-form" novalidate>
                    <label for="newsletter-email" class="visually-hidden">Email address</label>
                    <input type="email" id="newsletter-email" name="email" placeholder="you@email.com" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
                <p class="form-message" role="status" aria-live="polite"></p>
                <p class="newsletter-note">No spam. Unsubscribe anytime.</p>
            </div>
        </section>
    </main>

    <!-- ================= FOOTER ================= -->
    <footer id="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="logo">SLEEK<span style="color: var(--color-secondary);">PICK</span></div>
                    <p>Futuristic fashion for people who dress like it's already tomorrow.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="SLEEKPICK on Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="SLEEKPICK on X"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" aria-label="SLEEKPICK on TikTok"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Shop</h4>
                    <ul>
                        <li><a href="shop.php?category=outerwear">Outerwear</a></li>
                        <li><a href="shop.php?category=essentials">Essentials</a></li>
                        <li><a href="shop.php?category=bottoms">Bottoms</a></li>
                        <li><a href="shop.php?category=accessories">Accessories</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="login.php">Sign In</a></li>
                        <li><a href="register.php">Create Account</a></li>
                        <li><a href="account.php">Order History</a></li>
                        <li><a href="cart.php">Cart</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Shipping & Returns</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <span>&copy; <?php echo date('Y'); ?> SLEEKPICK. All rights reserved.</span>
                <div>
                    <a href="#">Terms</a>
                    <a href="#">Privacy</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="../assets/js/main.js"></script>
</body>
</html>
