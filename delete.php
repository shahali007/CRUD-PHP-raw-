<?php
include_once "db-connect.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM records WHERE id=$id";
    $conn->exec($sql);
    $Message = "Data Deleted successfully!";
    header("Location:list.php?Message={$Message}");
?>