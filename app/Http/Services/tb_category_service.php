<?php

namespace App\Http\Services;

use App\Models\Category;
use App\Repositories\tb_categories;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

class TB_CATEGORY_SERVICE
{

    // getAll user
    function getAll()
    {
        return Category::all();
    }
    // getOne user
    function getById($id)
    {
        return Category::where('id', $id)->first();
    }
    // getOne us
    function getById_Cate_Product($id)
    {
        return Category::join('tb_product', 'tb_product.id_category', "=", 'tb_category.id')
            ->where('tb_product.id_category', $id)
            ->get(['tb_product.*']);
    }
    // save one record
    public function save($data)
    {
        return Category::create($data);
    }
    // update re-recording
    public function update($id, $data)
    {
        return Category::where('id', $id)->update($data);
    }
    // delete recording
    public function delete($id)
    {
        return Category::where('id', $id)->delete();
    }
}
