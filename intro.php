<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Project Worlds || TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Test Your Skill</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group" style="bgcolor:yellow">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="row footer">

<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>





<div class="col-md-4 panel">
<div class="form-group">
  CAPES is a successful, state of the art, rational, online evaluation system.
It is extremely effective automated, multi-user software to help the organizations meet their varied examination needs with a competitive edge.
Capes ensures scientific, rational method for conducting the examinations in addition to the requisite confidentiality and security features.
Its GUI based Software with Twin Architectures, for Web and Client/Server environment provides cost, time & administrative benefits for examinations.
The Knowledge & Skill Test with its comprehensive and constantly updated question bank helps assess and retain the best talents in industry.
The Online Data Entry/Typing Speed Test helps clients monitor and judge accurate performances.
Our mission is to make CAPES a premier technology enabled Online Evaluation and Examination software solution in the IT world.
National Informatics Centre, New Delhi.  
</div>

</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->


</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->



<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		
		 <div class="col-md-5">
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">AISHWARYA DHUMAL</h4>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">9702341554</h4>
		<h4 style="font-family:'typo' ">aishwaryadhumal55@gmail.com</h4>
		<h4 style="font-family:'typo' ">TERNA ENGINEERING COLLEGE NERUL,NAVI MUMBAI</h4></div>
		
		<div class="col-md-5">
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">DARSHANA BHOIR</h4>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">8369324029</h4>
		<h4 style="font-family:'typo' ">darshubhoir666@gmail.com</h4>
		<h4 style="font-family:'typo' ">TERNA ENGINEERING COLLEGE NERUL,NAVI MUMBAI</h4></div>
		
		<div class="col-md-5">
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">VARSHA WAKCHAURE</h4>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">9004741300</h4>
		<h4 style="font-family:'typo' ">wakchaurevarsha12@gmail.com</h4>
		<h4 style="font-family:'typo' ">TERNA ENGINEERING COLLEGE NERUL,NAVI MUMBAI</h4></div>
		
		<div class="col-md-5">
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">SUGANDHA BANDGAR</h4>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">7738725815</h4>
		<h4 style="font-family:'typo' ">sugandha.bandgar1997@gmail.com</h4>
		<h4 style="font-family:'typo' ">TERNA ENGINEERING COLLEGE NERUL,NAVI MUMBAI</h4></div>	
       </div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>



</body>
</html>
