<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            'name' => 'Samsul Parid',
            'position_type_id' => 1,
            'phone' => '082216968890',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Elvira Desri Viani',
            'position_type_id' => 2,
            'phone' => '081213501876',
            'email' => '',
            'age' => null,
            'gender' => 'female',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Febriandi',
            'position_type_id' => 6,
            'phone' => '081358615074',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Rina Meilani',
            'position_type_id' => 7,
            'phone' => '081213942896',
            'email' => '',
            'age' => null,
            'gender' => 'female',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Aan Afrijal',
            'position_type_id' => 6,
            'phone' => '081314378534',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Sarip',
            'position_type_id' => 3,
            'phone' => '082150183153',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Wawan',
            'position_type_id' => 4,
            'phone' => '081317719010',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Soni',
            'position_type_id' => 8,
            'phone' => '085220613248',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Ruslan',
            'position_type_id' => 8,
            'phone' => '081324811309',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Dedi',
            'position_type_id' => 8,
            'phone' => '',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Nurdiansyah',
            'position_type_id' => 8,
            'phone' => '085223759067',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Dede',
            'position_type_id' => 8,
            'phone' => '082223914941',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Asep',
            'position_type_id' => 8,
            'phone' => '081291132189',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Budi',
            'position_type_id' => 8,
            'phone' => '',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);

        DB::table('employees')->insert([
            'name' => 'Nurhidayat',
            'position_type_id' => 8,
            'phone' => '',
            'email' => '',
            'age' => null,
            'gender' => 'male',
            'address' => '',
            'created_by' => 'owner',
            'updated_by' => 'owner',
            'created_at' => '2022-12-22',
            'updated_at' => '2022-12-22'
        ]);
    }
}
