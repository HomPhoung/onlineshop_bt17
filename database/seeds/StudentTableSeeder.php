<?php

use Illuminate\Database\Seeder;
use App\Student;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $s1 =new Student;
       // //mgmg
       // $s1->name="Mg Mg";
       // $s1->email="mgmg@gmail.com";
       // $s1->address="Bahan";
       // $s1->save();

       // //susu
       // $s2 = new Student;
       // $s2->name="Ma Ma";
       // $s2->email="mama@gmail.com";
       // $s2->address="Shan";
       // $s2->save();

    	factory(App\Student::class,10)->create();
    }
}
