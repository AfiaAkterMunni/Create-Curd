<?php 


    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    // $date = date('Y-m-d H:i:s');
    $imagePath = '';
    
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

        $imagePath = $product['image'];

        if($image && $image['tmp_name']){

            if($product['image'])
            {
                unlink($product['image']);
            }
            $imagePath = 'images/'.randomString(8).'/'.$image['name'];
           
            mkdir(dirname($imagePath));
            move_uploaded_file($image['tmp_name'], $imagePath);
        }
        
    }

