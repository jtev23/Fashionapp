<?php 
require_once '../load.php';
confirm_logged_in();



if(isset($_POST['submit'])){
    
    $image_name = $_FILES['file']['name'];
    

    $temp_name = $_FILES['file']['tmp_name']; // tmp_name
    
    if(isset($image_name)){
    if(!empty($image_name)){

    $location = '../images/';
    }
    
    }else{
    echo 'please upload an image';
}
        
    
    

    $item_name = trim($_POST['itemName']);
    $item_desc = trim($_POST['item_desc']);
    
    $item_price = trim($_POST['item_price']);
    $item_type = trim($_POST['item_type']);
    if(empty($item_name) || empty($item_desc) || empty($image_name) || empty($item_price) || empty($item_type)){
        $message = 'Please fill the required fields';
    }else{
        if(move_uploaded_file($temp_name, $location.$image_name))
        {
        echo 'uploaded';
        }
        $message = createContent($item_name, $item_desc, $image_name, $item_price, $item_type);
        

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Content</title>
</head>
<body>
        <?php echo !empty($message)? $message: ''; ?>
        <form action="admin_createContent.php" method="POST" enctype="multipart/form-data">

        <label>Item Name</label><br>
        <input type="text" name="itemName" value=""><br><br>

        <label>Item Description</label><br>
        <input type="text" name="item_desc" value=""><br><br>

        <label>Item Image</label><br>
        <input type="file" name="file" id="file" accept=".jpg, .jpeg, .png"/><br><br>

        <label>Item Price</label><br>
        <input type="text" name="item_price" value=""><br><br>

        <label>Item Type</label><br>
        <input type="text" name="item_type" value=""><br><br>

        <button name="submit">Add Content</button>
        </form>

    
</body>
</html>