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
                /** ================ New Code for you to see ======================*/  
                // $productImagePathArray = explode('/', $product['image']);
                // array_pop($productImagePathArray);
                // $productImageDirectoryPath = implode('/', $productImagePathArray);
                /** ========================= End here ============================*/  
                unlink($product['image']);
                
                /** ================ New Code for you to see ======================*/  
                // rmdir($productImageDirectoryPath);
                /** ========================= End here ============================*/  
            }
            $imagePath = 'images/'.randomString(8).'/'.$image['name'];
           
            mkdir(dirname($imagePath));
            move_uploaded_file($image['tmp_name'], $imagePath);
        }
        
    }

