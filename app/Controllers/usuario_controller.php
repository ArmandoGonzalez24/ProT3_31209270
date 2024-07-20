<?php  
namespace App\Controllers;
Use App\Models\Usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{

	public function __construct(){
		helper(['form','url']);
	}
	    public function create()
    {
        $data ['titulo']='registrar';
            echo view('front/head',$data);
            echo view('front/nav_bar');
            echo view('back/usuario/registrar');
            echo view('front/footer');
}
           
        public function formValidation() {

        $input =  $this->validate([

        'nombre' => 'required|min_length[3]',
        'apellido'=>'required|min_length[3]|max_length[25]',
        'usuario' =>'required|min_length[3]',
        'email'  => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
        'pass'  =>  'required|min_length[3]|max_length[10]'
    ],
    );

   $formModel = new usuario_Model ();
   

if (!$input) {
            $data['titulo'] = 'registrar';
            echo view('front/head', $data);
            echo view('front/nav_bar');
            echo view('back/usuario/registrar', ['validation' => $this->validator]);
            echo view('front/footer');
}else {

        $formModel->save([
        'nombre' => $this->request->getVar('nombre'),
        'apellido' => $this->request->getVar('apellido'),
        'usuario' => $this->request->getVar('usuario'),
        'email' => $this->request->getVar('email'),
        'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)]);
        //password_hash() crea un nuevo hash de contraseña usando un algoritmo hash de único sentido.

        // Flashdata funciona solo en redirigir la función en el controlador en la vista de carga


        session()->setFlashdata('success', 'Usuario registrado con exito');
        return redirect() -> to ('registrar');

}
}
}
?>