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
            'name' => 'Keindra',
            'email' => 'Ken@gmail.com',
            'password' => Hash::make('Ken')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Petugas
        $petugas = User::create([
            'name' => 'Linghus',
            'email' => 'Jeet@gmail.com',
            'password' => Hash::make('jeet')
        ]);
        $petugas->assignRole('Petugas');

        // Siswa
        $siswa = User::create([
            'name' => 'Keindrasiswa',
            'email' => 'AH@gmail.com',
            'password' => Hash::make('siswa')
        ]);
        $siswa->assignRole('Siswa');
    }
}
