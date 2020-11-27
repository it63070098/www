<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'butsayamas.mysql.database.azure.com', 'K63070098@butsayamas', 'Khaw63070098', 'itflab1', 3306);
if(mysqli_connect_errno($conn)){
    echo "connect fail".mysqli_connect_error();
}
?>
