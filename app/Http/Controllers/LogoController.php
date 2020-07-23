<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
class LogoController extends Controller
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
        return view('backend.logo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fetchlogo = Logo::get();
        return view('backend.logo.managelogo')->with(['fetchlogo'=>$fetchlogo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fetchlogo = Logo::where('id',1)->count();
        if(!$fetchlogo)
        {
            $insert = new Logo;
            $insert->title = $request->title;
            $insert->description = $request->desc;
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                $destinationPath = public_path('/assets/image/logo');
                $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $pimage);
                $aa['image'] = "$pimage";
                $insert->image = $aa['image'];
            }
            if ($request->hasFile('favicon')) {
                $ffiles = $request->file('favicon');
                $destinationPaths = public_path('/assets/image/logo');
                $fimage = date('YmdHis') . "." . $ffiles->getClientOriginalExtension();
                $ffiles->move($destinationPaths, $fimage);
                $fevimg['images'] = "$fimage";
                $insert->favicon = $fevimg['images'];
            }
            $insert->save();
            return redirect()->back()->with(['success'=>'Data inserted successfully']);
        }
        else{
            return redirect()->back()->withErrors(['error'=>'Data will be inserted only once!!']);
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
        $fetchlogo = Logo::where('id',$id)->first();
        return view('backend.logo.editlogo',compact('fetchlogo'));
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
        $title = $request->title;
        $description = $request->desc;
        $hidden = $request->phimage;
        $fhimage = $request->fhimage;
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = public_path('/assets/image/logo');
            $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $pimage);
            $aa['image'] = "$pimage";
        }
        else{
            $aa['image'] =$hidden;
        }

        if ($request->hasFile('favicon')) {
            $ffiles = $request->file('favicon');
            $destinationPaths = public_path('/assets/image/logo');
            $fimage = date('YmdHis') . "." . $ffiles->getClientOriginalExtension();
            $ffiles->move($destinationPaths, $fimage);
            $fevimg['images'] = "$fimage";
        }
        else{
            $fevimg['images'] =$fhimage;
        }
        $update  = Logo::where('id',$id)->update([
            'title' => $title,
            'description' => $description,
            'image' => $aa['image'],
            'favicon' => $fevimg['images'],
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
        //
    }
}
