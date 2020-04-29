<?php
global $parameters;

$parameters['head'] = [
    'title' => 'Page Name',
    'description' => 'Enter meta description here.'
];
require_once 'includes/head.php';


$parameters['header'] = [
    'title' => 'Site Name',
    'description' => 'Enter subtext here.'
];
require_once 'includes/header.php';
?>
<main id="main" class="site-main" role="main" itemscope itemtype="https://schema.org/WebPageElement" itemprop="mainContentOfPage">
    <article>
        <h2>Untitled</h2>
        <p></p>
    </article>
</main>
<?php
$parameters['footer'] = [];
require_once 'includes/footer.php';
?>
