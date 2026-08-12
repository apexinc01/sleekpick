<?php
declare(strict_types=1);

/**
 * SLEEKPICK — Shop / Product Listing
 *
 * Phase 2 (Design) prototype. Product data is hard-coded here for now;
 * in Phase 4 this becomes a database query built from $_GET params
 * (category, size, color, price range, sort) via includes/database.php.
 *
 * Placeholder images: placehold.co, per project decision.
 */

$pageTitle = 'Shop — SLEEKPICK';

// Hard-coded product data — placeholder until Phase 4 pulls from MySQL.
$products = [
    ['name' => 'Chrome Jacket',        'category' => 'Outerwear',   'price' => 128, 'original' => 160, 'badge' => 'Sale', 'color' => '1B1F1F'],
    ['name' => 'Drift Trench Coat',    'category' => 'Outerwear',   'price' => 185, 'original' => null, 'badge' => null,   'color' => '448084'],
    ['name' => 'Halo Puffer Vest',     'category' => 'Outerwear',   'price' => 112, 'original' => null, 'badge' => null,   'color' => '8A9797'],
    ['name' => 'Voltage Tee',          'category' => 'Essentials',  'price' => 42,  'original' => null, 'badge' => null,   'color' => '54BAC1'],
    ['name' => 'Echo Turtleneck',      'category' => 'Essentials',  'price' => 68,  'original' => null, 'badge' => null,   'color' => '1B1F1F'],
    ['name' => 'Pulse Hoodie',         'category' => 'Essentials',  'price' => 74,  'original' => null, 'badge' => 'New',  'color' => 'C81A1A'],
    ['name' => 'Nova Cargo Pants',     'category' => 'Bottoms',     'price' => 96,  'original' => null, 'badge' => null,   'color' => '448084'],
    ['name' => 'Flux Joggers',         'category' => 'Bottoms',     'price' => 58,  'original' => null, 'badge' => null,   'color' => '8A9797'],
    ['name' => 'Vector Straight Jeans','category' => 'Bottoms',     'price' => 89,  'original' => null, 'badge' => null,   'color' => '1B1F1F'],
    ['name' => 'Signal Cap',           'category' => 'Accessories', 'price' => 34,  'original' => null, 'badge' => null,   'color' => 'C81A1A'],
    ['name' => 'Glass Visor Sunglasses','category' => 'Accessories','price' => 46,  'original' => null, 'badge' => null,   'color' => '54BAC1'],
    ['name' => 'Vector Backpack',      'category' => 'Accessories', 'price' => 120, 'original' => 145, 'badge' => 'Sale', 'color' => '1B1F1F'],
];

$totalProducts = count($products);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="Shop the full SLEEKPICK collection — outerwear, essentials, bottoms, and accessories.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

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
                <a href="index.php">Home</a>
                <a href="shop.php" class="active">Shop</a>
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
        <!-- ================= PAGE HEADER ================= -->
        <section class="page-header">
            <div class="container">
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <a href="index.php">Home</a>
                    <i class="bi bi-chevron-right"></i>
                    <span class="current">Shop</span>
                </nav>
                <h1>All Products</h1>
                <p>Engineered fabrics, futuristic silhouettes — <?php echo $totalProducts; ?> pieces and counting.</p>
            </div>
        </section>

        <!-- ================= SHOP LAYOUT ================= -->
        <section class="shop-section">
            <div class="container shop-layout">

                <!-- ---------- Filters sidebar (becomes drawer on tablet/mobile) ---------- -->
                <aside class="filters-sidebar" id="filters-sidebar" aria-label="Product filters">
                    <button type="button" class="filter-drawer-close" aria-label="Close filters">
                        <i class="bi bi-x-lg"></i>
                    </button>

                    <div class="filters-header">
                        <h2>Filters</h2>
                        <button type="button" class="clear-filters">Clear All</button>
                    </div>

                    <div class="filter-group">
                        <h3>Category</h3>
                        <label class="filter-option">
                            <input type="checkbox" data-label="Outerwear" value="outerwear">
                            Outerwear <span class="count">(3)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" data-label="Essentials" value="essentials">
                            Essentials <span class="count">(3)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" data-label="Bottoms" value="bottoms">
                            Bottoms <span class="count">(3)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" data-label="Accessories" value="accessories">
                            Accessories <span class="count">(3)</span>
                        </label>
                    </div>

                    <div class="filter-group">
                        <h3>Size</h3>
                        <div class="size-options">
                            <button type="button" class="size-btn">XS</button>
                            <button type="button" class="size-btn">S</button>
                            <button type="button" class="size-btn">M</button>
                            <button type="button" class="size-btn">L</button>
                            <button type="button" class="size-btn">XL</button>
                        </div>
                    </div>

                    <div class="filter-group">
                        <h3>Color</h3>
                        <div class="color-options">
                            <button type="button" class="color-swatch" style="background:#1B1F1F" data-label="Black" aria-label="Black">
                                <i class="bi bi-check-lg"></i>
                            </button>
                            <button type="button" class="color-swatch" style="background:#FFFFFF" data-label="White" aria-label="White">
                                <i class="bi bi-check-lg"></i>
                            </button>
                            <button type="button" class="color-swatch" style="background:#C81A1A" data-label="Red" aria-label="Red">
                                <i class="bi bi-check-lg"></i>
                            </button>
                            <button type="button" class="color-swatch" style="background:#54BAC1" data-label="Teal" aria-label="Teal">
                                <i class="bi bi-check-lg"></i>
                            </button>
                            <button type="button" class="color-swatch" style="background:#8A9797" data-label="Gray" aria-label="Gray">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </div>
                    </div>

                    <div class="filter-group">
                        <h3>Price</h3>
                        <div class="price-inputs">
                            <input type="number" min="0" placeholder="Min" aria-label="Minimum price">
                            <span>&ndash;</span>
                            <input type="number" min="0" placeholder="Max" aria-label="Maximum price">
                        </div>
                        <button type="button" class="apply-price-btn">Apply</button>
                    </div>
                </aside>

                <!-- ---------- Backdrop for mobile filter drawer ---------- -->
                <div class="filter-drawer-backdrop"></div>

                <!-- ---------- Main content ---------- -->
                <div class="shop-main">

                    <div class="shop-toolbar">
                        <span class="results-count"><?php echo $totalProducts; ?> results</span>
                        <div class="toolbar-right">
                            <button type="button" class="mobile-filter-btn">
                                <i class="bi bi-sliders"></i> Filters
                                <span class="filter-badge" style="display:none;">0</span>
                            </button>
                            <div class="sort-select-wrap">
                                <select class="sort-select" aria-label="Sort products">
                                    <option>Featured</option>
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                    <option>Newest</option>
                                </select>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </div>
                    </div>

                    <div class="active-filters"></div>

                    <div class="product-grid">
                        <?php foreach ($products as $product): ?>
                        <article class="product-card">
                            <div class="product-media corner-brackets">
                                <span></span><span></span><span></span><span></span>
                                <?php if ($product['badge']): ?>
                                    <span class="product-badge"><?php echo htmlspecialchars($product['badge']); ?></span>
                                <?php endif; ?>
                                <button type="button" class="wishlist-btn" aria-label="Add <?php echo htmlspecialchars($product['name']); ?> to wishlist" aria-pressed="false">
                                    <i class="bi bi-heart"></i>
                                </button>
                                <img src="https://placehold.co/500x650/<?php echo htmlspecialchars($product['color']); ?>/FFFFFF?text=<?php echo urlencode($product['name']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?> product photo" loading="lazy">
                            </div>
                            <div class="product-info">
                                <span class="product-category"><?php echo htmlspecialchars($product['category']); ?></span>
                                <h3 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h3>
                                <div class="product-price">
                                    <span class="price-current">$<?php echo number_format($product['price']); ?></span>
                                    <?php if ($product['original']): ?>
                                        <span class="price-original">$<?php echo number_format($product['original']); ?></span>
                                    <?php endif; ?>
                                </div>
                                <button type="button" class="add-to-cart-btn">
                                    <i class="bi bi-bag-plus"></i> Add to Cart
                                </button>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>

                    <nav class="pagination" aria-label="Product pagination">
                        <a href="#" aria-label="Previous page"><i class="bi bi-chevron-left"></i></a>
                        <span class="current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <span class="dots">&hellip;</span>
                        <a href="#">8</a>
                        <a href="#" aria-label="Next page"><i class="bi bi-chevron-right"></i></a>
                    </nav>

                </div>
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
    <script src="../assets/js/shop.js"></script>
</body>
</html>