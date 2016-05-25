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

<script>
		var nbClickMax=5;
        var nbClick=0;
        var scoreGlobal;
    
        function compter()
        {
            nbClick++;
            var nbTentativesrestantes = parseInt(document.getElementById("tentative").innerHTML);
            nbTentativesrestantes=nbTentativesrestantes-1;
            document.getElementById("tentative").innerHTML =nbTentativesrestantes;
            if(nbClick>=nbClickMax)
            {
               // alert('Nombre de clic maximum atteint');
               // 
                $.ajax({
			            url: '../includes/cv_interactif.php',
			            type: 'POST', 
			            data: {
			                scoreGlobal: scoreGlobal, //la solution
			            },
			            success: function(data) {
			                var ndata=data;  //jsondata c'est le callback de wizard.jss
			                //alert (ndata);
			            },
			            error: function(json) {
			                //alert('false');
			                //$('.alert-danger').show();
			            }
			        });

               	//scoreGlobal;
                // On désactive les clics sur les areas
                $("area").each(function() {
                    $(this).attr("onclick","inutile()");
                });
                // On désactive les clics sur l'image
                $("#fauxcv").attr("onclick","inutile()"); 
            }

        }

        function afficheTitle(title){
            alert(title);
        }

        function augmenteScore(title){
            var score = parseInt(document.getElementById("score").innerHTML);
            score = score+20;
            scoreGlobal=score;
            document.getElementById("score").innerHTML =score;
            $("#"+title).attr("onclick","dejaTrouve()");
        }

        function dejaTrouve(){
            alert("Cette erreur à déjà été trouvée");
        }

        function inutile(){

        }


        function diminueScore(){
            var score = parseInt(document.getElementById("score").innerHTML);
            if(score>=20){
                score=score-20;
                scoreGlobal=score;
            }
            document.getElementById("score").innerHTML =score;
        }

</script>

<div class="row">
	<div class="col-md-6 col-sm-12 col-xs-12 ">
		<!-- CONTENU COURS -->
		<div class="animated slideInUp">
			<div class="x_panel">
				<!-- TITRE COURS -->
				<div class="x_title">
					<h2> Chapitre 3 : Projets </h2>
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
								Dans cette section de votre CV, vous pouvez mettre les projets réalisés dans le cadre de vos études ou des projets personnels qui ont un rapport avec votre formation. Si vous n’avez pas beaucoup d’experience professionnelle, il est conseillé de mettre cette partie entre la formation et l’experience professionnelle. En revanche si vous avez plus de 5 ans d’experience en entreprise, cette partie n’est pas très utile. Dans ce cas la il est préferable de developper les projets effectués au sein d’une entreprise dans la description de vos experiences professionnelles.
							</p>
							<p dir="ltr">
								Dans le cas ou vous avez effectué beaucoup de projets durant votre formation, selectionnez les projets que vous voulez mettre en avant par rapport au poste à lequel vous postulez. 
							</p>
							<p dir="ltr">
								Pour chaque projet il faut indiquer le titre, la date, courte description et preciser si c’est un projet d’équipe ou individuel. Pour structurer les informations, il est important d’utiliser les puces pour presénter chaque projet/groupe de projet suivi. 
							</p>
							<br/>
						</div>

						<div class="box1" id="2">
							<ol start="2">
								<li dir="ltr">
									<h2 dir="ltr">
										Titre et Date
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								Tout d’abord, il faut mettre le titre de votre projet et la date. En ce qui concerne l’ordre, vous pouvez les classer soit par date anti-chronologique ou par criteres des projets. Par exemple, si vous avez effectué plusieurs projets informatiques en plusieurs langages, vous pouvez classer vos projets par langages informatiques. 
							</p>
							<p dir="ltr">
								Exemple de la partie “Projets” d’un CV:
								Dans cet exemple il faut faire attention et ne pas oublier de mettre au saut de ligne qui coupe l’intitulé d’un sigle,
								sinon cela rend la lecture difficile.
							</p>
							<p dir="ltr">
								<img class="" src="../mooc/mooc1/chapitres/images/projets.png" width="500px" alt="">
							</p>
							<br/>
						</div>

						<div class="box1" id="3">
							<ol start="3">
								<li dir="ltr">
									<h2 dir="ltr">
										Description (Résultats-Objectifs)
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								Il est important de mettre la description et les objectifs de votre projet et les mots-clés importants. Cela permettra au recruteur de comprendre les compétences que vous avez pu developper durant la réalisation de ce projet et de quoi il s’agit exactement. Par exemple, si vous avez crée un site web et qu’il est disponible en ligne vous pouvez mettre un lien vers ce site.
							</p>
							<p dir="ltr">
								Si votre projet faisait partie d’un concours, il est important de le mettre en avant et de mentionner les résultats, comme votre position finale parmi d’autres projets. 
							</p>
							<br/>
						</div>

						<div class="box1" id="4">
							<ol start="4">
								<li dir="ltr">
									<h2 dir="ltr">
										Projet d’équipe/projet individuel (positions dans l’équipe)
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								 
							</p>
								Pour chaque projet precisez si c’était un projet individuel ou un projet d’équipe. Dans le cas du projet individuel, cela peut montrer que vous savez gérer un projet de A à Z tout seul. Dans le cas d’un projet d’équipe, vous pouvez mettre en valeur le fait que vous savez travailler en groupe, que vous savez diviser le travail du projet en plusieurs tâches entre les membres de l’équipe.
							<br/>
						</div>

						<div class="box1" id="5">
							<ol start="5">
								<li dir="ltr">
									<h2 dir="ltr">
										Récapitulatif du chapitre
									</h2>
								</li>
							</ol>
							<p dir="ltr">
								<ol>
									<li>
										Mettre la partie “Projets” si votre expérience professionnelle est inférieure à 5 ans d’expérience.
									</li>
									<li>
										Si vous avez effectué beaucoup de projets, sélectionner ceux qui peuvent vous mettre en valeur en fonction du poste recherché.
									</li>
									<li>
										Pour chaque projet, indiquer: Date/Titre/Description/Type Projet (individuel ou projet d’équipe)/Résultat
									</li>
									<li>
										Classement par ordre anti chronologique ou par critères. 
									</li>

									<li>
										Dans la description mettez les points clés du projet.
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


		<div class="col-md-12 col-sm-12 col-xs-12 animated slideInUp" >
			<div class="x_panel">
				<div class="x_title">
					<h4> CV Intéractif </h4>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content" style="overflow:auto;" >
					<p style="font-size:14px;"><b> Cliquez sur les erreurs de ce CV pour marquer des points, attention à ne pas cliquer de partout sinon vous en perdrez. Il y a 5 erreurs et vous disposez de 5 clics. A vous de jouer !</b><p>
					<br>
                	<img style="margin:0 auto; display:block;" id="fauxcv" src="../mooc/mooc1/chapitres/images/fauxcv2.png" usemap="#map1" onclick="diminueScore();compter();"> 
    				<map name="map1">

        				<area style="text-decoration:none; cursor:default;" shape="rect" id="area1" coords="28,8,154,146" onclick="augmenteScore(this.id);compter();" />

    					<area style="text-decoration:none; cursor:default;" shape="rect"  id="area2" coords="172,35,375,54" onclick="augmenteScore(this.id);compter();" />

    					<area style="text-decoration:none; cursor:default;" shape="rect"  id="area3" coords="203,183,531,201" onclick="augmenteScore(this.id);compter();" />

    					<area style="text-decoration:none; cursor:default;" shape="rect" id="area4" coords="170,132,334,148" onclick="augmenteScore(this.id);compter();" />

    					<area style="text-decoration:none; cursor:default;" shape="rect"  id="area5" coords="13,552,141,572" onclick="augmenteScore(this.id);compter();" />

    				</map>

    <div>
    	<br>
        <p>Score : <span id="score">0</span></p>
        <p>Tentatives restantes : <span id="tentative">5</span></p>
        
    </div>
    </div>    	
				</div>
			</div>
		</div>
	</div>
</div>

