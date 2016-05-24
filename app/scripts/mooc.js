/** Remove button hamburger on large screen */
$(document).resize(function() {
      if ($(this).width() > 1024) {
        $('#menu_toggle').hide();
      } else {
        $('#menu_toggle').show();
        }
    });



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
                    axisLabelFontFamily: 'Verdana',
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
		
/** skyicons */
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
		
/** dashbord linegraph */
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

/** form wizard */
var appData=window.App || {}; //variable globale
        var malus=window.App || {}; //variable globale
        malus=0;


 $(".myexplication").hide(); 
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
                //var soluce = $('input.soluce').val();
                //console.log("Les Réponse-->"+soluce); //A garder pour débug
                var tabsoluce = [];
                $('.soluce').each(function(index, obj){
                    tabsoluce.push($(this).val());
                });

                tabsoluce=JSON.stringify(tabsoluce);
                console.log("Les Réponse--->"+tabsoluce); //A garder pour débug

                //var jsonsoluce=JSON.stringify(soluce);
                //var jsonsoluce=(soluce);
                console.log("dataForm-->"+selected+" dataForm2-->"+tabsoluce); //A garder pour débug

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
                //alert(jsontabide);


                //Requete Ajax sur wizard_ajax.php permettant de corrigé les réponse + insertion en bdd
                $.ajax({
                    url: '../includes/wizard_ajax.php',
                    type: 'POST', 
                    data: {
                        dataForm: selected, //vos choix
                        dataForm2:tabsoluce, //les solutions
                        dataidm:varidm, //variable id du mooc
                        dataidc:varidc, //variable id du chapitre
                        dataide:varide, //variable id du chapitre
                        datatabide:jsontabide, //tableau des id des exos
                        datamalus:malus,
                    },
                    success: function(data) {
                        //var jsondata=$.parseJSON(data);  //jsondata c'est le callback de wizard.jss
                        var jsondata=data;  //jsondata c'est le callback de wizard.jss
                        appData=jsondata;

                        $("#solucebox").html(""); //Refresh ne pas oublier le div (généré par modeles/qcm.php)
                       // $("#solucebox").append("<br>vos choix : <i>"+selected+"</i>"); //affiche les choix (full JQuery)
                        $("#solucebox").append("<br><b>"+jsondata+"</b>");//affiche le réponse de wizard_ajax.php
                        $(".myexplication").show(); //Refresh ne pas oublier le div (généré par modeles/qcm.php)


 
                    },
                    error: function(json) {
                        alert('false');
                        //$('.alert-danger').show();
                    }
                });

                console.log('Finish Called id wizard');
            }     
        });


    /* INDICE */
    $("button.myindice").click(function(){
        var idmysoluce = $(this).val();
        var varmysoluce = $('input.'+idmysoluce).val(); //indice
        malus=10;
        $("#indicebox").html(""); //Refresh ne pas oublier le div (généré par modeles/qcm.php)
        $("#indicebox").append("<br>Indice : <i>"+varmysoluce+"</i>"); //affiche les choix (full JQuery)

        //alert (malus);
        //alert (varmysoluce);
       /* //A garder
       $.ajax({
            url: '../includes/indice_ajax.php',
            type: 'POST', 
            data: {
                dataSoluce: varmysoluce, //la solution
                dataId: idmysoluce, //id soluce
                //dataide:varide, //variable id du chapitre
            },
            success: function(data) {
                var jsondata=data;  //jsondata c'est le callback de wizard.jss
                alert (data);
            },
            error: function(json) {
                alert('false');
                //$('.alert-danger').show();
            }
        });*/
    });


    /* INDICE */
    $("button.myexplication").click(function(){
        var idmysoluce = $(this).val();
        var varmysoluce = $('input.'+idmysoluce).val(); //indice
        //malus=10;
        $("#indicebox").html(""); //Refresh ne pas oublier le div (généré par modeles/qcm.php)
        $("#indicebox").append("<br>Explication : <i>"+varmysoluce+"</i>"); //affiche les choix (full JQuery)

    });

/** datepicker */
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
	

/** initialize the validator function */
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

/** */
$("#gobox1").click(function () {
        //$('#my_step_box').data('daterangepicker').setOptions(optionSet1, cb);
        $("#my_step_box").hide();
    });

/**  SCRIPT COURS WIZARD *************** */
    var _myCpt=window.App || {}; //variable globale compteur pour hide/show apres chaque validation
    _myCpt=1;//correspond au bloc 0

    /* ************* Montre étapes pas étapes pour les cours*************** */
    function showOne(id) {
        console.log('showOne-->'+id);
        $('.box1').show();
        $('.box1').not('#' + id).hide();
    }

    function showAll() {
        console.log('showall');
        $('.box1').show();
    }
    showOne(1);
    

    $(document).on('click', '.myBtnBack' ,function() {
        _myCpt=_myCpt-1;
        if(_myCpt<1)
            _myCpt=1;
        showOne(_myCpt);
     });

    $(document).on('click', '.myBtnNext' ,function() {
        _myCpt=_myCpt+1;
        if ($("#"+_myCpt)[0]){
            // Do something if class exists
        } else {
            // Do something if class does not exist
            _myCpt=1;
        }
        showOne(_myCpt);
     });

    $(document).on('click', '.myBtnAll' ,function() {
        showAll();
     });

/** DRAG AND DROP */
    var adjustment;

$("ol.simple_with_animation").sortable({
  group: 'simple_with_animation',
  pullPlaceholder: false,
  // animation on drop
  onDrop: function  ($item, container, _super) {
    var $clonedItem = $('<li/>').css({height: 0});
    $item.before($clonedItem);
    $clonedItem.animate({'height': $item.height()});

    $item.animate($clonedItem.position(), function  () {
      $clonedItem.detach();
      _super($item, container);
    });
  },

  // set $item relative to cursor position
  onDragStart: function ($item, container, _super) {
    var offset = $item.offset(),
        pointer = container.rootGroup.pointer;

    adjustment = {
      left: pointer.left - offset.left,
      top: pointer.top - offset.top
    };

    _super($item, container);
  },
  onDrag: function ($item, position) {
    $item.css({
      left: position.left - adjustment.left,
      top: position.top - adjustment.top
    });
  }
});