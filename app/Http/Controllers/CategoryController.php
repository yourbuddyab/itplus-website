<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('backend.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fetchcat = Category::get();
        return view('backend.category.managecategory')->with(['fetchcat'=>$fetchcat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = $request->category;
        $fetchcategory = Category::where('category',$category)->count();
        if(!$fetchcategory)
        {
            $insert = new Category;
            $insert->category = $category;
            $insert->description = $request->desc;
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                $destinationPath = public_path('/assets/image/services');
                $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $pimage);
                $aa['image'] = "$pimage";
                $insert->image = $aa['image'];
            }
            $insert->save();
            return redirect()->back()->with(['success'=>'Data inserted successfully']);
        }
        else{
            return redirect()->back()->withErrors(['error'=>'Record already exist!!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        $fetchcat = Category::where('category_id',$category_id)->first();
        return view('backend.category.editcategory',compact('fetchcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$category_id)
    {
        $category = $request->category;
        $fetchcat = Category::where('category_id','!=',$category_id)->where('category',$category)->count();
        if(!$fetchcat)
        {
            $description = $request->desc;
            $hidden = $request->phimage;
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                $destinationPath = public_path('/assets/image/services');
                $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $pimage);
                $aa['image'] = "$pimage";
            }
            else{
                $aa['image'] =$hidden;
            }
            $updatecat = Category::where('category_id',$category_id)
                                 ->update(['category'=>$category,
                                           'description' => $description,
                                           'image' => $aa['image']
                                        ]);
            return redirect()->back()->with(['success'=>'Data updated successfully']);
        }
        else{
            return redirect()->back()->withErrors(['error'=>'Record already exist!!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        $deletcat = Category::where('category_id',$category_id)->delete();
        return redirect()->back()->with(['success'=>'Data deleted successfully']);

    }
}
