<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $s1 =new Role;
       // //mgmg
        $s1->name="Admin";
       // $s1->email="mgmg@gmail.com";
       // $s1->address="Bahan";
        $s1->save();

       // //susu
        $s2 = new Role;
        $s2->name="Customer";
       // $s2->email="mama@gmail.com";
       // $s2->address="Shan";
        $s2->save();
    }
}
