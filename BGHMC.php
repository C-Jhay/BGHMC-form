<?php
include('config.php');
session_start();
?>
<HTML>
<HEAD>
	<STYLE>
	table{
  	text-align: left;
  	font-family: calibri;
  	background-color: #C5E0B3;
  	padding: 70px;
  	border: 1px solid #4CAF50;
  	font-size: 20px;
	}
	tr {
	text-align: left;
	font-family: calibri;	
	}
	input[type=text]{
    color: black;
    padding: 40px 350px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    font-size: 20px;
    font-family: "Times New Roman", Times, serif;
	}
	th{
	font-size: 40px;
	font-family: "Times New Roman", Times, serif;
	text-align: center;	
	}
	td{
	font-size: 40px;
	font-family: "Times New Roman", Times, serif;
	text-align: center;	
	}
	button {
  	background-color: #4CAF50; /* Green */
  	border: none;
  	color: white;
  	padding: 16px 32px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 16px;
  	margin: 4px 700px;
  	transition-duration: 0.4s;
  	cursor: pointer;
	}

	button{
  	background-color: white; 
  	color: black; 
  	border: 2px solid #4CAF50;
	}

	button:hover {
  	background-color: #4CAF50;
  	color: white;
	}
	</STYLE>
<TITLE></TITLE>
<META></META>
<SCRIPT></SCRIPT>
</HEAD>
<BODY> 
<?php
if(isset($_POST['submit'])){
	$_SESSION['protocol'] = ($_POST['protocol']);
	$_SESSION['principal'] = ($_POST['principal']);
	$_SESSION['co'] = ($_POST['co']);
	header ("location: BGHMC2.php");
}
?>
<div>
<form action="" method="POST">
<table width = "100%" border = "0">
	<tr text-align = "center">
		<th>Professional Education & Training Office</th>
		<br></tr>
		<th>TECHNICAL REVIEW FORM</th>
	</tr>
  <tr>
    <label for="protocol"><td>Protocol Title</td></label>
    <th><input class="form-control" type="text" name="protocol" placeholder ="Enter Comments" required></th>
  </tr>
  <tr>
    <label for="principal"><td>Principal Investigator/s</td></label>
    <th><input class="form-control" type="text" name="principal" placeholder ="Enter Comments" required></th>
  </tr>
  <tr>
    <label for="co"><td>Co-Investigator/s</td></label>
    <th><input class="form-control" type="text" name="co" placeholder ="Enter Comments" required></th>
  </tr>
</table>
  <button type="submit" name="submit" value="submit">NEXT</button>
</form>
</div>
</BODY>
</HTML>