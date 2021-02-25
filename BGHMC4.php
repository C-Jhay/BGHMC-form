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
  $_SESSION['C_comment_1'] = ($_POST['C_comment_1']);
  $_SESSION['C_comment_2'] = ($_POST['C_comment_2']);
  $_SESSION['C_comment_3'] = ($_POST['C_comment_3']);
  $_SESSION['C_comment_4'] = ($_POST['C_comment_4']);
  $_SESSION['C_comment_5'] = ($_POST['C_comment_5']);
  $_SESSION['C_comment_6'] = ($_POST['C_comment_6']);
  $_SESSION['C_comment_7'] = ($_POST['C_comment_7']);
  $_SESSION['C_choice_1'] = ($_POST['C_choice_1']);
  $_SESSION['C_choice_2'] = ($_POST['C_choice_2']);
  $_SESSION['C_choice_3'] = ($_POST['C_choice_3']);
  $_SESSION['C_choice_4'] = ($_POST['C_choice_4']);
  $_SESSION['C_choice_5'] = ($_POST['C_choice_5']);
  $_SESSION['C_choice_6'] = ($_POST['C_choice_6']);
  $_SESSION['C_choice_7'] = ($_POST['C_choice_7']);
  header ("location: BGHMC5.php");
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
    <td>C.	Review of Related Literature</td>
    <th><input type="radio" name="C_choice_1" value="yes" required></th>
    <th><input type="radio" name="C_choice_1" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_1" required></th>
  </tr>
  <tr>
    <td>1.	Background of the research problem is adequately discussed; characterized the research problem adequately in terms of its nature, magnitude, and distribution in the study population</td>
    <th><input type="radio" name="C_choice_2" value="yes" required></th>
    <th><input type="radio" name="C_choice_2" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_2" required></th>
  </tr>
  <tr>
    <td>2.	Presented literature about the research problem</td>
    <th><input type="radio" name="C_choice_3" value="yes" required></th>
    <th><input type="radio" name="C_choice_3" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_3" required></th>
  </tr>
  <tr>
    <td>3.	Reviewed literature on the proposed objectives of the study</td>
    <th><input type="radio" name="C_choice_4" value="yes" required></th>
    <th><input type="radio" name="C_choice_4" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_4" required></th>
  </tr>
  <tr>
    <td>4.	Gaps in the current state of knowledge identified</td>
    <th><input type="radio" name="C_choice_5" value="yes" required></th>
    <th><input type="radio" name="C_choice_5" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_5" required></th>
  </tr>
  <tr>
    <td>5.	Summarized the literature and presented a table summarizing the literature, including the limitations and biases of each research report</td>
    <th><input type="radio" name="C_choice_6" value="yes" required></th>
    <th><input type="radio" name="C_choice_6" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_6" required></th>
  </tr>
  <tr>
    <td>6.	Synthesized the literature identified themes/agreements and/or controversies/disagreements in the literature</td>
    <th><input type="radio" name="C_choice_7" value="yes" required></th>
    <th><input type="radio" name="C_choice_7" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_7" required></th>
  </tr>
   </table>
 <button type="submit" name="submit" value="submit">NEXT</button>
</form>
</div>
  </BODY>
</HTML>