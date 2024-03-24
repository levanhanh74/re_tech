<?php

namespace App\Repositories;

use App\Models\tb_category;

class tb_categories
{
    public $tb_category;
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
        return $this->tb_category->findOrFail($id);
    }
    public function save($data)
    {
        return $this->tb_category->create($data);
    }
    public function update($id, $data)
    {
        $category = $this->getById($id);
        $category->update($data);
        return $category;
    }
    public function delete($id)
    {
        $category  = $this->getById($id);
        $category->delete();
        return $category;
    }
}
