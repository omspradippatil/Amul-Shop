<?php
// Get current page filename
$currentPage = basename($_SERVER['PHP_SELF']);
// Set page-specific metadata
$pageTitle = "Shree Laxmi Amul Shopiee";
$pageDescription = "Official Amul products outlet in Pachmarg offering fresh dairy products, ice creams, and more.";
switch($currentPage) {
    case 'index.php':
        $pageTitle = "Shree Laxmi Amul Shopiee - Official Amul Products Store";
        $pageDescription = "Your neighborhood store for fresh and authentic Amul products. Ice creams, dairy, beverages and more at the best prices.";
        break;
    case 'products.php':
        $pageTitle = "Our Products - Shree Laxmi Amul Shopiee";
        $pageDescription = "Explore our wide range of Amul products including ice creams, butter, cheese, milk products and beverages.";
        break;
    case 'about.php':
        $pageTitle = "About Us - Shree Laxmi Amul Shopiee";
        $pageDescription = "Learn about our journey, mission and commitment to bringing quality Amul products to our community since 2014.";
        break;
    case 'gallery.php':
        $pageTitle = "Gallery - Shree Laxmi Amul Shopiee";
        $pageDescription = "Take a visual tour of our store, products, and FSSAI certification. See what makes us special.";
        break;
    case 'contact.php':
        $pageTitle = "Contact Us - Shree Laxmi Amul Shopiee";
        $pageDescription = "Get in touch with us. Find our location, operating hours and contact information.";
        break;
    case 'enquiry.php':
        $pageTitle = "Product Enquiry - Shree Laxmi Amul Shopiee";
        $pageDescription = "Ask about product availability, pricing, or place a bulk order through our simple enquiry form.";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="Amul, dairy products, ice cream, milk, cheese, butter, Pachmarg, Kudan, Maharashtra">
    <meta name="author" content="Shree Laxmi Amul Shopiee">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://shreelaxmiamulshopiee.byethost7.com/<?php echo $currentPage; ?>">
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:image" content="https://shreelaxmiamulshopiee.byethost7.com/Amul.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://shreelaxmiamulshopiee.byethost7.com/<?php echo $currentPage; ?>">
    <meta property="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta property="twitter:description" content="<?php echo $pageDescription; ?>">
    <meta property="twitter:image" content="https://shreelaxmiamulshopiee.byethost7.com/Amul.jpg">
    
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    
    <!-- Preload Bootstrap resources to prevent FOUC -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" as="style">
    
    <!-- Preload key assets -->
    <link rel="preload" href="Amul.jpg" as="image">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="style.css">
    <!-- Mobile optimization CSS -->
    <link rel="stylesheet" href="mobile-fixes.css">
    <!-- ByetHost compatibility fixes -->
    <link rel="stylesheet" href="infinity-compatibility.css">
    
    <!-- Structured Data / Schema.org markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Store",
      "name": "Shree Laxmi Amul Shopiee",
      "image": "https://shreelaxmiamulshopiee.byethost7.com/Amul.jpg",
      "description": "Official Amul products outlet offering fresh dairy products, ice creams, and more.",
      "telephone": "+919890377098",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "210, pachmarg, road, opp. police station, Delwadi",
        "addressLocality": "Kudan",
        "addressRegion": "Maharashtra",
        "postalCode": "401502",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "19.55",
        "longitude": "72.85"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          "opens": "07:00",
          "closes": "23:00"
        }
      ],
      "sameAs": [
        "https://www.facebook.com/share/16Y5YfVZGN/?mibextid=qi2Omg"
      ],
      "priceRange": "₹"
    }
    </script>
</head>
<body>
<!-- Accessibility Skip Link -->
<a href="#main-content" class="visually-hidden-focusable">Skip to main content</a>

<!-- Sticky Header -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php" aria-label="Shree Laxmi Amul Shopiee Home">
            <img src="Amul.jpg" alt="Amul Logo" width="80" height="80" class="logo-img">
            <span class="shop-name ms-3">Shree Laxmi Amul Shopiee</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php" aria-current="<?php echo ($currentPage == 'index.php') ? 'page' : 'false'; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php" aria-current="<?php echo ($currentPage == 'about.php') ? 'page' : 'false'; ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'products.php') ? 'active' : ''; ?>" href="products.php" aria-current="<?php echo ($currentPage == 'products.php') ? 'page' : 'false'; ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'gallery.php') ? 'active' : ''; ?>" href="gallery.php" aria-current="<?php echo ($currentPage == 'gallery.php') ? 'page' : 'false'; ?>">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php" aria-current="<?php echo ($currentPage == 'contact.php') ? 'page' : 'false'; ?>">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'enquiry.php') ? 'active' : ''; ?>" href="enquiry.php" aria-current="<?php echo ($currentPage == 'enquiry.php') ? 'page' : 'false'; ?>">Enquiry</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Breadcrumbs (except on homepage) -->
<?php if ($currentPage != 'index.php'): ?>
<div class="bg-light py-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb small mb-0">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
                <?php if ($currentPage == 'products.php'): ?>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                <?php elseif ($currentPage == 'about.php'): ?>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                <?php elseif ($currentPage == 'gallery.php'): ?>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                <?php elseif ($currentPage == 'contact.php'): ?>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                <?php elseif ($currentPage == 'enquiry.php'): ?>
                    <li class="breadcrumb-item active" aria-current="page">Enquiry</li>
                <?php endif; ?>
            </ol>
        </nav>
    </div>
</div>
<?php endif; ?>

<main id="main-content">