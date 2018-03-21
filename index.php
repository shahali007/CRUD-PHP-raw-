<?php include_once 'header.php'?>
    <?php
        if( !empty( $_REQUEST['Message'] ) )
        {
            echo sprintf( '<p style="color:green;text-align:center;margin-top:100px;">%s', $_REQUEST['Message'] );
            header( "refresh:5;url=index.php" );
        }
    ?>
    <div class="registerInner">
        <div class="col-md-8 col-sm-offset-2 signUp">
            <h3 class="headerSign">Add New Record</h3>
            <form action="add.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="name" id="name" placeholder="NAME" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" id="email" placeholder="YOUR EMAIL" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="age" id="age" placeholder="AGE" required>
                </div>
                <button type="submit" name="add_record" class="signbuttons btn btn-primary">Add Record</button>
            </form>
        </div>
    </div>
<?php include_once 'footer.php'?>