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
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Action'];?>
  <div class="container">
  <button type="button" class="btn btn-info">ลบ</button>
  <input type="button" class="btn btn-info" value="แก้ไข">
  </div></td>
  </tr>
<?php
  <div class="container">
  <input type="button" class="btn btn-info" value="เพิ่ม">
  </div>
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
