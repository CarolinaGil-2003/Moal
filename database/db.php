  
<?php
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'moall'
) or die(mysqli_error($mysqli));

?>