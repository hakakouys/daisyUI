<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@poliklinik.com'],
            [
                'name' => 'Admin User',
                'nama' => 'Administrator',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'alamat' => 'Kantor Poliklinik',
                'no_ktp' => '1234567890123456',
                'no_hp' => '081234567890',
            ]
        );

        User::firstOrCreate(
            ['email' => 'dokter@poliklinik.com'],
            [
                'name' => 'Dokter User',
                'nama' => 'Dr. Dokter Pertiwi',
                'password' => Hash::make('dokter123'),
                'role' => 'dokter',
                'alamat' => 'Rumah Dokter',
                'no_ktp' => '9876543210987654',
                'no_hp' => '081987654321',
            ]
        );
    }
}
