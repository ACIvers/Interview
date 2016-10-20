<!DOCTYPE html> 
<html lang="en" wp-site wp-site-master-page="testingpage.php"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->         
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <link rel="icon" href="../favicon.ico"> 
        <title>ACI Dashboard</title>         
        <!-- Bootstrap core CSS -->         
        <link href="../dist/css/bootstrap.min.css" rel="stylesheet"> 
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="dashboard.css" rel="stylesheet"> 
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->         
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->         
        <script src="../assets/js/ie-emulation-modes-warning.js"></script>         
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
                        <li></li>                         
                        <li></li>                         
                        <li></li>                         
                        <li></li>                         
                    </ul>                     
                    <form class="navbar-form navbar-right"> 
</form>                     
                </div>                 
            </div>             
        </nav>         
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-sm-3 col-md-2 sidebar"> 
                    <ul class="nav nav-sidebar"> 
                        <li class="inactive">
                            <a>Question 1</a>
                        </li>
                        <li class="inactive">
                            <a> Question 2 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 3<span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 4 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 5 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 6 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 7 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 8 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 9 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 10 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 12 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 13 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 14 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 15 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 16 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 17 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 18 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 19 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="inactive">
                            <a> Question 20 <span class="sr-only">(current)</span></a>
                        </li>                         
                        <li class="active">
                            <a>View results<span class="sr-only">(current)</span></a>
                        </li>                         
                    </ul>                     
                </div>                 
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <center>
                        <h3>Congratulations! You have finished the test. Click the button bellow to get your results.</h3>
                    </center>
                    <div>
                        <div class="container_12">
                            <strong><center>
</center></strong>
                        </div>
                    </div>
                    <col class="pg-empty-placeholder"> 
                    <h3> <form class="form-horizontal"> 
</form> </h3> 
                    <h1></h1>
                    <div class="clearfix clear-columns"></div>
                    <div class="clearfix clear-columns"></div>
                    <div class="clearfix clear-columns"></div>
                    <div class="row">
</div>
                    <Center>
                        <button type="button" class="btn btn-default" onclick="toggler('results');">Get test results
</button>
                        <script>function toggler(divId) {
    $("#" + divId).toggle();
}</script>
                        <div class="col" id="result" class="hidden">
                            <h4><b>20/20</b></h4>
                        </div>
                    </Center>                     
                </div>                 
                <!-- Bootstrap core JavaScript
    ================================================== -->                 
                <!-- Placed at the end of the document so the pages load faster -->                 
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>                 
                <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>                 
                <script src="../../dist/js/bootstrap.min.js"></script>                 
                <!-- Just to make our placeholder images work. Don't actually copy the next line! -->                 
                <script src="../../assets/js/vendor/holder.min.js"></script>                 
                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->                 
                <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>                 
    </body>     
</html>
