<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutModel;
use App\Service;
use App\Contact;
use App\ContactUs;
use App\Portfolio;
use App\Testimonial;
use App\Product;
use App\Logo;
use App\Slider;
use App\Category;
use App\Team;
use App\Productorder;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $fetchslider = Slider::get();
        $fetchlogo = Logo::get()->first();
        $fetchcon = Contact::get()->first();
        $fetchserv = Category::Limit(8)->get();
        $fetchcat = Category::with('service')->get();
        $fetchport = Portfolio::Limit(9)->get();
        $fetchtest = Testimonial::get();
        $fetchabt = AboutModel::get()->first();
        $fetchteam = Team::Limit(4)->get();
        $fetchpro = Product::Limit(8)->with('products')->orderBy('id','Desc')->get();
        return view('frontend.index')->with(['fetchabt'=>$fetchabt,'fetchteam'=>$fetchteam,'fetchcat'=>$fetchcat,'fetchslider'=>$fetchslider,'fetchlogo'=>$fetchlogo,'fetchserv'=>$fetchserv,'fetchcon'=>$fetchcon,'fetchport'=>$fetchport,'fetchtest'=>$fetchtest,'fetchpro'=>$fetchpro]);
    }

    public function about()
    {
        $fetchlogo = Logo::get()->first();
        $fetchabout = AboutModel::get()->first();
        $fetchcon = Contact::get()->first();
        $fetchtest = Team::get();
        $fetchcat = Category::with('service')->get();
        $fetchslider = Slider::orderBy('id','Desc')->get();
        return view('frontend.about')->with(['fetchslider'=>$fetchslider,'fetchcat'=>$fetchcat,'fetchlogo'=>$fetchlogo,'fetchabout'=>$fetchabout,'fetchcon'=>$fetchcon,'fetchtest'=>$fetchtest]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fetchlogo = Logo::get()->first();
        $fetchcon = Contact::get()->first();
        $fetchcat = Category::with('service')->get();
        return view('frontend.contact')->with(['fetchcat'=>$fetchcat,'fetchlogo'=>$fetchlogo,'fetchcon'=>$fetchcon]);
    }
    public function products($id)
    {
        $fetchlogo = Logo::get()->first();
        $fetchcon = Contact::get()->first();
        $fetchtest = Testimonial::get();
        $fetchcat = Category::with('service')->get();
        $fetchpro = Product::with('products')->limit(5)->orderBy('id','Desc')->get();
        $fetchproduct = Product::where('service_id',$id)->with('products')->get()->first();
        return view('frontend.products')->with(['fetchpro'=>$fetchpro,'fetchproduct'=>$fetchproduct,'fetchcat'=>$fetchcat,'fetchlogo'=>$fetchlogo,'fetchcon'=>$fetchcon,'fetchtest'=>$fetchtest]);
    }
    public function services($id)
    {
        $fetchlogo = Logo::get()->first();
        $fetchcon = Contact::get()->first();
        $fetchtest = Testimonial::get();
        $fetchcat = Category::with('service')->get();
        $fetchser = Product::where('service_id',$id)->with('products')->get()->first();
        $fetchser == null ? $data=null : $data= (explode(",",$fetchser->pimages));
        return view('frontend.services')->with(['fetchser'=>$fetchser,'fetchcat'=>$fetchcat,'fetchlogo'=>$fetchlogo,'fetchcon'=>$fetchcon,'fetchtest'=>$fetchtest, 'data'=>$data]);
    }
    public function portfolio()
    {
        $fetchlogo = Logo::get()->first();
        $fetchcon = Contact::get()->first();
        $fetchport = Portfolio::paginate(12);
        $fetchcat = Category::with('service')->get();
        return view('frontend.portfolio')->with(['fetchport'=>$fetchport,'fetchcat'=>$fetchcat,'fetchlogo'=>$fetchlogo,'fetchcon'=>$fetchcon]);
    }

    public function allservices()
    {
        $fetchlogo = Logo::get()->first();
        $fetchcon = Contact::get()->first();
        $fetchcat = Category::with('service')->get();
        $fetchser = Category::get();
        return view('frontend.allservices')->with(['fetchser'=>$fetchser,'fetchcat'=>$fetchcat,'fetchlogo'=>$fetchlogo,'fetchcon'=>$fetchcon]);
    }

    public function getallservices($category_id)
    {
        $fetchlogo = Logo::get()->first();
        $fetchcon = Contact::get()->first();
        $fetchcat = Category::with('service')->get();
        $fetchser = Service::with('category')->where('category_id',$category_id)->paginate(12);
        return view('frontend.servicecategory')->with(['fetchser'=>$fetchser,'fetchcat'=>$fetchcat,'fetchlogo'=>$fetchlogo,'fetchcon'=>$fetchcon]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = new ContactUs;
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->mobile = $request->mobiles;
        $insert->subject = $request->subject;
        $insert->message = $request->message;
        $insert->save();
        return redirect()->back()->with(['success'=>'Data inserted successfully']);
    }
    public function productorder(Request $request)
    {
        $insert = new Productorder;
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->mobile = $request->mobiles;
        $insert->cname = $request->cname;
        $insert->bussiness = $request->bussiness;
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
        //
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
        //
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
    // public function about()
    // {

    //     return view('frontend.index')->with(['fetchabout'=>$fetchabout]);
    // }
}
