<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\ContactUs;
use App\Productorder;
class ContactController extends Controller
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
        return view('backend.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fetchcon = Contact::get();
        return view('backend.contact.managecontact')->with(['fetchcon'=>$fetchcon]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fetchcontact = Contact::where('id',1)->count();
        if(!$fetchcontact)
        {
            $insert = new Contact;
            $insert->email = $request->email;
            $insert->mobile = $request->mobile;
            $insert->address = $request->address;
            $insert->website = $request->website;
            $insert->save();
            return redirect()->back()->with(['success'=>'Data inserted successfully']);
        }
        else{
            return redirect()->back()->withErrors(['error'=>'Data will be added only once!!']);
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
        $fetchcon = Contact::where('id',$id)->first();
        return view('backend.contact.editcontact')->with(['fetchcon'=>$fetchcon]);
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

        $email = $request->email;
        $mobile = $request->mobile;
        $address = $request->address;
        $website = $request->website;
        $updatecat = Contact::where('id',$id)->update(['email'=>$email,'mobile'=>$mobile,'address'=>$address,'website'=>$website]);
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
        $deletcontact = ContactUs::where('id',$id)->delete();
        return redirect()->back()->with(['success'=>'Data deleted successfully']);
    }
    public function deletepro($id)
    {
        $deletcontact = Productorder::where('id',$id)->delete();
        return redirect()->back()->with(['success'=>'Data deleted successfully']);
    }

    public function managecontactus()
    {
        $fetchcontact = ContactUs::get();
        return view('backend.contact.contactus')->with(['fetchcontact'=>$fetchcontact]);
    }
    public function manageproducts()
    {
        $fetchcontact = Productorder::get();
        return view('backend.contact.manageproducts')->with(['fetchcontact'=>$fetchcontact]);
    }
}
