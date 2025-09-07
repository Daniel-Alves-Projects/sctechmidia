<?php
// Incluir configurações
require_once 'config.php';

// Definir valores padrão se não estiverem definidos
if (!isset($page_title)) $page_title = 'home';
if (!isset($meta_description)) $meta_description = '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords); ?>">
    <meta name="author" content="<?php echo SITE_URL; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL; ?>">
    <meta property="og:title" content="sctechmidia | <?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta property="og:image" content="<?php echo img_url('sctechmidiaLogo.svg'); ?>">

    <title>sctechmidia | <?php echo htmlspecialchars($page_title); ?></title>

    <link rel="icon" href="<?php echo img_url('favicon-sctechmidia.png'); ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo url('style.css'); ?>?v=1.1">
    <script src="<?php echo url('js/scripts.js'); ?>" defer></script>
</head>