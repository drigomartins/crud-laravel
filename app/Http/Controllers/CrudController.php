<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CrudController extends Controller
{
    private $usuario;

    public function __construct(Usuario $usuario){
        $this->usuario = $usuario;
    }

    public function index(){

        $title = 'Pagina Inicial';
        $usuarios = $this->usuario->all();

        return view('index', [
            'title'     => $title,
            'usuarios'  => $usuarios
        ]);
    }

    public function cadastro(){
        $title = 'Cadastro';

        return view('cadastro', [
            'title' => $title
        ]);
    }

    public function cadastrar(Request $request){

        $dataForm = $request->all();

        if ( $dataForm ) {
            
            $insert = $this->usuario->create($dataForm);

            return redirect('/');

        } else {
            return 'Falha ao enviar!';
        }

    }

    public function deletar($id){
        Usuario::destroy($id);

        return redirect('/');
    }

    public function alterar($id){
        $title = 'Cadastro';

        $usuario = Usuario::find($id);

        return view('cadastro', [
            'title'     => $title,
            'usuario'   => $usuario
        ]);
    }
}
