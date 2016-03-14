<?php
/*
	Chapitre où l'eleve envoie son CV par mail au prof
*/


$idMooc;
$idChap;

if (isset($_GET['idM']) && isset($_GET['idC'])) {
	$idMooc = $_GET['idM'];
	$idChap = $_GET['idC'];	
}else{
	$valid = 0;
	echo'erreur';
}
?>
<div class="row">

		<div class="col-md-6 col-sm-12 col-xs-12 animated slideInUp">
			<div class="x_panel">
				<div class="x_title">
					<h2> Chapitre 4 : Compétences</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
                    	<p dir="ltr">
					    Trop souvent négligées, les compétences sont pourtant fondamentales. Et elles ne se limitent surtout pas aux langues et autres logiciels informatiques.
					</p>
					<p dir="ltr">
					    Les compétences permettent de présenter une synthèse de ce que vous savez faire. Elles donnent un point de vue transversal sur votre carrière : vous
					    insistez sur ce que vous avez fait et appris à faire au cours de vos différents postes et formations. C’est grâce à elles qu’un recruteur peut rapidement
					    déterminer si votre profil correspond à une fiche de poste.
					</p>
					<ul>
					    <li dir="ltr">
					        <p dir="ltr">
					            Les compétences doivent être classées par domaine. Cela facilite leur lecture, prouve votre professionnalisme et votre esprit de synthèse.
					        </p>
					    </li>
					    <li dir="ltr">
					        <p dir="ltr">
					            Elles doivent bien sûr correspondre aux expériences.
					        </p>
					    </li>
					    <li dir="ltr">
					        <p dir="ltr">
					            Il faut se méfier des redites entre les détails des expériences et les compétences : ceux-ci doivent se faire écho, pas se répéter.
					        </p>
					    </li>
					</ul>
					<p>
					    Une fois tous ces éléments bien en main, vous devez vous les réapproprier. En effet, le CV met en scène votre parcours et vos projets pour convaincre les
					    recruteurs de vos qualités. Comme dans toute mise en scène, le choix de l’organisation est fondamental. Indiquer discrètement ou au contraire souligner
					    votre formation, mettre en valeur une expérience plutôt qu’une autre sont autant de choix qui en diront long sur la perception que vous avez de votre
					    propre parcours.
					</p>
                    	
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Exemple</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
	
			</div>
		</div>

</div>

