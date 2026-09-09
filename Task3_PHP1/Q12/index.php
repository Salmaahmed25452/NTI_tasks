<?php

session_start();
include('validation.php');


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $errors=[];

    foreach($Validation as $valid_name => $valid_value){
        $value=filter_input(INPUT_POST,$valid_name,$valid_value['filters'],$valid_value['my_options']);

        if(empty($_POST[$valid_name])){
            $errors[$valid_name]="You must fill $valid_name";
        }elseif($value == false){
            $errors[$valid_name]=$valid_value['error'];
        }
        
    }

    if($errors){
        $_SESSION['errors']=$errors;
        header('location:form.php');
        exit();
    }

    $_SESSION['price']=$_POST['price'];
    $_SESSION['num']=$_POST['num'];

    header('location:welcome.php');

}
?>