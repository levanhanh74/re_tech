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
        return $this->tb_checkOutCart->findOrFail($id);
    }
    public function save($data)
    {

        return $this->tb_checkOutCart->create($data);
    }
    public function update($id, $data)
    {
        $checkOutCart = $this->getById($id);
        $checkOutCart->update($data);
        return $checkOutCart;
    }
    public function delete($id)
    {
        $checkOutCart = $this->getById($id);
        $checkOutCart->delete();
        return $checkOutCart;
    }
}
