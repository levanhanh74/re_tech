<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\tb_product;
use App\Http\Service\tb_products;
use App\Http\Services\TB_CATEGORY_SERVICE;
use App\Http\Services\TB_COMMENT_SERVICE;
use App\Http\Services\TB_PRODUCT_SERVICE;
use Illuminate\Http\Request;

class ProductClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $product;
    protected $category;
    protected $comment;
    public function __construct(TB_PRODUCT_SERVICE $product, TB_CATEGORY_SERVICE $category, TB_COMMENT_SERVICE $comment)
    {
        $this->middleware('AuthClient');
        $this->product = $product;
        $this->category = $category;
        $this->comment = $comment;
    }


    public function index(Request $request)
    {
        $prdAll =   $this->product->getAll();
        $cateAll = $this->category->getAll();
        $featureAll = $this->product->getFeature();

        // $cateProductAll = $this->category->getById_Cate_Product($request->id);
        return view('index', compact('prdAll', 'cateAll', 'featureAll'));
        // dd($this->product->getById(1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {
        $cateJoin = $this->category->getById_Cate_Product($id);
        $cateAll = $this->category->getAll();
        // dd($cateJoin);
        return view('PageClient.categoryJoin', compact('cateJoin', 'cateAll'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postComment(Request $request)
    {
        // dd($request->all());
        $data  = [
            'name' => $request->name,
            'email' => $request->email,
            'comments' => $request->comments,
            'id_product_comment' => $request->id_product_comment,
        ];
        // dd($data);
        $this->comment->save($data);
        return back()->with('messages', "You have comment success!");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $getById = $this->product->getById($request->id);
        $cateAll = $this->category->getAll();
        $comment = $this->comment->getAll();

        // dd($getById); 
        return view('PageClient.detailProduct', compact('getById', 'cateAll', 'comment'));
    }

    public function findProduct(Request $request)
    {
        $keyFind = $request->search;
        $searchFind = $this->product->searchProduct($keyFind);
        return view('PageClient.searchProduct', compact('searchFind'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
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
}
