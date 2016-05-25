<?php
$idMooc;
$idChap;

if(isset($_GET['idM']) && isset($_GET['idC'])) {
	$idMooc = $_GET['idM'];
	$idChap = $_GET['idC'];	
}else{
	$valid = 0;
	echo'erreur';
}
?>
<div class="row">
	<div class="col-md-6 col-sm-12 col-xs-12 ">
		<!-- CONTENU COURS -->
		<div class="animated slideInUp">
			<div class="x_panel">
				<!-- TITRE COURS -->
				<div class="x_title">
					<!-- ///////////////////////////////////////
					/////////METTRE Nom chapitre ICI////////////
					////////////////////////////////////////////-->
					<h2> </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<!-- COURS -->
				<div class="x_content">
					<div class="my_step_box">
						<div class='row'>
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="btn-group" role="group" aria-label="...">
								  <button type="button" class="btn btn-default myBtnBack"><span class="glyphicon glyphicon-chevron-left"></span> Retour</button>
								  <button type="button" class="btn btn-default myBtnAll"><span class="glyphicon glyphicon-eye-open"></span> </button>
								  <button type="button" class="btn btn-default myBtnNext">Suivant<span class="glyphicon glyphicon-chevron-right"></span></button>
								 </div>
							</div>
							<div class="col-md-3"></div>
						</div>
						<!-- 
						////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	    				/////////////////////////////////// DEBUT   CONTENU   COURS ////////////////////////////////////////////////////////
	    				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		 				-->
		 				<!-- Debut box numéro 1 -->
						<div class="box1" id="1">
							<ol start="1">
								<li dir="ltr">
									<h2 dir="ltr">
									</h2>
								</li>
							</ol>
							<p dir="ltr">
							</p>
						
							<br/>
						</div>
						<!-- Fin box numéro 1 -->
						<!-- 
						////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	    				/////////////////////////////////// FIN   CONTENU   COURS //////////////////////////////////////////////////////////
	    				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		 				-->
						<br/>
					</div>
						
					</div>
				</div>
			</div>
		

		<!-- 
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	    /////////////////////////////////////////////////  DEBUT     VIDEO /////////////////////////////////////////////////
	    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		 -->
		
			<div class="col-md-12 col-sm-12 col-xs-12 animated slideInUp">
				<div class="x_panel">
					<div class="x_title">
						<h2> Vidéo </h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="videocontainer lg6"> 
						<!-- METTRE ICI LE LIEN DE LA VIDEO -->
                         <iframe src=" " frameborder="0" ></iframe>
                        </div>
					</div>
				</div>
			</div>
		</div>
	<!-- 
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	    /////////////////////////////////////////////////  FIN     VIDEO ///////////////////////////////////////////////////
	    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		 -->

	<!-- 
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////  DEBUT       EXERCICES ////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div class="col-md-6 col-sm-12 col-xs-12 animated slideInRight">
		<div class="x_panel">
			<div class="x_title">
			<?php
				nomChapitre($idMooc,$bdd,$numChap);
			?>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">


				<!-- Smart Wizard -->
				<h3>Exercices</h3>
				<div id="wizard" class="form_wizard wizard_horizontal">
					<?php
						creationWizardStep($idMooc,$numChap,$idChap,$bdd);
					?>
				</div>
				<!-- IMPORTANT AFFICHE LES INDICE -->
				<div id="indicebox"></div>
				<!-- IMPORTANT AFFICHE LES SOLUTIONS -->
				<div id="solucebox"></div>
			</div>
		</div>
	</div>
	<!-- 
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////  FIN    EXERCICES  ////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
</div>