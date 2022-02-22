<?php


namespace App\classes;


class Login extends SignUp
{
    public $idName;

    public function login(){
        $this->dbStringtoArray();

        foreach ($this->array2 as $items){

            if ($items['email']==$this->name_email||$items['name']==$this->name_email){
                if ($items['password']==$this->password){

                    session_start();
                    $_SESSION['id']=rand(100,1000);
                    $_SESSION['name']=$items['name'];
                    $_SESSION['log']= 'loged';

                    return 1;
                }
                return 'invalid password';
            }
        }
        return 'invalid email/ user name';
    }
}