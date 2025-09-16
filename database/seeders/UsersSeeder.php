<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Crear usuario admin si no existe
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'admin',
                'password' => bcrypt('password'),
            ]
        );

        $this->command->info("✅ Creacion de super administrador");
        $this->command->info("name: $admin->name");
        $this->command->info("email: $admin->email");
        $this->command->info("password: password");

        // Crear el rol super-admin si no existe
        $superAdminRole = Role::firstOrCreate(
            ['name' => 'super_admin', 'guard_name' => 'web']
        );

        $this->command->info("✅ Creacion de rol super admin");


        // Asignar el rol
        if (! $admin->hasRole($superAdminRole)) {
            $admin->assignRole($superAdminRole);
        }

        $this->command->info("✅ asignacion de rol super admin");

        // Genera permisos y policies para el panel "admin"
        Artisan::call('shield:generate', [
            '--all' => true,          // genera para todos los resources/pages/widgets
            '--panel' => 'admin',     // el panel donde quieres los permisos
            '--option' => 'policies_and_permissions', // genera ambos
        ]);

        $this->command->info("✅ Permisos y policies generados con Shield");
    }
}
