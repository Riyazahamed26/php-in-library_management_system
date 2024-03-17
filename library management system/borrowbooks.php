<html>
<head>
<?php
include "header.php";
?>
</head>
<body background =  "images/bns.jpg">
<?php    include "top.php" ?>
<?php 
@session_start();
$u=$_SESSION['sun'];
?>
<a href = member_home.php><img src = goback.png></a>
<div>
<h2 align = center>Issued Books</h2>

<form method = post>

<table align = center >
<tr>
<td><input type = submit name = search value = Search></td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";




if(isset($_POST['search']))
{


$query = "select * from issuebook where username='$u'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>UserName</td>";
echo "<td>Book ID</td>";
echo "<td>Date of Issue</td>";
echo "<td>Date of Expiry</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "</tr>";
}
echo "</table>";
}
?>

</div>
<?php  include "bottom.php "?>
</body>
</html>