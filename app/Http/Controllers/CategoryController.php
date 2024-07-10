<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index (){
        $cat= new Category();
        $categories = $cat->getCategory();
        foreach($categories as $category){
            echo $category->id . "<br>";
            echo $category->cat_name."<br>";
        }
    }
}
