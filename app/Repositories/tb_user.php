<?php

namespace App\Repositories;

use App\Models\tb_user;

class tb_users
{
    protected $tb_user;

    public function __construct(tb_user $user)
    {
        $this->tb_user = $user;
    }

    public function getAll()
    {
        return $this->tb_user->get();
    }

    public function getById($id)
    {
        return $this->tb_user->findOrFail($id);
    }

    public function save($data)
    {

        return $this->tb_user->create($data);
    }

    public function update($id, $data)
    {
        $user = $this->getById($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user  = $this->getById($id);
        $user->delete();
        return $user;
    }
}
