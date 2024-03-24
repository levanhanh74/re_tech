<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\tb_category;
use App\Http\Services\TB_CATEGORY_SERVICE;
use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{
    protected $category;

    public function __construct(TB_CATEGORY_SERVICE $category,)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $cateAll  = $this->category->getAll();
        return view('PageAdmin.categoryAdmin', compact('cateAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, tb_category $validation)
    {
        $data = [
            'name' => $request->name
        ];;
        $validation->validated();
        $this->category->save($data);

        return back()->with("messages", "Add success category");
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
        $getById = $this->category->getById($id);
        return view('PageAdmin.EditCategoryAdmin', compact('getById'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  tb_category $validation)
    {
        $data = ['name' => $request->name];
        $validation->validated();
        $this->category->update($request->id, $data);
        return redirect()->route('admin.category.home')->with('messages', "update success category!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->category->delete($id);
        return back()->with('messages', "Delete success!");
    }
}
