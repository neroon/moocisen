<div class="main_container">

	<div class="col-md-3 left_col">
		<div class="left_col scroll-view">

			<div class="navbar nav_title" style="border: 0;">
				<a href="../../index.php" class="site_title"><i class="glyphicon glyphicon-education"></i> <span>MOOCs</span></a>
			</div>
			<div class="clearfix"></div>

			<!-- menu prile quick info -->
			<div class="profile">
				<div class="profile_pic">
					<img src="../../assets/images/user.png" alt="..." class="img-circle profile_img">
				</div>
				<div class="profile_info">
					<span>MOOC,</span>
					<h2>Comment faire un CV d'ingénieur</h2>
				</div>
			</div>
			<!-- /menu prile quick info -->

			<br />

			<!-- sidebar menu -->
			<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

				<div class="menu_section">
					<h3>Chapitres</h3>
					<ul class="nav side-menu">
					   
	
						<?php
						
						$valid = 1;
						$idMooc;
						 if (isset($_POST['id'])) {
							$idMooc = $_POST['id'];								
							//echo $idMooc;
						}else{
							$valid = 0;
							echo'erreur';
						}
						
						chapitresplusSousPartie($idMooc,$bdd);
									
						?>
				</div>
				<div class="menu_section">
					<h3>Menu</h3>
					<ul class="nav side-menu">
						<li><a><i class="fa fa-question-circle"></i> Autre <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu" style="display: none">
							   <!-- <li><a href="e_commerce.html">E-commerce</a>
								</li>
								<li><a href="projects.html">Projects</a>
								</li>
								<li><a href="project_detail.html">Project Detail</a>
								</li>
								<li><a href="contacts.html">Contacts</a>
								</li>
								<li><a href="profile.html">Profile</a>
								</li>
							-->
							</ul>
						</li>
						<li><a><i class="fa fa-wrench"></i> Paramètres <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu" style="display: none">
							   <!-- <li><a href="page_404.html">404 Error</a>
								</li>
								<li><a href="page_500.html">500 Error</a>
								</li>
								<li><a href="plain_page.html">Plain Page</a>
								</li>
								<li><a href="login.html">Login Page</a>
								</li>
								<li><a href="pricing_tables.html">Pricing Tables</a>
								</li>
							-->
							</ul>
						</li>
						<li><a><i class="fa fa-envelope"></i> Tchat <span class="label label-success pull-right">Coming Soon</span></a>
						</li>
					</ul>
				</div>

			</div>
			<!-- /sidebar menu -->

			<!-- /menu footer buttons -->
			<div class="sidebar-footer hidden-small">
				<a data-toggle="tooltip" data-placement="top" title="Settings">
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="FullScreen">
					<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="Lock">
					<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="Logout">
					<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
				</a>
			</div>
			<!-- /menu footer buttons -->
		</div>
	</div>	