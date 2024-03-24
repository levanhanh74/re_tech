<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\tb_product;
use App\Http\Services\TB_CATEGORY_SERVICE;
use App\Http\Services\TB_PRODUCT_SERVICE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductAdminController extends Controller
{
    protected $product;
    protected $category;

    public function __construct(TB_PRODUCT_SERVICE $product, TB_CATEGORY_SERVICE $category)
    {
        $this->product = $product;
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getAll = $this->product->getAll();
        return view("PageAdmin.productAdmin", compact('getAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('AuthAdmin');
        $getCate = $this->category->getAll();
        return view('pageAdmin.AddProductAdmin', compact('getCate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stores(Request $request, tb_product $validation)
    {
        $image =  $request->file('image')->getClientOriginalName();
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'warranty' => $request->warranty,
            'image' => $image,
            'accessories' => $request->accessories,
            'condition' => $request->condition,
            'status' => $request->status,
            'promotion' => $request->promotion,
            'description' => $request->description,
            'feature' => $request->feature,
            'id_category' => $request->id_category,
        ];
        $validation->validated();
        $request->file("image")->storeAs('public', $image);
        $this->product->save($data);
        return redirect()->route('admin.product.home')->with('messages', "add product success!");
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
        $getById = $this->product->getById($id);
        $getAll = $this->product->getAll();
        $getCate = $this->category->getAll();
        return view('PageAdmin.EditProductAdmin', compact("getById", 'getAll', 'getCate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_product $validation)
    {
        $id = $request->id;
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'warranty' => $request->warranty,
            'image' => $request->file('image')->getClientOriginalName(),
            'accessories' => $request->accessories,
            'condition' => $request->condition,
            'status' => $request->status,
            'promotion' => $request->promotion,
            'description' => $request->description,
            'feature' => $request->feature,
            'id_category' => $request->id_category,
        ];
        $getImg = $this->product->getById($id)->image;
        $diskImage =  Storage::disk('public')->exists($getImg);
        if ($diskImage) {
            Storage::delete($getImg);
            $this->product->update($id, $data);
            return redirect()->route('admin.product.home')->with('messages', "update product success!");
        } else {
            Storage::delete($getImg);
            $this->product->update($id, $data);
            return redirect()->route('admin.product.home')->with('messages', "update product success!");
        }
        $validation->validated();

        return redirect('admin.product.home')->with('messages', 'update product success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getById = $this->product->getById($id);
        Storage::disk('public')->delete($getById->image);
        $this->product->delete($id);

        return back()->with("messages", 'Delete success product!');
    }
}
