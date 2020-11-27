<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'butsayamas.mysql.database.azure.com', 'K63070098@butsayamas', 'Khaw63070098', 'itflab1', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

    if(isset($_POST['submit'])){
        $product = $_POST['Product'];
        $price = $_POST['Price'];
        $discount = $_POST['Discount'];
        $total = $price * $discount /100;

        $sql = "INSERT INTO labitf (Product, Price, Discount, Total) value ('$product','$price', '$discount', '$total')";

        if(mysqli_query($conn, $sql)){
            echo "New data insert successfully";
            echo "<a href='final_index.php'>back to home page</a>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="final_insert.php" method="post">
        <h1>Product</h1>
        <input type="text" name="Product">
        <h1>Price</h1>
        <input type="text" name="Price">
        <h1>Discount</h1>
        <input type="text" name="Discount">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>
