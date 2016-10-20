<?php
require_once('config.php');
require('curent.php');
?> 
<!doctype html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->         
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <link rel="icon" href="../../favicon.ico"> 
        <title>ACI Dashboard</title>         
        <!-- Bootstrap core CSS -->         
        <link href="../dist/css/bootstrap.min.css" rel="stylesheet"> 
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="dashboard.css" rel="stylesheet"> 
        <!-- Just for debugging purposes. Dont actually copy these 2 lines! -->         
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->         
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>         
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->         
    </head>     
    <body> 
        <nav class="navbar navbar-inverse navbar-fixed-top"> 
            <div class="container-fluid"> 
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>                     
                    <img src="ACI-horiz-white-CMYK.png" alt="" width="280" height="47" /> 
                </div>                 
                <div id="navbar" class="navbar-collapse collapse"> 
                    <ul class="nav navbar-nav navbar-right"> 
                        <li> 
                            <a>Hello there,<?php currentUser(); ?></a> 
                        </li>                         
                        <li> 
                            <a href="logout.php">Log Out</a> 
                        </li>                         
                    </ul>                     
                    <form class="navbar-form navbar-right"> 
                        <input type="text" class="form-control" placeholder="Search..."> 
                    </form>                     
                </div>                 
            </div>             
        </nav>         
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-sm-3 col-md-2 sidebar"> 
                    <ul class="nav nav-sidebar"> 
                        <li> 
                            <a href="../dashboard/CreateAccount.php">Create Account</a> 
                        </li>                         
                        <li class="active"> 
                            <a href="../dashboard/Question.php">Question Options</a> 
                            <span class="sr-only">(current)</span> 
                        </li>                         
                        <li> 
                            <a href="../dashboard/AssignTest.php">Test Options</a> 
                        </li>                         
                    </ul>                     
                </div>                 
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
                    <form class="form-horizontal"> 
                        <form class="form-horizontal"> 
                            <fieldset> 
                                <div class="panel panel-default panel-table"> 
                                    <div class="panel-heading"> 
                                        <div class="row"> 
                                            <div class="col col-xs-6"> 
                                                <h3 class="panel-title">Browse Questions</h3> 
                                            </div>                                             
                                            <div class="col col-xs-6 text-right"> 
                                                <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>                                                 
                                            </div>                                             
                                        </div>                                         
                                    </div>                                     
                                    <div class="panel-body"> 
                                        <table class="table table-striped table-bordered table-list"> 
                                            <thead> 
                                                <tr> 
                                                <th><em class="fa fa-cog"></em></th>
                                                    <th>ID</th> 
                                                    <th>Question</th> 
                                                    <th>Skill</th> 
                                                    <th>Level</th> 
                                                    <th>Answer 1</th> 
                                                    <th>Correct 1</th> 
                                                    <th>Answer 2</th> 
                                                    <th>Correct 2</th> 
                                                    <th>Answer 3</th> 
                                                    <th>Correct 3</th> 
                                                    <th>Answer 4</th> 
                                                    <th>Correct 4</th> 
                                                </tr>                                                 
                                            </thead>                                             
                                            <tbody> 
                                            <tr>
                          
                                                <?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'aci';
mysqli_select_db($conn,$dbname);

$query = "SELECT * FROM question";
$result = mysqli_query($conn,$query) 
or die(mysqli_error(die)); 


while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) 
{ 
echo "<tr> 
<td align='center'>
<a class='btn btn-default'><em class='fa fa-pencil'>Modify</em></a>
<a class='btn btn-danger'><em class='fa fa-trash'>Delete</em></a>
</td>";
echo "<td>" . $row['id'] . "</td>"; 
echo "<td>" . $row['text'] . "</td>"; 
echo "<td>" . $row['category_id'] .  "</td>"; 
echo "<td>" . $row['skill_id'] . "</td>";
print "<td>" . $row['level'] . "</td>";
print "<td>" . $row['answer1'] . "</td>";
print "<td>" . $row['rightness1'] . "</td>";
print "<td>" . $row['answer2'] . "</td>"; 
print "<td>" . $row['rightness2'] . "</td>"; 
print "<td>" . $row['answer3'] . "</td>";
print "<td>" . $row['rightness3'] . "</td>";
print "<td>" . $row['answer4'] . "</td>"; 
print "<td>" . $row['rightness4'] . "</td>"; 
print "</tr>"; 
} 
print "</table>"; 
?> 
                                    </div>                                     
                                    <div class="panel-footer"> 
                                        <div class="row"> 
                                            <div class="col col-xs-4">Page 1 of 5
</div>                                             
                                            <div class="col col-xs-8"> 
                                                <ul class="pagination hidden-xs pull-right"> 
                                                    <li>
                                                        <a href="#">1</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href="#">2</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href="#">3</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href="#">4</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href="#">5</a>
                                                    </li>                                                     
                                                </ul>                                                 
                                                <ul class="pagination visible-xs pull-right"> 
                                                    <li>
                                                        <a href="#">«</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href="#">»</a>
                                                    </li>                                                     
                                                </ul>                                                 
                                            </div>                                             
                                        </div>                                         
                                    </div>                                     
                                </tbody>                                 
                            </table>                             
                            <!-- Form Name -->                                                          
                            <!-- Search input-->                             
                            <div class="form-group"> 
</div>                             
                            <!-- Button -->                             
                            <div class="form-group"> 
</div>                             
                        </fieldset>                         
                    </form>                     
                    <fieldset> 
                        <!-- Form Name -->                         
                        <form class="form-horizontal"> 
</form>                         
                </div>                 
                <!-- Bootstrap core JavaScript
    ================================================== -->                 
                <!-- Placed at the end of the document so the pages load faster -->                 
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>                 
                <script>window.jQuery || document.write(<script src="../../assets/js/vendor/jquery.min.js"></script>                                                                                                                                                                                )
            </script>             
            <script src="../../dist/js/bootstrap.min.js"></script>             
            <!-- Just to make our placeholder images work. Dont actually copy the next line! -->             
            <script src="../../assets/js/vendor/holder.min.js"></script>             
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->             
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>             
    </body>     
</html>