<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
function createContent($item_name, $item_desc, $image_name, $item_price, $item_type){
    $pdo = Database::getInstance()->getConnection();
    
    
    
 
    //place the image file inside the images directory
    

    //use the file name for the image and put it into the table 
    //add every field into the database table
    $content_stmt = 'INSERT INTO `tbl_items`(item_name, item_details, item_image, item_price, item_type) VALUES(:item_name, :item_desc, :item_img, :item_price, :item_type)';
    $content_query = $pdo->prepare($content_stmt);
    $check_success = $content_query->execute(
        array(
            ':item_name'=>$item_name,
            ':item_desc'=>$item_desc,
            ':item_img'=>$image_name,
            ':item_price'=>$item_price,
            ':item_type'=>$item_type
          
        )
        );

    if($check_success){
        $message = 'Content created successfully.';
        redirect_to('./index.php');
    }else{
        $message = 'There was a problem adding the content. Please try again.';
    }
    return $message;
}

function editItems($item_name, $item_desc, $item_price, $item_type,$item_id,$old_image, $new_image){
    $pdo = Database::getInstance()->getConnection();
 

    $location = '../images/';
    unlink($location . "/" . $old_image);

    $edit_stmt = 'UPDATE tbl_items SET item_name = :item_name, item_details = :item_desc,';
    $edit_stmt .= ' item_price=:item_price, item_type =:item_type, item_image=:new_image WHERE ID = :id';
    $update_item_set = $pdo->prepare($edit_stmt);
    $update_item_result = $update_item_set->execute(
        array(
            ':item_name'=>$item_name,
            ':item_desc'=>$item_desc,
            ':item_price'=>$item_price,
            ':item_type'=>$item_type,
            ':id'=>$item_id,
            ':new_image'=>$new_image
        )
    );
   

    if($update_item_result){
        redirect_to('index.php');
    }else{
        return 'Guess you got canned...';
    }
        
}

function deleteItems($item_id,$image_name){
    $pdo = Database::getInstance()->getConnection();

    $location = '../images/';
    unlink($location . "/" . $image_name);
  
    
    $delete_stmt = 'DELETE FROM `tbl_items` WHERE ID = :id';
    $delete_query = $pdo->prepare($delete_stmt);
    $delete_result = $delete_query->execute(
        array(
            ':id'=>$item_id
        )
        );
       
        
    if($delete_result && $delete_query->rowCount() > 0){
        redirect_to('./index.php');
    }else{
        return false;
    }
}