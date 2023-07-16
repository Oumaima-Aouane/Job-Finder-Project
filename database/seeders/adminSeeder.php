<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Admin;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::factory(15)->create();
        // DB::table('admins')->insert([
        //      'fullname'=>Str::random(20),
        //      'email'=>Str::random(15).'@gmail.com',
        //      'password'=>"123344455",
        //      'number'=>'1234567890',
        //      'company_id'=>1
        // ]);
    }
}
