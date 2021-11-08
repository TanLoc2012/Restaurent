<?php
require_once "mvc/utility/utility.php";
class Register extends Controller{

    public $UserModel;

    public function __construct(){
        $this->UserModel = $this->model("UserModel");
      
    }

    public function SayHi(){
        $this->view("register", []);
    }

    public function UserRegister() {
        
        if( isset($_POST["btnRegister"]) ) {
            // get data
            $fullname = getPost('fullname');
            $email = getPost('email');
            $password = getPost('password');
            $password = getSecurityMD5($password);
            $phone_number = getPost('phone_number');
            $address = getPost('address');

            // insert database
            $kq = $this->UserModel->InsertNewUser($fullname, $email, $password, $phone_number, $address);
            var_dump($kq["result"]);
            // show home
            if($kq["result"]) {
                header('Location: http://localhost/Laptrinhweb/Login');
            }
            else header('Location: http://localhost/Laptrinhweb/Register');
        }
    }
}

?>