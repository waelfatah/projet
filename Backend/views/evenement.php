<?PHP
include "../entities/evennement.php";
include "../core/evennementC.php";
ob_start();
?>



<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <meta charset="utf-8">
        <title>Evenements</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="controle.js"></script>
    </head>
    
    <body>
        <form method="POST" action="#">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Wael Fatah <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li >
                            <a href="index.html"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                        </li>
                        <li>
                            <a href="form.html"><i class="icon-chevron-right"></i> Forms</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="icon-chevron-right"></i> Tables</a>
                        </li>
                        <li>
                            <a href="buttons.html"><i class="icon-chevron-right"></i> Buttons & Icons</a>
                        </li>
                        <li>
                            <a href="editors.html"><i class="icon-chevron-right"></i> WYSIWYG Editors</a>
                        </li>
                        <li>
                            <a href="interface.html"><i class="icon-chevron-right"></i> UI & Interface</a>
                        </li>
                        <li class="active">
                            <a href="evenement.php"><span class="badge badge-success pull-right">2</span> Evennements</a>
                        </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Livraison <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">

                                    <li>
                                        <a href="Ajouter_chauffeur.html">Ajouter Chauffeur</a>
                                    </li>
                                    <li>
                                        <a href="afficherChauffeur.php">Afficher Chauffeur</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="Ajouter_vehicule.html">Ajouter Vehicule</a>
                                    </li>
                                    <li>
                                        <a href="afficherVehicule.php">Afficher Vehicule</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="afficherLivraison.php">Afficher Livraison</a>
                                    </li>
                                </ul>
                            </li>
                        <li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">2,221</span> Messages</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                        </li>
                    </ul>
                </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Evenements</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" >
                                      <fieldset>
                                        <legend>Ajouter Evenement</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Nom de l'evenement </label>
                                          <div class="controls">
                                            <input name="nom" type="text" class="span6" id="nom"  data-provide="typeahead" data-items="4" >
                                            
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="date01">A partir du</label>
                                          <div class="controls">
                                            <input name="date_deb" type="date"  id="date01" placeholder="Cliquer pour Calendrier">
                                            <p class="help-block"></p>
                                          </div>
                                        </div>


                                        <div class="control-group">
                                          <label class="control-label" for="date01">Jusqu'au</label>
                                          <div class="controls">
                                            <input name="date_fin" type="date" id="date02" placeholder="Cliquer pour Calendrier">
                                            <p class="help-block"></p>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label"  for="select01">Boutiques</label>
                                          <div class="controls">
                                            <select id="select01" type="text" name="boutiques" class="chzn-select">
                                                <option>Selectionnez</option>
                                              <option>Tunis</option>
                                              <option>Ben arous</option>
                                              <option>Sousse</option>
                                              <option>Sfax</option>
                                              <option>Toutes</option>
                                            </select>
                                            <p class="help-block">Commencez a ecrire pour activer l'auto-remplissage!</p>
                                          </div>

                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">File input</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" type="file">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Description </label>
                                          <div class="controls">
                                            <input name="description" type="text" class="span6" id="description"  data-provide="typeahead" data-items="4" >
                                            
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <input type="submit" name="Ajouter" value="Ajouter" onclick="envoyer();" class="btn btn-primary">
                                          <a href="afficherEvennement.php " class="btn btn-primary">Afficher</a>
                                          <button type="reset" class="btn">Annuler</button>

                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

</form>
<?PHP
if (isset($_POST['Ajouter']) and isset($_POST['nom']) and isset($_POST['date_deb']) and isset($_POST['date_fin']) and   isset($_POST['boutiques']) and isset($_POST['description'])){


    $d1=$_POST['date_deb'];
    $d2=$_POST['date_fin'];
    $today=date("Y-m-d");
    

    if($d1<=$today)
    {?>
        
                                    <div class="alert alert-error alert-block">
                                        <a class="close" data-dismiss="alert" href="#">×</a>
                                        <h4 class="alert-heading">Erreur!</h4>
                                        Vous ne pouvez pas ajouter un evennement aujourdhui ou inserer une date inferieure
                                    </div>
        <?php
    }

    else
    {

    if($d1>$d2)
    {
        ?>
                                    <div class="alert alert-error alert-block">
                                        <a class="close" data-dismiss="alert" href="#">×</a>
                                        <h4 class="alert-heading">Erreur!</h4>
                                        Verifier les dates de l'evenement 
                                    </div>
        <?php
    }

    else

    {



$evennement1=new evennement($_POST['nom'],$_POST['date_deb'],$_POST['date_fin'],$_POST['boutiques'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$evennement1C=new EvennementC();
$evennement1C->ajouterEvennement($evennement1);
header('Location: afficherEvennement.php');
ob_end_flush();
    }
}
}else{
    //echo "verifier les champs";
}
//*/

?>
        <!--/.fluid-container-->
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

    <script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/form-validation.js"></script>
        
    <script src="assets/scripts.js"></script>
        <script>

    jQuery(document).ready(function() {   
       FormValidation.init();
    });
    

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>