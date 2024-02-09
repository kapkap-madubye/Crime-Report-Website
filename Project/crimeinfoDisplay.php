<?php require 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Info</title>
    
</head>
<body>
    <h1 style="position:relative; right:-505px;">Admin</h1>
    <table style="position:relative; right:-290px;" border=1 cellspacing = 0 cellpadding = 10>
        <tr>
            <td>ID</td>
            <td>Description & Location</td>
            <td>Images</td>
        </tr>
        <?php
        $i=1;
        $rows = mysqli_query($con,"SELECT * FROM test ORDER BY id ASC");
        ?>
        <?php foreach($rows as $row) : ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["location"]; ?></td>
            <td> <img src="img/<?php echo $row["image"]; ?>" width=200 title="<?php echo $row["image"]; ?>" ></td>

        </tr>
        <?php endforeach; ?>


    </table>    




    
</body>
</html>

