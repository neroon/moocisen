var nbClickMax=3;
        var nbClick=0;
    
        function compter()
        {
            nbClick++;
            var nbTentativesrestantes = parseInt(document.getElementById("tentative").innerHTML);
            nbTentativesrestantes=nbTentativesrestantes-1;
            document.getElementById("tentative").innerHTML =nbTentativesrestantes;
            if(nbClick>=nbClickMax)
            {
                alert('Nombre de clic maximum atteint');
                // On désactive les clics sur les areas
                $( "area" ).each(function() {
                    $(this).attr("onclick","inutile()");
                });
                // On désactive les clics sur l'image
                $("#fauxcv").attr("onclick","inutile()"); 
            }

        }

        function afficheTitle(title){
            alert(title);
        }

        function augmenteScore(title){
            var score = parseInt(document.getElementById("score").innerHTML);
            score = score+20;
            document.getElementById("score").innerHTML =score;
            $("#"+title).attr("onclick","dejaTrouve()");
        }

        function dejaTrouve(){
            alert("Cette erreur à déjà été trouvée");
        }

        function inutile(){

        }


        function diminueScore(){
            var score = parseInt(document.getElementById("score").innerHTML);
            if(score>=20){
                score=score-20;
            }
            document.getElementById("score").innerHTML =score;
        }