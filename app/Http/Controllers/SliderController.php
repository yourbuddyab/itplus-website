<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SliderController extends Controller
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
        return view('backend..slider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fetchslider = Slider::get();
        return view('backend.slider.manageslider')->with(['fetchslider'=>$fetchslider]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $insert = new Slider;
            $insert->title = $request->title;
            $insert->description = $request->desc;
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                $destinationPath = public_path('/assets/image/slider');
                $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $pimage);
                $aa['image'] = "$pimage";
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
        $fetchslider = Slider::where('id',$id)->first();
        return view('backend.slider.editslider',compact('fetchslider'));
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
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = public_path('/assets/image/slider');
            $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $pimage);
            $aa['image'] = "$pimage";
        }
        else{
            $aa['image'] =$hidden;
        }
        $update  = Slider::where('id',$id)->update([
            'title' => $title,
            'description' => $description,
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
        $deletslider = Slider::where('id',$id)->delete();
        return redirect()->back()->with(['success'=>'Data deleted successfully']);
    }

}
