<?php
$title='CS Godbrange — Nos équipes';
include 'partials/header.php';
$groups=[
    'competition'=>['title'=>'Seniors & Vétérans','subtitle'=>'Pôle compétition','icon'=>'⚽','teams'=>[
        ['badge'=>'SÉNIOR M','age'=>'JOUEUR NÉ DÈS 2010','img'=>'g2_18d2e.png','name'=>'Seniors Masculins','reprise'=>'Vendredi 24 juillet à 19h45','coach'=>'Kévin MAQUET','tel'=>'','horaires'=>'Mardi 19h45–21h15 & Vendredi 19h45–21h15'],
        ['badge'=>'SÉNIOR F','age'=>'JOUEUSE NÉE DÈS 2008','img'=>'accueil-hero-equipe.jpg','name'=>'Seniors Féminines','reprise'=>'Vendredi 31 juillet à 19h00','coach'=>'Nicolas GONTHIER','tel'=>'','horaires'=>'Mercredi 19h00–20h30 & Vendredi 19h00–20h30'],
        ['badge'=>'+35 ANS','age'=>'EXPÉRIENCE & CONVIVIALITÉ','img'=>'g4_18d2e.png','name'=>'Vétérans','reprise'=>'Début septembre 2026','coach'=>'Secrétariat du club','tel'=>'03 82 44 36 87','horaires'=>'Vendredi 19h30–21h00 & Dimanche selon calendrier']
    ]],
    'formation'=>['title'=>'Formation & Préformation','subtitle'=>'U12 – U15','icon'=>'◆','teams'=>[
        ['badge'=>'U14 – U15','age'=>'ENFANT NÉ EN 2012–2013','img'=>'g2_66e86.png','name'=>'U14 – U15','reprise'=>'Mardi 18 août à 18h00','coach'=>'Rémi NOSAL','tel'=>'06.98.75.88.59','horaires'=>'Mardi 18h00–19h30 & Jeudi 18h00–19h30'],
        ['badge'=>'U13 F','age'=>'JOUEUSE NÉE EN 2014–2016','img'=>'g1_74aa3.png','name'=>'U13 Féminines','reprise'=>'Dimanche 23 août à 10h00','coach'=>'Thibaut GAUER','tel'=>'07.86.74.23.08','horaires'=>'Lundi 18h00–19h30 & Mercredi 18h00–19h30'],
        ['badge'=>'U12 – U13','age'=>'ENFANT NÉ EN 2014–2015','img'=>'g1_ac527.png','name'=>'U12 – U13','reprise'=>'Mardi 18 août à 18h00','coach'=>'Rémi NOSAL','tel'=>'06.98.75.88.59','horaires'=>'Mardi 18h00–19h30 & Jeudi 18h00–19h30']
    ]],
    'ecole'=>['title'=>'École de Foot','subtitle'=>'U6 – U11','icon'=>'◇','teams'=>[
        ['badge'=>'U10 – U11','age'=>'ENFANT NÉ EN 2016–2017','img'=>'g2_18d2e.png','name'=>'U10 – U11','reprise'=>'Mardi 18 août à 17h30','coach'=>'Rémi NOSAL','tel'=>'06.98.75.88.59','horaires'=>'Mardi 17h30–19h00 & Vendredi 17h30–19h00'],
        ['badge'=>'U8 – U9','age'=>'ENFANT NÉ EN 2018–2019','img'=>'g2_66e86.png','name'=>'U8 – U9','reprise'=>'Lundi 31 août à 17h30','coach'=>'Rémi NOSAL','tel'=>'06.98.75.88.59','horaires'=>'Lundi 17h30–19h00 & Mercredi 16h30–18h00'],
        ['badge'=>'U6 – U7','age'=>'ENFANT NÉ EN 2020–2021','img'=>'g1_74aa3.png','name'=>'U6 – U7','reprise'=>'Lundi 31 août à 17h30','coach'=>'Rémi NOSAL','tel'=>'06.98.75.88.59','horaires'=>'Lundi 17h30–18h45 & Mercredi 09h30–10h45']
    ]]
];
$teamIndex=0;
?>
<section class="section teams-head"><span class="eyebrow">SAISON 2026–2027 / PÔLE SPORTIF</span><h1>NOS ÉQUIPES & PÔLES SPORTIFS</h1><p>De l’école de football jusqu’aux seniors et vétérans, découvrez l’ensemble de nos effectifs.</p><nav class="team-tabs category-nav" aria-label="Accéder aux catégories d’équipes"><?php foreach($groups as $slug=>$group): ?><a href="#<?=$slug?>"><span><?=$group['icon']?></span><?=$group['title']?><small><?=$group['subtitle']?></small></a><?php endforeach; ?></nav></section>
<section class="section team-list"><?php foreach($groups as $slug=>$group): ?><section class="team-category" id="<?=$slug?>"><header class="team-category-heading"><span><?=$group['icon']?></span><div><small><?=$group['subtitle']?></small><h2><?=$group['title']?></h2></div></header><?php foreach($group['teams'] as $t): ?><article class="team-row"><div class="team-info-card"><div class="team-photo"><span><?=$t['badge']?><small><?=$t['age']?></small></span><img src="assets/images/<?=$t['img']?>" alt="<?=$t['name']?>"></div><div class="team-meta"><p><span>DATE DE REPRISE</span><b><?=$t['reprise']?></b></p><p><span>ENCADREMENT</span><b><?=$t['coach']?></b></p><p class="meta-full"><span>HORAIRES D’ENTRAÎNEMENT</span><b><?=$t['horaires']?></b></p><a class="btn" href="<?=$teamIndex===0?'equipe-seniors.php':'contact.php'?>"><?=$teamIndex===0?'VOIR L’ÉQUIPE FANION →':'CONTACT & INSCRIPTIONS →'?></a></div></div><div class="mini-match"><div class="mini-reprise-header">SAISON 2026 / 2027</div><div class="mini-reprise-card"><span class="mini-reprise-badge">REPRISE OFFICIELLE</span><strong class="mini-reprise-date"><?=$t['reprise']?></strong><div class="mini-reprise-list"><p><b>LIEU</b><span>Stade Municipal</span></p><p><b>RESPONSABLE</b><span><?=$t['coach']?></span></p><?php if(!empty($t['tel'])): ?><p><b>TÉLÉPHONE</b><a href="tel:<?=str_replace(['.',' '],'',$t['tel'])?>"><?=$t['tel']?></a></p><?php endif; ?></div></div></div></article><?php $teamIndex++; endforeach; ?></section><?php endforeach; ?></section>
<a class="back-to-top" href="#" aria-label="Revenir en haut de la page" title="Revenir en haut">↑</a>
<section class="section recruitment"><div class="recruitment-content"><h3>REJOINDRE UN EFFECTIF / SAISON EN COURS</h3><p>INSCRIPTIONS ET LICENCES : RENSEIGNEZ-VOUS DÈS MAINTENANT.</p><a class="btn" href="contact.php">CONTACTER LE SECRÉTARIAT</a></div><img class="recruitment-logo" src="assets/images/g0_db8f1.png" alt="Logo du CS Godbrange"></section>
<?php include 'partials/footer.php'; ?>
