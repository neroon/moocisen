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
	//echo'erreur';
}
?>
<div class="row">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Avant propos</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Settings 1</a>
								</li>
								<li><a href="#">Settings 2</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">


			

					<img class="img left" src="../mooc/mooc1/chapitres/images/mooc.png" style="margin: 20px;" width="300px" alt="">
					
      					&nbsp<br>
						<p dir="ltr">
						    L’acronyme MOOC signifie « Massive Open Online Course » que l’on peut traduire par « cours en ligne ouvert et massif ». Il s’agit donc : 
- De cours et non pas de conférences ou de reportages. Ces cours sont d’un niveau universitaire. 
- De cours diffusés sur internet. 
- De cours gratuits et libre d’accès. Aucun prérequis n’est exigé de la part des participants. De plus, l’inscription sur les différentes plateformes de MOOCs est entièrement gratuite. Seule la délivrance de certificats (facultatifs) est payante. Cela ne signifie pas pour autant que le contenu délivré sur ces plateformes soit libre de droit. D’une manière générale, il ne peut être ni réutilisé, ni rediffusé sans le consentement de leurs auteurs. 
- De cours massifs. Le nombre d'inscrits par cours peut varier de quelques milliers à plus de 100'000 participants. Néanmoins, tous les étudiants n’ont pas forcément l’intention de suivre l'enseignement du début jusqu'à la fin, et seule un petite proportion d’étudiants est véritablement active. 
						</p>
						
						<div>
						    <br/>
						</div>


                    
				</div>
			</div>
		</div>
	</div>
</div>

