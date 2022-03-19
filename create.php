<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_curd', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

if($_SERVER['REQUEST_METHOD']==='POST'){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    // $pdo->exec("INSERT INTO products(title, image, description, price, create_date)
    //           VALUE('$title', '', '$description', $price, '$date') 
    //           ")

    if(!$title){
        $errors[] = 'Product Title is required';
    }
    if(!$price){
        $errors[] = 'Product Price is required';
    }

    if(!is_dir('images')){
        mkdir('images');
    }

    if(empty($errors)){

        $image = $_FILES['image'] ?? null;

        $imagePath = '';

        if($image && $image['tmp_name']){

            $imagePath = 'images/'.randomString(8).'/'.$image['name'];
            // echo '<pre>';
            // var_dump($imagePath);
            // echo '</pre>';
            // exit;
            mkdir(dirname($imagePath));
            move_uploaded_file($image['tmp_name'], $imagePath);
        }


        $statement = $pdo->prepare("INSERT INTO products(title, image, description, price, create_date)
                VALUES(:title, :image, :description, :price, :date)");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->execute();
        header('Location:index.php');
    }

}

function randomString($n){
    $characters = "0123456789asdfghjklqwertyuiopzxcvbnmASDFGHJKLQWERTYUIOPZXCVBNM";
    $str = '';
    for($i = 0; $i < $n; $i++)
    {
        $index = rand(0, strlen($characters)-1);
        $str .= $characters[$index];
    }
    return $str;
}





?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Products CURD</title>
</head>

<body>
    <h1>Create New Product</h1>
    <?php if(!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach($errors as $error): ?>
            <div><?php echo $error ?></div> 
            <?php endforeach; ?>

        </div>
    <?php endif; ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Product Image</label>
            <br>
            <input type="file" name="image">
        </div>
        <br>
        <div class="form-group">
            <label>Product Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $title ?>" >
        </div>

        <br>
        <div class="form-group">
            <label>Product Description</label>
            <textarea name="description" class="form-control"><?php echo $description ?></textarea>
        </div>
        <br>
        <div class="form-group">
            <label>Product Price</label>
            <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>