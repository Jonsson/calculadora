<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>

<body>

<form name="Calc">
<table class="mx-auto mt-2 fundo">
	<tr>
		<td align="center">
			<input type="text"  name="Input" size="16" class="visor">
		</td>
	</tr>
	<tr>
		<td align="center">
			
<input type="button" name="clear" class="btn my-2 c" value="  c  " onClick="Calc.Input.value = ''">
<input type="button" name="plus" class="btn numero2 my-2" value="  +  " onClick="Calc.Input.value += ' + '">
			<br>
<input type="button" name="seven" class="btn numero my-2" value="  7  " onClick="Calc.Input.value += '7'">
<input type="button" name="eight" class="btn numero my-2" value="  8  " onClick="Calc.Input.value += '8'">
<input type="button" name="nine" class="btn numero my-2" value="  9  " onClick="Calc.Input.value += '9'">
<input type="button" name="div" class="btn numero2 my-2" value="  /   " onClick="Calc.Input.value += ' / '">
			<br>
<input type="button" name="four" class="btn numero my-2" value="  4  " onClick="Calc.Input.value += '4'">
<input type="button" name="five" class="btn numero my-2" value="  5  " onClick="Calc.Input.value += '5'">
<input type="button" name="six" class="btn numero my-2" value="  6  " onClick="Calc.Input.value += '6'">
<input type="button" name="times" class="btn numero2 my-2" value="  x  " onClick="Calc.Input.value += ' * '">
			<br>
<input type="button" name="one" class="btn numero my-2" value="  1  " onClick="Calc.Input.value += '1'">
<input type="button" name="two" class="btn numero my-2" value="  2  " onClick="Calc.Input.value += '2'">
<input type="button" name="three" class="btn numero my-2" value="  3  " onClick="Calc.Input.value += '3'">
<input type="button" name="minus" class="btn numero2 my-2" value="  -   " onClick="Calc.Input.value += ' - '">
			<br>
<input type="button" name="zero" class="btn my-2 c" value="  0  " onClick="Calc.Input.value += '0'">
<input type="button" name="DoIt" class="btn numero2 my-2" value="  =  " onClick="Calc.Input.value = eval(Calc.Input.value)">

		</td>
	</tr>
</table>
</form>
</body>
</html>