<?php
include('config.php');
session_start();
$protocol = $_SESSION['protocol'];
$principal = $_SESSION['principal'];
$co = $_SESSION['co'];
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
    padding: 20px 300px;
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
  font-size: 20px;
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
  p {
    text-align: left;
    font-family: calibri;
    text-align: left;
    background-color: #C5E0B3;
    border: 1px solid #4CAF50;
    font-size: 15px;
  }
  </STYLE>
<TITLE></TITLE>
<META></META>
<SCRIPT></SCRIPT>
</HEAD>
<BODY>
  <?php
if(isset($_POST['submit'])){
  $_SESSION['A_comment_1'] = ($_POST['A_comment_1']);
  $_SESSION['A_comment_2'] = ($_POST['A_comment_2']);
  $_SESSION['A_comment_3'] = ($_POST['A_comment_3']);
  $_SESSION['A_comment_4'] = ($_POST['A_comment_4']);
  $_SESSION['A_choice_1'] = ($_POST['A_choice_1']);
  $_SESSION['A_choice_2'] = ($_POST['A_choice_2']);
  $_SESSION['A_choice_3'] = ($_POST['A_choice_3']);
  $_SESSION['A_choice_4'] = ($_POST['A_choice_4']);
  header ("location: BGHMC3.php");
}
?>
<p>
  	Instructions to the TECHNICAL REVIEWER:
    <br></br>
  	Each review needs to be explicit and comprehensive. For each section of the protocol, the reviewer should ask the question, “Have they done it correctly?” Please place a check mark on the yes or no column as appropriate.
    <br></br>
  	This provides guidance for the areas we would like you to comment on. Depending on your area of expertise, it is to be used as a guide only. We do not expect you to comment on every question but would be grateful if you can complete as many boxes are possible. 
  </p>
  <div>
    <form action="" method="POST">
<table style="width:100%">
	<tr>
    	<b style="font-family: "Times New Roman", Times, serif;">Proposal Title:</b>
    	<th>Criterion</th> 
    	<td>Yes</td> 
    	<td>No</td> 
    	<td>Reviewer’s Comments</td> 
  </tr>
  <tr>
    <td>A.	Statement of the research question/problem</td>
    <th><input type="radio" name="A_choice_1" value="yes" required></th>
    <th><input type="radio" name="A_choice_1" value="no" required></th>
    <th><input class="form-control" type="text" name="A_comment_1" required></th>
  </tr>
  <tr>
    <td>1.	Research problem and sub-problems are stated in clear and specific terms</td>
    <th><input type="radio" name="A_choice_2" value="yes" required></th>
    <th><input type="radio" name="A_choice_2" value="no" required></th>
    <th><input class="form-control" type="text" name="A_comment_2" required></th>
  </tr>
  <tr>
    <td>2.	Adequate discussion of the gaps in knowledge that will be filled in by the proposed research </td>
    <th><input type="radio" name="A_choice_3" value="yes" required></th>
    <th><input type="radio" name="A_choice_3" value="no" required></th>
    <th><input class="form-control" type="text" name="A_comment_3" required></th>
  </tr>
  <tr>
    <td>3.	Significance of the research question explained-contribution of the research results to the practice of medicine/public health, etc. presented; discussed what good it will do to answer the research question/problem</td>
    <th><input type="radio" name="A_choice_4" value="yes" required></th>
    <th><input type="radio" name="A_choice_4" value="no" required></th>
    <th><input class="form-control" type="text" name="A_comment_4" required></th>
  </tr>
</table>
<button type="submit" name="submit" value="submit">NEXT</button>
</form>
</div>
</BODY>
</HTML>