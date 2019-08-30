<?php

class UserController
{
    public function show(UserService $userService, int $id)
    {
        $user = $userService->get($id);

        return view('template', ['user' => $user]);
    }
}

class UserService
{
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function get($id)
    {
        $user = $this->userRepo->get($id);
        // do something else
        return $user;
    }
}

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

class UserModel
{
    protected $table = 'user';

    public function find($id)
    {
        return ['id' => 1, 'name' => 'Thomas'];
    }
}

