<?php
$pageTitle = $pageTitle ?? 'Zverino';
$activeNav = $activeNav ?? '';
$navItems = [
    ['key' => 'home', 'label' => 'Domů', 'href' => '/'],
    ['key' => 'breeders', 'label' => 'Chovatelé', 'href' => '#'],
    ['key' => 'offers', 'label' => 'Nabídky', 'href' => '/detail'],
    ['key' => 'contact', 'label' => 'Kontakt', 'href' => '#'],
];
?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/global.css">
</head>
<body>
<header class="site-header">
  <div class="container site-header__inner">
    <a class="brand" href="/">
      <span class="brand__icon" aria-hidden="true">
        <img src="images/logo.png" alt="">
      </span>
      <span class="brand__text">Zverino</span>
    </a>

    <div class="site-header__desktop">
      <nav class="main-nav" aria-label="Hlavní navigace">
        <?php foreach ($navItems as $item): ?>
          <a class="main-nav__link<?= $activeNav === $item['key'] ? ' main-nav__link--active' : '' ?>" href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></a>
        <?php endforeach; ?>
      </nav>

      <div class="site-header__actions">
        <a class="btn-primary" href="#">Přihlásit se</a>
        <a class="btn-secondary btn-secondary--outline" href="#">Registrace</a>
      </div>
    </div>

    <button class="site-header__toggle" type="button" aria-expanded="false" aria-controls="site-mobile-menu" aria-label="Otevřít menu">
      <span class="site-header__toggle-lines" aria-hidden="true">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </button>
  </div>
</header>
<div class="site-mobile-menu" id="site-mobile-menu">
  <div class="site-mobile-menu__inner container">
    <nav class="site-mobile-menu__nav" aria-label="Mobilní navigace">
      <?php foreach ($navItems as $item): ?>
        <a class="site-mobile-menu__link<?= $activeNav === $item['key'] ? ' site-mobile-menu__link--active' : '' ?>" href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></a>
      <?php endforeach; ?>
    </nav>

    <div class="site-mobile-menu__actions">
      <a class="btn-primary" href="#">Přihlásit se</a>
      <a class="btn-secondary btn-secondary--outline" href="#">Registrace</a>
    </div>
  </div>
</div>
<div class="site-header__overlay" hidden></div>
