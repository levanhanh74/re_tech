<?php

namespace App\Http\Services;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

class TB_USER_SERVICE
{
    // getAll user
    function getAll()
    {
        return User::all();
    }
    // getOne user
    function getById($id)
    {
        return User::where('id', $id)->first();
    }
    // save one record
    public function save($data)
    {
        
        return User::create($data);
    }
    // update re-recording
    public function update($id, $data)
    {
        return User::where('id', $id)->update($data);
    }
    // delete recording
    public function delete($id)
    {
        return User::where('id', $id)->delete();
    }
}
