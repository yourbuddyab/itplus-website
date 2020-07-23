<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\AboutModel;
class AboutController extends Controller
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
        return view('backend.about.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getcontent = AboutModel::get();
        return view('backend.about.managecontent')->with('getcontent',$getcontent);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = $request->about;
        $fetchcontent = AboutModel::where('id',1)->count();
        if(!$fetchcontent)
        {
            $insert = new AboutModel;
            $insert->about=$about;
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                $destinationPath = public_path('/assets/image/about');
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
        $fetchcontent = AboutModel::where('id',$id)->first();
        return view('backend.about.editcontent',compact('fetchcontent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$aboutid)
    {
        $about = $request->about;
        // $aboutid = $request->aboutid;
        $hidden = $request->phimage;
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = public_path('/assets/image/about');
            $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $pimage);
            $aa['image'] = "$pimage";
        }
        else{
            $aa['image'] =$hidden;
        }
            $updatecat = AboutModel::where('id',$aboutid)->update(['about'=>$about,'image' => $aa['image']]);
            return redirect()->back()->with(['success'=>'Data updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        // $about = $_GET['about'];
        // $deletabout = AboutModel::where('id',$about)->delete();
        // return response(['status'=>200,'message'=>'Data deleted successfully']);
    }


}
