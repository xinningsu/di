<?php

class UserController
{
    public function show(int $id)
    {
        $userModel = new UserModel();
        $userRepo = new UserRepo($userModel);
        $userService = new UserService($userRepo);

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
        return [];
    }
}
