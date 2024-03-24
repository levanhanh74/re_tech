<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\TB_CATEGORY_SERVICE;
use App\Http\Services\TB_CHECKOUT_CART_SERVICE;
use App\Http\Services\TB_COMMENT_SERVICE;
use App\Http\Services\TB_PRODUCT_SERVICE;
use App\Http\Services\TB_USER_SERVICE;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    protected $category;
    protected $user;
    protected $product;
    protected $checkCart;
    protected $comment;

    public function __construct(TB_CATEGORY_SERVICE $category, TB_CHECKOUT_CART_SERVICE $checkCart, TB_PRODUCT_SERVICE $product, TB_COMMENT_SERVICE $comment, TB_USER_SERVICE $user)
    {
        $this->middleware('AuthAdmin');
        $this->category = $category;
        $this->product = $product;
        $this->comment = $comment;
        $this->user = $user;
        $this->checkCart = $checkCart;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cateAll = $this->category->getAll(); // list category
        $prdAll = $this->product->getAll();
        $cmtAll = $this->comment->getAll();
        $userAll = $this->user->getAll();
        $ChkCAll = $this->checkCart->getAll();
        return view('PageAdmin.index', compact('cateAll',  'prdAll',  'cmtAll',  'userAll', 'ChkCAll',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
