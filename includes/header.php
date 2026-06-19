<?php
$businessName = $businessName ?? "Trade Scale Digital";
$pageTitle = $pageTitle ?? "Trade Scale Digital | Affordable Websites, AI Assistants & Web Tools in Northern Ireland";
$pageDescription = $pageDescription ?? "Trade Scale Digital helps small businesses in Northern Ireland get found online with affordable websites, Google Business Profile support, Shopify development, quote tools, automations and bespoke AI assistants.";
$pageKeywords = $pageKeywords ?? "AI assistants Northern Ireland, affordable websites Northern Ireland, small business websites NI, quote tools for small businesses, Shopify developer Northern Ireland, Google Business Profile setup NI, web tools Belfast, website design Ballymena, digital tools for small business NI";
$canonicalUrl = $canonicalUrl ?? "https://tradescaledigital.co.uk";
$ogTitle = $ogTitle ?? $pageTitle;
$ogDescription = $ogDescription ?? "Helping small businesses in Northern Ireland use websites, quote tools, automations and bespoke AI assistants without big agency costs.";
$ogImage = $ogImage ?? "https://tradescaledigital.co.uk/assets/images/TSD-logo-horizontal.png";
$currentPage = $currentPage ?? "";

function nav_active($pageKey, $currentPage) {
  return $currentPage === $pageKey ? "is-active" : "";
}
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, "UTF-8"); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, "UTF-8"); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords, ENT_QUOTES, "UTF-8"); ?>">

  <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle, ENT_QUOTES, "UTF-8"); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($ogDescription, ENT_QUOTES, "UTF-8"); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, "UTF-8"); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, "UTF-8"); ?>">

  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, "UTF-8"); ?>">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="icon" type="image/png" href="/assets/images/favicon.png">
  <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png">
  <link rel="apple-touch-icon" href="/assets/images/favicon.png">

<link rel="stylesheet" href="/assets/css/style.css">

<?php
if (!empty($extraCss)) {
  $extraCssFiles = is_array($extraCss) ? $extraCss : [$extraCss];

  foreach ($extraCssFiles as $cssFile) {
    echo '<link rel="stylesheet" href="' . htmlspecialchars($cssFile, ENT_QUOTES, "UTF-8") . '">' . PHP_EOL;
  }
}
?>
</head>

<body>
<header class="site-header">
  <div class="container header-inner">
    <a href="/" class="logo" aria-label="Trade Scale Digital home">
      <img src="/assets/images/TSD-logo-horizontal.png" alt="Trade Scale Digital logo">
    </a>

<nav class="main-nav" id="mainNav" aria-label="Main navigation">
    
    <a class="social-icon-link" href="https://www.facebook.com/profile.php?id=61582842210662" target="_blank" rel="noopener" aria-label="Facebook">
  <i class="fa-brands fa-facebook-f"></i>
</a>

<a class="social-icon-link" href="https://www.instagram.com/tradescale.digital/" target="_blank" rel="noopener" aria-label="Instagram">
  <i class="fa-brands fa-instagram"></i>
</a>
  <a href="/affordable-websites-northern-ireland.php" class="<?php echo nav_active("websites", $currentPage); ?>">Websites</a>
  <a href="/google-business-profile-setup-ni.php" class="<?php echo nav_active("google-profile", $currentPage); ?>">Google</a>
  <a href="/ai-assistants-northern-ireland.php" class="<?php echo nav_active("ai", $currentPage); ?>">AI</a>
  <a href="/quote-tools-calculators-northern-ireland.php" class="<?php echo nav_active("quote-tools", $currentPage); ?>">Quote Tools</a>
  <a href="/shopify-development-northern-ireland.php" class="<?php echo nav_active("shopify", $currentPage); ?>">Shopify</a>
  <a href="/recent-projects.php" class="<?php echo nav_active("projects", $currentPage); ?>">Work</a>
  <a href="/insights/" class="<?php echo nav_active("insights", $currentPage); ?>">Insights</a>
  <a href="/#contact" class="nav-cta">Get Started</a>
</nav>

    <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mainNav">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>