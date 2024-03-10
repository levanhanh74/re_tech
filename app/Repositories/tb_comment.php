<?php

namespace App\Repositories;

use App\Models\tb_comment;

class tb_comments
{
    protected $tb_comment;
    public function __construct(tb_comment $comment)
    {
        $this->tb_comment = $comment;
    }

    public function getAll()
    {
        return $this->tb_comment->get();
    }
    public function getById($id)
    {
        return $this->tb_comment->where('id', $id)->get();
    }
    public function save($data)
    {
        $post = new $this->tb_comment;
        $post = $data;
        $post->save();
        return $post->fresh();
    }
    public function update($id, $data)
    {
        $post = $this->tb_comment->find($id);
        $post = $data;
        $post->update();
        return $post;
    }
    public function delete($id)
    {
        $post  = $this->tb_comment->find($id);
        $post->delete();
        return $post;
    }
}
