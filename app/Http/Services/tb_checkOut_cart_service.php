<?php

namespace App\Http\Services;

use App\Models\CheckOutCart;
use App\Repositories\tb_checkout_carts as RepositoriesTb_checkout_carts;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

class TB_CHECKOUT_CART_SERVICE
{
   // getAll user
   function getAll()
   {
      return CheckOutCart::all();
   }
   // getOne user
   function getById($id)
   {
      return CheckOutCart::where('id', $id)->first();
   }
   // save one record
   public function save($data)
   {
      return CheckOutCart::create($data);
   }
   // update re-recording
   public function update($id, $data)
   {
      return CheckOutCart::where('id', $id)->update($data);
   }
   // delete recording
   public function delete($id)
   {
      return CheckOutCart::where('id', $id)->delete();
   }
}
