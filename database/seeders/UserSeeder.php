<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            "name" => "Mizz",
            "email" => "mizz@gmail.com",
            "password" => Hash::make("mizz"),
            "status" => "Active",
            "role_id" => "9bae0005-b19b-46c3-88fa-665b143d7aeb"
        ]);
    }
}
