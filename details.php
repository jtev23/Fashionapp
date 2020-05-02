<?php
require_once 'load.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $getItem = getSingleItem($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>
<body>
    <?php include 'templates/header.php';?>
    <?php if (!is_string($getItem)): ?>
        <?php while ($row = $getItem->fetch(PDO::FETCH_ASSOC)): ?>
            <img src="images/<?php echo $row['item_image']; ?>" alt="<?php echo $row['item_name'] ?>" />

            <h2>Name: <?php echo $row['item_name']; ?></h2>
            <h4>Rating: <?php echo $row['Item_rate']; ?>/5</h4>
            <h4>Price: <?php echo $row['item_price'];?></h4>
            <p>Details:<br> <?php echo $row['item_details']; ?></p>
            <a href="index.php">Back...</a>
        <?php endwhile;?>
    <?php endif;?>

    <?php include 'templates/footer.php';?>
</body>
</html>