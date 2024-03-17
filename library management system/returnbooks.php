<html>
<head>
<?php
include "header.php";
?>
</head>
<body background =  "images/bns.jpg">
<?php    include "top.php" ?>
<a href = admin_home.php><img src = goback.png></a>
<div>
<h2 align = center>Return Books</h2>

<form method = post>
<table align = center>
<tr>

<td>Enter UserName</td><td> <input type = text name = username></td>
</tr>
<tr><td>Book ID</td><td><input type = text name = bookid></td></tr>

<tr><td>Date of issue</td> <td><input type = date name = dateofissue></td></tr>

<tr><td>Date of Expiry</td> <td><input type = date name = dateofexpiry></td></tr>


</table>
<table align = center >
<tr><td><input type = submit name = remove value = Returning></td>
<td><input type = submit name = search value = View></td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";


if(isset($_POST['remove']))
{
$username = $_POST['username'];
$bookid = $_POST['bookid'];
$dateofissue = $_POST['dateofissue'];
$dateofexpiry = $_POST['dateofexpiry'];

$query = "delete from issuebook where bookid=$bookid";
$n = my_iud($query);
echo "$n record Removed"; 
}



if(isset($_POST['search']))
{
$username = $_POST['username'];
$bookid = $_POST['bookid'];
$dateofissue = $_POST['dateofissue'];
$dateofexpiry = $_POST['dateofexpiry'];

$query = "select * from issuebook";
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