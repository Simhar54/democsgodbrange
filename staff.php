<?php 
$title = 'CS Godbrange — Staff & dirigeants'; 
include 'partials/header.php'; 

$leaders = [
    ['g3_ff9fd.png', 'BRICE SUJKOWSKI', 'PRÉSIDENT DU CLUB'],
    ['g3_fd72a.png', 'JÉRÔME BERNARDI', 'VICE-PRÉSIDENT']
]; 

$office = [
    ['g3_e7544.png', 'CHRISTIAN GIACOMINI', 'Trésorier Principal · Finances'],
    ['g3_4c3d3.png', 'FRANCIS SUJKOWSKI', 'Trésorier Adjoint · Com & Partenaires'],
    ['g3_372cd.png', 'DENIS REBOIS', 'Secrétaire Sportif'],
    ['g3_2de45.png', 'VIRGINIE SOLIDA', 'Secrétaire Adjointe · Événementiel'],
    ['g3_ddd7b.png', 'JEAN-LOUIS COTRELLE', 'Secrétaire Adjoint · Arbitrage'],
    ['g3_dca41.png', 'JENNIFER PETTELOT', 'Équipements & Packages'],
    ['g3_fbd7f.png', 'FRED THILL', 'Arbitrage, Éthique & Discipline'],
    ['g3_e35e4.png', 'STÉPHANE DEMOLE', 'Gestion des Stages'],
    ['g3_45382.png', 'MANUE IMPÉRIALE', 'Tombola & Calendrier'],
    ['g3_c8a8e.png', 'AXEL BAUDIES', 'Responsable Intendance']
]; 

$coaches = [
    ['g3_e35e4.png', 'KÉVIN MAQUET', 'Entraîneur Seniors A (R3)'],
    ['g3_ddd7b.png', 'RÉMI NOSAL', 'Adjoint Seniors · U14–U15 & Coord. Garçons'],
    ['g3_fbd7f.png', 'THIBAUT GAUER', 'Entraîneur Seniors B (D2) · U16 F & Coord. Filles'],
    ['g3_372cd.png', 'NICOLAS GONTHIER', 'Entraîneur Principal Séniors F'],
    ['g3_d8179.png', 'VINCENZO BASSO', 'Éducateur Principal U12–U13 (D2)'],
    ['g3_ff9fd.png', 'BRICE SUJKOWSKI', 'Éducateur Principal U10–U11'],
    ['g3_c8a8e.png', 'AXEL BAUDIES', 'Éducateur Principal U8–U9'],
    ['g3_fd72a.png', 'ISSAM', 'Éducateur Principal U6–U7'],
    ['g3_e7544.png', 'JOE', 'Éducateur Principal U18 F'],
    ['g3_4c3d3.png', 'VINCENT LAMAGRA', 'Éducateur Principal U13 F'],
    ['g3_fbd7f.png', 'JULIEN LAGAUCHE', 'Éducateur Adjoint U13 F & U18 F'],
    ['g3_e35e4.png', 'JONATHAN', 'Entraîneur Gardiens Seniors'],
    ['g3_372cd.png', 'TIMÉO', 'Gardiens Jeunes & Adjoint U10–U11']
]; 

function people($list){
    foreach($list as $p){
        echo '<article><img src="assets/images/'.$p[0].'" alt="'.$p[1].'"><b>'.$p[1].'</b><small>'.$p[2].'</small></article>';
    }
} 
?>
<section class="staff-hero"><span class="eyebrow">STRUCTURE DU CLUB</span><h1>LE STAFF DU CLUB</h1><p>L’ensemble des dirigeants, éducateurs, membres du bureau et bénévoles au service du C.S. Godbrange.</p></section>
<section class="staff-section">
    <div class="section-heading"><h2>LE BUREAU DU CLUB</h2><span>DIRECTION, GOUVERNANCE & COMMISSIONS</span></div>
    <div class="people leaders" style="margin-bottom: 24px;"><?php people($leaders); ?></div>
    <div class="people office"><?php people($office); ?></div>
</section>
<section class="staff-section alt"><div class="section-heading"><h2>LES ENTRAÎNEURS</h2><span>ENCADREMENT SPORTIF</span></div><div class="people coaches"><?php people($coaches); ?></div></section>
<section class="staff-section"><div class="section-heading"><h2>LES BÉNÉVOLES</h2><span>LE CŒUR DU CLUB</span></div><div class="volunteers"><img src="assets/images/staff-benevoles.jpg" alt="Joueurs, familles et bénévoles du CS Godbrange réunis sur le terrain"><div><span class="eyebrow">ENGAGEMENT & DÉVOUEMENT</span><h3>MERCI À NOS BÉNÉVOLES</h3><p>Buvette, traçage des terrains, organisation des matchs et accompagnement des jeunes : sans l’engagement inconditionnel de nos bénévoles, le C.S. Godbrange ne pourrait pas vivre.</p></div></div></section>
<?php include 'partials/footer.php'; ?>

