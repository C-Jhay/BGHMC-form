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

$B_comment_1 = $_SESSION['B_comment_1'];
$B_comment_2 = $_SESSION['B_comment_2'];
$B_comment_3 = $_SESSION['B_comment_3'];
$B_comment_4 = $_SESSION['B_comment_4'];
$B_choice_1 = $_SESSION['B_choice_1'];
$B_choice_2 = $_SESSION['B_choice_2'];
$B_choice_3 = $_SESSION['B_choice_3'];
$B_choice_4 = $_SESSION['B_choice_4'];

$C_comment_1 = $_SESSION['C_comment_1'];
$C_comment_2 = $_SESSION['C_comment_2'];
$C_comment_3 = $_SESSION['C_comment_3'];
$C_comment_4 = $_SESSION['C_comment_4'];
$C_comment_5 = $_SESSION['C_comment_5'];
$C_comment_6 = $_SESSION['C_comment_6'];
$C_comment_7 = $_SESSION['C_comment_7'];
$C_choice_1 = $_SESSION['C_choice_1'];
$C_choice_2 = $_SESSION['C_choice_2'];
$C_choice_3 = $_SESSION['C_choice_3'];
$C_choice_4 = $_SESSION['C_choice_4'];
$C_choice_5 = $_SESSION['C_choice_5'];
$C_choice_6 = $_SESSION['C_choice_6'];
$C_choice_7 = $_SESSION['C_choice_7'];

$D_comment_1 = $_SESSION['D_comment_1'];
$D_comment_2 = $_SESSION['D_comment_2'];
$D_comment_3 = $_SESSION['D_comment_3'];
$D_choice_1 = $_SESSION['D_choice_1'];
$D_choice_2 = $_SESSION['D_choice_2'];
$D_choice_3 = $_SESSION['D_choice_3'];

$E_comment_1 = $_SESSION['E_comment_1'];
$E_comment_2 = $_SESSION['E_comment_2'];
$E_comment_3 = $_SESSION['E_comment_3'];
$E_comment_4 = $_SESSION['E_comment_4'];
$E_comment_5 = $_SESSION['E_comment_5'];
$E_comment_6 = $_SESSION['E_comment_6'];
$E_comment_7 = $_SESSION['E_comment_7'];
$E_choice_1 = $_SESSION['E_choice_1'];
$E_choice_2 = $_SESSION['E_choice_2'];
$E_choice_3 = $_SESSION['E_choice_3'];
$E_choice_4 = $_SESSION['E_choice_4'];
$E_choice_5 = $_SESSION['E_choice_5'];
$E_choice_6 = $_SESSION['E_choice_6'];
$E_choice_7 = $_SESSION['E_choice_7'];
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
  $_SESSION['F_comment_1'] = ($_POST['F_comment_1']);
  $_SESSION['F_choice_1'] = ($_POST['F_choice_1']);
  header ("location: BGHMC8.php");
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
    <td>F.	Limitations of the study are discussed</td>
    <th><input type="radio" name="F_choice_1" value="yes" required></th>
    <th><input type="radio" name="F_choice_1" value="no" required></th>
    <th><input class="form-control" type="text" name="F_comment_1" required></th>
  </tr>
</table>
  <button type="submit" name="submit" value="submit">NEXT</button>
</form>
</div>
</BODY>
</HTML>
