<?php
    include_once "db-connect.php";
    $name = $email = $age = "";
    if(isset($_POST['add_record'])){
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
            $sql = "INSERT INTO records (name, email, age)
    VALUES ('$name', '$email', '$age')";
            // use exec() because no results are returned
            $conn->exec($sql);
            $Message = "Data inserted successfully!";
            header("Location:index.php?Message={$Message}");
        }
    }

?>