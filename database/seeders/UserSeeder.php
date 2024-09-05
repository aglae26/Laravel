<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usando ORM
        $user = new User();
        $user->nombre_completo = 'Aglae Duin';
        $user->username = 'aglae26';
        $user->rol = 'admin';
        $user->email = 'aglaefduin@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
    }
}
