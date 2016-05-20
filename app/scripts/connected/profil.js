// --------------- REGEX --------------------
$.validator.addMethod("usernameRegex", function(value, element) {
  return this.optional(element) || /^[a-z\u00E0-\u00FC_.+-]+$/i.test(value);
});
$.validator.addMethod("mailRegex", function(value, element) {
  return this.optional(element) || /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/i.test(value);
});
    
    // --------------- Login JqueryValidator ---------
    var login = $("#myform1");
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
          surname: {
              required: true,
              usernameRegex: true,
              minlength: 2,
          },
          pseudo : {
              required: true,
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
        surname : {
            required: "surname required",
        },
        name: {
            required: "name required",
        },
        name: {
            required: "name required",
        },
     }
    });
        // --------------- Login JqueryValidator ---------
    var myform2 = $("#myform2");
    myform2.validate({
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
          oldPassword : {
              required: true,
              minlength: 4,
          },
          newPassword: {
              required: true,
              minlength: 4,
          },
      },
      messages: {
        oldPassword: {
            required: "Ancien mot de passe required",
        },
        newPassword : {
            required: "Nouveau mot de passe required",
        },
     }
    });

function goMooc(idmooc){
   location.href = "../mooc.php?idM="+idmooc+"&idC=0&numC=0";
}
	
function callGraph(idmooc){
        //alert(idmooc);
        var ctx = document.getElementById("myChart");
        $.ajax({
                     type: "POST",
                     url: "../../includes/requestgraph.php",
                     dataType: 'json',
                     data: { data:idmooc },
                     success: function(data) {
                        //alert("success");
                        //console.log(data); // REGARDER DEBUG
                        console.log(data[0][0]["titre"]); // EXEMPLE
                        console.log(data[1][0]); // EXEMPLE
                        var titles = new Array();
                        data[0].forEach(function(elem,index){
                            titles[index] = elem.titre;
                        })

                        var pourcentage = new Array();
                        data[1].forEach(function(elem,index){
                            pourcentage[index] = elem;
                        })
                        
                        //Get context with jQuery - using jQuery's .get() method.
                        $(".removechart").html('<canvas id="myChart" height="200" width="400" ></canvas>');
                        // reinit canvas
                       
                        var ctx = $("#myChart");
                         
                        //This will get the first returned node in the jQuery collection.
                         var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: titles,
                            datasets: [{
                                label: "% de réussite",
                                backgroundColor: "rgba(26,187,156,0.4)",
                                data: pourcentage
                            }],
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true,
                                        max:100
                                    }
                                }]
                            }
                        }
                    });

                    } 
                  
                });
    }