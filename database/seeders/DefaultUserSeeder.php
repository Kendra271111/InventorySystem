<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Super Admin
        $superAdmin = User::create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('admin')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Petugas
        $petugas = User::create([
            'name' => 'Staff',
            'email' => 'Staff@gmail.com',
            'password' => Hash::make('staff')
        ]);
        $petugas->assignRole('Petugas');

        // Siswa
        $siswa = User::create([
            'name' => 'Student',
            'email' => 'Student@gmail.com',
            'password' => Hash::make('student')
        ]);
        $siswa->assignRole('Siswa');
    }
}
