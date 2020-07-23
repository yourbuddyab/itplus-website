<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
class TeamController extends Controller
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
        return view('backend.team.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fetchtest = Team::get();
        return view('backend.team.manageteam')->with(['fetchtest'=>$fetchtest]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = new Team;
        $insert->name = $request->name;
        $insert->designation = $request->desig;
        if ($request->hasFile('pimage')) {
            $files = $request->file('pimage');
            $destinationPath = public_path('/assets/image/team');
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $aa['image'] = "$profileImage";
            $insert->pimage = $aa['image'];
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
        $fetchtest = Team::where('id',$id)->get()->first();
        return view('backend.team.editteam')->with(['fetchtest'=>$fetchtest]);
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
        $name = $request->name;
        $designation = $request->desig;
        $hidden = $request->phimage;
        if ($request->hasFile('pimage')) {
            $files = $request->file('pimage');
            $destinationPath = public_path('/assets/image/team');
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $aa['image'] = "$profileImage";
        }
        else{
            $aa['image'] =$hidden;
        }
        $update  = Team::where('id',$id)->update([
            'name' => $name,
            'designation' => $designation,
            'pimage' => $aa['image'],
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
        $deletteam = Team::where('id',$id)->delete();
        return redirect()->back()->with(['success'=>'Data deleted successfully']);
    }
}
