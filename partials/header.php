<?php
$current = basename($_SERVER['PHP_SELF']);
function active(string $page): string { global $current; return $current === $page ? 'active' : ''; }
?>
<!doctype html><html lang="fr"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?= htmlspecialchars($title ?? 'CS Godbrange') ?></title><link rel="stylesheet" href="assets/css/style.css?v=2"></head>
<body><header class="site-header"><a class="brand" href="index.php"><img src="assets/images/g0_db8f1.png" alt="Blason CS Godbrange"><span><b>C.S. GODBRANGE</b><small>FOOTBALL CLUB</small></span></a><button class="menu-toggle" aria-label="Ouvrir le menu">☰</button><nav>
<a class="<?=active('index.php')?>" href="index.php">ACCUEIL</a><a class="<?=active('club.php')?>" href="club.php">QUI SOMMES-NOUS</a><a class="<?=active('equipes.php')?>" href="equipes.php">ÉQUIPES</a><a class="<?=active('actualites.php')?>" href="actualites.php">ACTUALITÉS</a><a class="<?=active('staff.php')?>" href="staff.php">STAFF</a><a class="<?=active('partenaires.php')?>" href="partenaires.php">PARTENAIRES</a><a class="<?=active('contact.php')?>" href="contact.php">CONTACT</a></nav></header><main>
