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
<div class="row">


		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2> Cours </h2>
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
					<h4><b>Nom prénom</b></h4>
					<div>
						Le nom et le prénom doit être placé en début de CV, plutôt en haut et à gauche ou en haut centré. <br>
						Mettre le nom et le prénom est indispensable, sauf si un CV anonyme est demandé. De toute façon il aura soit la lettre de motivation soit votre mail pour savoir qui vous êtes. <br>
						Evitez de mettre la mention du nom avant le prénom. Le nom mis en capitale surtout pour ceux qui ont un nom qui peut être un prénom ou lorsque vos nom et prénom sont à consonance étrangère méconnue.<br>			
					</div>
					<h4><b>Adresse</b></h4>
					<div>
						Eviter de mettre la ville tout en capitale, peu d'intérêt d'attirer le regard. <br>
						Cette information est indispensable mais moins prioritaire, en dehors de savoir où vous habitez par rapport au lieu de travail. Les premières actions sont traitées par téléphone ou mail sauf parfois pour vous informer (quand ils le font) d'une fin de non recevoir. <br>
					</div>
					<h4><b>Téléphone(s)</b></h4>
					<div>
						(Celui où l'on peut vous joindre, plutôt portable). Attention à votre message en cas d'absence. Pour le recruteur: Evidemment indispensable <br>
					</div>
					<h4><b>Mail(s)</b></h4>
					<div>
						Idem + avec votre prénom et nom. Évitez les pseudos. Utilisez plutôt votre mail d'école. Attention aux providers qui sont souvent spammés (Hotmail …).<br> Pour le recruteur: Evidemment indispensable
					</div>
					<h4><b>Date de naissance et âge</b></h4>
					<div>
						Age entre parenthèses, profitez-en vous êtes jeunes (attention, à rectifier chaque année). Le recruteur contrôle la cohérence entre son besoin et votre parcours.					</div>
					<h4><b>Lieu de naissance (optionnel)</b></h4>
					<div>
						Vous pouvez mettre votre lieu de naissance. Si votre nom à une consonance étrangère et que vous êtes français. Il y a peu d'intérêt à le mettre si votre nom sonne bien Français
					</div>
					<h4><b>Nationalité (optionnel)</b></h4>
					<div>
						Vous pouvez specifier votre nationalité si vous avez double nationalité. Il y a peu d'intérêt si votre nom sonne bien français. 
					</div>
					<h4><b>Réseau social (optionnel)</b></h4>
					<div>
						Si les informations accessibles sont présentées de façons professionnelles. Pensez à mettre régulièrement à jour vos informations. Certains recruteurs (30%) surfent sur les réseaux sociaux en quête d'informations, voir prennent contact avec vous via ces réseaux.<br>
						Réseaux utilisés par les recruteurs : linkedin, viadéo, tweeter, à la rigueur facebook (professionnel), mettre les statistiques.<br>
						Site internet: Si en cohérence avec ce que vous souhaitez mettre en avant.<br>
						Vérifiez qu'il fonctionne bien. Le recruteur fera sûrement un clic dessus.<br>					
					</div>
					<h4><b>Mobilité (optionnel)</b></h4>
					<div>
						Nationale ou internationale si vous en êtes sûr. Information pouvant être utile pour le recruteur
					</div>
					<h4><b>Bilingue (optionnel)</b></h4>
					<div>
						Il faut mettre que si c’est vrai. Spécifier les langues. Plus value évidente. Attention, le recruteur peut entamer le dialogue directement dans la langue que vous maitrisez en dehors du Français
					</div>
					<h4><b>Phrase d’accroche (optionnel)</b></h4>
					<div>
						Elle doit traduire un objectif, une ambition, elle doit être le plus factuelle possible. Elle induit la façon dont sera lu votre cv par la suite. Le recruteur va être influencé. Soit il arrête de lire, soit il va contrôler sa lecture en fonction de la phrase d'accroche. <br>
						Comme votre lettre de motivation ne sera lue qu’après de sévères sélections sur les CV. Ne vous privez pas de préciser sur votre CV vos objectifs. C’est en quelque sorte un préambule de votre lettre d’accompagnement et ce préambule peut pousser le recruteur à analyser d’avantage votre candidature.<br>
 						De plus en plus de cabinets indexent les CV dans divers outils, certains étant de simples index de recherche full-texte et d’autres sont équipés d’analyse sémantique, il vous faut donc utiliser dans votre CV le vocabulaire courant propre à votre secteur d’activité en évitant les acronymes et, si votre parcours professionnel un peu pauvre ne le permet pas, le paragraphe souhait et objectifs, vous donne toutes latitudes pour le faire.<br>
						Les qualificatifs sur son CV ne doivent pas être choisis à la légère. LinkedIn a sorti les 10 mots les plus utilisés par ses membres. Les recruteurs se lassent de ne voir que des candidats créatifs, stratégiques et motivés.<br>					
						Plutôt que de répéter les mêmes buzzwords, nous invitons nos membres à rendre compte de ce qu’ils ont accompli au travers de photos, de présentations ou d’autres exemples afin d’apporter la preuve qu’ils sont effectivement "passionnés", "experts" et "créatifs". »
					</div>
					<h4><b>Photo (optionnel)</b></h4>
					<div>
						Votre photo doit donner envie de vous rencontrer, sourire, netteté, contraste, vêtement professionnel, attitude ouverte, couleurs. (évitez les scans de photo d'identité, les vieilles photos …). Elément fortement sujet à émotion donc à interprétation.<br>
						Concrètement, se mettre en avant sur son CV en ligne commence par présenter une bonne photo. Les profils avec photo ont 14 fois plus de chances d’être consultés. Bien sûr, sourire professionnel et tenue adéquate sont de mise. <br>
						Cependant, si vous avez rencontré des recruteurs par exemple sur un forum ou dans un salon professionnel, elle peut être un moyen pour eux de vous reconnaître. <br>					
					</div>
					<h4><b>A eviter</b></h4>
					<div>
						Sexe: attention risque de discrimination à l'embauche si spécifiée (le prénom indique le sexe en général sinon ce sera la surprise pour le recruteur). Lui faire la surprise lors de l'entretien.<br>
						Situation familiale: Ce n'est plus comme avant, les situations sont nombreuses (célibataire, marié, pacsé, compagnon, divorcé …) et aucune ne traduit votre mobilité réelle. Lui faire la surprise lors de l'entretien					
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2> Exemple </h2>
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
					<div class="col-sm-4 invoice-col">
                     <address>
                           	<strong>Iron Admin, Inc.</strong>
                           	<br>795 Freedom Ave, Suite 600
                           	<br>New York, CA 94107
                           	<br>Phone: 1 (804) 123-9876
                           	<br>Email: ironadmin.com
                        </address>
                    </div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
				<?php
					nomChapitre($idMooc,$bdd,$idChap);
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
							creationWizardStep($idMooc,$idChap,$bdd);
						?>
					</div>
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
</div>

