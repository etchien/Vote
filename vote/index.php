
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
                   <!-- Boostrap -->
                       <!-- Boostrap -->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
               <!--  JavaScript / Jquery -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
                <!-- Css -->
  <link rel="stylesheet" type="text/css" href="css/index.css">

  <title>Site de note des formateurs</title>
</head>

  <body>
      <header>
        <marquee>cette application est un test pour connaitre la capacité de transmission des connaissances de chaque formateur alors soyez honnete..! on note une seule fois .! Merci pour votre comprehension..
        </marquee>
      </header>

   <div id="DivClignotante"><a href="evenements/vote.php"><strong>Veillez cliquez ICI pour noter</strong></a></div>
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

          <div>
               <img src="image/aej.JPG">
          </div>

</body>

</html>
