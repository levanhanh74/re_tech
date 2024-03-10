<?php

namespace App\Repositories;

use App\Models\tb_checkout_cart;

class tb_checkout_carts
{
    protected $tb_checkOutCart;
    public function __construct(tb_checkout_cart $checkout_cart)
    {
        $this->tb_checkOutCart = $checkout_cart;
    }

    public function getAll()
    {
        return $this->tb_checkOutCart->get();
    }
    public function getById($id)
    {
        return $this->tb_checkOutCart->where('id', $id)->get();
    }
    public function save($data)
    {
        $post = new $this->tb_checkOutCart;
        $post = $data;
        $post->save();
        return $post->fresh();
    }
    public function update($id, $data)
    {
        $post = $this->tb_checkOutCart->find($id);
        $post = $data;
        $post->update();
        return $post;
    }
    public function delete($id)
    {
        $post  = $this->tb_checkOutCart->find($id);
        $post->delete();
        return $post;
    }
}
