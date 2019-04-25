<?php
include "../core/chauffeurC.php";
include "../entities/chauffeur.php";
$chauffeur1C=new ChauffeurC();
$listeChauffeurs=$chauffeur1C->afficherChauffeurs();




//var_dump($listeEmployes->fetchAll());
?>
</table>
<!DOCTYPE html>
<html>

    <head>
        <title>Afficher Chauffeur</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

        <body>

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
                        <li>
                            <a href="index.html"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                        </li>
                        <li >
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

                        <li>
                            <a href="evenement.php"><span class="badge badge-success pull-right">812</span> Evenements</a>
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
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Success</h4>
                            The operation completed successfully</div>
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <ul class="breadcrumb">
                                        <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                                        <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                                        <li>
                                            <a href="#">Livraison</a> <span class="divider">/</span>    
                                        </li>
                                        <li>
                                            <a href="livraison.html" >Afficher Livraison</a> <span class="divider">/</span><li class="active"></li> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Chauffeurs</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
                                    <table id="indextable" class="table table-striped">
                                        <thead>
                                            <form action="rechercheChauffeur.php">
                                            <label class="control-label" for="focusedInput">Recherche</label>
                                            <input type="text" name="recherche" class="muted pull-left">
                                            <button type="submit" class="muted pull-left"><img src="https://img.icons8.com/small/16/000000/search.png"></button>
                                            </form>
<tr>
<th><a href="#" onclick="SortTable(0 ,'T');">Nom</a></th>
<th><a href="#" onclick="SortTable(1 ,'T');">Prenom</th>
<th><a href="#" onclick="SortTable(2 ,'N');">Cin</th>
<th><a href="#" onclick="SortTable(3 ,'N');">Numero de telephone</th>
<th>E-mail</th>
<th><a href="#" onclick="SortTable(5 ,'T');">Etat</th>
<th><a href="#" onclick="SortTable(6 ,'N');">Recclamation</th>
<th>Vehicule</th>
<th>Supprimer</th>
<th>Modifier</th>
</tr>
</thead>
<tbody>
<?PHP
foreach($listeChauffeurs as $row){
    ?>
    <tr>
    
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['cin']; ?></td>
    <td><?PHP echo $row['numero']; ?></td>
    <td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['etat']; ?></td>
    <td><?PHP 
    $nbrecc=$chauffeur1C->suppAutoChauffeur($row['cin']);
        $result=$nbrecc->fetch();
        echo $result[0];    
      ?></td>
    <td><?PHP 
        if (empty($row['vehicule'])) {
            ?>
            <a href="affecterVehicule.php?cin=<?PHP echo $row['cin']; ?>" class="btn btn-primary">
    Affecter Vehicule</a>
            <?php
        }
        else {
            echo $row['vehicule'];
        }
     ?></td>
    <td><form method="POST" action="supprimerChauffeur.php">
    <input type="submit" name="supprimer" value="Supprimer" class="btn btn-primary">
    <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
    </form>
    </td>
    <td><a href="modifierChauffeur.php?cin=<?PHP echo $row['cin']; ?>" class="btn btn-primary">
    Modifier</a></td>
    </tr>
    <?PHP
}

?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                    </div>

        <!--/.fluid-container-->
<script type="text/javascript">
var TableIDvalue = "indextable";
var TableLastSortedColumn = -1;
function SortTable() {
var sortColumn = parseInt(arguments[0]);
var type = arguments.length > 1 ? arguments[1] : 'T';
var dateformat = arguments.length > 2 ? arguments[2] : '';
var table = document.getElementById(TableIDvalue);
var tbody = table.getElementsByTagName("tbody")[0];
var rows = tbody.getElementsByTagName("tr");
var arrayOfRows = new Array();
type = type.toUpperCase();
dateformat = dateformat.toLowerCase();
for(var i=0, len=rows.length; i<len; i++) {
    arrayOfRows[i] = new Object;
    arrayOfRows[i].oldIndex = i;
    var celltext = rows[i].getElementsByTagName("td")[sortColumn].innerHTML.replace(/<[^>]*>/g,"");
    if( type=='D' ) { arrayOfRows[i].value = GetDateSortingKey(dateformat,celltext); }
    else {
        var re = type=="N" ? /[^\.\-\+\d]/g : /[^a-zA-Z0-9]/g;
        arrayOfRows[i].value = celltext.replace(re,"").substr(0,25).toLowerCase();
        }
    }
if (sortColumn == TableLastSortedColumn) { arrayOfRows.reverse(); }
else {
    TableLastSortedColumn = sortColumn;
    switch(type) {
        case "N" : arrayOfRows.sort(CompareRowOfNumbers); break;
        case "D" : arrayOfRows.sort(CompareRowOfNumbers); break;
        default  : arrayOfRows.sort(CompareRowOfText);
        }
    }
var newTableBody = document.createElement("tbody");
for(var i=0, len=arrayOfRows.length; i<len; i++) {
    newTableBody.appendChild(rows[arrayOfRows[i].oldIndex].cloneNode(true));
    }
table.replaceChild(newTableBody,tbody);
} // function SortTable()

function CompareRowOfText(a,b) {
var aval = a.value;
var bval = b.value;
return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
} // function CompareRowOfText()

function CompareRowOfNumbers(a,b) {
var aval = /\d/.test(a.value) ? parseFloat(a.value) : 0;
var bval = /\d/.test(b.value) ? parseFloat(b.value) : 0;
return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
} // function CompareRowOfNumbers()

function GetDateSortingKey(format,text) {
if( format.length < 1 ) { return ""; }
format = format.toLowerCase();
text = text.toLowerCase();
text = text.replace(/^[^a-z0-9]*/,"");
text = text.replace(/[^a-z0-9]*$/,"");
if( text.length < 1 ) { return ""; }
text = text.replace(/[^a-z0-9]+/g,",");
var date = text.split(",");
if( date.length < 3 ) { return ""; }
var d=0, m=0, y=0;
for( var i=0; i<3; i++ ) {
    var ts = format.substr(i,1);
    if( ts == "d" ) { d = date[i]; }
    else if( ts == "m" ) { m = date[i]; }
    else if( ts == "y" ) { y = date[i]; }
    }
d = d.replace(/^0/,"");
if( d < 10 ) { d = "0" + d; }
if( /[a-z]/.test(m) ) {
    m = m.substr(0,3);
    switch(m) {
        case "jan" : m = String(1); break;
        case "feb" : m = String(2); break;
        case "mar" : m = String(3); break;
        case "apr" : m = String(4); break;
        case "may" : m = String(5); break;
        case "jun" : m = String(6); break;
        case "jul" : m = String(7); break;
        case "aug" : m = String(8); break;
        case "sep" : m = String(9); break;
        case "oct" : m = String(10); break;
        case "nov" : m = String(11); break;
        case "dec" : m = String(12); break;
        default    : m = String(0);
        }
    }
m = m.replace(/^0/,"");
if( m < 10 ) { m = "0" + m; }
y = parseInt(y);
if( y < 100 ) { y = parseInt(y) + 2000; }
return "" + String(y) + "" + String(m) + "" + String(d) + "";
} // function GetDateSortingKey()
</script>
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
                <script src="vendors/jquery-1.9.1.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>

