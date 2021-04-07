<?php
 echo "hello";



?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <style>
          section{
            background-image: url(img/backgroun.jpg);
            background-repeat: no-repeat;
            background-size: cover;
          }
          form{
              height: 750px;
          }
      </style>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <!--login-->
        <section id="login" class="login">
            <div class="container ">
                <div class="row center">
                    <form class="col s12">
                        <h3 class="light teal-text text-lighten-1 center">LOGIN</h3>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telephone</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                        <button type="submit" class="btn tea">Login</button>
                    </form>
                </div>
            </div>
        </section>
        <!--Input Data-->
        <section id="data" class="data">
            <div class="container">
                <div class="input-field col s12">
                    <select>
                      <optgroup label="">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                      </optgroup>
                      <optgroup label="team 2">
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                      </optgroup>
                    </select>
                    <label>Optgroups</label>
                </div>
            </div>
        </section>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
          const data = document.querySelectorAll('.data');
          M.Data.init(data); 
      </script>
    </body>
  </html>