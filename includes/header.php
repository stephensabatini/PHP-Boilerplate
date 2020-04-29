<?php
global $parameters;
if (!isset($parameters)) {
    exit;
}
$parameters = $parameters['header'];
?>
<body>
    <div class="site-wrapper">
        <header id="header" class="site-header" role="banner" itemscope itemtype="https://schema.org/WPHeader">
            <?php if (array_key_exists('title', $parameters) && !empty($parameters['title'])) { ?>
            <h1><?php echo $parameters['title']; ?></h1>
            <?php } if (array_key_exists('description', $parameters) && !empty($parameters['description'])) { ?>
            <p><?php echo $parameters['description']; ?></p>
            <?php } ?>
            <button id="nav-toggle" class="site-nav-toggle" aria-controls="nav" aria-expanded="false">☰</button>
            <nav id="nav" class="site-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="Main">
                <ul>
                    <li><a href="/">Home</a></li>
                </ul>
            </nav>
        </header>
