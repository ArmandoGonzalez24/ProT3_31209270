<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data ['titulo']='pagina principal';
            echo view('front/head',$data);
            echo view('front/nav_bar');
            echo view('front/principal');
            echo view('front/footer');
}
    public function quienes_somos()
    {
        $data ['titulo']='quienes_somos';
            echo view('front/head',$data);
            echo view('front/nav_bar');
            echo view('front/quienes_somos');
            echo view('front/footer');
        }
    
    public function catalogo()
    {
        $data ['titulo']='catalogo';
            echo view('front/head',$data);
            echo view('front/nav_bar');
            echo view('front/catalogo');
            echo view('front/footer');
}
    public function acerca_de()
    {
        $data ['titulo']='acerca_de';
            echo view('front/head',$data);
            echo view('front/nav_bar');
            echo view('front/acerca_de');
            echo view('front/footer');
}
    public function registrar()
    {
        $data ['titulo']='registrar';
            echo view('front/head',$data);
            echo view('front/nav_bar');
            echo view('back/usuario/registrar');
            echo view('front/footer');
}
    public function login()
    {
        $data ['titulo']='login';
            echo view('front/head',$data);
            echo view('front/nav_bar');
            echo view('back/usuario/login');
            echo view('front/footer');
}
}
