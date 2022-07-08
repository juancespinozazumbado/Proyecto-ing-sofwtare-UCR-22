<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Administrador extends Seeder
{
    /**
     * Crear un usuario administrador en la base de datos
     *
     * @return void
     */
    public function run()
    {
       User ::create([
        'name'=>'Juan',
        'email' => 'admin@gmail.com',
        'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'isAdmin'=>1,
            'remember_token' => Str::random(10),

       ]);
    }
}
