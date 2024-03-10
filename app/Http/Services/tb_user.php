<?php

namespace App\Http\Service;

use Illuminate\Support\Facades\DB;
use App\Repositories\tb_users as RepositoriesTb_users;
use Exception;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

class tb_users
{
    protected $table_Repositories;
    function __construct(RepositoriesTb_users $RepositoriesTb_users)
    {
        $this->table_Repositories = $RepositoriesTb_users;
    }
    // getAll user
    function getAll()
    {
        return $this->table_Repositories->getAll();
    }
    // getOne user
    function getById($id)
    {
        return $this->table_Repositories->getById($id);
    }
    // save one record
    public function save($data)
    {
        $post = new $this->table_Repositories;
        $post = $data;
        $post->save();
        return $post->fresh();
    }
    // update re-recording
    public function update($id, $data)
    {

        // validate data from controller move
        
        $post = $this->table_Repositories->update($id, $data);

        return $post;
    }
    // delete recording
    public function delete($id)
    {
        DB::beginTransaction();
        try {
            //code...
            $post = $this->table_Repositories->delete($id);
        } catch (Exception $e) {
            //throw $th;
            DB::rollBack();
            throw new InvalidArgumentException("Unable to delete post data");
        }
        DB::commit();
        return $post;
    }
}
