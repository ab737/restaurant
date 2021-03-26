<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> Registration Form</title>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body style="background-color: black;">
  <header class="man-header" id="header">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="index.php" class="navbar-brand">KAAY_LEIKEU</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
              
                 <li ><a href="index.php">Accueil</a></li>
                 <li class="active"><a href="#header">Ajouter Restaurant</a></li>

               
               <li> <a href="listepartic.php">Restaurants</a></li>    
               

              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="container">

    <form class="well form-horizontal" method="post" action="insert.php" id="contact_form" style="border-radius: 40px;margin-top: 140PX;">
      <fieldset>

        <!-- Form Name -->
        <legend>
          <center>
            <h2><b> Ajouter Restaurant </b></h2>
          </center>
        </legend><br>

        <!-- Text input-->


        <div class="row">
          <div class="col-md-6">


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label ">Coordonnées</label>
              <div class="col-md-9 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="nom" placeholder="Nom" class="form-control" type="text">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-map-marker "></i></span>
                  <input name="adresse" placeholder="Adresse" class="form-control" type="text">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="nomr" placeholder="Nom restaurateur" class="form-control" type="text">
                </div>
                <label class="col-md-3 control-label ">Description</label>
                <div class="col-md-8 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <textarea name="descriptioncoor" placeholder="Description ...">
                              </textarea>
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>

                    <input name="urlimage" placeholder="Url Image" class="form-control" type="file">

                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-flag "></i></span>
                    <select class="form-control" id="sel2" name="place">
                      <option value="" disabled selected>Choisir la place de l'image</option>

                      <option value="droite">
                        Droite
                      </option>
                      <option value="gauche">
                        Gauche
                      </option>
                      <option value="centre">
                        Centre
                      </option>
                    </select>

                  </div>

                </div>

              </div>

            </div>


            <!-- Text input-->

          </div>

          <div class="col-md-6">
            <!-- Text input-->
            <!-- Text input-->
            <div id="d2">
              <div class="form-group">
                <label class="col-md-3 control-label ">Carte</label>
                <div class="col-md-9 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-flag "></i></span>
                    <select class="form-control" id="sel2" name="indication">
                      <option value="" disabled selected>Choisir l'indication du plat</option>

                      <option value="entree">
                        Entrée 
                      </option>
                      <option value="dessert">
                        Dessert
                      </option>
                      <option value="plat">
                        Plat
                      </option>
                      <option value="fromage">
                        fromage
                      </option>
                    </select>

                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>

                    <input name="descriptionplat" placeholder="Description du plat" class="form-control" type="text">

                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                    <input name="prixplat" placeholder="Prix " class="form-control" type="number">
                  </div>
                </div>
              </div>



              <div id="d2">
                <div class="form-group">
                  <label class="col-md-3 control-label ">Liste menu</label>
                  <div class="col-md-9 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-flag "></i></span>
                      <select class="form-control" id="sel2" name="ordre">
                        <option value="" disabled selected>Choisir l'ordre</option>

                        <option value="prix">
                          Prix
                        </option>
                        <option value="titre">
                          Titre
                        </option>

                      </select>

                    </div>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>

                      <input name="titre" placeholder="Titre ..." class="form-control" type="text">

                    </div>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>

                      <input name="descriptionmneu" placeholder="Description ..." class="form-control" type="text">

                    </div>

                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>

                      <input name="prixmenu" placeholder="Prix " class="form-control" type="number">

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>


          <!-- Button -->


          <div class="form-group pull-right">
            <label class="col-mdl-label "></label>
            <div class="col-md-9"><br>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" value="send" name="ok">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
            </div>
          </div>

      </fieldset>
    </form>
  </div>
  </div><!-- /.container -->
  <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
          © All rights reserved
          <div class="credits">

            Designed by Hot Ice Team <a href="#"></a>
          </div>
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>

  <script src="js/index.js"></script>




  <script type="text/javascript">
    $(function() {

      $('#sel1').change(function() {
        if ($('#sel1').val() == 'yes') {
          $('#d1').show();
        } else {
          $('#d1').hide();
        }
      });

    });
    $(function() {

      $('#sel3').change(function() {
        if ($('#sel3').val() == 'yes') {
          $('#d2').show();
        } else {
          $('#d2').hide();
        }
      });

    });
  </script>

</body>