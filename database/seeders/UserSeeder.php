<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInformation;

use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        $user = User::factory(3)
            ->has(UserInformation::factory()->count(1)
            ->state(new Sequence(
                ['cpf' => '69024351898', 'cellphone' => '82791401170'],
                ['cpf' => '79024351898', 'cellphone' => '82562393671'],
                ['cpf' => '89024351898', 'cellphone' => '82602348402']
            )))
            ->create();
    }
}