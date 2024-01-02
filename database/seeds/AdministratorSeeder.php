<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->name        = "Administrator";
        $administrator->email       = "danyadhi4149@gmail.com";
        $administrator->password    = Hash::make("password");
        $administrator->save();
        $this->command->info("User Admin berhasil diinsert");
    }
}
