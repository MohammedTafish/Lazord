<?php

namespace Database\Seeders;

use App\Models\Clinic;
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
        $clinic = Clinic::firstOrCreate(
            ['phone' => '0594866148'],
            [
                'name'    => 'عيادة د. محمد للأسنان',
                'address' => 'غزة - الشارع العام',
            ]
        );

        User::updateOrCreate(
            ['email' => 'mo@gamil.com'],
            [
                'first_name' => 'Dr.',
                'last_name'  => 'Mohammed',
                'name'       => 'Dr. Mohammed',
                'password'   => Hash::make('12345678'),
                'role'       => 'dentist',
                'clincs_id'  => $clinic->id,
            ]
        );
    }
}
