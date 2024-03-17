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
<h2 align = center>Manage Library Members</h2>

<form method = post>
<table align = center>
<tr>

<td>Member ID</td><td> <input type = text name = memberid></td>
</tr>
<tr><td>Password </td><td><input type = text name = password></td></tr>

<tr><td>Name	</td> <td><input type = text name = name	></td></tr>

<tr><td>Email</td> <td><input type = text name = email></td></tr>

<tr><td>Branch </td> <td>  <input type = text name = branch></td></tr>

<tr><td>No. Of Books </td> <td>  <input type = text name = numberofbooks></td></tr>

<tr><td>Expired </td> <td>  <input type = text name = expired></td></tr>


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
$memberid = $_POST['memberid'];
$password = $_POST['password'];
$name	 = $_POST['name'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$numberofbooks = $_POST['numberofbooks'];
$expired = $_POST['expired'];


$query = "insert into member values($memberid,'$password','$name	','$email','$branch','$numberofbooks','$expired')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$memberid = $_POST['memberid'];
$password = $_POST['password'];
$name	 = $_POST['name'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$numberofbooks = $_POST['numberofbooks'];
$expired = $_POST['expired'];

$query = "update member set password='$password',name='$name',email='$email',branch='$branch',numberofbooks='$numberofbooks',expired='$expired' where memberid=$memberid";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$memberid = $_POST['memberid'];
$password = $_POST['password'];
$name	 = $_POST['name'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$numberofbooks = $_POST['numberofbooks'];
$expired = $_POST['expired'];

$query = "delete from member where memberid=$memberid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$memberid = $_POST['memberid'];
$password = $_POST['password'];
$name	 = $_POST['name'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$numberofbooks = $_POST['numberofbooks'];
$expired = $_POST['expired'];

$query = "select * from member";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Member ID</td>";
echo "<td>Password </td>";
echo "<td>Name</td>";
echo "<td>Email</td>";
echo "<td>Branch</td>";
echo "<td>No. Of Books</td>";
echo "<td>Expired</td>";

echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";

echo "</tr>";
}
echo "</table>";
}
?>


</div>
<?php  include "bottom.php "?>
</body>
</html>