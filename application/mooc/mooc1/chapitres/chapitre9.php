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
					<h2> Chapitre 9 : Autres infos</h2>
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
					    Le recruteur reçoit des centaines de « CV.doc » par jour. Simplifiez-lui la vie avec un « CV-NOM-prenom.doc ».
					</p>
					<ol>
					    <li dir="ltr">
					        <p dir="ltr">
					            Format
					        </p>
					    </li>
					</ol>
					<p dir="ltr">
					    Format CV: Format A4, il est possible de faire d’autres formats. Format portrait (standard), plutôt que paysage. Grammage 90g. Texture standard. Souvent le
					    recruteur est habitué à un mode de lecture et de rangement, tous formats originaux risquent de le géner dans son organisation.
					</p>
					<p dir="ltr">
					    Une idée reçue consiste à dire que le CV doit tenir sur une seule page. Faux. Votre CV la plupart du temps immatériel peut tenir sur plusieurs pages et
					    donc avoir une présentation aérée. N’hésitez pas non plus à développer ce qui vous paraît fondamental dans votre parcours, d’utiliser des couleurs, des
					    polices de caractères différents pour gagner en lisibilité. C’est votre CV. Il est le reflet de votre image. Appropriez-vous le. S’il dégage du caractère
					    le recruteur le sentira. Si vous souhaitez que votre CV soit conforme et très sobre alors c’est que vous êtes conformiste et le recruteur le retiendra
					    seulement si c’est ce qu’il recherche ! En d’autres termes, plus votre CV vous correspond, plus le recruteur sensible à votre CV sera celui qui vous
					    conviendra.
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

