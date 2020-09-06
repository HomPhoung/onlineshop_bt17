<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Subcategory;
use App\Category;
class PageController extends Controller
{
      public function mainfun($value='')
    {       
            //$items = Item::take(5)->orderBy('id','DESC')->get();
            //dd($items);
        //$items = Item::take(5)->get();
             $items = Item::All();
            $brands = Brand::All();
        	return view('Frontend.main',compact('items','brands'));

    }
     public function loginfun($value='')
    {
        	return view('Frontend.login');
    }
     public function promotionfun($value='')
    {
        	return view('Frontend.promotion');
    }
     public function registerfun($value='')
    {
        	return view('Frontend.register');
    }
     public function shoppingcartfun($value='')
    {
        	return view('Frontend.shoppingcart');
    }
     public function subcategoryfun($id)
    {
        $subcategory=Subcategory::find($id);
        $subcategories=Subcategory::all();
        	return view('Frontend.subcategory',compact('subcategories','subcategory'));
    }
     public function itemdetailfun($id)
    {
            $item=Item::find($id);
        	return view('Frontend.itemdetail',compact('item'));
    }
     public function brandfun($id)
    {     
          $brand = Brand::find($id);
        	return view('Frontend.brand',compact('brand'));
    }
    
}
