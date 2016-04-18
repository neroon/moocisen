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
					<h2> Chapitre 6 : Expérience professionnelle</h2>
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
				    En clair, préciser la fonction principale (votre métier ou le poste que vous souhaitez occuper) de manière bien visible. Cette information remplacera
				    avantageusement une éventuelle mention »Curriculum Vitae ». Par ailleurs, vous dire qu’en lisant les diplômes et l’ expérience professionnelle le recruteur
				    pourra y comprendre ce qu’il souhaite est une grosse erreur. Votre CV doit être très précis et ne laisser aucun doute sur la nature de votre profil car le
				    recruteur cherche à être rassuré.
				</p>
				<p dir="ltr">
				    <strong id="docs-internal-guid-6f124f1b-c8ff-90eb-e200-f32594a02d16">
				        <br/>
				    </strong>
				</p>
				<p dir="ltr">
				    Les expériences sont le cœur du CV. Il faut donc les mettre en valeur.
				</p>
				<p dir="ltr">
				    Les informations de bases à faire apparaître sont les suivantes :
				</p>
				<ul>
				    <li dir="ltr">
				        <p dir="ltr">
				            dates de l’expérience (bien sûr, les expériences sont présentées dans un ordre anté-chronologique, c’est-à-dire de la plus récente à la plus
				            ancienne) ;
				        </p>
				    </li>
				    <li dir="ltr">
				        <p dir="ltr">
				            intitulé du poste (à éventuellement reformuler si l’intitulé interne n’est pas clair. Dans ce cas, il faut bien sûr choisir un nom de poste
				            strictement équivalent) ;
				        </p>
				    </li>
				    <li dir="ltr">
				        <p dir="ltr">
				            nom de l’entreprise ;
				        </p>
				    </li>
				    <li dir="ltr">
				        <p dir="ltr">
				            ville, en précisant si nécessaire le pays ;
				        </p>
				    </li>
				    <li dir="ltr">
				        <p dir="ltr">
				            type de contrat (facultatif).
				        </p>
				    </li>
				</ul>
				<p dir="ltr">
				    Mais c’est la description du poste qui peut faire la différence. Détaillez entre deux et quatre missions par poste. Toutefois, la quantité d’informations
				    est subordonnée à la durée de l’expérience et à l’importance que vous souhaitez lui donner.
				</p>
				<div>
				    <br/>
				</div>
                    
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

