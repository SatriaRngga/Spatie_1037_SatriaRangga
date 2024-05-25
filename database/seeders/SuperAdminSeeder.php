<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /** 
     * Run the database seeds. 
     */
    public function run(): void
    {
        // Creating Super Admin User 
        $superAdmin = User::create([
            'name' => 'Satria',
            'email' => 'superadmin@roles.id',
            'password' => Hash::make('123456')
        ]);
        $superAdmin->assignRole('Super Admin');
        // Creating Admin User 
        $admin = User::create([
            'name' => 'Viony',
            'email' => 'admin@roles.id',
            'password' => Hash::make('123456')
        ]);
        $admin->assignRole('Admin');
        // Creating Product Manager User 
        $productManager = User::create([
            'name' => 'Yaya',
            'email' => 'operator@roles.id',
            'password' => Hash::make('123456')
        ]);
        $productManager->assignRole('Operator');

        $adminbaak = User::create([
            'name' => 'Puepue',
            'email' => 'baak@roles.id',
            'password' => Hash::make('123456')
        ]);
        $adminbaak->assignRole('Admin BAAK');

        $adminKeuangan = User::create([
            'name' => 'Rangga',
            'email' => 'keuangan@roles.id',
            'password' => Hash::make('123456')
        ]);
        $adminKeuangan->assignRole('Admin Keuangan');

        $mahasiswa = User::create([
            'name' => 'Maulana',
            'email' => 'mahasiswa@roles.id',
            'password' => Hash::make('123456')
        ]);
        $mahasiswa->assignRole('Mahasiswa');
    }
}
