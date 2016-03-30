<?php
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

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="title_left">
        <?php
			//nomChapitre($idMooc,$bdd,$numChap);
		?>
    </div>
</div>

<div class="row">


	<div class="col-md-2 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2> Cute </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<!-- Cours -->
					<div class="text-center">
						<img class="img-circle" src="../assets/images/catloadcarre.gif" width="150px" alt="">
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-10 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2> Chapitre 2 : Formation </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-sm-12">
                    	<!-- Cours -->
						<p dir="ltr">
						    Vous remontez donc le temps, en commençant par votre expérience la plus récente.
						    <br/>
						    Dans la rubrique dédiée à vos études, certains diplômes n’ont peut-être pas leur place. C’est le cas du Brevet des collèges si vous êtes titulaire d’un
						    Baccalauréat, ou d’une première année de Master si vous possédez déjà le diplôme de Master 2.
						</p>
						<p>
						    En revanche, n’hésitez pas à détailler les projets pertinents développés au cours de cette formation (ateliers de création, réalisations collectives,
						    mémoires, etc).
						</p>
                    </div>
				</div>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
				<h2>Exercices</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<!-- Smart Wizard -->
					
					<div id="wizard" class="form_wizard wizard_horizontal">
						<?php
							creationWizardStep($idMooc,$numChap,$idChap,$bdd);
						?>
					</div>
					<!-- IMPORTANT AFFICHE LES SOLUTIONS -->
					<div id="solucebox"></div>
				</div>
			</div>
		</div>
	
</div>

