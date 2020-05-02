<?php 
    require_once '../load.php';
    confirm_logged_in();

    $items = getAll();
    if(!$items){
        $message = 'Failed to get item list';
    }

    if(isset($_GET['id'])){
        $item_id = $_GET['id'];
        $image_name = $_GET['img-name'];
        $delete_result = deleteItems($item_id,$image_name);
        

        if(!$delete_result){
            $message = 'Failed to delete item';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <h2>Time to delete some items...</h2>
    <?php echo !empty($message)?$message:'';?>
    <table>
        <thead>
            <tr>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Item Details</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $items->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['item_name'];?></td>
                <td><?php echo $row['item_details'];?></td>
                <td><a href="admin_deleteItems.php?id=<?php echo $row['ID'];?>&img-name=<?php echo $row['item_image'];?>">Delete</a></td>
            </tr>
        <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>