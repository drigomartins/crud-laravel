<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $title = 'Pagina Inicial';

        return view('index', [
            'title' => $title
        ]);
    }

    public function cadastro(){
        $title = 'Cadastro';

        return view('cadastro', [
            'title' => $title
        ]);
    }
}
