<?php
$page_title = $page_title ?? 'Vigitec Panamá - Sistemas de Seguridad Premium';
$page_description = $page_description ?? 'Vigitec Panamá - Especialistas en sistemas de seguridad premium. Instalación de cámaras, alarmas, control de acceso y mantenimiento con soporte 24/7.';
$page_keywords = $page_keywords ?? 'sistemas de seguridad panamá, cámaras de seguridad, instalación de cámaras, alarmas panamá, control de acceso, mantenimiento de seguridad';
$page_url = $page_url ?? 'https://vigitecpanama.com/';
?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
<meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>" />
<meta name="author" content="Vigitec Panamá" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="<?= htmlspecialchars($page_url) ?>" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="<?= htmlspecialchars($page_url) ?>" />
<meta property="og:title" content="<?= htmlspecialchars($page_title) ?>" />
<meta property="og:description" content="<?= htmlspecialchars($page_description) ?>" />
<meta property="og:image" content="https://vigitecpanama.com/assets/img/hero/servicios_bg.png" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="<?= htmlspecialchars($page_url) ?>" />
<meta property="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
<meta property="twitter:description" content="<?= htmlspecialchars($page_description) ?>" />
<meta property="twitter:image" content="https://vigitecpanama.com/assets/img/hero/servicios_bg.png" />

<!-- Preload del fondo principal para evitar parpadeos -->
<link rel="preload" as="image" href="/assets/img/hero/servicios_bg.png">

<!-- Fonts: Inter for clean corporate look, Plus Jakarta Sans for Display headings -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;700;800&display=swap" rel="stylesheet">

<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="/assets/js/tailwind-config.js"></script>

<!-- Custom Styles (minimal) -->
<link rel="stylesheet" href="/assets/css/styles.css" />

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="/assets/img/hero/favicon.ico">
