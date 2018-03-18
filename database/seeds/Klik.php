<?php

use Illuminate\Database\Seeder;
use App\User;

class Klik extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $User = User::create(['name'=>'Nadiyah','email'=>'nadiyah@gmail.com','password'=>'rahasia']);
        

    }
}
