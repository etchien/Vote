
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
                      <!-- Boostrap -->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
               <!--  JavaScript / Jquery -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
                <!-- Css -->
  <link rel="stylesheet" type="text/css" href="css/styles.css">

  <title>vote</title>

</head>

<body>
      <div style="text-align: center; font-size: 30px; color: orange;">
        <label id="LblClignotant"><strong>CABINET BOUCHRA CONSULTING</strong></label>
            <script type="text/javascript">
            var signe = -1;
                var clignotementFading = function(){
                    var obj = document.getElementById('LblClignotant');
                        if (obj.style.opacity >= 0.96){
                                signe = -1;     }
                                if (obj.style.opacity <= 0.04){
                                    signe = 1;    }
                              obj.style.opacity = (obj.style.opacity * 1) + (signe * 0.04); };
                        // mise en place de l appel de la fonction toutes les 0.085 secondes
                // Pour arrêter le clignotement : clearInterval(periode);
            periode = setInterval(clignotementFading, 95 );
            </script>
      </div>
      <div>
        <h1><strong>une note pour ton formateur</strong></h1>
      </div>

      <form class="login" action="validation.php" method="post" name="login">
           <img class="mb-4" src="image/images.jpeg" alt="" width="300" height="120">
               <h1 class="login-title"></h1>
                 <input type="text" class="login-input" name="nom" placeholder="nom et prenom" autofocus required="">
                  <input type="email" class="login-input" name="email" placeholder="ton email" required="">
                  <label >
                  <select name="specialite">
                   <option value="Dev_web_mobile">Developpement Web et Mobile</option>
                   <option value="Webmaster">Webmaster</option>
                   <option value="web_Design">Web Design</option>
                   <option value="Infographe">Infographe</option>
                  </select>
                 </label>
              <input type="number" class="login-input" name="note" placeholder="note pour ton formateur" required="">
            <input type="submit" value="VALIDER" name="submit" class="login-button" onclick="show_alert()">
            <script type="text/javascript">
              function show_alert(){
                alert('etes vous sure des informations entrées? sinon réactualisé la page et reprénez')

              }
            </script>
      </form>
</body>

</html>
