<?php
include('config.php');
session_start();
$protocol = $_SESSION['protocol'];
$principal = $_SESSION['principal'];
$co = $_SESSION['co'];
$A_comment_1 = $_SESSION['A_comment_1'];
$A_comment_2 = $_SESSION['A_comment_2'];
$A_comment_3 = $_SESSION['A_comment_3'];
$A_comment_4 = $_SESSION['A_comment_4'];
$A_choice_1 = $_SESSION['A_choice_1'];
$A_choice_2 = $_SESSION['A_choice_2'];
$A_choice_3 = $_SESSION['A_choice_3'];
$A_choice_4 = $_SESSION['A_choice_4'];
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
  </STYLE>
<TITLE></TITLE>
<META></META>
<SCRIPT></SCRIPT>
</HEAD>
<BODY>
    <?php
if(isset($_POST['submit'])){
  $_SESSION['B_comment_1'] = ($_POST['B_comment_1']);
  $_SESSION['B_comment_2'] = ($_POST['B_comment_2']);
  $_SESSION['B_comment_3'] = ($_POST['B_comment_3']);
  $_SESSION['B_comment_4'] = ($_POST['B_comment_4']);
  $_SESSION['B_choice_1'] = ($_POST['B_choice_1']);
  $_SESSION['B_choice_2'] = ($_POST['B_choice_2']);
  $_SESSION['B_choice_3'] = ($_POST['B_choice_3']);
  $_SESSION['B_choice_4'] = ($_POST['B_choice_4']);
  header ("location: BGHMC4.php");
}
?>
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
    <td>B.	Objectives</td>
    <th><input type="radio" name="B_choice_1" value="yes" required></th>
    <th><input type="radio" name="B_choice_1" value="no" required></th>
    <th><input class="form-control" type="text" name="B_comment_1" required></th>  
  </tr>
  <tr>
    <td>1.	All objectives are relevant and aligned with the research problem</td>
    <th><input type="radio" name="B_choice_2" value="yes" required></th>
    <th><input type="radio" name="B_choice_2" value="no" required></th>
    <th><input class="form-control" type="text" name="B_comment_2" required></th>
  </tr>
  <tr>
    <td>2.	Objectives are stated in clear, specific, and measurable manner</td>
    <th><input type="radio" name="B_choice_3" value="yes" required></th>
    <th><input type="radio" name="B_choice_3" value="no" required></th>
    <th><input class="form-control" type="text" name="B_comment_3" required></th>
  </tr>
  <tr>
    <td>3.	Specific objectives are relevant to the general objectives </td>
    <th><input type="radio" name="B_choice_4" value="yes" required></th>
    <th><input type="radio" name="B_choice_4" value="no" required></th>
    <th><input class="form-control" type="text" name="B_comment_4" required></th>
  </tr>
 </table>
 <button type="submit" name="submit" value="submit">NEXT</button>
</form>
</div>
  </BODY>
</HTML>