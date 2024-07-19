<?php
namespace App\Controllers;

use App\Models\Usuario_model;
use CodeIgniter\Controller;

class Login_controller extends BaseController 
{
    public function index()
    {
        helper(['form', 'url']);

        $dato['titulo'] = 'login';
        echo view('front/head', $dato);
        echo view('front/nav_bar');
        echo view('back/usuario/login');
        echo view('front/footer');
    }

    public function auth()
    {
        $session = session();
        $model = new Usuario_model(); 

        // Traemos los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');
     
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login_controller'); 
            }

            // Se verifican los datos ingresados
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
 
                $session->setFlashdata('msg', 'Bienvenido a AG Servicios Digitales');
                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Datos ingresados incorrectos');
                return redirect()->to('login');
            }
        } else {
            $session->setFlashdata('msg', 'Datos ingresados incorrectos');
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
