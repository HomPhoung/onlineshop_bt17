<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
    	    //factory(App\Category::class,5)->create();
    	    //one-to-many relationship with saveMany() Method
    		//create 2 records 
            factory(App\Category::class,5)->create()->each(function($category){
        	//seed the relation with 3 subcategories
        	$subcategories = factory(App\Subcategory::class,3)->make();
        	$category->subcategories()->saveMany($subcategories);
        });

    }
}
