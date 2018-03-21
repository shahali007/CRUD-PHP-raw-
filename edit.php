<?php include_once 'header.php'?>
    <?php
        $id = $_GET['id'];
        $query = $conn->prepare("SELECT * FROM records WHERE id=$id");
        $query->execute();
        $result = $query->fetch();
        //var_dump($result);
    ?>
    <div class="registerInner">
        <div class="col-md-8 col-sm-offset-2 signUp">
            <h3 class="headerSign">Edit Record</h3>
            <form action="update.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $result['id']?>">
                <div class="form-group">
                    <input class="form-control" type="text" name="name" id="name" placeholder="NAME" required value="<?php echo $result['name']?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" id="email" placeholder="YOUR EMAIL" required value="<?php echo $result['email']?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="age" id="age" placeholder="AGE" required value="<?php echo $result['age']?>">
                </div>
                <button type="submit" name="update_record" class="signbuttons btn btn-primary">Update</button>
            </form>
        </div>
    </div>
<?php include_once 'footer.php'?>