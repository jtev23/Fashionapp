
<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
require_once '../load.php';
confirm_logged_in();
if(isset($_GET['id'])){
    $item_id = $_GET['id'];
    $_SESSION['item_id'] = $item_id;
    }
if(isset($_GET['img_name'])){
    $old_image = $_GET['img_name'];
    $_SESSION['old_image'] = $old_image;
}

$item_id = $_SESSION['item_id'];
if(isset($_POST['submit'])){
    
    $image_name = $_FILES['file']['name'];
    $new_image = $image_name;
    $temp_name = $_FILES['file']['tmp_name'];
    if(isset($image_name)){
        if(!empty($image_name)){
    
        $location = '../images/';
        if(move_uploaded_file($temp_name, $location.$image_name))
        {
        echo 'uploaded';
        }
        }else{
            echo 'please upload an image';}
    }
    $old_image = $_SESSION['old_image'];
    $item_name = trim($_POST['item_name']);
    $item_desc = trim($_POST['item_description']);
    $item_price = trim($_POST['item_price']);
    $item_type = trim($_POST['item_type']);

    $message = editItems($item_name, $item_desc, $item_price, $item_type,$item_id,$old_image, $new_image);
}
$items = getSingleItem($item_id);
if(is_string($items)){
    $message = $user;
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
    <h2>Time to edit some items</h2>
    <h3><?php echo !empty($message)?$message:'';?></h3>
  
    
  <form action="admin_editItem.php" method="post" enctype="multipart/form-data">

        <?php while($row = $items->fetch(PDO::FETCH_ASSOC)):?>
                <label>Item Name</label><br>
                <input type="text" name="item_name" value="<?php echo $row['item_name'];?>"><br><br>

                <label>Item Description</label><br>
                <textarea type="text" name="item_description" cols="30" rows="5"><?php echo $row['item_details'];?></textarea><br><br>

                <?if (isset($_GET['img_name'])):?>
                <label>Item Image</label>
                <input type="file" name="file" id="file" accept=".jpg, .jpeg, .png"/><br><br>
                <?endif;?>

                <label>Item Price</label><br>
                <input type="text" name="item_price" value="<?php echo $row['item_price'];?>"><br><br>

                <label>Item Type</label><br>
                <input type="text" name="item_type" value="<?php echo $row['item_type'];?>"><br><br>
                <?php endwhile;?>
                
                <button type="submit" name="submit">Edit Item</button>

                
             
    

        </form>
    
</body>
</html>