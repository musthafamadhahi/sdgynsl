<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Admin',
            'district' => 'Undifiend',
            'division' => 'Undifiend',
            'contact_no' => '0777828357',
            'email' => 'musthafamadhahi@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);
    }
}
