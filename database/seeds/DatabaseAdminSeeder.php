<?php

use Illuminate\Database\Seeder;

class DatabaseAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('teladent_admin')->delete();
        \App\TeladentAdmin::create(
            array(
                'username' => 'teladent-admin',
                'email' => 'humabinteirfan@gmail.com',
                'password' => Hash::make('UnlockMeImAdmin'),
            )
        );
    }
}
