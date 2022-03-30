<?php

/** @var $pdo \PDO */
require_once "database.php";
require_once "function.php";
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';


// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

// echo $_SERVER['REQUEST_METHOD'];
// echo '<br>';

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// exit;


$errors =[];
$title = '';
$description = '';
$price = '';

$product = [
    'image' => ''
];

if($_SERVER['REQUEST_METHOD']==='POST'){

    require_once "validate_product.php";


    if(empty($errors)){

        $statement = $pdo->prepare("INSERT INTO products(title, image, description, price, create_date)
                VALUES(:title, :image, :description, :price, :date)");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));
        $statement->execute();
        header('Location:index.php');
    }

}

 

?>

<?php include_once 'views/partials/header.php'?>

    <p>
        <a href="index.php" class="btn btn-secondary">Go Back to Products</a>
    </p>

    <h1>Create New Product</h1>


    <?php include_once "views/products/form.php"?>

    
 <?php include_once 'views/partials/footer.php'?>
