<!DOCTYPE html>

<html>
  <head>
    <title>remerciement</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
                      <!-- Boostrap -->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
               <!--  JavaScript / Jquery -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/remerciement.css">
  </head>
  <body>
  <div>
    <h3>Merci cher étudiant <br>pour votre participation</h3>

    <div id="DivClignotante"><a href="resultat.php"><strong>Resultat des sondages</strong></a></div>
          <p><br />
          <script type="text/javascript">
          var clignotement = function(){
             if (document.getElementById('DivClignotante').style.visibility=='visible'){
                document.getElementById('DivClignotante').style.visibility='hidden';
             }
             else{
             document.getElementById('DivClignotante').style.visibility='visible';
             }
          };
          // mise en place de l appel de la fonction toutes les 0.8 secondes
          // Pour arrêter le clignotement : clearInterval(periode);
          periode = setInterval(clignotement, 800);
          </script></p>

  </div>

  </body>
</html>
