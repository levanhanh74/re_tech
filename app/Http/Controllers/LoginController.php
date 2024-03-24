<?php

namespace App\Http\Controllers;

use App\Http\Requests\tb_user;
use App\Http\Services\TB_CATEGORY_SERVICE;
use App\Http\Services\TB_PRODUCT_SERVICE;
use App\Http\Services\TB_USER_SERVICE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $users;
    protected $category;
    protected $product;
    public function __construct(TB_USER_SERVICE $users, TB_CATEGORY_SERVICE $category, TB_PRODUCT_SERVICE $product)
    {
        $this->users = $users;
        $this->category = $category;
        $this->product = $product;
    }

    function redirectAction()
    {
        $redirect = '';
        if (Auth::user()->role === 0) {
            $redirect = 'client/';
        } elseif (Auth::user()->role === 1) {
            $redirect = 'admin/';
        } else {
            $redirect = '/';
        }
        return $redirect;
    }

    function index(Request $request)
    {
        $prdAll =   $this->product->getAll();
        $cateAll = $this->category->getAll();
        $featureAll = $this->product->getFeature();
        return view('index', compact('prdAll', 'cateAll', 'featureAll'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signUp()
    {
        return view('register');
    }
    public function createSignup(Request $request, tb_user $validation)
    {
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ];
        $validation->validated();
        // create User
        $this->users->save($data);
        $data['password'] = $request->password;
        return redirect()->route('login', compact('data'))->with('messages', "SignUp Success!");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createLogin(Request $request)
    {
        $data = [
            'email' => isset($request->data['email']) ? $request->data['email'] : "",
            'password' => isset($request->data['password']) ? $request->data['password'] : "",
        ];
        return view('login', compact('data'));
    }
    public function postLogin(Request $request)
    {
        $data = [
            "email" => $request->email,
            "password" => $request->password,
        ];
        if (Auth::attempt($data)) {
            $redirect =  $this->redirectAction();
            return redirect($redirect);
        } else {
            return  back()->with('messages', "You can't access success into system!");
        }
    }

    public function logOut(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
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
