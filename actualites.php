<?php
$title='CS Godbrange — Actualités';
$articles=[
 ['matchs','g2_66e86.png','CHAMPIONNAT · SENIORS A','VICTOIRE DÉCISIVE 3-1 DES SENIORS A À DOMICILE CONTRE LE FC BASSIN','Un match intense maîtrisé par nos joueurs, avec une grande solidarité et trois buts qui confirment la dynamique du groupe.','08 OCT. 2024'],
 ['club','g1_ac527.png','VIE DU CLUB','GRANDE SOIRÉE DES BÉNÉVOLES ET LOTO ANNUEL DU CS GODBRANGE LE 16 NOVEMBRE','Le club donne rendez-vous à tous ses membres, familles et partenaires pour une grande soirée conviviale.','02 OCT. 2024'],
 ['communiques','g0_18d2e.png','COMMUNIQUÉ CLUB','HORAIRES D’ENTRAÎNEMENT DE LA TOUSSAINT ET PERMANENCES LICENCES','Retrouvez les horaires adaptés pendant les vacances ainsi que les créneaux du secrétariat pour les licences.','25 SEPT. 2024'],
 ['matchs','g2_18d2e.png','MATCHS & RÉSULTATS','LE PROGRAMME COMPLET DU WEEK-END','Toutes les rencontres des équipes seniors, jeunes et vétérans, à domicile comme à l’extérieur.','20 SEPT. 2024']
];
include 'partials/header.php'; ?>
<section class="news-intro"><div><span class="eyebrow">EN FIL DES ÉVÉNEMENTS</span><h1>ACTUALITÉS</h1><p>Retrouvez les dernières informations, comptes-rendus de match, événements et annonces officielles du C.S. Godbrange.</p></div></section>
<section class="section news-page"><div class="article-list"><?php foreach($articles as $i=>$a): ?><article class="article-card <?=$i===0?'featured':''?> <?=$i===2?'compact-image':''?>"><div class="article-image"><img src="assets/images/<?=$a[1]?>" alt="<?=$a[3]?>"><?php if($i===0): ?><span>À LA UNE</span><?php endif; ?></div><div class="article-body"><div class="article-meta"><b><?=$a[2]?></b><time><?=$a[5]?></time></div><h2><?=$a[3]?></h2><p><?=$a[4]?></p><div class="article-actions"><a class="btn" href="<?=$i===0?'article.php':'#'?>">LIRE LA SUITE →</a></div></div></article><?php endforeach; ?></div>
<nav class="pagination" aria-label="Pagination"><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">SUIVANT →</a></nav></section>
<?php include 'partials/footer.php'; ?>
