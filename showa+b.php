<html>
<head>
<title>ITF Lab</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070237_keng', 'keng1234', 'it63070237_testITF', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM test_example');
?>
<table width="600" border="1" class="table table-dark table-striped">
  <tr>
    <th width="100"> <div align="center">A</div></th>
    <th width="350"> <div align="center">B</div></th>
    <th width="150"> <div align="center">C</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['A'];?></div></td>
    <td><?php echo $Result['B'];?></td>
    <td><?php echo $Result['C'];?></td>
  </tr>
<?php
}
?>
</table>
<form action="insert.php" class="was-validated" method = "post" id="Form2" >
        <div class="form-group">
          <label for="A">A:</label>
          <input type="text" class="form-control" id="A" placeholder="Enter A" name="A" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="B">B:</label>
          <input type="text" class="form-control" name = "B" id="B" placeholder="Enter B" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary" id="commentButton">Submit</button>
      </form>

<?php
mysqli_close($conn);
?>
</body>
</html>