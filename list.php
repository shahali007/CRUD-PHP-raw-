<?php include_once 'header.php'?>
    <?php
        $query = $conn->prepare("SELECT * FROM records");
        $query->execute();
        $result = $query->fetchAll();
    ?>
    <?php
        if( !empty( $_REQUEST['Message'] ) )
        {
            echo sprintf( '<p style="color:green;text-align:center;margin-top:100px;">%s', $_REQUEST['Message'] );
            header( "refresh:5;url=list.php" );
        }
    ?>
    <div class="registerInner">
        <div class="col-md-10 col-sm-offset-1 signUp">
            <h3 class="headerSign">List of Record</h3>
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th style="width: 120px;">Action</th>
                </tr>
                <?php foreach($result as $row) :?>
                <tr>
                    <td>1</td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['age']?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>

<?php include_once 'footer.php'?>