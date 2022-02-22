<?php


namespace App\classes;


class SignUp
{
    public $name;
    public $name_email;
    public $email;
    public $phone;
    public $password;
    public $all;
    public $allData;
    public $array1;
    public $array2;
    public $temp;

    public function __construct($post=null)
    {
        if (isset($post['name'])){
            $this->name = $post['name'];
        }
        if (isset($post['phone'])){
            $this->phone = $post['phone'];
        }
        if (isset($post['email'])){
            $this->email = $post['email'];
        }
        if (isset($post['password'])){
            $this->password = $post['password'];
        }
        if (isset($post['name-email'])){
            $this->name_email = $post['name-email'];
        }
    $this->all = $post;
    }


    public function signUp(){
        $result = $this->checkMail();
        if ($result == 1){
            $this->allData = "$this->name,,$this->phone,,$this->email,,$this->password$$";
            $path = 'assets/database/login.txt';
            $file = fopen($path, 'a');
            fwrite($file, "$this->allData");
            fclose($file);

            session_start();
            $_SESSION['id']=rand(100,1000);
            $_SESSION['name']=$this->name;
            $_SESSION['log']= 'loged';

            return 1;
        }
        else{
            return 0;
        }
    }


    public function checkMail(){
        $this->dbStringtoArray();

        foreach ($this->array2 as $sub){
            if ($sub['email']==$this->email){
                return 0;
            }
        }
        return 1;
    }


    public function dbStringtoArray(){
        $path = 'assets/database/login.txt';
        $content = file_get_contents($path);
        $this->array1 = explode('$$', $content);

        foreach ($this->array1 as $key => $item){
            $this->temp = explode(',,', $item);
            if ($this->temp[0]){
                $this->array2[$key]['name'] = $this->temp[0];
                $this->array2[$key]['phone'] = $this->temp[1];
                $this->array2[$key]['email'] = $this->temp[2];
                $this->array2[$key]['password'] = $this->temp[3];
            }
        }
    }

}