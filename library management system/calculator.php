<html>
<head>
<?php
include "header.php";
?>
</head>
<body background =  "images/bns.jpg">
<?php    include "top.php" ?>
<div>
<h2 align = center>Calculator</h2>
<form name = calc>
<table border = 4 align = center bgcolor = gray >
<tr>
<td><input type = text name = input></td>
</tr>
<tr>
<td>
<input type = button value = " 1 " onclick = calc.input.value+="1">
<input type = button value = " 2 " onclick = calc.input.value+="2">
<input type = button value = " 3 " onclick = calc.input.value+="3">
<input type = button value = " 4 " onclick = calc.input.value+="4">
<br/>
<input type = button value = " 5 " onclick = calc.input.value+="5">
<input type = button value = " 6 " onclick = calc.input.value+="6">
<input type = button value = " 7 " onclick = calc.input.value+="7">
<input type = button value = " 8 " onclick = calc.input.value+="8">
<br/>
<input type = button value = " 9 " onclick = calc.input.value+="9">
<input type = button value = " C " onclick = calc.input.value="">
<input type = button value = " * " onclick = calc.input.value+="*">
<input type = button value = " 0 " onclick = calc.input.value+="0">
<br/>
<input type = button value = " + " onclick = calc.input.value+="+">
<input type = button value = " - " onclick = calc.input.value+="-">
<input type = button value = " / " onclick = calc.input.value+="/">
<input type = button value = " = " onclick = "calc.input.value=eval(calc.input.value)">
</td>
</tr>
</table>
</form>
</div>
<?php  include "bottom.php "?>
</body>
</html>