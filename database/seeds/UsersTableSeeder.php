<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email='mario.banda@utc.edu.ec';
        $user=User::where('email',$email)->first();
        if(!$user){
            $user=new User();
            $user->name ='Admin';
            $user->email =$email;
            $user->password =Hash::make($email);
            $user->save();
        }



        // Arquitectura Religiosa
        // Equipamiento Urbano
        // Monumentos
        // Bienes Muebles
        // Mama Negra
        // Danzante del Sol
        // Caporales de Angamarca
        // Fiesta de San Miguel de Salcedo
        // Niño de Isinche
        // Parque Nacional Cotopaxi
        // Parque Nacional LLanganates
        // Reserva Ecológica Illinizas
        // Kinkiyary
        // Ucumamayaya TV
        // Panzaleito
        // Libros y/o Artículos
        // Internacional
        // Nacional
        // Local

    }
}
