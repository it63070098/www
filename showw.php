<html>
<head>
    <meta charset="UTF-8">
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'butsayamas.mysql.database.azure.com', 'K63070098@butsayamas', 'Khaw63070098', 'itflab1', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook3');
?>
<table width="600" border="1">
  <tr><center>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </center></tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><center><a href="edit form.html"><input type="submit" value="EDIT" class="btn btn-warning"></a>&nbsp;&nbsp;
        <a href="delete form.html"><input type="submit" value="DELETE"  class="btn btn-danger"></a></center></td>
  </tr>
<?php
}
?>
</table>
<center><a href="form.html"><input type="submit" value="INSERT" class="btn btn-info"></a></center>
<?php
mysqli_close($conn);
?>
</body>
</html>
