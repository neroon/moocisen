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


		<div class="col-md-6 col-sm-12 col-xs-12 animated slideInUp">
			<div class="x_panel">
				<div class="x_title">
					<h2> Cours </h2>
					
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="my_step_box">
						<!-- Cours -->
						<div class='row'>
							<div class="col-md-3"></div>
							<div class="col-md-3"></div>
						</div>
						<div class="box1" id="1">
							
							<p dir="ltr">
							Structure de découpage du projet (SDP) / Work Breakdown Structure (WBS). Décomposition
hiérarchique du contenu total du projet, qui définit le travail que l'équipe de projet doit réaliser pour
atteindre les objectifs du projet et produire les livrables requis.

							</p>
							<p dir="ltr">
								Référence de base du contenu [donnée de sortie] / Scope baseline [output]. Version approuvée
d'un énoncé du contenu, de la structure de découpage du projet et de son dictionnaire de la SDP
associé, qui ne peut être modifiée que par des procédures formelles de maîtrise des modifications
et qui est utilisée comme base de comparaison.

							</p>
							
						</div>

					</div>

					<div class="box1" id="2">

						
						
						
							En ce qui concerne la mise en forme, il vaut mieux éviter de mettre la ville tout en capitale, peu d'intérêt d'attirer le regard.
						</p>
						<br/>

					</div>

					<div class="box1" id="3">

						<ol start="3">
							<li dir="ltr">
								<h2 dir="ltr">
									Téléphone(s)
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							En ce qui concerne le numéro du téléphone, il faut mettre le numéro de téléphone où l’on peut vous joindre facilement, par exemple, le numéro de téléphone
							portable. Faites attention à votre message en cas d’absence. Pensez à mettre (+33) si vous postulez à l’étranger.
						</p>
						<br/>
						<p dir="ltr">
							Si vous mettez deux numéros de téléphone ou plus sur votre CV, il est conseillé de placer le principal en premier. Par contre il est fort probable qu’en
							cas de non réponse, le recruteur risque de passer directement au second numéro au lieu de laisser un message sur votre répondeur.
						</p>
						<br/>
						<p dir="ltr">
							Il est important de mettre au moins un numéro de téléphone, car il y a beaucoup de chances que le récruteur veuille vous contacter par téléphone.
						</p>
						<br/>

					</div>

					<div class="box1" id="4">

						<ol start="4">
							<li dir="ltr">
								<h2 dir="ltr">
									Mail(s)
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							Il faut avoir une adresse mail professionnelle, c’est à dire une adresse de type: <a href="mailto:nom.prenom@mail.com">nom.prenom@mail.com</a>. Si vous
							êtes étudiant, pensez à utiliser l’adresse mail de votre école.
						</p>
						<p dir="ltr">
							Il vaut mieux éviter les pseudos et les adresses mails de type: «stardu62@yahoo.com » ou « laptiteloulou@gmail.com » qui feront au mieux sourire, au pire
							fuir le recruteur. Votre professionnalisme risque de prendre un coup d’entrée de jeu. Faites attention aux providers qui sont souvent spammés (Hotmail ou
							Yahoo par exemple).
						</p>
						<br/>

					</div>

					<div class="box1" id="5">

						<ol start="5">
							<li dir="ltr">
								<h2 dir="ltr">
									Date de naissance et âge
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							La date de naissance est conseillé à mettre sous la forme jj/mm/aaaa, vous pouvez mettre votre âge entre parentèses, attention à rectifier chaque année.
						</p>
						<br/>
						<p dir="ltr">
							Il est inutile de mentir sur votre âge, car il peut être facilement évalué, grâce aux dates d’obtention de vos diplômes.
						</p>
						<br/>

					</div>

					<div class="box1" id="6">

						<ol start="6">
							<li dir="ltr">
								<h2 dir="ltr">
									Lieu de naissance(optionnel)
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							Vous pouvez mettre votre lieu de naissance. Si votre nom à une consonance étrangère et que vous êtes français. Il y a peu d'intérêt à le mettre si votre
							nom sonne bien Français.
						</p>
						<p dir="ltr">
							C’est peut-être une indication intéressante pour le recruteur, notamment si elle témoigne d’une mobilité géographique internationale et – surtout – de la
							parfaite connaissance d’une langue
						</p>
						<ol start="7">
							<li dir="ltr">
								<h2 dir="ltr">
									Nationalité (optionnel)
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							Vous pouvez specifier votre nationalité si vous avez double nationalité. Il y a peu d'intérêt si votre nom sonne bien français.
						</p>
						<p dir="ltr">
							Oui, si vous êtes étranger, ou si votre nom prête à confusion (si vous avez un nom aux résonances étrangères, tout en étant de nationalité française, par
							exemple).
						</p>
						<ol start="8">
							<li dir="ltr">
								<h2 dir="ltr">
									Réseau social (optionnel)
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							si les informations accessibles sont présentées de façons professionnelles. Pensez à mettre régulièrement à jour vos informations. Certains recruteurs
							(30%) surfent sur les réseaux sociaux en quête d'informations, voir prennent contact avec vous via ces réseaux.
						</p>
						<p dir="ltr">
							réseaux utilisés par les recruteurs : linkedin, viadéo, tweeter, à la rigueur facebook (professionnel), mettre les statistiques.
						</p>
						<p dir="ltr">
							Site internet: Si en cohérence avec ce que vous souhaitez mettre en avant. Vérifiez qu'il fonctionne bien. Le recruteur fera sûrement un clic dessus.
						</p>
						<p dir="ltr">
							Un lien vers son profil sur un réseau social ?
						</p>
						<p dir="ltr">
							Il est judicieux de mentionner un lien vers sa page sur un réseau social si son contenu est à caractère strictement professionnel. Selon Dan Guez : « les
							réseaux sociaux professionnels nous apportent un éclairage sur les relations et les contacts du candidat ». Ils ont d’ailleurs la cote parmi les
							recruteurs. « Viadeo est beaucoup utilisé dans les métiers de la création, d’Internet et de la communication, alors que les professionnels de l’industrie
							ont davantage recours à LinkedIn », précise Claire Romanet. Et les liens vers son compte Twitter ou sa page Facebook ? Là encore, ils peuvent apparaître
							sur un CV à condition que leur contenu ne versent pas dans le perso.
						</p>
						<p dir="ltr">
							Une référence immédiatement vérifiable
						</p>
						<p dir="ltr">
							Le book d’un créatif, la galerie photo d’un photographe, les sites créés par un chef de projet web… Les expériences et réalisations professionnelles
							peuvent être mises en relief grâce aux liens hypertextes. « Il s’agit là d’une démonstration par l’exemple, d’une référence immédiatement vérifiable qui
							apporte une réelle valeur ajoutée à la candidature », explique Claire Romanet, fondatrice du cabinet Elaee.
						</p>
						<p dir="ltr">
							Cet avis, bon nombre de recruteurs le partagent. En revanche, ils sont moins unanimes en ce qui concerne les liens renvoyant aux sites des anciens
							employeurs. Selon Dan Guez, « le CV n’a pas vocation à faire la promo des entreprises pour lesquelles on a travaillé. » Pour Claire Romanet, ces liens
							peuvent cependant apporter un complément d’information intéressant dans un secteur où il est difficile de connaître tous les acteurs.
						</p>
						<p dir="ltr">
							Et qu’en est-il pour les liens renvoyant aux formations suivies ? Jugés inutiles par Claire Romanet, Dan Guez estime qu’« ils peuvent être intéressants
							pour un étudiant en recherche de stage ou de contrat en alternance ».
						</p>
						<p dir="ltr">
							Attention à votre e-réputation !
						</p>
						<p dir="ltr">
							Quels que soient les liens mentionnés, tous doivent faire l’objet d’une scrupuleuse attention. Chacun d’entre eux se doit d’apporter une réelle valeur
							ajoutée au CV et non le pénaliser. Un lien non valide, un blog d’humeur politique, un profil avec des commentaires acerbes ne feront que porter préjudice à
							la candidature. « Le candidat doit s’assurer qu’aucun lien mentionné ne porte atteinte à sa e-réputation », conseille ainsi Claire Romanet.
						</p>
						<p dir="ltr">
							Méfiance donc avec les blogs et les sites personnels, certains peuvent agrémenter la rubrique « divers » du CV mais à condition d’apporter une plus-value
							et de ne pas être trop personnel. « Le renvoi vers un blog tenu durant un tour du monde me fournira des éléments intéressants concernant la patience, la
							méticulosité, la maîtrise d’Internet du candidat », illustre Dan Guez.
						</p>
						<p dir="ltr">
							Outil intéressant pour apporter la démonstration concrète de ses réalisations, le lien hypertexte doit être manié avec précaution et parcimonie. Car « trop
							de liens tuent le lien », tranche Claire Romanet.
						</p>
						<br/>

					</div>

					<div class="box1" id="7">

						<ol start="9">
							<li dir="ltr">
								<h2 dir="ltr">
									Mobilité (optionnel)
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							Nationale ou internationale si vous en êtes sûr. Information pouvant être utile pour le recruteur
						</p>
						<ol start="10">
							<li dir="ltr">
								<h2 dir="ltr">
									Bilingue (optionnel)
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							Il faut mettre que si c’est vrai. Spécifier les langues. Plus value évidente. Attention, le recruteur peut entamer le dialogue directement dans la langue
							que vous maitrisez en dehors du Français
						</p>
						<ol start="11">
							<li dir="ltr">
								<h2 dir="ltr">
									Phrase d’accroche (optionnel)
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							Elle doit traduire un objectif, une ambition, elle doit être le plus factuelle possible. Elle induit la façon dont sera lu votre cv par la suite. Le
							recruteur va être influencé. Soit il arrête de lire, soit il va contrôler sa lecture en fonction de la phrase d'accroche
						</p>
						<p dir="ltr">
							Comme votre lettre de motivation ne sera lue qu’après de sévères sélections sur les CV. Ne vous privez pas de préciser sur votre CV vos objectifs. C’est en
							quelque sorte un préambule de votre lettre d’accompagnement et ce préambule peut pousser le recruteur à analyser d’avantage votre candidature. De plus en
							plus de cabinets indexent les CV dans divers outils, certains étant de simples index de recherche full-texte et d’autres sont équipés d’analyse sémantique,
							il vous faut donc utiliser dans votre CV le vocabulaire courant propre à votre secteur d’activité en évitant les acronymes et, si votre parcours
							professionnel un peu pauvre ne le permet pas, le paragraphe souhait et objectifs, vous donne toutes latitudes pour le faire.
						</p>
						<p dir="ltr">
							Les qualificatifs sur son CV ne doivent pas être choisis à la légère. LinkedIn a sorti les 10 mots les plus utilisés par ses membres. Les recruteurs se
							lassent de ne voir que des candidats créatifs, stratégiques et motivés.
							<img
							src="https://lh4.googleusercontent.com/4wTBry7_9wSQ-yryybV4vaFaf1EF52MVkh_lttjnkEeyjHQWUD6rbdAY3RJg79nYBTFHSMryb0LGSRpQFP4chieqczRlkcD5pOdSnQjdxPruVTaqjvoLb31c59xcE4t5ZL7I66pk"
							width="472"
							height="301"
							/>
						</p>
						<br/>
						<p dir="ltr">
							Plutôt que de répéter les mêmes buzzwords, nous invitons nos membres à rendre compte de ce qu’ils ont accompli au travers de photos, de présentations ou
							d’autres exemples afin d’apporter la preuve qu’ils sont effectivement "passionnés", "experts" et "créatifs". »
						</p>
						<br/>

					</div>

					<div class="box1" id="8">

						<ol start="12">
							<li dir="ltr">
								<h2 dir="ltr">
									Photo (optionnel)
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							Votre photo doit donner envie de vous rencontrer, sourire, netteté, contraste, vêtement professionnel, attitude ouverte, couleurs. (évitez les scans de
							photo d'identité, les vieilles photos …). Elément fortement sujet à émotion donc à interprétation. Mieux vaut ne pas afficher de photo du tout que
							d’insérer un portrait livide, décalé, voir raté sur votre CV.
						</p>
						<p dir="ltr">
							Concrètement, se mettre en avant sur son CV en ligne commence par présenter une bonne photo. Les profils avec photo ont 14 fois plus de chances d’être
							consultés. Bien sûr, sourire professionnel et tenue adéquate sont de mise.
						</p>
						<p dir="ltr">
							Cependant, si vous avez rencontré des recruteurs par exemple sur un forum ou dans un salon professionnel, elle peut être un moyen pour eux de vous
							reconnaître.
						</p>
						<p dir="ltr">
							La photo n’est pas obligatoire dans un CV, surtout si elle ne vous met pas en valeur ou manque de professionnalisme. Evitez les photos de soirées, de
							vacances ou de famille, qui manquent de pertinence et de maturité.
						</p>
						<p dir="ltr">
							Préférez des photos dans des contextes professionnels. Une photo en décolleté est également à proscrire, miser sur l’atout physique dans une candidature
							est une faute de goût et révèle un manque flagrant d’arguments professionnels.
						</p>
						<br/>

					</div>

					<div class="box1" id="9">

						<ol start="13">
							<li dir="ltr">
								<h2 dir="ltr">
									A eviter
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							Sexe: attention risque de discrimination à l'embauche si spécifiée (le prénom indique le sexe en général sinon ce sera la surprise pour le recruteur). Lui
							faire la surprise lors de l'entretien
						</p>
						<br/>
						<p dir="ltr">
							Situation familiale: Ce n'est plus comme avant, les situations sont nombreuses (célibataire, marié, pacsé, compagnon, divorcé …) et aucune ne traduit votre
							mobilité réelle.
						</p>
						<p dir="ltr">
							Les mensonges: Il peut être tentant, pour les candidats, d'« embellir » leur CV, à coup de faux diplômes, de compétences surévaluées ou de hobbies
							trafiqués. Selon une étude de Verifdiploma,
							<a href="http://www.terrafemina.com/emploi-a-carrieres/actu/articles/26253-quels-sont-les-mensonges-les-plus-courants-sur-un-cv-.html">
								26% des candidats n'hésiteraient d'ailleurs pas à mentir sur leur CV
							</a>
							. Pourtant, ces petits arrangements avec la vérité peuvent leur coûter cher en leur faisant manquer le poste de leurs rêves si le recruteur vient à
							découvrir la supercherie.
						</p>
						<br/>

					</div>

					<div class="box1" id="10">

						<ol start="14">
							<li dir="ltr">
								<h2 dir="ltr">
									Titre du CV
								</h2>
							</li>
						</ol>
						<p dir="ltr">
							Le titre fut longtemps présenté comme facultatif. Aujourd’hui la majorité des recruteurs considèrent qu’il est indispensable. Il doit cependant être manié
							avec intelligence : un titre trop flou donne l’impression d’un projet professionnel pas très clair tandis qu’un titre trop précis peut fermer des portes.
						</p>
						<p>
							Le titre indique généralement un poste (directeur administratif et financier) mais il peut aussi prendre l’intitulé d’un département (Direction
							administrative et financière). Quand on manque d’expérience, cela a l’avantage de désigner les métiers vers lesquels on s’oriente tout en montrant qu’on
							est prêt à étudier différents degrés hiérarchiques. Il est également possible d’ajouter le secteur d’activité si celui-ci est déterminant. En fait, c’est à
							chacun de placer le curseur en fonction de ses ambitions et de son parcours. Toutefois, il faut bannir les intitulés trop généraux (par exemple :
							communication).
						</p>
						<br/>

					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-12 col-xs-12 animated slideInRight">
			
		</div>

		<div class="col-md-3 col-sm-12 col-xs-12 animated slideInRight">
			
		</div>

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
</div>

