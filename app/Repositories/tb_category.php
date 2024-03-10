<?php

namespace App\Repositories;

use App\Models\tb_category;

class tb_categories
{
    protected $tb_category;
    public function __construct(tb_category $category)
    {
        $this->tb_category = $category;
    }

    public function getAll()
    {
        return $this->tb_category->get();
    }
    public function getById($id)
    {
        return $this->tb_category->where('id', $id)->get();
    }
    public function save($data)
    {
        $post = new $this->tb_category;
        $post = $data;
        $post->save();
        return $post->fresh();
    }
    public function update($id, $data)
    {
        $post = $this->tb_category->find($id);
        $post = $data;
        $post->update();
        return $post;
    }
    public function delete($id)
    {
        $post  = $this->tb_category->find($id);
        $post->delete();
        return $post;
    }
}
