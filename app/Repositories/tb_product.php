<?php

namespace App\Repositories;

use App\Models\tb_product;

class tb_products
{
    protected $tb_product;

    public function __construct(tb_product $tb_product)
    {
        $this->tb_product = $tb_product;
    }

    public function getAll()
    {
        return $this->tb_product->get();
    }

    public function getById($id)
    {
        return $this->tb_product->findOrFail($id);
    }

    public function save($data)
    {
        return $this->tb_product->create($data);
    }

    public function update($id, $data)
    {
        $product = $this->getById($id);
        $product->update($data);
        return $product;
    }

    public function delete($id)
    {
        $product = $this->getById($id);
        $product->delete();
        return $product;
    }
}
