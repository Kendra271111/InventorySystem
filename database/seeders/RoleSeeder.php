<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // role & seeder
        Role::create(['name' => 'Super Admin']);
        $petugas = Role::create(['name' => 'Petugas']);
        $siswa = Role::create(['name' => 'Siswa']);

        $petugas->givePermissionTo([
           // Barang
            'view-barang',
            'create-barang',
            'edit-barang',
            'delete-barang',

            // Kategori
            'view-kategori',
            'create-kategori',
            'edit-kategori',
            'delete-kategori',

            // Peminjaman
            'view-peminjaman',
            'create-peminjaman',
            'edit-peminjaman',
            'delete-peminjaman',

            // User
            'view-user'
        ]);

        $siswa->givePermissionTo([
            'view-barang',
            'view-peminjaman',
            'view-kategori'
        ]);
    }
}