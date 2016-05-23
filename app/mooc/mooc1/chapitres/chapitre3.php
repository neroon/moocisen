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
    
        function compter()
        {
            nbClick++;
            var nbTentativesrestantes = parseInt(document.getElementById("tentative").innerHTML);
            nbTentativesrestantes=nbTentativesrestantes-1;
            document.getElementById("tentative").innerHTML =nbTentativesrestantes;
            if(nbClick>=nbClickMax)
            {
                alert('Nombre de clic maximum atteint');
                // On désactive les clics sur les areas
                $( "area" ).each(function() {
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
            }
            document.getElementById("score").innerHTML =score;
        }

</script>

<div class="row">
<div class="row">

	<div class="col-md-6 col-sm-12 col-xs-12 animated slideInUp">
			<div class="x_panel">
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
				<div class="x_content">
                    	<!-- Cours -->
                    	
				</div>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
				<?php
					//nomChapitre($idMooc,$bdd,$numChap);
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
					<h4>Exercices</h4>
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
					<p> Cliquez sur les erreurs de ce CV pour marquer des points, attention à ne pas cliquer de partout sinon vous en perdrez.<br> Il y a 5 erreurs et vous disposez de 5 clics. A vous de jouer !<p>
					<br>
                	<img  style="text-align:center;" id="fauxcv" src="../mooc/mooc1/chapitres/images/fauxcv2.png" usemap="#map1" onclick="diminueScore();compter();"> 
    				<map name="map1">

        				<area style="text-decoration:none; cursor:default;" shape="rect" coords="27,15,153,149" onclick="augmenteScore(this.id);compter();" />

    					<area style="text-decoration:none; cursor:default;" shape="rect" coords="172,39,374,57" onclick="augmenteScore(this.id);compter();" />

    					<area style="text-decoration:none; cursor:default;" shape="rect" coords="172,137,337,152" onclick="augmenteScore(this.id);compter();" />

    					<area style="text-decoration:none; cursor:default;" shape="rect" coords="18,560,135,575" onclick="augmenteScore(this.id);compter();" />

    					<area style="text-decoration:none; cursor:default;" shape="rect" coords="207,189,523,203" onclick="augmenteScore(this.id);compter();" />

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

