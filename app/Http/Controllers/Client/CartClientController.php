<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Services\TB_CATEGORY_SERVICE;
use App\Http\Services\TB_PRODUCT_SERVICE;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartClientController extends Controller
{
    protected $category;
    protected $product;
    protected $user;
    public function __construct(TB_CATEGORY_SERVICE $category, TB_PRODUCT_SERVICE $product)
    {
        $this->middleware("AuthClient");
        $this->category = $category;
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Display in cart
    public function index()
    {
        $getAllCart = \Cart::getContent();
        $cateAll = $this->category->getAll();
        return view('PageClient.cartProduct', compact('getAllCart', 'cateAll'));
    }
    public function indexStatusOrders()
    {
        $cateAll = $this->category->getAll();
        return view('PageClient.statusOrder', compact('cateAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Add in detail product
    public function create($id)
    {
        $cateAll = $this->category->getAll();
        $getByIdPrd = $this->product->getById($id);
        $getAllCart = \Cart::getContent();
        $userId = Auth::user();
        \Cart::add([
            'id' => $id, // inique row ID
            'name' => $getByIdPrd->name,
            'price' => $getByIdPrd->price,
            'quantity' => 1,
            'associatedModel' => [$getByIdPrd]
        ]);
        return redirect()->route("client.cart", compact('cateAll', 'getAllCart'));
    }
    // Add outside home 
    public function createCart($id)
    {
        $userId = Auth::user();
        $getByIdPrd = $this->product->getById($id);
        \Cart::add([
            'id' => $id, // inique row ID
            'name' => $getByIdPrd->name,
            'price' => $getByIdPrd->price,
            'quantity' => 1,
            'associatedModel' => [$getByIdPrd]
        ]);
        return back();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Update in cart
    public function update(Request $request, $id)
    {
        $userId = Auth::user();
        if ($request->quantity === '0') {
            \Cart::remove($id);
            return redirect()->route('client.cart');
        } else {
            \Cart::update($id, ['quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            )]);
            return redirect()->route('client.cart');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Remove a item
    public function destroy($id)
    {
        $userId = Auth::user();
        \Cart::remove($id);
        return redirect()->route('client.cart');
    }
    // remove all item
    public function destroyAll()
    {
        $userId = Auth::user();
        \Cart::clear();
        return redirect()->route('client.cart');
    }
}
