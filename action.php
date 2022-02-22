<?php

require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\Products;
use App\classes\SignUp;
use App\classes\Login;
use App\classes\Upload;

if (isset($_GET['pages'])){
    if ($_GET['pages']=='signUp'){
        session_start();
        $_SESSION['log']='signUp';
        include 'pages/signUp.php';
    }
    elseif ($_GET['pages']=='logout'){
        $logout = new Home();
        $logout->logOut();
    }
    elseif ($_GET['pages']=='login'){
        session_start();
        $_SESSION['log']='logIn';
        include 'pages/login.php';
    }
    elseif ($_GET['pages']=='upload'){
        session_start();
        if (isset($_SESSION['id'])){
            $_SESSION['log']= 'loged';
            include 'pages/uploadForm.php';
        }
        else{
            $_SESSION['log']='logIn';
            $logs = 'Please log in first';
            include 'pages/login.php';
        }
    }
    elseif ($_GET['pages']=='details'){
        session_start();
        $_SESSION['log']= 'guest';
        $detail = new Products();
        $details = $detail->getAllProducts();
        $p_id = $_GET['id'];

        include 'pages/details.php';
    }
    elseif ($_GET['pages']=='guest'){
        session_start();
        $_SESSION['log']= 'guest';
        $product = new Products();
        $products = $product->getAllProducts();

        include 'pages/home.php';
    }
    elseif ($_GET['pages']=='home'){
        session_start();
        $_SESSION['log']= 'guest';
        $product = new Products();
        $products = $product->getAllProducts();
        include 'pages/home.php';
    }
    elseif ($_GET['pages']=='man'){
        session_start();
        $_SESSION['log']= 'guest';
        $category = $_GET['pages'];
        $product = new Products();
        $products = $product->getAllProducts();

        include 'pages/homeSub.php';
    }
    elseif ($_GET['pages']=='women'){
        session_start();
        $_SESSION['log']= 'guest';
        $category = $_GET['pages'];
        $product = new Products();
        $products = $product->getAllProducts();

        include 'pages/homeSub.php';
    }
    elseif ($_GET['pages']=='kids'){
        session_start();
        $_SESSION['log']= 'guest';
        $category = $_GET['pages'];
        $product = new Products();
        $products = $product->getAllProducts();

        include 'pages/homeSub.php';
    }
}

elseif (isset($_POST['signUpBtn'])){
    if ($_POST['name']&&$_POST['phone']&&$_POST['email']&&$_POST['password']){
        $signup  = new SignUp($_POST);
        $value = $signup->signUp();
        if ($value==0){
            $message = 'This email already used. Try with another email.';
            include 'pages/signUp.php';
        }
        else{
            $product = new Products();
            $products = $product->getAllProducts();
            include 'pages/home.php';
        }
    }
    else{
        $message = 'Fillup all input field';
        include 'pages/signup.php';
    }
}

elseif (isset($_POST['logInBtn'])){
    $log = new Login($_POST);
    $logs = $log->login();

    if ($logs==1){
        $product = new Products();
        $products = $product->getAllProducts();
        include 'pages/home.php';
    }
    else{
        include 'pages/login.php';
    }
}

elseif (isset($_POST['uploadBtn'])){
    if ($_POST['name']&&$_POST['price']&&$_POST['description']&&$_POST['category']&&$_POST['details']&&$_FILES['image']){
        $uploads = new Upload($_POST,$_FILES);
        $result = $uploads->upload();
        if ($result==1){
            $message = 'Product uploaded successfully';
            include 'pages/uploadForm.php';
        }
    }
    else{
        $message = 'Fillup all input field';
        include 'pages/uploadForm.php';
    }


}

