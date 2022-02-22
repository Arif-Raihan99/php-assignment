<?php


namespace App\classes;


class Products
{
    public $array1;
    public $array2;
    public $temp;
    public $string;
    public $key;

    public function getAllProducts(){
        $this->dbStringtoArray();

        if (isset($_SESSION['id'])){
            $_SESSION['log']= 'loged';
        }

        return $this->array2;
    }

    public function dbStringtoArray(){
        $path = 'assets/database/product.txt';
        $this->string = file_get_contents($path);
        $this->key = 0;
        if (isset($this->string)){
            $this->array1 = explode('$$', $this->string);

            foreach ($this->array1 as $this->key => $item){
                $this->temp = explode(',,', $item);
                if ($this->temp[0]){
                    $this->array2[$this->key]['name'] = $this->temp[0];
                    $this->array2[$this->key]['price'] = $this->temp[1];
                    $this->array2[$this->key]['description'] = $this->temp[2];
                    $this->array2[$this->key]['category'] = $this->temp[3];
                    $this->array2[$this->key]['path'] = $this->temp[4];
                    $this->array2[$this->key]['details'] = $this->temp[5];
                    $this->array2[$this->key]['id'] = $this->temp[6];
                }
            }
        }

    }
}









//return[
//    0=> [
//        'id'           => 1,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p28.jfif'
//    ],
//    1=> [
//        'id'           => 2,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p27.jfif'
//    ],
//    2=> [
//        'id'           => 3,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p26.jfif'
//    ],
//    3=> [
//        'id'           => 4,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p25.jfif'
//    ],
//    4=> [
//        'id'           => 5,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p24.jfif'
//    ],
//    5=> [
//        'id'           => 6,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p23.jfif'
//    ],
//    6=> [
//        'id'           => 7,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p22.jfif'
//    ],
//    7=> [
//        'id'           => 8,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p21.jfif'
//    ],
//    8=> [
//        'id'           => 9,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p20.jfif'
//    ],
//    9=> [
//        'id'           => 10,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p19.jfif'
//    ],
//    10=> [
//        'id'           => 11,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p18.jfif'
//    ],
//    11=> [
//        'id'           => 12,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p17.jfif'
//    ],
//    12=> [
//        'id'           => 13,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p16.jfif'
//    ],
//    13=> [
//        'id'           => 14,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p15.jfif'
//    ],
//    14=> [
//        'id'           => 15,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p14.jfif'
//    ],
//    15=> [
//        'id'           => 16,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p13.jfif'
//    ],
//    16=> [
//        'id'           => 17,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p1.jfif'
//    ],
//    17=> [
//        'id'           => 18,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p2.jfif'
//    ],
//    18=> [
//        'id'           => 19,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p3.jfif'
//    ],
//    19=> [
//        'id'           => 20,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p4.jfif'
//    ],
//    20=> [
//        'id'           => 21,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p5.jfif'
//    ],
//    21=> [
//        'id'           => 22,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p6.jfif'
//    ],
//    22=> [
//        'id'           => 23,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p7.jfif'
//    ],
//    23=> [
//        'id'           => 24,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p8.jfif'
//    ],
//    24=> [
//        'id'           => 25,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p9.jfif'
//    ],
//    25=> [
//        'id'           => 26,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p10.jfif'
//    ],
//    26=> [
//        'id'           => 27,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p11.jfif'
//    ],
//    27=> [
//        'id'           => 28,
//        'category-id'  => 3,
//        'name'         => 'New Shirt',
//        'price'        => '4500',
//        'description'  => 'description',
//        'image'        => 'p12.jfif'
//    ],
//];