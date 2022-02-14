<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser();
    }

    protected function createUser()
    {
        $user = User::create([
            'name' => 'Nelson Neto',
            'email' => 'nelsonp2n@gmail.com',
            'password' => bcrypt('codinome'),
        ]);

        $this->command->info("Usuário '$user->email' cadastrado com sucesso!");
    }
}
