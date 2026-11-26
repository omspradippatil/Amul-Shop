<?php
$currentPage = basename($_SERVER['PHP_SELF'] ?? 'index.php');

$siteName = 'Shree Laxmi Amul Shopiee';
$productionHost = 'shreelaxmiamul.fast-page.org';

// Default SEO metadata per page (can be overridden before including header.php)
$defaultMeta = [
    'index.php' => [
        'title' => 'Shree Laxmi Amul Shopiee - Official Amul Store Pachmarg',
        'description' => 'Buy fresh and authentic Amul products in Pachmarg, Kudan, Palghar. Ice creams, milk, butter, cheese, and beverages at Shree Laxmi Amul Shopiee.',
        'keywords' => 'Amul shop Pachmarg, Amul ice cream Palghar, dairy products, Amul milk, Amul butter, Amul cheese, Shree Laxmi Amul Shopiee Kudan',
    ],
    'about.php' => [
        'title' => 'About Shree Laxmi Amul Shopiee | Authorized Amul Store',
        'description' => 'Learn about Shree Laxmi Amul Shopiee, an authorized Amul outlet serving Pachmarg and Kudan, Palghar since 2014 with fresh dairy and ice cream.',
        'keywords' => 'About Shree Laxmi Amul Shopiee, authorized Amul outlet Pachmarg, Amul store Kudan Palghar, dairy shop since 2014',
    ],
    'products.php' => [
        'title' => 'Amul Products & Prices | Shree Laxmi Amul Shopiee Store',
        'description' => 'Browse our complete range of authentic Amul ice creams, butter, cheese, paneer, milk, ghee, lassi, and beverages at Shree Laxmi Amul Shopiee.',
        'keywords' => 'Amul products list, Amul ice cream prices, Amul butter cheese paneer, Amul milk ghee lassi, Amul shop Pachmarg',
    ],
    'gallery.php' => [
        'title' => 'Store Gallery & FSSAI Certification | Amul Shopiee',
        'description' => 'Take a visual tour of Shree Laxmi Amul Shopiee in Pachmarg, Palghar, featuring our clean store environment, product displays, and FSSAI certificate.',
        'keywords' => 'Shree Laxmi Amul Shopiee gallery, FSSAI certified Amul store, Amul shop photos Pachmarg Palghar',
    ],
    'contact.php' => [
        'title' => 'Contact, Address & Hours | Shree Laxmi Amul Shopiee',
        'description' => 'Visit Shree Laxmi Amul Shopiee at 210 Pachmarg Road, opp. Police Station, Delwadi, Kudan, Maharashtra 401502. Open daily 7 AM to 11 PM.',
        'keywords' => 'Shree Laxmi Amul Shopiee contact, Amul shop Pachmarg address, Amul store Kudan phone number, Palghar',
    ],
    'enquiry.php' => [
        'title' => 'Product & Bulk Order Enquiry | Shree Laxmi Amul Shopiee',
        'description' => 'Enquire about Amul product availability, pricing, ice cream cakes, or wholesale bulk orders at Shree Laxmi Amul Shopiee in Pachmarg, Palghar.',
        'keywords' => 'Amul product enquiry, Amul bulk order Palghar, Amul wholesale Pachmarg, ice cream cake order Kudan',
    ],
    'faq.php' => [
        'title' => 'Frequently Asked Questions | Shree Laxmi Amul Shopiee',
        'description' => 'Find answers about store hours, digital payments, FSSAI certification, bulk orders, and Amul product availability at Shree Laxmi Amul Shopiee.',
        'keywords' => 'Shree Laxmi Amul Shopiee FAQ, Amul store hours Pachmarg, Amul bulk order questions, FSSAI certified dairy store',
    ],
    'nutritional-info.php' => [
        'title' => 'Amul Nutritional Information | Shree Laxmi Amul Shopiee',
        'description' => 'Explore calories, protein, fat, and calcium values for Amul butter, cheese, paneer, ice creams, milk, and beverages at Shree Laxmi Amul Shopiee.',
        'keywords' => 'Amul nutritional information, Amul butter nutrition facts, Amul cheese paneer protein, Amul ice cream calories',
    ],
    'privacy-policy.php' => [
        'title' => 'Privacy Policy | Shree Laxmi Amul Shopiee Pachmarg',
        'description' => 'Read the Privacy Policy for Shree Laxmi Amul Shopiee to understand how we collect, use, and protect your contact and enquiry information.',
        'keywords' => 'Shree Laxmi Amul Shopiee privacy policy, customer data protection Pachmarg',
    ],
    'terms.php' => [
        'title' => 'Terms of Use & Store Policy | Shree Laxmi Amul Shopiee',
        'description' => 'Review the Terms of Use, pricing, payment methods, and return policies for Shree Laxmi Amul Shopiee in Pachmarg, Kudan, Maharashtra.',
        'keywords' => 'Shree Laxmi Amul Shopiee terms of use, store return policy, Amul shop Pachmarg terms',
    ],
];

$metaDefaults = $defaultMeta[$currentPage] ?? [
    'title' => 'Shree Laxmi Amul Shopiee - Official Amul Store Pachmarg',
    'description' => 'Official Amul products outlet in Pachmarg, Palghar offering fresh dairy products, ice creams, and beverages.',
    'keywords' => 'Amul Shop Pachmarg, Amul products, Dairy products, Kudan, Palghar',
];

$pageTitle = $pageTitle ?? $metaDefaults['title'];
$pageDescription = $pageDescription ?? $metaDefaults['description'];
$pageKeywords = $pageKeywords ?? $metaDefaults['keywords'];
$pageRobots = $pageRobots ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

// Detect HTTPS reliably behind reverse proxies and enforce HTTPS for production
$isHttps = (
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && stripos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
    || (!empty($_SERVER['HTTP_CF_VISITOR']) && strpos($_SERVER['HTTP_CF_VISITOR'], 'https') !== false)
    || (isset($_SERVER['SERVER_PORT']) && (int) $_SERVER['SERVER_PORT'] === 443)
);
$host = $_SERVER['HTTP_HOST'] ?? $productionHost;
$scheme = ($host === $productionHost || $isHttps) ? 'https' : 'http';
$baseUrl = $scheme . '://' . $host;

// Always emit clean canonical URLs without query parameters (?i=1, ?product=...) or /index.php duplicates
if (!isset($pageCanonicalPath)) {
    $pageCanonicalPath = ($currentPage === 'index.php') ? '/' : '/' . $currentPage;
}
$canonicalUrl = $baseUrl . $pageCanonicalPath;
$ogImage = $pageOgImage ?? ($baseUrl . '/images/iceindex.webp');
$ogType = $pageOgType ?? 'website';

$cssPageName = pathinfo($currentPage, PATHINFO_FILENAME);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="robots" content="<?php echo htmlspecialchars($pageRobots, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="author" content="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?>" />
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <!-- Open Graph -->
    <meta property="og:type" content="<?php echo htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:image:alt" content="Shree Laxmi Amul Shopiee Products and Store" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>" />

    <!-- Mobile / PWA Meta -->
    <meta name="theme-color" content="#0a4da3" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />

    <!-- Preconnect to CDNs -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin />
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin />
    <link rel="preconnect" href="https://unpkg.com" crossorigin />

    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/layouts/header-footer.css" />
    <?php if (file_exists(__DIR__ . "/css/pages/{$cssPageName}.css")): ?>
    <link rel="stylesheet" href="css/pages/<?php echo htmlspecialchars($cssPageName, ENT_QUOTES, 'UTF-8'); ?>.css" />
    <?php endif; ?>
    <link rel="stylesheet" href="css/mobile-fixes.css" />
    <link rel="stylesheet" href="css/animation-fixes.css" />
    <link rel="stylesheet" href="css/color-fixes.css" />
    <link rel="stylesheet" href="css/compatibility/infinity-compatibility.css" />

    <?php if (!empty($extraHeadHtml)) { echo $extraHeadHtml; } ?>

    <?php if (!empty($pageSchemaJsonLd)): ?>
    <script type="application/ld+json">
<?php echo $pageSchemaJsonLd; ?>
    </script>
    <?php elseif ($currentPage !== 'index.php'): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "<?php echo htmlspecialchars($baseUrl . '/', ENT_QUOTES, 'UTF-8'); ?>"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": <?php echo json_encode($pageTitle, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>,
                "item": "<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>"
            }
        ]
    }
    </script>
    <?php endif; ?>

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
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="Amul.jpg" alt="Shree Laxmi Amul Shopiee Logo" class="logo-img" width="50" height="50" />
            <span class="shop-name">Shree Laxmi Amul Shopiee</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

<main id="main-content">
