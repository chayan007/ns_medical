<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategoryController extends Controller
{
    public function add(Request $request)
    {
        $category = new Categorie();
        $category->category = $request->category;
        $category->save();
        return back()->with('status', 'Category Successfully Added');
    }

    public function delete($id)
    {
        $category = Categorie::where('id', $id)->firstOrFail();
        $category->delete();
        return back()->with('delete', 'Category Deleted Successfully');
    }

    public function update($id, Request $request){
        $category = Categorie::where('id', $id)->firstOrFail();
        $category->category = $request->category;
        $category->save();
        return back()->with('update', 'Category Updated Successfully');
    }
}
