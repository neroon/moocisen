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
	//echo'erreur';
}
?>
<div class="row">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Avant propos</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Settings 1</a>
								</li>
								<li><a href="#">Settings 2</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">


					<!-- Send email -->
					

					<blockquote>            
						<p>
							Un CV - <b>Curriculum vitae</b> est votre publicité, c’est votre reflet et il est capital. Il n'existe pas de CV miracle mais en revanche un CV mal conçu et mal utilisé fait toujours de gros dégâts, même si le candidat possède un excellent profil. Les recruteurs, submergés de candidatures et disposant de très peu de temps, sont obligés d'aller à <b>l'essentiel</b>. Résultat : de simples défauts dans la présentation du CV peuvent provoquer l'élimination d'un candidat. C’est pourquoi nous avons crée un MOOC “Comment réaliser un CV d’ingénieur” qui vous permettra de créer votre propre CV et d’accéder au poste dont vous revez! <br>
Il n'y a pas de vérité sur le CV, il y a des <b>informations utiles ou non</b>. Le CV est un document qui peut et est critiqué par toutes personnes à qui vous le montrez (vous pouvez le refaire 10 fois après l'avoir montré à 10 personnes). Pourtant, personne ne se pose la question de qui est compétent pour l'évaluer (recruter est aussi un métier, ce n'est pas que de l'intuition, ou de la logique (chacun a la sienne)). Donc montrez votre CV, <b>écoutez les conseils, faites préciser le pourquoi de leur remarques</b>. Si ils n'ont pas d'explications autres que "cela ne se fait pas", où "c'est comme ça que l'on fait", remerciez poliment et passez à autres chose. <br>

<b>Avant</b> d’attaquer la rédaction de votre CV, reflechissez à ce que vous allez mettre dedans, pour cela il faut:<br><br>
<b>Bien se connaître</b>: savoir qui vous êtes, ce que vous voulez, par quoi vous êtes motivé, ce que vous cherchez, ce que vous savez faire et dans quoi vous serez bien. <br>
<b>Se faire connaître</b>: envoyer un " message " qui vous soit fidèle et qui ne trompe pas son destinataire, c'est le rôle de votre CV : vous allez en travailler le contenu et la forme jusqu'à en être content et fier.<br>
<b>Connaître son " marché "</b>: Identifier les entreprises qui recrutent dans votre métier. Répondre aux offres qui vous correspondent vraiment et qui correspondent à ce que vous voulez faire. Pour le recruteur: Le recruteur a aussi ses lubies sur le CV. Si c'est possible, <b>recherchez des informations sur ces attendus</b>. La lecture des sites internet permet de voir ce qui est important pour l'entreprise, la technique, les RH, les valeurs, etc.<br><br>
Le but n'est pas de tout dire mais noter ce qui peut intéresser. Informations réelles (<b>pas de mensonge</b>) en fonction de vos projets personnels et professionnels (stage, emploi, job d'été, publicité...) et de <b>l'objectif visé</b> (réponse à une offre d'emploi, envoi d'une candidature spontané, outil de veille sur les sites d'emploi …). Il faut faciliter la vie au recruteur pour qu'il trouve la perle rare qu'il recherche. Rappelez-vous qu'il a aussi peur que vous, il ne faut pas qu'il se trompe vis-à-vis du demandeur.<br>
				
						</p>
					</blockquote>

                    
				</div>
			</div>
		</div>
	</div>
</div>

