<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pres>"; print_r($data); die;
            $category = new Category;
            $category->name = $data['name'];
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->save();
        }
        return view('categories.add_category');
    }
}
