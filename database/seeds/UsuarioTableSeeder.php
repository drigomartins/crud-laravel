<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'name'  => 'Rodrigo Martins',
            'email' => 'drigo.oliveira94@gmail.com'
        ]);
    }
}
