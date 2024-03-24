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
        return $this->tb_comment->findOrFail($id);
    }
    public function save($data)
    {
        return $this->tb_comment->create($data);
    }
    public function update($id, $data)
    {
        $comment  = $this->getById($id);
        $comment->update($data);
        return $comment;
    }
    public function delete($id)
    {
        $comment  = $this->getById($id);
        $comment->delete();
        return $comment;
    }
}
