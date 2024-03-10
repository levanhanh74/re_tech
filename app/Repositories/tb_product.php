<?php

namespace App\Repositories;

use App\Models\tb_product;

class tb_products
{
    protected $tb_product;
    public function __construct(tb_product $product)
    {
        $this->tb_product = $product;
    }

    public function getAll()
    {
        return $this->tb_product->get();
    }
    public function getById($id)
    {
        return $this->tb_product->where('id', $id)->get();
    }
    public function save($data)
    {
        $post = new $this->tb_product;
        $post = $data;
        $post->save();
        return $post->fresh();
    }
    public function update($id, $data)
    {
        $post = $this->tb_product->find($id);
        $post = $data;
        $post->update();
        return $post;
    }
    public function delete($id)
    {
        $post  = $this->tb_product->find($id);
        $post->delete();
        return $post;
    }
}
