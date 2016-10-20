<?php
require_once('config.php');
require_once('curent.php');
?>
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
          <img src="ACI-horiz-white-CMYK.png" alt=""  width="280" height="47"/>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a>Hello there, <?php currentUser(); ?></a></li> 
			
            <li><a href="logout.php">Log Out </a></li>
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
            <li><a href="../dashboard/CreateAccount.php">Create Account</a></li>
            <li><a href="../dashboard/Question.php">Question Options</a></li>
            <li class="active"><a href="../dashboard/AssignTest.php">Test Options</a><span class="sr-only">(current)</span></li>
            
          </ul>
</div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <form class="form-horizontal">

<form class="form-horizontal">

<!----- Assign test ------------>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Test assignation</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="userAssign">Candidate username:</label>  
  <div class="col-md-5">
  <input id="userAssign" name="userAssign" type="text" placeholder="username" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Assign reviewer:</label>  
  <div class="col-md-5">
  <input id="reviewerid" name="reviewerid" type="text" placeholder="reviewer username" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select skill</label>
  <div class="col-md-5">
    <select id="selectskill" name="selectskill" class="form-control">
      <option value="1">Java</option>
      <option value="2">MsSQL</option>
      <option value="3">C++</option>
    </select>
  </div>
</div>

<!-- Appended Input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="duration">Duration</label>
  <div class="col-md-5">
    <div class="input-group">
      <input id="duration" name="duration" class="form-control" placeholder="15:00" type="text">
      <span class="input-group-addon">minutes</span>
    </div>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="assign" name="assign" class="btn btn-default">Assign test</button>
  </div>
</div>

</fieldset>
</form>


<!----------ENG Assign test ------------>



<!--------- Review test ---------->

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Review test</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reviewcandidate">Candidate username</label>  
  <div class="col-md-5">
  <input id="reviewcandidate" name="reviewcandidate" type="text" placeholder="username" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="review"></label>
  <div class="col-md-4">
    <button id="review" name="review" class="btn btn-default">Review Test</button>
  </div>
</div>

</fieldset>
</form>


<!----------END  Review test ----------->


    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Dont actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>