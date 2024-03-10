<?php

namespace App\Repositories;

use App\Models\tb_user;

class tb_users
{
    protected $tb_user;
    
    public function __construct(tb_user $user)
    {
        $this->tb_user = $user;
    }

    public function getAll()
    {
        return $this->tb_user->get();
    }

    public function getById($id)
    {
        return $this->tb_user->where('id', $id)->get();
    }

    public function save($data)
    {
        $post = new $this->tb_user;
        $post = $data;
        $post->save();
        return $post->fresh();
    }

    public function update($id, $data)
    {
        $post = $this->tb_user->find($id);
        $post = $data;
        $post->update();
        return $post;
    }

    public function delete($id)
    {
        $post  = $this->tb_user->find($id);
        $post->delete();
        return $post;
    }
}
