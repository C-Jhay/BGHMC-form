<?php
include('config.php');
?>
<HTML>
<HEAD>
	<style type="text/css">
		table{
			border: 1px solid;
			border-collapse: collapse;
			width: 100%;
			font-family: monospace;
			font-size: 15px;
			text-align: center;
			background-color: #C5E0B3;
			font-family: "Times New Roman", Times, serif;
		}
		h2 {
			font-family: "Times New Roman", Times, serif;
			font-size: 15px;
			text-align: center;
		}
		td{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
<TITLE></TITLE>
<META></META>
<SCRIPT></SCRIPT>
</HEAD>
<BODY>
<table>
	<tr>
		<th>Protocol Title</th>
		<th>Principal Investigator/s</th>
		<th>Co-Investigator/s</th>
	</tr>
	<?php
	$sql = "SELECT protocol, principal, co from first";
	$result = $mysqli-> query($sql);

	if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>".$row["protocol"]."</td><td>". $row["principal"]. "</td><td>". $row["co"]. "</td></tr>";
		}
		echo "</table>";
	}else {
		echo "0 result";
	}
	?>
</table>


<br></br>

<table>
	<tr>
		<h2>Question A</h2>
		<th>Q1</th>
		<th>Q2</th>
		<th>Q3</th>
		<th>Q4</th>
		<th>C1</th>
		<th>C2</th>
		<th>C3</th>
		<th>C4</th>
	</tr>
	<?php
	$sql = "SELECT A_comment_1, A_comment_2, A_comment_3, A_comment_4, A_choice_1, A_choice_2, A_choice_3, A_choice_4 from A";
	$result = $mysqli-> query($sql);

	if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>". $row["A_comment_1"] ."</td><td>". $row["A_comment_2"] ."</td><td>". $row["A_comment_3"] ."</td><td>". $row["A_comment_4"] ."</td><td>". $row["A_choice_1"] ."</td><td>". $row["A_choice_2"] ."</td><td>". $row["A_choice_3"] ."</td><td>". $row["A_choice_4"] ."</td></tr>";
		}
		echo "</table>";
	}else {
		echo "0 result";
	}
	?>
</table>

<br></br>

<table>
	<tr>
		<h2>Question B</h2>
		<th>Q1</th>
		<th>Q2</th>
		<th>Q3</th>
		<th>Q4</th>
		<th>C1</th>
		<th>C2</th>
		<th>C3</th>
		<th>C4</th>
	</tr>
	<?php
	$sql = "SELECT B_comment_1, B_comment_2, B_comment_3, B_comment_4, B_choice_1, B_choice_2, B_choice_3, B_choice_4 from B";
	$result = $mysqli-> query($sql);

	if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>".$row["B_comment_1"]."</td><td>". $row["B_comment_2"]."</td><td>". $row["B_comment_3"]. "</td><td>". $row["B_comment_4"]. "</td><td>". $row["B_choice_1"]. "</td><td>". $row["B_choice_2"]. "</td><td>". $row["B_choice_3"]. "</td><td>". $row["B_choice_4"]. "</td></tr>";
		}
		echo "</table>";
	}else {
		echo "0 result";
	}
	?>
</table>

<br></br>

<table>
	<tr>
		<h2>Question E</h2>
		<th>Q1</th>
		<th>Q2</th>
		<th>Q3</th>
		<th>Q4</th>
		<th>Q5</th>
		<th>Q6</th>
		<th>Q7</th>
		<th>C1</th>
		<th>C2</th>
		<th>C3</th>
		<th>C4</th>
		<th>C5</th>
		<th>C6</th>
		<th>C7</th>
	</tr>
	<?php
	$sql = "SELECT C_comment_1, C_comment_2, C_comment_3, C_comment_4, C_comment_5, C_comment_6, C_comment_7, C_choice_1, C_choice_2, C_choice_3, C_choice_4, C_choice_5, C_choice_6, C_choice_7 from C";
	$result = $mysqli-> query($sql);

	if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>".$row["C_comment_1"]."</td><td>". $row["C_comment_2"]."</td><td>". $row["C_comment_3"]. "</td><td>". $row["C_comment_4"]. "</td><td>". $row["C_comment_5"]. "</td><td>". $row["C_comment_6"]. "</td><td>". $row["C_comment_7"]. "</td><td>". $row["C_choice_1"]. "</td><td>". $row["C_choice_2"]. "</td><td>". $row["C_choice_3"]."</td><td>". $row["C_choice_4"]."</td><td>". $row["C_choice_5"]."</td><td>". $row["C_choice_6"]."</td><td>". $row["C_choice_7"]. "</td></tr>";
		}
		echo "</table>";
	}else {
		echo "0 result";
	}
	?>
</table>

<br></br>

<table>
	<tr>
		<h2>Question D</h2>
		<th>Q1</th>
		<th>Q2</th>
		<th>Q3</th>
		<th>C1</th>
		<th>C2</th>
		<th>C3</th>
	</tr>
	<?php
	$sql = "SELECT D_comment_1, D_comment_2, D_comment_3, D_choice_1, D_choice_2, D_choice_3 from D";
	$result = $mysqli-> query($sql);

	if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>".$row["D_comment_1"]."</td><td>". $row["D_comment_2"]."</td><td>". $row["D_comment_3"]. "</td><td>". $row["D_choice_1"]. "</td><td>". $row["D_choice_2"]. "</td><td>". $row["D_choice_3"]. "</td></tr>";
		}
		echo "</table>";
	}else {
		echo "0 result";
	}
	?>
</table>

<br></br>

<table>
	<tr>
		<h2>Question E</h2>
		<th>Q1</th>
		<th>Q2</th>
		<th>Q3</th>
		<th>Q4</th>
		<th>Q5</th>
		<th>Q6</th>
		<th>Q7</th>
		<th>C1</th>
		<th>C2</th>
		<th>C3</th>
		<th>C4</th>
		<th>C5</th>
		<th>C6</th>
		<th>C7</th>
	</tr>
	<?php
	$sql = "SELECT E_comment_1, E_comment_2, E_comment_3, E_comment_4, E_comment_5, E_comment_6, E_comment_7, E_choice_1, E_choice_2, E_choice_3, E_choice_4, E_choice_5, E_choice_6, E_choice_7 from E";
	$result = $mysqli-> query($sql);

	if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>".$row["E_comment_1"]."</td><td>". $row["E_comment_2"]."</td><td>". $row["E_comment_3"]. "</td><td>". $row["E_comment_4"]. "</td><td>". $row["E_comment_5"]. "</td><td>". $row["E_comment_6"]. "</td><td>". $row["E_comment_7"]. "</td><td>". $row["E_choice_1"]. "</td><td>". $row["E_choice_2"]. "</td><td>". $row["E_choice_3"]."</td><td>". $row["E_choice_4"]."</td><td>". $row["E_choice_5"]."</td><td>". $row["E_choice_6"]."</td><td>". $row["E_choice_7"]. "</td></tr>";
		}
		echo "</table>";
	}else {
		echo "0 result";
	}
	?>
</table>

<br></br>

<table>
	<tr>
		<h2>Question F</h2>
		<th>Q1</th>
		<th>C1</th>
	</tr>
	<?php
	$sql = "SELECT F_comment_1, F_choice_1 from F";
	$result = $mysqli-> query($sql);

	if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>".$row["F_comment_1"]. "</td><td>". $row["F_choice_1"]. "</td></tr>";
		}
		echo "</table>";
	}else {
		echo "0 result";
	}
	?>
</table>

<br></br>

<table>
	<tr>
		<h2>Recommendation</h2>
		<th>C1</th>
	</tr>
	<?php
	$sql = "SELECT RECOM_choice_1 from recommendation";
	$result = $mysqli-> query($sql);

	if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>" .$row["RECOM_choice_1"]. "</td></tr>";
		}
		echo "</table>";
	}else {
		echo "0 result";
	}
	$mysqli-> close();
	?>
</table>
</BODY>
</HTML>