<?php
    include_once "db-connect.php";
    if(isset($_POST['update_record'])){
        $id = $_POST['id'];
        if(!empty($_POST['name'])){
            $name = $_POST['name'];
        } else{echo "<span style='color:red;'>Name is empty! <br></span>";}


        if(!empty($_POST['email'])){
            $email = $_POST['email'];
        } else{echo "<span style='color:red;'>Email is empty! <br></span>";}


        if(!empty($_POST['age'])){
            $age = $_POST['age'];
        } else{echo "<span style='color:red;'>Age is empty! <br></span>";}


        if(empty($_POST['name']) || empty($_POST['age']) || empty($_POST['age'])){
            echo "<br><a href='index.php'>Back</a>";
        }else{
            $sql = "UPDATE records SET name='$name', email='$email', age='$age' WHERE id='$id'";
            $stmt = $conn->prepare($sql);
            // execute the query
            $stmt->execute();

            $Message = "Data Upadated successfully!";
            header("Location:list.php?Message={$Message}");
        }
    }
?>