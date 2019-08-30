<?php

class UserRepo
{
    protected $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function get($id)
    {
        return $this->userModel->find($id);
    }
}