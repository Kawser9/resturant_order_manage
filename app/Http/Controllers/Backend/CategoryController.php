<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        $categories=Category::all();
        return view('backend\pages\category\list',compact('categories'));
    }
    public function create()
    {
        return view('backend\pages\category\create');
    }
    public function store(Request $request)
    {
        $request->validate
        ([

        ]);
        // dd($request->all());
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/category',$fileName);
        }
        Category::create
        ([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$fileName
        ]);
        return redirect()->back();
    }
}
