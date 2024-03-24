<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\tb_comment;
use App\Http\Services\TB_COMMENT_SERVICE;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentAdminController extends Controller
{
    protected $comment;
    public function __construct(TB_COMMENT_SERVICE $comment)
    {
        $this->middleware('AuthAdmin');
        $this->comment = $comment;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentAll = $this->comment->getAll();
        return view('PageAdmin.commentAdmin', compact('commentAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $getById = $this->comment->getById($id);
        return view('PageAdmin.EditCommentAdmin', compact("getById"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_comment $validation)
    {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'comments' => $request->comments,
        ];
        $id = $request->id;
        $validation->validated();
        $this->comment->update($id, $data);
        return redirect()->route("admin.comment.home")->with("messages", "update success comment!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->comment->delete($id);
        return back()->with('messages', "Delete success comment!");
    }
}
