<?php
global $parameters;
if (!isset($parameters)) {
    exit;
}
$parameters = $parameters['head'];
?>
<html lang="en" itemscope itemtype="https://schema.org/WebPage">
    <head>
        <meta charset="UTF-8">
        <?php if (array_key_exists('title', $parameters) && !empty($parameters['title'])) { ?>
        <title><?php echo $parameters['title']; ?></title>
        <?php } if (array_key_exists('description', $parameters) && !empty($parameters['description'])) { ?>
        <meta name="description" content="<?php echo $parameters['description']; ?>">
        <?php } ?>
        <link rel="stylesheet" href="dist/css/index.min.css">
        <script src="dist/js/index.min.js" async></script>
        <!-- Copy Google Analytics here. -->
    </head>
