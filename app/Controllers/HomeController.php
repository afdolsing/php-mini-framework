<?php
// HomeController bertugas mengakses model
class HomeController extends Controller{

    public function index(){
        /* 
        ditutorial menggunakan ini sbg pengganti self
        $this->view('home');
        $this->model('User);
        */
        return self::view('home');
    }

    public function getProduct(){
        $product = self::model('Cart')->index();
        return self::view('product', ['products' => $product]); 
    }
}