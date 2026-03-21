<?php
$currentPage = basename($_SERVER['PHP_SELF']);

// Set page-specific metadata
$pageTitle = "Shree Laxmi Amul Shopiee";
$pageDescription = "Official Amul products outlet in Pachmarg offering fresh dairy products, ice creams, and more.";

switch($currentPage) {
    case 'index.php':
        $pageTitle = "Shree Laxmi Amul Shopiee - Official Store";
        $pageDescription = "Your neighborhood store for fresh and authentic Amul products. Ice creams, dairy, beverages and more.";
        break;
    case 'products.php':
        $pageTitle = "Our Products - Shree Laxmi Amul Shopiee";
        $pageDescription = "Explore our wide range of Amul products including ice creams, butter, cheese, milk and beverages.";
        break;
    case 'about.php':
        $pageTitle = "About Us - Shree Laxmi Amul Shopiee";
        $pageDescription = "Learn about our journey and commitment to quality Amul products since 2014.";
        break;
    case 'gallery.php':
        $pageTitle = "Gallery - Shree Laxmi Amul Shopiee";
        $pageDescription = "Take a visual tour of our store, products, and FSSAI certification.";
        break;
    case 'contact.php':
        $pageTitle = "Contact Us - Shree Laxmi Amul Shopiee";
        $pageDescription = "Get in touch with us. Find our location, hours and contact information.";
        break;
    case 'enquiry.php':
        $pageTitle = "Product Enquiry - Shree Laxmi Amul Shopiee";
        $pageDescription = "Ask about product availability, pricing, or place bulk orders.";
        break;
}

    $siteName = "Shree Laxmi Amul Shopiee";
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $requestUri = strtok($_SERVER['REQUEST_URI'] ?? '/' . $currentPage, '?');
    $canonicalUrl = $scheme . '://' . $host . $requestUri;
    $ogImage = $scheme . '://' . $host . '/images/iceindex.webp';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="google-site-verification" content="REPLACE_WITH_GOOGLE_SEARCH_CONSOLE_TOKEN" />
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>" />
    <!-- CSS Links -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Core CSS files -->
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/layouts/header-footer.css" />
    <!-- Page-specific CSS determined by current page -->
    <?php
    $cssFile = pathinfo($currentPage, PATHINFO_FILENAME);
    if(file_exists("css/pages/{$cssFile}.css")) {
        echo "<link rel=\"stylesheet\" href=\"css/pages/{$cssFile}.css\" />";
    }
    ?>
    <!-- Mobile optimization CSS -->
    <link rel="stylesheet" href="css/mobile-fixes.css" />
    <!-- Animation fixes to ensure colors and animations work -->
    <link rel="stylesheet" href="css/animation-fixes.css" />
    <!-- Color fixes CSS - new file -->
    <link rel="stylesheet" href="css/color-fixes.css" />
    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Custom Inline Styles for Header -->
    <style>
        .navbar {
            background: linear-gradient(to right, #0a4da3, #1665c1);
            padding: 0.8rem 0;
        }
        .logo-img {
            height: 50px;
            width: auto;
            margin-right: 10px;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            font-weight: bold;
            font-size: 1.25rem;
            white-space: nowrap;
        }
        .shop-name {
            color: white;
            font-size: 1.2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        @media (max-width: 767.98px) {
            .logo-img {
                height: 40px;
            }
            .shop-name {
                font-size: 1rem;
                max-width: 160px;
                line-height: 1.2;
                white-space: normal;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="Amul.jpg" alt="Amul Logo" class="logo-img" />
            <span class="shop-name">Shree Laxmi Amul Shopiee</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'products.php') ? 'active' : ''; ?>" href="products.php">Products</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'gallery.php') ? 'active' : ''; ?>" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'enquiry.php') ? 'active' : ''; ?>" href="enquiry.php">Enquiry</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Optional JS for Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<main id="main-content">
