<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CrudController extends Controller
{
    private $usuario;
    private $totalpage = 3;

    public function __construct(Usuario $usuario){
        $this->usuario = $usuario;
    }

    public function index(){

        $title = 'Pagina Inicial';
        $usuarios = $this->usuario->paginate($this->totalpage);

        return view('index', [
            'title'     => $title,
            'usuarios'  => $usuarios
        ]);
    }

    public function cadastroPage(){
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

    public function delete($id){
        Usuario::destroy($id);

        return redirect('/');
    }

    public function alterarPage($id){
        $title = 'Cadastro';

        $usuario = Usuario::find($id);

        return view('cadastro', [
            'title'     => $title,
            'usuario'   => $usuario
        ]);
    }

    public function update(Request $request, $id){

        $usuario = Usuario::find($id);

        if ( $usuario ) {
            
            $usuario->name = $request->input('name');
            $usuario->email = $request->input('email');

            $usuario->save();

            return redirect('/');

        } else {
            return 'Falha ao enviar!';
        }

    }
}
