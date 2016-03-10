<?php
    session_start();
    include '../includes/connect.inc.php';
	include '../includes/requeteMooc.php';
	include '../includes/qcm.php';
	include '../includes/dragdrop.php';

    //inscrition au mooc (voir description.php car method get ->fonctionsDescription.php)
    if(isset($_SESSION['login']) && isset($_GET['insert']) && isset($_GET['idM'])){
        $unlockTrophy = $bdd->query('SELECT COUNT(id_user) AS cpt FROM suivre WHERE id_user= "'.$_SESSION['id_user'].'" AND id_mooc="'.$_GET['idM'].'"');
        $donnees = $unlockTrophy->fetch();
        $unlockTrophy->closeCursor();      
       // echo $donnees['cpt'];
        if($donnees['cpt']==0){

            $iduser = $_SESSION['id_user'];
            $idM = $_GET['idM'];


            try { 
                $requete_prepare= $bdd->prepare("INSERT INTO suivre(date_suivi,avancement,id_user,id_mooc) VALUES(current_date, 0,'$iduser', '$idM')"); // on prépare notre requête
                $requete_prepare->execute();
            echo "->OK inscrition au mooc";
            } catch (Exception $e) { 
                echo $e->errorMessage();
                echo "->erreur";
            }
        }else{
            echo 'deja inscrit';
        }
    }
   

?>
<?php
$idMooc;
if(isset($_GET['idM'])) {
	$idMooc = $_GET['idM'];	
}else{
	$valid = 0;
	echo'erreur';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../favicon.ico">

    <title>Mooc Isen</title>

    <!-- Bootstrap core CSS -->

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../assets/css/custom.css" rel="stylesheet">
   <!--  <link rel="stylesheet" type="text/css" href="../assets/css/maps/jquery-jvectormap-2.0.1.css" />-->
    <link href="../assets/css/icheck/flat/green.css" rel="stylesheet" />
    <link href="../assets/css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/jquery.validate.js"></script>
    <!--<script src="../assets/js/nprogress.js"></script>-->
    <script>
        //NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">

<div class="main_container">

	<div class="col-md-3 left_col">
		<div class="left_col scroll-view">

			<div class="navbar nav_title" style="border: 0;">
				<a href="../index.php" class="site_title"><i class="glyphicon glyphicon-education"></i> <span>MOOCs</span></a>
			</div>
			<div class="clearfix"></div>

			<!-- menu prile quick info -->
			<div class="profile">
				<div class="profile_pic">
					<img src="../assets/images/user.png" alt="..." class="img-circle profile_img">
				</div>
				<div class="profile_info">
					<span>MOOC,</span>
					<?php
						titreMooc($idMooc,$bdd);
					?>
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
						if (isset($_GET['idM'])) {
						  $idMooc = $_GET['idM'];	

						  chapitresplusSousPartie($idMooc,$bdd);							
							//echo $idMooc;
						}else{
							$valid = 0;
							echo'erreur';
						}				
						?>
				</div>
				<div class="menu_section">
					<h3>Menu</h3>
					<ul class="nav side-menu">
						<li><a><i class="fa fa-wrench"></i> Paramètres <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu" style="display: none">
    							<li><a href="profil.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Profil</a>
    							</li>
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
				<a href='profil.php' data-toggle="tooltip" data-placement="top" title="Paramètre">
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				</a>
				<a href='profil.php' data-toggle="tooltip" data-placement="top" title="Contact">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
				</a>
				<a href='profil.php' data-toggle="tooltip" data-placement="top" title="Information">
					<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
				</a>
				<a href='../includes/logout' data-toggle="tooltip" data-placement="top" title="Déconnexion">
					<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
				</a>
			</div>
			<!-- /menu footer buttons -->
		</div>
	</div>	

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <!-- AFFICHAGE MENU -->
                           <?php include '../includes/affichages/affiche_notif_menu.php'; ?>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <?php
                if(isset($_GET['idC']) && isset($_GET['idM'])) {
                   $idChap = $_GET['idC']; 
                   $idMooc = $_GET['idM'];                    
                   $numChap = $_GET['numC'];                    
                   include '../mooc/mooc'.$idMooc.'/chapitres/chapitre'.$numChap.'.php';
               }
               else if(isset($_GET['idM'])){
                   $idMooc = $_GET['idM'];
                   echo'<h3>Introduction</h3>';
                   include '../mooc/mooc'.$idMooc.'/chapitres/chapitre0.php';

               } 
				?>


                <div class="row">
                 

                </div>

                <!-- footer content -->

                <footer>
                    <div class="">
                        <p class="pull-right">MOOCs <a>Isen</a>. |
                            <span class="lead"> <i class="glyphicon glyphicon-education"></i> MOOCs</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

        <!-- jQuery -->
<script src="../assets/js/jquery.js"></script>

    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="../assets/js/gauge/gauge.min.js"></script>
    <!--<script type="text/javascript" src="js/gauge/gauge_demo.js"></script>-->
    <!-- chart js -->
    <script src="../assets/js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="../assets/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../assets/js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="../assets/js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="../assets/js/moment.min.js"></script>
    <script type="text/javascript" src="../assets/js/datepicker/daterangepicker.js"></script>

    <script src="../assets/js/custom.js"></script>

    <!-- form validation -->
    <script src="../assets/js/validator/validator.js"></script>

    <!-- Validation -->
    <script src="../assets/js/jqueryvalidate/jquery.validate.min.js"></script>
    <script src="../assets/js/jqueryvalidate/additional-methods.min.js"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="../assets/js/flot/date.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="../assets/js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.resize.js"></script>
    <script>
        $(document).ready(function () {
            // [17, 74, 6, 39, 20, 85, 7]
            //[82, 23, 66, 9, 99, 6, 2]
            var data1 = [[gd(2012, 1, 1), 17], [gd(2012, 1, 2), 74], [gd(2012, 1, 3), 6], [gd(2012, 1, 4), 39], [gd(2012, 1, 5), 20], [gd(2012, 1, 6), 85], [gd(2012, 1, 7), 7]];

            var data2 = [[gd(2012, 1, 1), 82], [gd(2012, 1, 2), 23], [gd(2012, 1, 3), 66], [gd(2012, 1, 4), 9], [gd(2012, 1, 5), 119], [gd(2012, 1, 6), 6], [gd(2012, 1, 7), 9]];
            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                data1, data2
            ], {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    verticalLines: true,
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#fff'
                },
                colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                xaxis: {
                    tickColor: "rgba(51, 51, 51, 0.06)",
                    mode: "time",
                    tickSize: [1, "day"],
                    //tickLength: 10,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Verdana, Arial',
                    axisLabelPadding: 10
                        //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
                },
                yaxis: {
                    ticks: 8,
                    tickColor: "rgba(51, 51, 51, 0.06)",
                },
                tooltip: false
            });

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }
        });
    </script>

    <!-- worldmap 
    <script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-2.0.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/maps/gdp-data.js"></script>
    <script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-us-aea-en.js"></script>
    -->
    <script>
      /*  $(function () {
            $('#world-map-gdp').vectorMap({
                map: 'world_mill_en',
                backgroundColor: 'transparent',
                zoomOnScroll: false,
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#E6F2F0', '#149B7E'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                onRegionTipShow: function (e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });*/
    </script>
    <!-- skycons -->
    <script src="../assets/js/skycons/skycons.js"></script>
    <script>
        var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    </script>

    <!-- dashbord linegraph -->
    <script>
        var doughnutData = [
            {
                value: 30,
                color: "#455C73"
            },
            {
                value: 30,
                color: "#9B59B6"
            },
            {
                value: 60,
                color: "#BDC3C7"
            },
            {
                value: 100,
                color: "#26B99A"
            },
            {
                value: 120,
                color: "#3498DB"
            }
    ];
      // var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
    </script>
    <!-- /dashbord linegraph -->
	 <!-- form wizard -->
    <script type="text/javascript" src="../assets/js/wizard/jquery.smartWizard.js"></script>
    <script type="text/javascript">
        /*$(document).ready(function () {
            // Smart Wizard 	
            $('#wizard').smartWizard();

            function onFinishCallback() {
                $('#wizard').smartWizard('showMessage', 'Finish Clicked');
                //alert('Finish Clicked');
            }
        });*/

        /*$(document).ready(function () {
            // Smart Wizard	
            $('#wizard_verticle').smartWizard({
                transitionEffect: 'slide'
            });

        });*/

        //  Wizard 
         $(document).ready(function () {
            //$("#solucebox").html('okok');
            $('#wizard').smartWizard({transitionEffect:'slide',onFinish:onFinishCallback});
            //fonction si on click sur finish
            function onFinishCallback(){

                //nos choix
                var selected = [];
                $('#wizard input:checked').each(function() {
                    selected.push($(this).attr('name'));
                });
                selected=JSON.stringify(selected);
                console.log("Vos choix-->"+selected);

                //récupération id=soluce 
                var soluce = $('input#soluce').val();
                //console.log("Les Réponse-->"+soluce); //A garder pour débug

                var jsonsoluce=JSON.stringify(soluce);
                //console.log("dataForm-->"+selected+" dataForm2-->"+jsonsoluce); //A garder pour débug

                //récupération idmooc
                var varidm = $('input#idm').val();

                //récupération idchap
                var varidc = $('input#idc').val();
                //var varidm=JSON.stringify(tabidm);

                //récupération idexo
                var varide = $('input#ide').val();

                //idexo
                var tabide = [];
                $('input#ide').each(function() {
                    tabide.push($(this).val());
                });
                var jsontabide=JSON.stringify(tabide);


                //Requete Ajax sur wizard_ajax.php permettant de corrigé les réponse + insertion en bdd
                $.ajax({
                    url: '../includes/wizard_ajax.php',
                    type: 'POST', 
                    data: {
                        dataForm: selected, //vos choix
                        dataForm2:jsonsoluce, //les solutions
                        dataidm:varidm, //variable id du mooc
                        dataidc:varidc, //variable id du chapitre
                        dataide:varide, //variable id du chapitre
                        datatabide:jsontabide, //tableau des id des exos
                    },
                    success: function(data) {
                        //var jsondata=$.parseJSON(data);  //jsondata c'est le callback de wizard.jss
                        var jsondata=data;  //jsondata c'est le callback de wizard.jss
                        ///console.log("jsondata-->"+jsondata);
                        //$("#solucebox").prepend("Voici vos choix : "+jsondata+"<br> Les réponse de l'exo: "+jsonsoluce); 
                        //car les array ne sont pas pareil
                        //good
                       /* jsondata=jsondata.replace(/"/g,"",jsondata); //remplace les " par rien
                        jsonsoluce=jsonsoluce.replace(/"/g,"",jsonsoluce);
                        jsonsoluce=jsonsoluce.replace(/,]/g,"]",jsonsoluce);*/

                        //ne pas oublier le <div id='solucebox'></div> dans chapitre (mooc/chapitre/..)
                        //$("#solucebox").html(""); //Ré
                        //$("#solucebox").append("Voici vos choix : "+jsondata+"<br> Les réponse de l'exo: "+jsonsoluce); 
                        /*$("#solucebox").append("Callback"+jsondata); 
                        if(jsondata==jsonsoluce){
                            $("#solucebox").append("<br><b>CORRECT</b>"); 
                        }else{
                             $("#solucebox").append("<br><b>FAUX</b>"); 
                        }*/
                        $("#solucebox").html(""); //Refresh ne pas oublier le div (généré par modeles/qcm.php)
                        $("#solucebox").append("<br>vos choix : <i>"+selected+"</i>"); //affiche les choix (full JQuery)
                        $("#solucebox").append("<br><b>"+jsondata+"</b>");//affiche le réponse de wizard_ajax.php
                        /*
						$("#solucebox").append("<br><b>Faux</b>, M. Clément GUIOL : il y a une mention “M.” avant le prénom");
						$("#solucebox").append("<br><b>Vrai</b>, Olivier Garnier : le prénom est avant le nom; le nom n’a pas besoin d’être en lettres capitales, car ce ne peut pas être un prénom et il n’a pas de consonance étrangere");
						$("#solucebox").append("<br><b>Faux</b>, Madame Olivia : Serre il y a une mention “Madame” avant le prénom");
						$("#solucebox").append("<br><b>Faux</b>, Mme Odette Dupont : il y a une mention “Mme” avant le prénom");
						$("#solucebox").append("<br><b>Vrai</b>, Olivier SCHULTZ : le prénom est avant le nom et le nom est en capitale");
						$("#solucebox").append("<br><b>Vrai</b>, Victor Gerard : le prénom est avant le nom; le nom n’a pas besoin d’être en lettres capitales, car ce ne peut pas être un prénom et il n’a pas de consonance étrangere.");
						$("#solucebox").append("<br><b>Faux</b>, Slavyana Kokorina : le nom et le prénom a une consonance étrangere, il faut mettre le nom en majuscule");
						$("#solucebox").append("<br><b>Faux</b>, Monsieur Jeson Dupont : il y a une mention “Monsieur” avant le prenom");
						$("#solucebox").append("<br><b>Faux</b>, Jean Nicolas : il faut mettre le nom en lettres capitales, car ce nom peut être un prénom");
						$("#solucebox").append("<br><b>Faux</b>, PERRICHON Guillaume : le nom est avant le prénom");
						$("#solucebox").append("<br><b>Vrai</b>, Clément DAVID : le prénom est bien avant le nom et le nom est en lettres capitales car c’est un nom qui peut être un prénom");
                        */


 
                    },
                    error: function(json) {
                        alert('false');
                        //$('.alert-danger').show();
                    }
                });

                console.log('Finish Called id wizard');
            }     
        });
    </script>
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>


    <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';
        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);
        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });
        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);
        //Mettre en commentaire si utilisation de jqueryvalidator
        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }
            if (submit)
                this.submit();
            return false;
        });
    </script>

 <script>
    /*
    //----------------REGEX ---------------------------
    $.validator.addMethod("mailRegex", function(value, element) {
      return this.optional(element) || /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/i.test(value);
    });
        
    // --------------- Login JqueryValidator ---------
    var login = $("#myform3");
    login.validate({
          //prendre le name
          errorElement: 'span',
          errorClass: 'help-block',
          highlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').addClass("has-error");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass("has-error");
        },
        rules: {
          name: {
              required: true,
              usernameRegex: true,
              minlength: 2,
          },
          email: {
              required: true,
              mailRegex: true,
              minlength: 3,
          },
          city:{
          required: true,
        },
      },
      messages: {
        email: {
            required: "email required",
        },
        name : {
            required: "name required",
        },
     }
    });*/

   </script>




    <script>
       // NProgress.done();
    </script>
    <!-- /datepicker -->
    <!-- /footer content -->
</body>

</html>
