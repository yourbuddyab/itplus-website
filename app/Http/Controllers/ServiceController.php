<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Category;
class ServiceController extends Controller
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
        $fetchcat = Category::get();
        return view('backend.services.index')->with(['fetchcat'=>$fetchcat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fetchservice = Service::with('category')->get();
        return view('backend.services.manageservice',compact('fetchservice'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_id = $request->category_id;
        $products = $request->products;
        $fetchservice = Service::where('category_id',$category_id)->where('products',$products)->count();
        if(!$fetchservice)
        {
            $insert = new Service;
            $insert->category_id = $category_id;
            $insert->products = $products;
            if ($request->hasFile('service_image')) {
                $files = $request->file('service_image');
                $destinationPath = public_path('/assets/image/category');
                $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $pimage);
                $aa['image'] = "$pimage";
                $insert->service_image = $aa['image'];
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fetchcat = Category::get();
        $fetchservice = Service::where('id',$id)->first();
        return view('backend.services.editservice',compact('fetchservice'))->with(['fetchcat'=>$fetchcat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $products = $request->products;
        $category_id = $request->categoryid;
        $hidden = $request->phimage;
        $fetchser = Service::where('id','!=',$id)->where('category_id',$category_id)->where('products',$products)->count();
        if(!$fetchser)
        {
            if ($request->hasFile('service_image')) {
                $files = $request->file('service_image');
                $destinationPath = public_path('/assets/image/category');
                $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $pimage);
                $aa['image'] = "$pimage";
            }
            else{
                $aa['image'] =$hidden;
            }
            $updatecat = Service::where('id',$id)->update(['category_id'=>$category_id,'products'=>$products,
                                                            'service_image'=>$aa['image']]);
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
    public function destroy($id)
    {
        $deletser = Service::where('id',$id)->delete();
        return redirect()->back()->with(['success'=>'Data deleted successfully']);
    }
}
