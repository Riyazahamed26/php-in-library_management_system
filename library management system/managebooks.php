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
<h2 align = center>Manage Books</h2>

<form method = post>
<table align = center>
<tr>

<td>Enter Book ID</td><td> <input type = text name = bookid></td>
</tr>
<tr><td>Subject </td><td><input type = text name = subject></td></tr>

<tr><td>Title</td> <td><input type = text name = title></td></tr>

<tr><td>Author</td> <td><input type = text name = author></td></tr>

<tr><td>Publisher </td> <td>  <input type = text name = publisher></td></tr>

<tr><td>Copyright </td> <td>  <input type = text name = copyright></td></tr>

<tr><td>Edition </td> <td>  <input type = text name = edition></td></tr>

<tr><td>Pages </td> <td>  <input type = text name = pages></td></tr>

<tr><td>ISBN </td> <td>  <input type = text name = isbn></td></tr>
<tr><td>No. Of Books </td> <td>  <input type = text name = numberofbooks></td></tr>
<tr><td>No. of Available Books</td> <td>   <input type = text name = numberofavailablebooks></td></tr>
<tr><td>No. of Borrowed Books </td> <td>  <input type = text name = numberofborrowedbooks></td></tr>
<tr><td>Library Name  </td> <td> <input type = text name = libraryname></td></tr>
<tr><td>Available Status </td> <td>  <input type = text name = available></td></tr>
<tr><td>Shelf No.</td> <td>   <input type = text name = shelfno></td></tr>
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
$subject = $_POST['subject'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$copyright = $_POST['copyright'];
$edition = $_POST['edition'];
$pages = $_POST['pages'];
$isbn = $_POST['isbn'];
$numberofbooks = $_POST['numberofbooks'];
$numberofavailablebooks = $_POST['numberofavailablebooks'];
$numberofborrowedbooks = $_POST['numberofborrowedbooks'];
$libraryname = $_POST['libraryname'];
$available = $_POST['available'];
$shelfno = $_POST['shelfno'];

$query = "insert into book values($bookid,'$subject','$title','$author','$publisher','$copyright','$edition','$pages','$isbn','$numberofbooks','$numberofavailablebooks','$numberofborrowedbooks','$libraryname','$available','$shelfno')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$bookid = $_POST['bookid'];
$subject = $_POST['subject'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$copyright = $_POST['copyright'];
$edition = $_POST['edition'];
$pages = $_POST['pages'];
$isbn = $_POST['isbn'];
$numberofbooks = $_POST['numberofbooks'];
$numberofavailablebooks = $_POST['numberofavailablebooks'];
$numberofborrowedbooks = $_POST['numberofborrowedbooks'];
$libraryname = $_POST['libraryname'];
$available = $_POST['available'];
$shelfno = $_POST['shelfno'];

$query = "update book set subject='$subject',title='$title',author='$author',publisher='$publisher',copyright='$copyright',edition='$edition',pages='$pages',isbn='$isbn',numberofbooks='$numberofbooks',numberofavailablebooks='$numberofavailablebooks',numberofborrowedbooks='$numberofborrowedbooks',libraryname='$libraryname',available='$available,'shelfno='$shelfno' where bookid=$bookid";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$bookid = $_POST['bookid'];
$subject = $_POST['subject'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$copyright = $_POST['copyright'];
$edition = $_POST['edition'];
$pages = $_POST['pages'];
$isbn = $_POST['isbn'];
$numberofbooks = $_POST['numberofbooks'];
$numberofavailablebooks = $_POST['numberofavailablebooks'];
$numberofborrowedbooks = $_POST['numberofborrowedbooks'];
$libraryname = $_POST['libraryname'];
$available = $_POST['available'];
$shelfno = $_POST['shelfno'];

$query = "delete from book where bookid=$bookid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$bookid = $_POST['bookid'];
$subject = $_POST['subject'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$copyright = $_POST['copyright'];
$edition = $_POST['edition'];
$pages = $_POST['pages'];
$isbn = $_POST['isbn'];
$numberofbooks = $_POST['numberofbooks'];
$numberofavailablebooks = $_POST['numberofavailablebooks'];
$numberofborrowedbooks = $_POST['numberofborrowedbooks'];
$libraryname = $_POST['libraryname'];
$available = $_POST['available'];
$shelfno = $_POST['shelfno'];

$query = "select * from book";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Book ID</td>";
echo "<td>Subject </td>";
echo "<td>Title</td>";
echo "<td>Author</td>";
echo "<td>Publisher</td>";
echo "<td>Copyright</td>";
echo "<td>Edition</td>";
echo "<td>Pages</td>";
echo "<td>ISBN</td>";
echo "<td>No. of Books</td>";
echo "<td>No. of Available Books</td>";
echo "<td>No. of Borrowed Books</td>";
echo "<td>Library Name</td>";
echo "<td>Available Status</td>";
echo "<td>Shelf No.</td>";
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
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "<td>$column[9]</td>";
echo "<td>$column[10]</td>";
echo "<td>$column[11]</td>";
echo "<td>$column[12]</td>";
echo "<td>$column[13]</td>";
echo "<td>$column[14]</td>";
echo "</tr>";
}
echo "</table>";
}
?>

</div>
<?php  include "bottom.php "?>
</body>
</html>