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

 $(document).keydown(function(e) {
          //console.log("---------"+e.which);
          var retour =e.which;
          if(retour==8){
          //  $(".mdl-cell").css('width', '30%');
            $(".mdl-cell").show();
          }
        });

     function filter(){
     }


      function filter2(){
                var chaine = $(".search").val().toLowerCase();
                //console.log(chaine);
                if(chaine.length == 0){
                    $(".namesearch").each(function(){
                        $(this).parents(".mdl-cell").removeClass("hide").addClass("show");
                    });
                }
                if (chaine.length > 1){
                    if(true == true){
                       //$(".mdl-cell").show();
                        $(".namesearch").each(function(){
                            var n = $(this).text().toLowerCase().search(chaine);
                            if(n != -1){
                                $(this).parent().parent().show();    

                            }
                            else{    
                                //$(this).parent().parent().css('width', '10px');                          
                                $(this).parent().parent(".mdl-cell").hide();

                            }
                         
                        });
                    }
                   /* else{
                        $(".matiere").each(function(){
                            
                            var n = $(this).text().toLowerCase().search(chaine);
                            if(window.greeting == 8){
                                $(this).parents(".mdl-cell").removeClass("hide").addClass("show");
                            }
                            else{
                                $(this).parents(".mdl-cell").removeClass("show").addClass("hide");
                                console.log($(this).text().toLowerCase());
                            }
                        });
                    }*/
                }
            }