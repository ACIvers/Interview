<?php
require_once('config.php');
require('curent.php');
?> 
<!DOCTYPE html> 
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
                                <!-- Form Name -->                                 
                                <legend>Modify existing question</legend>                                 
                                <!-- Search input-->                                 
                                <div class="form-group"> 
                                    <label class="control-label  col-sm-4" for="searchinput">Select Category</label>                                     
                                    <div class="col-sm-4"> 
                                        <div class="form-group"> 
                                            <div class="col-sm-3 col-lg-10"> 
                                                <select id="selectbasic" name="selectcateg" class="form-control">
                                                    <?php
														mysql_connect('localhost', 'root', '');
														mysql_select_db('aci');
														$sql2 = "SELECT * FROM category order by id";
														$result2 = mysql_query($sql2);
														while ($row = mysql_fetch_array($result2)) {
   															 echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
																									}
														echo "</select>";
													?> 
                                                    
                                                </select>                                                 
                                            </div>                                             
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                                <!-- Button -->                                 
                                <div class="form-group"> 
                                    <label class="control-label  col-sm-4" for="singlebutton"></label>                                     
                                    <div class="col-sm-4"> 
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">Find</button>                                         
                                    </div>                                     
                                </div>                                 
                            </fieldset>                             
                        </form>                         
                        <fieldset> 
                            <!-- Form Name -->                             
                            <form class="form-horizontal"> 
                                <fieldset> 
                                    <!-- Form Name -->                                     
                                    <legend>Add Question</legend>                                     
                                    <!-- Textarea -->                                     
                                    <div class="form-group"> 
                                        <label class="col-md-4 control-label" for="textarea">Question Text</label>                                         
                                        <div class="col-md-4"> 
                                            <textarea class="form-control" id="textarea" name="textarea"></textarea>                                             
                                        </div>                                         
                                    </div>                                     
                                    <!-- Select Basic -->                                     
                                    <div class="form-group"> 
                                        <label class="col-md-4 control-label" for="selectbasic">Skill Level Selection</label>                                         
                                        <div class="col-md-4"> 
                                            <select id="selectbasic" name="selectskill" class="form-control"> 
                                                 <?php
														mysql_connect('localhost', 'root', '');
														mysql_select_db('aci');
														$sql1 = "SELECT * FROM skill WHERE order by id";
														$result1 = mysql_query($sql1);
														while ($row = mysql_fetch_array($result1)) {
   															 echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
																									}
														echo "</select>";
													?>                                                 
                                            </select>                                             
                                        </div>                                         
                                    </div>                                     
                                    <!-- Select Basic -->                                     
                                    <div class="form-group"> 
                                        <label class="col-md-4 control-label" for="selectbasic">Select Category</label>                                         
                                        <div class="col-md-4"> 
                                            <select id="selectbasic" name="selectcateg" class="form-control"> 
                                                 <?php
														mysql_connect('localhost', 'root', '');
														mysql_select_db('aci');
														$sql2 = "SELECT * FROM category order by id";
														$result2 = mysql_query($sql2);
														while ($row = mysql_fetch_array($result2)) {
   															 echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
																									}
														echo "</select>";
													?>                                                
                                            </select>                                             
                                        </div>                                         
                                    </div>                                     
                                    <!-- Select Basic -->                                     
                                    <div class="form-group"> 
                                        <label class="col-md-4 control-label" for="selectbasic">Question Type</label>                                         
                                        <div class="col-md-4"> 
                                            <select id="selectbasic" name="selectbasic" class="form-control"> 
                                                <option value="1">Single choise</option>                                                 
                                                <option value="2">Multiple choise</option>                                                 
                                                <option value="3">Text</option>                                                 
                                            </select>                                             
                                        </div>                                         
                                    </div>                                     
                                    <!-- Textarea -->                                     
                                    <div class="form-group"> 
                                        <label class="col-md-4 control-label" for="textarea">Possible answers</label>                                         
                                        <div class="col-md-4"> 
                                            <textarea class="form-control" id="textarea" name="textarea"></textarea>                                             
                                        </div>                                         
                                    </div>                                     
                                    <!-- Button -->                                     
                                    <div class="form-group"> 
                                        <label class="col-md-4 control-label" for="singlebutton"></label>                                         
                                        <div class="col-md-4"> 
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Add Row</button>                                             
                                        </div>                                         
                                    </div>                                     
                                    <!-- Button -->                                     
                                    <div class="form-group"> 
                                        <label class="col-md-4 control-label" for="singlebutton"></label>                                         
                                        <div class="col-md-4"> 
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>                                             
                                        </div>                                         
                                    </div>                                     
                                </fieldset>                                 
                            </form>                             
                </div>                 
                <!-- Bootstrap core JavaScript
    ================================================== -->                 
                <!-- Placed at the end of the document so the pages load faster -->                 
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>                 
                <script>window.jQuery || document.write(<script src="../../assets/js/vendor/jquery.min.js"></script>                                )
            </script>             
            <script src="../../dist/js/bootstrap.min.js"></script>             
            <!-- Just to make our placeholder images work. Dont actually copy the next line! -->             
            <script src="../../assets/js/vendor/holder.min.js"></script>             
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->             
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>             
    </body>     
</html>
