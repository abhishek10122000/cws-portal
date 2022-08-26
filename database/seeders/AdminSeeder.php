<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Admin;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'name'=>'abhishek kumar',
            'email'=>'abcd@gmail.com',
            'password'=>Hash::make('123456789'),
        ];
        Admin::create($data);
    }
}
