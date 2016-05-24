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
		<!-- 1ER BOITE -->
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12 ">
				<div class="animated slideInUp">
					<div class="x_panel">
						<div class="x_title">
							<h2> Chapitre 1 : Identité </h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="my_step_box">
								<!-- Cours -->
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

								<!-- METTRE ICI LE CONTENU -->
								
								<div class="box1" id="1">
									<ol start="1">
										<li dir="ltr">
											<h2 dir="ltr">
												Nom prénom
											</h2>
										</li>
									</ol>
									<p dir="ltr">
										Mettre le nom et le prénom est indispensable, sauf si un CV anonyme est demandé. Si c’est le cas le recruteur aura soit la lettre de motivation soit votre mail pour savoir qui vous êtes (de toute façon il vous verra en entretien).
									</p>
									<p dir="ltr">
										En général, le prénom se met avant le nom. Ce dernier doit être mis en capitale surtout pour ceux qui ont un nom qui peut être un prénom ou lorsque vos nom et prénom sont à consonance étrangère méconnue.					
									</p>
									<p dir="ltr">
										Le nom et le prénom doit être placé en début de CV, plutôt en haut et à gauche ou en haut centré. 
									</p>
									<br/>
									<p dir="ltr">
										Exemple:
									</p>
									<p dir="ltr">
										C’est bien de mettre : Patrick JACQUES, Olivier Lopez (même si le nom écrit systématiquement en capital est mieux afin d’aider à la mémorisation).
									</p>
									<p dir="ltr">
										Il faut éviter: Monsieur Patrick JACQUES, JACQUES Patrick, M. Olivier LOPEZ
									</p>
									<br/>
								</div>

								<!-- FIN METTRE ICI LE CONTENU -->

							</div>

							<div class="box1" id="2">

								<ol start="2">
									<li dir="ltr">
										<h2 dir="ltr">
											Adresse et mobilité
										</h2>
									</li>
								</ol>
								<p dir="ltr">
									Cette information est indispensable mais moins prioritaire (tout se fait souvent par internet, cela est moins vrai pour les administrations), en dehors de savoir où vous habitez par rapport au lieu de travail. Il y a un risque que votre
									adresse peut être utilisée par un recruteur pour éliminer votre candidature si votre lieu de domicile est jugé trop éloigné de l'entreprise.
									Pour diminuer ce risque, si vous êtes mobile géographiquement, spécifier votre niveau de mobilité: régionale (à préciser),
									nationale, internationale.
								</p>
								<p dir="ltr">
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
									Il faut éviter les pseudos et les adresses mails de type: «stardu62@yahoo.com » ou « laptiteloulou@gmail.com » qui feront au mieux sourire, au pire
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
									Vous pouvez spécifier votre nationalité si vous avez double nationalité. Ainsi que si vous êtes étranger, ou si votre nom prête à confusion (si vous avez un nom aux résonances étrangères, tout en étant de nationalité française, par exemple). Il y a peu d'intérêt si votre nom sonne bien français.
								</p>
								<ol start="8">
									<li dir="ltr">
										<h2 dir="ltr">
											Réseau social (optionnel)
										</h2>
									</li>
								</ol>
								<p dir="ltr">
									Vous pouvez mettre un lien vers votre réseau social mais que si les informations accessibles sont présentées de façon professionnelle. Pensez à mettre régulièrement à jour vos informations. Les réseaux utilisés par les recruteurs sont: LinkedIn, Viadeo, twitter, Facebook (professionnel). 
								</p>
								<p dir="ltr">
									Généralement Viadeo est utilisé dans les métiers de la création, d’Internet et de la communication. LinkedIn est plutôt utilisé dans les métiers de l’industrie. 
									En ce qui concerne votre compte Twitter et votre page Facebook, faites très attention à ce que ce soient des comptes professionnels où il n’y a pas de contenu de votre vie privé. 
								</p>
								<p dir="ltr">
									Vous pouvez mettre un lien vers votre site internet si c’est en cohérence avec ce que vous souhaitez mettre en avant. Vérifiez qu'il fonctionne bien car recruteur fera sûrement un clic dessus. 
								</p>
								<p dir="ltr">
									Faites attention à votre e-réputation! Chaque lien que vous mentionnez doit apporter une réelle valeur ajoutée au CV et non le pénaliser. Un lien non valide, un blog d’humeur politique, un profil avec des commentaires acerbes ne feront que porter préjudice à la candidature.
								</p>
								<br/>
							</div>

							<div class="box1" id="7">
								<ol start="10">
									<li dir="ltr">
										<h2 dir="ltr">
											Bilingue (optionnel)
										</h2>
									</li>
								</ol>
								<p dir="ltr">
									Vous pouvez mettre que vous êtes bilingue, trilingue (ou plus). Il faut bien spécifier les langues. Forcément le recruteur pourra très bien entamer le dialogue dans la langue que vous maitrisez en dehors du Français.
								</p>
								<ol start="11">
									<li dir="ltr">
										<h2 dir="ltr">
											Phrase d’accroche, titre du CV et objectifs (optionnel) Partie 1
										</h2>
									</li>
								</ol>
								<p dir="ltr">
									La phrase d’accroche doit traduire un objectif, une ambition, elle doit être le plus factuelle possible. Elle induit la façon dont sera lu votre CV par la suite. Le recruteur va être influencé. Soit il arrête de lire, soit il va contrôler sa lecture en fonction de la phrase d'accroche.
								</p>
								<p dir="ltr">
									Le titre fut longtemps présenté comme facultatif. Aujourd’hui la majorité des recruteurs considèrent qu’il est indispensable. Il doit cependant être manié avec intelligence : un titre trop flou donne l’impression d’un projet professionnel pas très clair tandis qu’un titre trop précis peut fermer des portes.
								</p>
								<p dir="ltr">
									Le titre indique généralement un poste mais il peut aussi prendre l’intitulé d’un département. Quand on manque d’expérience, cela a l’avantage de désigner les métiers vers lesquels on s’oriente tout en montrant qu’on est prêt à étudier différents degrés hiérarchiques. Il est également possible d’ajouter le secteur d’activité si celui-ci est déterminant. En fait, c’est à chacun de placer le curseur en fonction de ses ambitions et de son parcours. Toutefois, il faut bannir les intitulés trop généraux (par exemple : communication).
								</p>
								<p dir="ltr">
									Exemple de titre de CV:
								</p>
								<ul>
									<li dir="ltr">
										<p dir="ltr">
											Ingénieur électronique spécialisation téléphonie  - séjour en Chine de 2 ans
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Ingénieur en informatique - bilingue anglais - mobilité internationale
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Ingénieur en électronique - mobilité internationale - 15 ans d’expérience 
										</p>
									</li>
								</ul>
							</div>
							<div class="box1" id="8">
							<ol start="11">
									<li dir="ltr">
										<h2 dir="ltr">
											Phrase d’accroche, titre du CV et objectifs (optionnel) Partie 2
										</h2>
									</li>
								</ol>
								<p dir="ltr">
									La lecture du CV peut se faire avant ou après la lecture de la lettre de motivation, en règle générale, c’est cette dernière qui est lue en premier. C’est elle qui va donner du sens pour la lecture du CV, en précisant l’objet, les objectifs et les enjeux de la demande.  
								</p>
								<p dir="ltr">
									Attention un CV n’est pas une lettre de motivation. Si cette dernière traduit le présent et le futur, le CV traduit le passé et le présent, ils se complètent donc. Donc pas de longue phrase explicative en début de CV, on doit rester sur une accroche qui donne envie de lire et rend curieux de la suite ou qui synthétise les éléments clés et spécifiques du CV.
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
									Ces mots ne donc pas des plus-values. Rappelez-vous d’un principe simple de communication, la méthode SOFA. Nous échangeons sur 4 niveaux :
								</p>
								<ul>
									<li dir="ltr">
										<p dir="ltr">
											Sentiment
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Opinion
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Faits
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Actions
										</p>
									</li>
								</ul>
							</div>
							<div class="box1" id="9">
								<ol start="11">
									<li dir="ltr">
										<h2 dir="ltr">
											Phrase d’accroche, titre du CV et objectifs (optionnel) Partie 3
										</h2>
									</li>
								</ol>
								<p dir="ltr">
									Les deux premiers sont des interprétations issues de faits observés personnellement mais qui sont généralisés, réduits ou transformés et ne constituent pas de preuve de ce que l’on dit.
								</p>
								<p dir="ltr">
									Ex : je suis motivé, dynamique et expert : qu’est-ce qui le prouve ?
								</p>
								<p dir="ltr">
									Les deux derniers sont des informations factuelles qui vont justement induire chez l’auditeur des sentiments et opinions.
								</p>
								<p dir="ltr">
									Ex : 20X1 : responsable de projet développement site commercial chez X (6 mois) pour le client Z avec une équipe de 5 ingénieurs. Projet réalisé avec 1 mois d’avance et un budget optimisé de 23%.
								</p>
								<p dir="ltr">
									Le lecteur pourra déduire, que vous êtes motivé, dynamique et expert. 
								</p>
								<p dir="ltr">
									Il faut privilégier les verbes d’action pour décrire ses missions passées : vous avez décidé, fixé, géré, dirigé, coordonné, organisé, formé, contrôler. Les recruteurs préfèrent des mots d’action pour définir l’expérience, les compétences et les réalisations. D'après l'étude de CareerBuilder, les recruteurs apprécieraient particulièrement les expressions : 
								</p>
								<ul>
									<li dir="ltr">
										<p dir="ltr">
											Obtenu/réalisé
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Amélioré
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Formé, parrainé
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Managé
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Créé
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Résolu
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Portés volontaires
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Augmenter / réduire
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Idées
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Négocié
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Lancer, mettre en place
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Chiffre d’affaires / profits
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											En deçà du budget
										</p>
									</li>
									<li dir="ltr">
										<p dir="ltr">
											Remporté / gagné
										</p>
									</li>
								</ul>
								<br/>
							</div>

							<div class="box1" id="10">

								<ol start="12">
									<li dir="ltr">
										<h2 dir="ltr">
											Photo (optionnel)
										</h2>
									</li>
								</ol>
								<p dir="ltr">
									La photo est un élément fortement sujet à émotion donc à interprétation. Votre photo doit donc donner envie de vous rencontrer, donc sourire, netteté, contraste, vêtement professionnel, attitude ouverte et couleurs sont de mises. 
								</p>
								<p dir="ltr">
									Concrètement, se mettre en avant sur son CV en ligne commence par présenter une bonne photo. Les profils avec photo ont 14 fois plus de chances d’être consultés. Si vous avez rencontré des recruteurs par exemple sur un forum ou dans un salon professionnel, elle peut être un moyen pour eux de vous reconnaître.  
								</p>
								<p dir="ltr">
									La photo n’est pas obligatoire dans un CV, surtout si elle ne vous met pas en valeur ou manque de professionnalisme. Mieux vaut ne pas afficher de photo du tout que d’insérer un portrait livide, décalé, voir raté sur votre CV. Evitez de mettre les scans de photo d'identité, les vieilles photos, les photos de soirées, de vacances ou de famille, qui manquent de pertinence et de maturité.
								</p>
								<p dir="ltr">
									Préférez des photos dans des contextes professionnels. Une photo en décolleté est également à proscrire, miser sur l’atout physique dans une candidature est une faute de goût et révèle un manque flagrant d’arguments professionnels.
								</p>
								<p dir="ltr">
									Enfin, vous postuler pour un poste d’ingénieur. Si c’est dans le développement web, la photo a moins d’importance qui si vous postulez sur un poste d’ingénieur d’affaires. La fréquence du contact avec le client souligne la différence sur la prise en compte de la photo.
								</p>
								<br/>

							</div>

							<div class="box1" id="11">

								<ol start="13">
									<li dir="ltr">
										<h2 dir="ltr">
											A eviter
										</h2>
									</li>
								</ol>
								<p dir="ltr">
									Il y a certaines choses qu’il vaut mieux éviter de mettre dans un CV: sexe, situation familiale, religion, et bien sur les fausses informations.
								</p>
								<br/>
								<p dir="ltr">
									Si vous mentionnez votre sexe, attention au risque de discrimination à l'embauche si spécifiée. Puis dans la plupart des cas votre prénom indique le sexe en général sinon ce sera la surprise pour le recruteur, donc ce n’est pas la peine de le préciser en plus. 
								</p>
								<p dir="ltr">
									En ce qui concerne votre situation familiale, ce n'est plus comme avant, les situations sont nombreuses (célibataire, marié, pacsé, compagnon, divorcé …) et aucune ne traduit votre mobilité réelle. 
								</p>
								<p dir="ltr">
									Parfois il peut être tentant, pour les candidats, d'« embellir » leur CV, à coup de faux diplômes, de compétences surévaluées ou de hobbies trafiqués. Pourtant, ces petits arrangements avec la vérité peuvent vous coûter cher en vous faisant manquer le poste de vos rêves si le recruteur vient à découvrir la supercherie.
								</p>

								<br/>

							</div>

							<div class="box1" id="12">

								<ol start="14">
									<li dir="ltr">
										<h2 dir="ltr">
											Récapitulatif du chapitre
										</h2>
									</li>
								</ol>
								<p dir="ltr">
									Nous pouvons résumer le chapitre en 12 points essentiels suivants:
								</p>
								<ol>
									<li>
										Le <b>nom</b> est mis en capitale lorsque le nom peut être un <b>prénom</b> ou lorsqu’ils sont à consonance étrangère.
									</li>
									<li>
										Dans tous les cas pensez à mettre votre <b>mobilité</b>: régionale, nationale, internationale.
									</li>
									<li>
										Mettre le <b>numéro de téléphone</b>portable est très conseillé. Si vous mettez plusieurs numéros de téléphone (on considère que 2 numéros c’est largement suffisant), placer le principal en premier.
									</li>
									<li>
										<b>L’adresse mail</b> doit être professionnelle du type : nom.prenom@gmail.com. Evitez les boites mails Yahoo et Hotmail.
									</li>
									<li>
										<b>La date de naissance</b> est sous la forme jj/mm/aaaa. Il est très conseillé de mettre l’âge entre les parenthèses et ne pas oublier à rectifier chaque année.
									</li>
									<li>
										<b>Le lieu de naissance</b> et la <b>nationalité</b> sont à mettre si votre nom est à consonance étrangère. Cela peut aussi indiquer une mobilité géographique intéressante.
									</li>
									<li>
										Vous pouvez mettre le lien vers les <b>réseaux</b> sociaux suivants : Twitter, Facebook, Linkedin, Viadéo à conditions que ce sont les comptes professionnels qui ne contiennent pas les éléments de votre vie privée.
									</li>
									<li>
										Il est vivement conseillé à mettre que vous êtes <b>bilingue</b> (voir même trilingue).
									</li>
									<li>
										<b>La phrase d’accroche</b> traduit un objectif, une ambition. <b>Le titre de votre CV</b> doit indiquer un poste ou l’intitulé d’un département. Vous pouvez mettre un élément qui peut vous démarquer (mobilité, bilingue, etc.). N’oubliez pas à mettre les <b>objectifs</b> en utilisant les bons qualificatifs.  
									</li>
									<li>
										La <b>photo</b> n’est pas obligatoire. Si vous la mettez elle doit être prise dans le contexte professionnel.
									</li>
									<li>
										<b>Evitez</b> de mentionner votre sexe, situation familiale et les mensonges.
									</li>
								</ol>
								<br/>

							</div>
						</div>
					</div>
				</div>

			<div class="row">
				<!-- 1ER BOITE -->
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

			<div class="row">
				<!-- 1ER BOITE -->
				<div class="col-md-6 col-sm-12 col-xs-12 animated slideInUp">
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
							<br>
							<div >
		                     <address>
		                           	<strong>Shepard John ,Fondation Sirta</strong>
		                           	<br>La Citadelle, Présidium
		                           	<br>Nos Astra, Illium
		                           	<br>Phone: 1 (804) 123-9876
		                           	<br>Email: JohnShepard@mail.com
		                        </address>
		                    </div>
						</div>
					</div>
				</div>
				
				<!-- 2EME BOITE -->
				<div class="col-md-6 col-sm-12 col-xs-12 animated slideInUp">
					<div class="x_panel">
						<div class="x_title">
							<h2> Icônes gratuit </h2>
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
							<strong>Voici un pack d'icônes en 512 pixels en png pour votre profil</strong> <br><br>
							<!--<div class="row">
							  <div class="col-md-6 col-xs-6"><img class="" src="../mooc/mooc1/chapitres/images/chapitre1.jpg" width="150px" alt=""></div>
							  <div class="col-md-6 col-xs-6"><a href="../mooc/mooc1/chapitres/images/chapitre1.7z" target="_blank"><button id="send" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save-file"></span> Télécharger</button></a></div>
							</div>-->

							<div class="row">
							    <div class="left"><img class="" src="../mooc/mooc1/chapitres/images/chapitre1.jpg" width="150px" alt=""></div>
								<div class="right"><br><div class="text-center"><a href="../mooc/mooc1/chapitres/images/chapitre1.7z" target="_blank"><button id="send" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save-file"></span> Télécharger</button></a></div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
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


