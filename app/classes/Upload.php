<?php


namespace App\classes;


class Upload extends Products
{
    public $productData;
    public $imageData;
    public $productName;
    public $productPrice;
    public $productDescription;
    public $productDetails;
    public $productCategory;
    public $productPath;
    public $imageName;
    public $imagePath;
    public $imageDirectory;
    public $image;


    public function __construct($post=null, $file=null){
        if ($post){
            $this->productData = $post;
            $this->productName = $post['name'];
            $this->productPrice = $post['price'];
            $this->productDescription = $post['description'];
            $this->productCategory = $post['category'];
            $this->productDetails = $post['details'];
        }
        if ($file){
            $this->imageData = $file['image'];
        }

    }

    public function upload(){
        $this->imagePath = $this->imageUpload();
        $this->productPath = 'assets/database/product.txt';
        $files = fopen($this->productPath, 'a');
        $this->dbStringtoArray();
        $index = $this->key+1;
        $string = "$this->productName,,$this->productPrice,,$this->productDescription,,$this->productCategory,,$this->imagePath,,$this->productDetails,,$index$$";
        fwrite($files, $string);
        fclose($files);

        return 1;
    }

    public function imageUpload(){
        $this->imageName = time().$this->imageData['name'];
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->imageData['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }
}