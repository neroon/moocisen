/*!
 *
 *  Google
 *  Copyright 2015 Google Inc. All rights reserved.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *    https://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License
 *
 */
 

		

/** chart js */
    var ctx = document.getElementById("myChart");

	function callGraph(idmooc){
        //alert(idmooc);
        var ctx = document.getElementById("myChart");
        $.ajax({
                     type: "POST",
                     url: "../includes/requestgraph.php",
                     dataType: 'json',
                     data: { data:idmooc },
                     success: function(data) {
                        alert("success");
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
                            type: 'radar',
                            data: mydata,
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });

                    } 
                  
                });
    }

    var mydata = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "rgba(179,181,198,0.2)",
                borderColor: "rgba(179,181,198,1)",
                pointBackgroundColor: "rgba(179,181,198,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(179,181,198,1)",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                backgroundColor: "rgba(255,99,132,0.2)",
                borderColor: "rgba(255,99,132,1)",
                pointBackgroundColor: "rgba(255,99,132,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(255,99,132,1)",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]
    };


    var myChart = new Chart(ctx, {
        type: 'radar',
        data: mydata,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
