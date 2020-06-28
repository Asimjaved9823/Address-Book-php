<?php

$link = mysqli_connect("localhost", "root", "", "address_book");

$id = $_GET['id']; // get id through query string

$del = mysqli_query($link,"delete from data_table where id = '$id'"); // delete query

if($del)
{
    mysqli_close($link); // Close connection
    header("location:view.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
<!-- Asim Javed CS-172120 -->