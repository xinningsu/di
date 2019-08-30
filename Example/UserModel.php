<?php

class UserModel
{
    protected $table = 'user';

    public function find($id)
    {
        return ['id' => $id, 'first_name' => 'Thomas', 'last_name' => 'Su'];
    }
}
