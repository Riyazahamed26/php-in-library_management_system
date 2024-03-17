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
<h2 align = center>Manage Borrowed Books</h2>

<form method = post>
<table align = center>
<tr>

<td>Enter Book ID</td><td> <input type = text name = bookid></td>
</tr>
<tr><td>Member ID </td><td><input type = text name = memberid></td></tr>

<tr><td>Date Of Borrow</td> <td><input type = date name = dayofborrow></td></tr>

<tr><td>Date Of Return</td> <td><input type = date name = dayofreturn></td></tr>


</table>
<table align = center >
<tr><td><input type = submit name = save value = Save></td>
<td><input type = submit name = modify value = Modify></td>
<td><input type = submit name = remove value = Remove></td>
<td><input type = submit name = search value = Search></td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
$bookid = $_POST['bookid'];
$memberid = $_POST['memberid'];
$dayofborrow = $_POST['dayofborrow'];
$dayofreturn = $_POST['dayofreturn'];


$query = "insert into borrow values($bookid,$memberid,'$dayofborrow','$dayofreturn')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$bookid = $_POST['bookid'];
$memberid = $_POST['memberid'];
$dayofborrow = $_POST['dayofborrow'];
$dayofreturn = $_POST['dayofreturn'];

$query = "update borrow set memberid=$memberid,dayofborrow='$dayofborrow',dayofreturn='$dayofreturn' where bookid=$bookid";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$bookid = $_POST['bookid'];
$memberid = $_POST['memberid'];
$dayofborrow = $_POST['dayofborrow'];
$dayofreturn = $_POST['dayofreturn'];

$query = "delete from borrow where bookid=$bookid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$bookid = $_POST['bookid'];
$memberid = $_POST['memberid'];
$dayofborrow = $_POST['dayofborrow'];
$dayofreturn = $_POST['dayofreturn'];

$query = "select * from borrow";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Book ID</td>";
echo "<td>Member ID </td>";
echo "<td>Day Of Borrow</td>";
echo "<td>Day Of Return</td>";

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