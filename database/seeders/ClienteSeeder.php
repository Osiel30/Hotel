<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Juan',
                'apellidos' => 'Pérez',
                'email' => 'juan.perez@example.com',
                'telefono' => '123-456-7890',
                'direccion' => 'Calle Falsa 123, Ciudad',
                'password' => Hash::make('password123'),
            ],
            [
                'nombre' => 'Ana',
                'apellidos' => 'García',
                'email' => 'ana.garcia@example.com',
                'telefono' => '987-654-3210',
                'direccion' => 'Avenida Siempre Viva 456, Ciudad',
                'password' => Hash::make('password123'),
            ],
            [
                'nombre' => 'Carlos',
                'apellidos' => 'López',
                'email' => 'carlos.lopez@example.com',
                'telefono' => '555-666-7777',
                'direccion' => 'Calle del Sol 789, Ciudad',
                'password' => Hash::make('password123'),
            ],
            [
                'nombre' => 'María',
                'apellidos' => 'Rodríguez',
                'email' => 'maria.rodriguez@example.com',
                'telefono' => '444-555-6666',
                'direccion' => 'Plaza Mayor 101, Ciudad',
                'password' => Hash::make('password123'),
            ],
            [
                'nombre' => 'Luis',
                'apellidos' => 'Fernández',
                'email' => 'luis.fernandez@example.com',
                'telefono' => '222-333-4444',
                'direccion' => 'Boulevard Central 202, Ciudad',
                'password' => Hash::make('password123'),
            ],
            [
                'nombre' => 'Sofía',
                'apellidos' => 'Martínez',
                'email' => 'sofia.martinez@example.com',
                'telefono' => '999-888-7777',
                'direccion' => 'Avenida del Parque 303, Ciudad',
                'password' => Hash::make('password123'),
            ],
            [
                'nombre' => 'Pedro',
                'apellidos' => 'Gómez',
                'email' => 'pedro.gomez@example.com',
                'telefono' => '111-222-3333',
                'direccion' => 'Calle de las Flores 404, Ciudad',
                'password' => Hash::make('password123'),
            ],
            [
                'nombre' => 'Laura',
                'apellidos' => 'Hernández',
                'email' => 'laura.hernandez@example.com',
                'telefono' => '666-777-8888',
                'direccion' => 'Calle del Río 505, Ciudad',
                'password' => Hash::make('password123'),
            ],
            [
                'nombre' => 'Miguel',
                'apellidos' => 'Jiménez',
                'email' => 'miguel.jimenez@example.com',
                'telefono' => '333-444-5555',
                'direccion' => 'Calle del Bosque 606, Ciudad',
                'password' => Hash::make('password123'),
            ],
            [
                'nombre' => 'Elena',
                'apellidos' => 'Ruiz',
                'email' => 'elena.ruiz@example.com',
                'telefono' => '777-888-9999',
                'direccion' => 'Avenida de la Luna 707, Ciudad',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
