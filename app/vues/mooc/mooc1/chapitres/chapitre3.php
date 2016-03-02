<?php
$idMooc;
$idChap;

 if (isset($_GET['idM']) && isset($_GET['idC'])) {
	$idMooc = $_GET['idM'];
	$idChap = $_GET['idC'];	

	//afficheChapitreExos($idMooc,$idChap,$bdd,0);													
	//echo $idMooc;
}else{
	$valid = 0;
	echo'erreur';
}
?>
<div class="row">
<div class="row">

		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
				<?php
					nomChapitre($idMooc,$bdd,$idChap);
				?>
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
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">


					<!-- Smart Wizard -->
					<h4>Exercices</h4>
					<div id="wizard" class="form_wizard wizard_horizontal">
						<?php
							creationWizardStep($idMooc,$idChap,$bdd);
						?>
					</div>
					<!-- IMPORTANT AFFICHE LES SOLUTIONS -->
					<div id="solucebox"></div>
				</div>
			</div>
		</div>
	</div>
</div>

