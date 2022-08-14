<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Exports\CategoriesExport;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    public function collection()
    {
        return Category::all();
    }
    public function categoryExport() 
    {

        return Excel::download(new CategoriesExport, 'categories.xlsx');
    } 
}

