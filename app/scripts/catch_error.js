/** $get avec js */
       function $_GET(param) {
          var vars = {};
          window.location.href.replace( location.hash, '' ).replace( 
            /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
            function( m, key, value ) { // callback
              vars[key] = value !== undefined ? value : '';
            }
          );

          if ( param ) {
            return vars[param] ? vars[param] : null;  
          }
          return vars;
        }
          
       //snackbar
        $(document).ready(function(){

          var deco_var = decodeURI($_GET('ok'));
          var deco_var2 = decodeURI($_GET('erreur'));


          if(deco_var!=='null'){
            setTimeout(function(){
                    var notification = document.querySelector('.mdl-js-snackbar');
                      var data = {
                        message: deco_var,
                        actionHandler: function(event) {},
                        actionText: ' ',
                        timeout: 5000
                      };
                    notification.MaterialSnackbar.showSnackbar(data);
            }, 1500);
          }

          if(deco_var2!=='null'){
            setTimeout(function(){
                    var notification = document.querySelector('.mdl-js-snackbar');
                      var data = {
                        message: deco_var2,
                        actionHandler: function(event) {},
                        actionText: ' ',
                        timeout: 5000
                      };
                    notification.MaterialSnackbar.showSnackbar(data);
            }, 1500);
          }
            
        });