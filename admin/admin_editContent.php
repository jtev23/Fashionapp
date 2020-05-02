<?php 
    require_once '../load.php';
    confirm_logged_in();
    

    $items = getAll();
    if(!$items){
        $message = 'Failed to get item list';
    }
    

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
</head>
<body>
    <h2>Time to edit some items...</h2>
    <?php echo !empty($message)?$message:'';?>
    <table>
        <thead>
            <tr>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Change Image</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $items->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['item_name'];?></td>
                <td><a href="admin_editItem.php?id=<?php echo $row['ID'];?>&img_name=<?php echo $row['item_image'];?>">Edit image</a></td>
                <td><a href="admin_editItem.php?id=<?php echo $row['ID'];?>">Edit</a></td>
                
            </tr>
        <?php endwhile;?>
        </tbody>
    </table>
    
</body>
</html>