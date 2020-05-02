<?php
require_once 'load.php';

if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
    
    $getMovies = getItemsByFilter($filter);
} else {
    
    $getMovies = getAll();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to the Movie CMS!</title>
</head>
<body>
    <?php include 'templates/header.php';?>
    <div id="wrapper">
    
    <?php while ($row = $getMovies->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="movie-item">
            <img src="images/<?php echo $row['item_image']; ?>" alt="<?php echo $row['item_name']; ?>" />
            <h2><?php echo $row['item_name']; ?></h2>
            <h4>Rating: <?php echo $row['Item_rate']; ?></h4>
            <h3>Price: <?php echo $row['item_price'];?></h3>
            <a href="details.php?id=<?php echo $row['ID']; ?>">Read More...</a>
        </div>
    <?php endwhile;?>
    <?php include 'templates/footer.php';?>
    </div>
</body>
</html>