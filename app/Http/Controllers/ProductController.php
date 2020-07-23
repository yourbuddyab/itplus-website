<?php

namespace App\Http\Controllers;

use App\Product;
use App\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
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
        $fetchproducts = Service::get();
        return view('backend.products.index')->with(['fetchproducts'=>$fetchproducts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fetchproducts = Product::with('products')->get();
        return view('backend.products.manageproducts')->with(['fetchproducts'=>$fetchproducts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($this->validateRequest($request));
        $imageData = Product::create($this->validateRequest($request));
        $this->storeLogo($imageData);
        $this->sotreImage($imageData);
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
    public function edit($product_id)
    {
        $fetchcat  = Service::get();
        $fetchproducts = Product::where('product_id',$product_id)->first();
        return view('backend.products.editproducts',compact('fetchproducts'))->with(['fetchcat'=>$fetchcat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $service_id = $request->service_id;
        $description = $request->desc;
        $hidden = $request->phimage;
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = public_path('/assets/image/products');
            $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $pimage);
            $aa['image'] = "$pimage";
        }
        else{
            $aa['image'] =$hidden;
        }
        $update  = Product::where('product_id',$product_id)->update([
            'service_id' => $service_id,
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
    public function destroy($product_id)
    {
        $deletpro = Product::where('product_id',$product_id)->delete();
        return redirect()->back()->with(['success'=>'Data deleted successfully']);
    }
    protected function validateRequest($request)
    {
        $data = $request->validate([
            "service_id"  => "required|string",
            "description" => "required|string",
            "feature"     => "required|string",
            "image"       => "required|mimes:png,jpg,jpeg|max:2000",
            "pimages.*"   => "required|mimes:png,jpg,jpeg|max:2000",
        ]);
        $data['pimages'] = implode(',', $request->pimages);
        return $data;
    }
    protected function sotreImage($imageData)
    {
        $temp = explode(',', $imageData->pimages);
        $imagesName = null;
        for ($i = 0; $i < count($temp); $i++) {
            $path   = $temp[$i];
            $resize = Image::make($path)->resize(request()->size);
            $hash = md5(time() . $i);
            $path = "/assets/image/products/{$hash}.png";
            $resize->save(public_path($path), 100);
            $imagesName[] = $path;
        }
        $imageData->update([
            "pimages" => implode(',',$imagesName),
        ]);
    }
    protected function storeLogo($imageData)
    {
        if (request()->hasFile('image')) {
            $files = request()->file('image');
            $destinationPath = public_path('/assets/image/products');
            $pimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $pimage);
            $aa['image'] = "$pimage";
            $imageData->image = $aa['image'];
            $imageData->save();
        }
    }
}
