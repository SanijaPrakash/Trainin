<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title align="center">STUDENT REGISTRATION</title>
	<style>
		.button{
			background-color: #000000;
			color: white;
			padding: 10px 32px;
			text-align: center;
			margin: 4px 2px;
			font-size: 18px;
		}
		input,select,textarea{
			font-size: 14px;
		}
	</style>
</head>
<body>
	<h1 align="center">STUDENT REGISTRATION</h1>
<div>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table align="center" cellpadding="20">
			<tr>
				<td colspan="2">NAME:</td>
				<td colspan="2"><input type="text" name="name"></td>
			</tr>
			<tr>
				<td colspan="2">AGE:</td>
				<td colspan="2"><input type="number" name="age"></td>
			</tr>
			<tr>
				<td colspan="2">SEX:</td>
				<td rowspan="1"><input type="radio" name="sex"> Male</td>
				<td rowspan="1"><input type="radio" name="sex">Female</td>
			</tr>
			<tr>
				<td colspan="2">CITY:</td>
				<td colspan="2">
					<select name="city">
						<option value="Kannur">KANNUR</option>
						<option value="Calicut">KOZHIKODE</option>
						<option value="Kochi">KOCHI</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">ADDRESS:</td>
				<td colspan="2"><textarea rows="4" cols="20"></textarea></td>
			</tr>
			<tr>
				<td colspan="2">EDUCATION:</td>
				<td colspan="2">
					<select name="education" multiple>
						<option value="MCA">MCA</option>
						<option value="MBA">MBA</option>
						<option value="BCA">BCA</option>
						<option value="BBA">BBA</option>
						<option value="BSC Physics">BSC Physics</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">GRADE:</td>
				<td colspan="2">
					<select name="grade">
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
					</select>
				</td>
			</tr>
		</table>
	<p align="center"><button type="submit" class="button">SUBMIT</button><p>
</div>
</body>
</html>