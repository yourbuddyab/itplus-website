<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use Image;
class PortfolioController extends Controller
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
        return view('backend.portfolio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fetchport = Portfolio::get();
        return view('backend.portfolio.manageportfolio')->with(['fetchport'=>$fetchport]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = new Portfolio;
        $insert->port_category = $request->cat;
        $insert->title = $request->title;
        if ($request->hasFile('app_image')) {
            $files = $request->file('app_image');
            $destinationPath = public_path('/assets/image/portfolio');
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $aa['image'] = "$profileImage";
            $insert->image = $aa['image'];
        }
        $insert->save();
        return redirect()->back()->with(['success'=>'Data inserted successfully']);
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
        $fetchport = Portfolio::where('id',$id)->get()->first();
        return view('backend.portfolio.editportfolio')->with(['fetchport'=>$fetchport]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hidden = $request->app_himage;
        $port_category = $request->cat;
        $title = $request->title;
        $app_image = $request->app_image;
        if ($request->hasFile('app_image')) {
            $files = $request->file('app_image');
            $destinationPath = public_path('/assets/image/portfolio');
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $aa['image'] = "$profileImage";
        }
        else{
            $aa['image'] =$hidden;
        }
        $update  = Portfolio::where('id',$id)->update([
                                                        'port_category' => $port_category,
                                                        'title' => $title,
                                                        'image' => $aa['image'],
                                                        ]);
          return redirect()->back()->with(['success'=>'Data updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletport = Portfolio::where('id',$id)->delete();
        return redirect()->back()->with(['success'=>'Data deleted successfully']);
    }
}
