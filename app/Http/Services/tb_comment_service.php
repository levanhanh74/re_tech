<?php

namespace App\Http\Services;

use App\Models\Comment;
use App\Repositories\tb_comments as RepositoriesTb_comments;
use Illuminate\Support\Facades\DB;
use Exception;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

class TB_COMMENT_SERVICE
{
    // getAll user
    function getAll()
    {
        return Comment::all();
    }
    // getOne user
    function getById($id)
    {
        return Comment::where('id', $id)->first();
    }
    // save one record
    public function save($data)
    {
        return Comment::create($data);
    }
    // update re-recording
    public function update($id, $data)
    {
        return Comment::where('id', $id)->update($data);
    }
    // delete recording
    public function delete($id)
    {
        return Comment::where('id', $id)->delete();
    }
}
