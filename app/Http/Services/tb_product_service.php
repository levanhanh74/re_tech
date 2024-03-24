<?php

namespace App\Http\Services;

use App\Http\Requests\tb_product;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Exception;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Auth\Events\Validated;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;

class TB_PRODUCT_SERVICE
{
    // protected $validation;
    // public function __construct(tb_product $validation)
    // {
    //     $this->validation = $validation;
    // }

    public function getAll()
    {
        return Product::all();
    }
    public function getFeature()
    {

        return Product::where('feature', 1)->orderByDesc('id')->get();
    }

    public function getById($id)
    {
        if (isset($id)) {
            return Product::where('id', $id)->first();
        } else {
            return back();
        }
    }

    public function save($data)
    {
        return Product::create($data);
    }

    public function update($id, $data)
    {
        return Product::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return Product::where('id', $id)->delete();
    }
    public function searchProduct($keyFind)
    {
        $find = Product::select('tb_product.*')
            ->join('tb_category', 'tb_product.id_category', '=', 'tb_category.id')
            ->where('tb_product.name', 'like', '%' . $keyFind . '%')
            ->orWhere('tb_product.description', 'like', '%' . $keyFind . '%')
            ->orWhere('tb_category.name', 'like', '%' . $keyFind . '%')
            ->paginate(8);
        return $find;
    }
}
