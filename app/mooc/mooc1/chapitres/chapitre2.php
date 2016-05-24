<?php
$idMooc;
$idChap;

if(isset($_GET['idM']) && isset($_GET['idC'])) {
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
	<div class="col-md-6 col-sm-12 col-xs-12 ">
		<!-- CONTENU COURS -->
		<div class="animated slideInUp">
			<div class="x_panel">
				<!-- TITRE COURS -->
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

						<div class="box1" id="1">
							<ol start="1">
								<li dir="ltr">
									<h2 dir="ltr">
										Introduction
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								Il est utile de rédiger la partie formation aux jeunes diplômés et jeunes expérimentés jusqu’à 5 ans d’expérience. Globalement, plus la partie expérience professionnelle se développe, plus la partie formation diminue. 
							</p>
							<p dir="ltr">
								Pour chaque formation il faut indiquer: l’intitulé exact du diplôme, le nom et le lieu de l’école, les années de formation. Pour structurer les informations, n’hésitez pas à utiliser des puces pour présenter chacune des formations suivies.
							</p>
							<br/>
						</div>

						<div class="box1" id="2">
							<ol start="2">
								<li dir="ltr">
									<h2 dir="ltr">
										Titre
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								En tant que titre il faut mettre l’intitulé exact de votre diplôme. Faites attention, car certains diplômes n’ont peut-être pas leur place. C’est le cas du Brevet des collèges si vous êtes titulaire d’un Baccalauréat, ou d’une première année de Master si vous possédez déjà le diplôme de Master 2.
							</p>
							<p dir="ltr">
								En revanche, n’hésitez pas à détailler les projets pertinents développés au cours de cette formation. Vous pouvez indiquer les spécialités relatives aux diplômes que vous aurez pu acquérir. Lorsque vous faites les études en alternance, vous pouvez le spécifier. 
							</p>
							<br/>
						</div>

						<div class="box1" id="3">
							<ol start="3">
								<li dir="ltr">
									<h2 dir="ltr">
										Dates
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								Vous remontez donc le temps, en commençant par votre formation la plus récente. La logique de présentation est donc anti chronologique.
							</p>
							<ol start="4">
								<li dir="ltr">
									<h2 dir="ltr">
										Sigles
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								Lorsqu’il s’agit de sigles communément employés (BTS, DUT, IEP, etc.), il n’est pas utile de les expliciter, au contraire, cela vous fera gagner de la place. En revanche, pour tous les autres, il est important de les écrire en toutes lettres, qu’il s’agisse du nom de votre école, de votre diplôme, etc.
							</p>
							<br/>
						</div>

						<div class="box1" id="4">
							<ol start="5">
								<li dir="ltr">
									<h2 dir="ltr">
										Lieu
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								Précisez bien les noms et villes des établissements fréquentés. 
							</p>
							<p dir="ltr">
								Suivant l’établissement, vous serez classé différemment par les recruteurs et les grilles de salaire à l’embauche pour le même poste ne sont pas les mêmes. 
							</p>
							<p dir="ltr">
								Si vous avez fait des études à l’étranger, pensez à préciser le nom du pays. 
							</p>

							<ol start="6">
								<li dir="ltr">
									<h2 dir="ltr">
										Spécialités et gratifications
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								C’est le moment de préciser les mentions obtenus ou les félicitations du jury décroché à votre soutenance de mémoire ! Vos gratifications scolaires marquent votre capacité à vous couler dans un système, à aller au bout d’un projet. Le cas échéant, elles sont le garant de vos qualités d’abstraction, de mémoire, d’analyse et de synthèse.
							</p>
							<p dir="ltr">
								Si lors de votre parcours vous avez fait des spécialisations dans certains domaines, n’hésitez pas à le mentionner. 
							</p>
							<br/>
						</div>

						<div class="box1" id="5">
							<ol start="7">
								<li dir="ltr">
									<h2 dir="ltr">
										Exemple
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								Exemple de la partie “Formation” d’un CV:
								Dans cet exemple il faut faire attention et ne pas oublier de mettre au saut de ligne qui coupe l’intitulé d’un sigle,
								sinon cela rend la lecture difficile.
							</p>
							<p dir="ltr">
								<img class="" src="../mooc/mooc1/chapitres/images/formation.png" width="500px" alt="">
							</p>
							<br/>
						</div>

						<div class="box1" id="6">
							<ol start="8">
								<li dir="ltr">
									<h2 dir="ltr">
										Récapitulatif du chapitre
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								<ol>
									<li>
										La partie formation est à mettre pour les jeunes diplômes et les personnes qui ont jusqu’à 15 ans d’expérience. 
									</li>
									<li>
										Pour chaque ligne de formation, il faut : date (anti chronologiques), titre, nom, lieu.
									</li>
									<li>
										Evitez de mettre les diplômes qui n’ont pas leur place (BAC si vous avez Master, Master 1 si vous avez le diplôme de Master 2)
									</li>
									<li>
										N’hésitez pas à mettre les spécialités relatives à votre formation.
									</li>
									<li>
										Employez que des sigles communément employés.
									</li>
									<li>
										Mettez les mentions que vous avez obtenues pour vos diplômes.. 
									</li>
								</ol>
							</p>
							
							<br/>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- VIDEO -->
		<div class="row">
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
                         <!--<iframe src="https://www.youtube.com/embed/lX7kYDRIZO4" frameborder="0" ></iframe>-->
                         <iframe width="560" height="315" src="https://www.youtube.com/embed/_r7bht-LgvU" frameborder="0" allowfullscreen></iframe>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- EXERCICES -->
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
				<!-- IMPORTANT POUR LES REPONSE AU QCM -->
				<?php 
					/*if(isset($_GET['idM']) && isset($_GET['idC'])) {
						//$idMooc = $_GET['idM'];
						echo '<div id="'.$_GET['idM'].'"></div>';
						$idChap = $_GET['idC'];	
					}*/
				?>
			</div>
		</div>
	</div>
</div>